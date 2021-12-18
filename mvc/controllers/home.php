<?php
class Home extends Controller {
    public $topicModel;
    public $productModel;
    public $billModel;
    public $billDetailModel;
    public $accountModel;
    public $commentModel;

    function __construct() {
        $this->topicModel = $this->model("TopicModel");
        $this->productModel = $this->model("ProductModel");
        $this->billModel = $this->model("BillModel");
        $this->billDetailModel = $this->model("BillDetailModel");
        $this->accountModel = $this->model("AccountModel");
        $this->commentModel = $this->model("CommentModel");

        $_SESSION['numCart'] = 0;

        if (isset($_SESSION['account'])) {
            $accountId = $_SESSION['account']->{'id'};
            $carts = json_decode($this->billModel->GetCartByAccount($accountId));
            if (count($carts) == 1) {
                $_SESSION['numCart'] = json_decode($this->billDetailModel->CountNumCartByBillId($carts[0]->{'id'}));
            }
        }
    }

    function Show() {
        $topics = $this->topicModel->Get4Topics();
        $products = $this->productModel->GetTop8Products();

        $this->view("home", [
            "pages" => "main",
            "topics" => $topics,
            "products" => $products
        ]);
    }

    function Shop($topicId = 0, $page = 1) {
        $topics = $this->topicModel->GetTopics();

        $index = ($page - 1) * 8;
        if ($topicId != 0) {
            $products = $this->productModel->GetProductsByTopic($topicId, $index);
        } else {
            $products = $this->productModel->GetProductsPaginate($index);
        }

        $numProd = json_decode($this->productModel->GetNumProductsByTopic($topicId));
        if ($numProd % 8 != 0) {
            $numPage = floor($numProd / 8) + 1;
        } else {
            $numPage = $numProd / 8;
        }

        $this->view("home", [
            "pages" => "shop",
            "topics" => $topics,
            "products" => $products,
            "numPage" => $numPage,
            "page" => $page
        ]);
    }

    function Product($id) {
        $products = json_decode($this->productModel->GetProductFromHome($id));
        $product = $products[0];

        $comments = $this->commentModel->GetCommentByProduct($id);
        $quantity = $this->billDetailModel->SumQuantityByProduct($id);
        $otherProds = $this->productModel->Get4ProductsByTopic($product->{'id_topic'});

        $this->view("home", [
            "pages" => "product",
            "product" => $product,
            "comments" => $comments,
            "quantity" => $quantity,
            "otherProds" => $otherProds
        ]);
    }

    function About() {
        $this->view("home", [
            "pages" => "about"
        ]);
    }

    function Contact() {
        $this->view("home", [
            "pages" => "contact"
        ]);
    }

    function EditAccount() {
        $this->accountModel->UpdateAccount(
            $_POST['val-id'],
            $_POST['val-fullname'],
            $_POST['val-email'],
            $_POST['val-password'],
            0,
            $_POST['val-phone'],
            $_POST['val-address']
        );

        unset($_SESSION['account']);
        unset($_SESSION['admin']);
        header("Location: $this->appRootURL/auth");
    }

    function Logout() {
        unset($_SESSION['account']);
        unset($_SESSION['admin']);
        header("Location: $this->appRootURL/auth");
    }

    function Cart() {
        if (!isset($_SESSION['account'])) {
            header("Location: $this->appRootURL/auth");
        }

        $accountId = $_SESSION['account']->{'id'};
        $billIds = json_decode($this->billModel->GetBillIdByAccountAndStatus($accountId, 0));

        $billDetails = json_encode([]);
        if (count($billIds) > 0) {
            $billDetails = $this->billDetailModel->GetBillDetailsByBillId($billIds[0]);
        } else {
            $this->billModel->AddCart($accountId);
        }
        $carts = json_decode($this->billModel->GetCartByAccount($accountId));

        $products = $this->productModel->GetProductsFromHome();

        $hasPhone = $this->accountModel->CheckAccounHasPhone($accountId);

        $this->view("home", [
            "pages" => "cart",
            "billDetails" => $billDetails,
            "products" => $products,
            "billId" => $carts[0]->{'id'},
            "hasPhone" => $hasPhone 
        ]);
    }

    function AddCart($productId, $price) {
        if (!isset($_SESSION['account'])) {
            header("Location: $this->appRootURL/auth");
        }

        $accountId = $_SESSION['account']->{'id'};

        $cartExist = $this->billModel->CheckCartExist($accountId);
        if ($cartExist == "false") {
            $this->billModel->AddCart($accountId);
        }

        $carts = json_decode($this->billModel->GetCartByAccount($accountId));

        $cartDetailExist = $this->billDetailModel->CheckCartDetailExist($carts[0]->{'id'}, $productId);
        if ($cartDetailExist == "false") {
            $this->billDetailModel->AddCartDetail($carts[0]->{'id'}, $productId, $price);
        } else {
            $this->billDetailModel->UpdateCartDetail($carts[0]->{'id'}, $productId, true);
        }

        header("Location: $this->appRootURL/home/cart");
    }

    function CartDetailAdd($id) {
        $this->billDetailModel->UpdateCartDetailDirect($id, true);

        header("Location: $this->appRootURL/home/cart");
    }

    function CartDetailSub($id) {
        $this->billDetailModel->UpdateCartDetailDirect($id, false);

        $rs = json_decode($this->billDetailModel->CheckQuantityZero($id));
        if ($rs == "true") {
            $this->billDetailModel->DeleteBillDetail($id);
        }

        header("Location: $this->appRootURL/home/cart");
    }

    function UpdateCartDetail($id, $price) {
        if (!isset($_SESSION['account'])) {
            header("Location: $this->appRootURL/auth");
        }

        $num = $_POST['quantity'];

        $accountId = $_SESSION['account']->{'id'};
        $billIds = json_decode($this->billModel->GetBillIdByAccountAndStatus($accountId, 0));
        
        if (count($billIds) == 0) {
            $this->billModel->AddCart($accountId);
        }
        $carts = json_decode($this->billModel->GetCartByAccount($accountId));

        $cartDetailExist = $this->billDetailModel->CheckCartDetailExist($carts[0]->{'id'}, $id);
        if ($cartDetailExist == "false") {
            $this->billDetailModel->AddCartDetailByNum($carts[0]->{'id'}, $id, $num, $price);
        } else {
            $this->billDetailModel->UpdateCartDetailByNum($carts[0]->{'id'}, $id, $num);
        }

        header("Location: $this->appRootURL/home/cart");
    }

    function DeleteCartDetail($id) {
        $this->billDetailModel->DeleteBillDetail($id);

        header("Location: $this->appRootURL/home/cart");
    }

    function Checkout($billId, $total) {
        $this->view("home", [
            "pages" => "checkout",
            "billId" => $billId,
            "total" => $total
        ]);
    }

    function Payment($billId) {
        $this->billModel->UpdateBill($billId, $_POST['val-payment'], $_POST['val-gift'], $_POST['val-receivername'],
            $_POST['val-receiveraddress'], $_POST['val-receivetime'], $_POST['val-message']);

        header("Location: $this->appRootURL/home/cart");
    }
}
?>