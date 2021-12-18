<?php
class Home extends Controller {
    public $topicModel;
    public $productModel;
    public $billModel;
    public $billDetailModel;
    public $accountModel;

    function __construct() {
        $this->topicModel = $this->model("TopicModel");
        $this->productModel = $this->model("ProductModel");
        $this->billModel = $this->model("BillModel");
        $this->billDetailModel = $this->model("BillDetailModel");
        $this->accountModel = $this->model("AccountModel");

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

    function Shop($topicId = null) {
        $topics = $this->topicModel->GetTopics();

        if ($topicId != null) {
            $products = $this->productModel->GetProductsByTopic($topicId);
        } else {
            $products = $this->productModel->GetProducts();
        }

        $this->view("home", [
            "pages" => "shop",
            "topics" => $topics,
            "products" => $products
        ]);
    }

    function Product() {
        $this->view("home", [
            "pages" => "product"
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

        $products = $this->productModel->GetProducts();

        $this->view("home", [
            "pages" => "cart",
            "billDetails" => $billDetails,
            "products" => $products,
            "billId" => $carts[0]->{'id'}
        ]);
    }

    function AddCart($productId, $price) {
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