<?php
class Admin extends Controller {
    public $accountModel;
    public $topicModel;
    public $productModel;
    public $commentModel;
    public $billModel;
    public $billDetailModel;

    function __construct() {
        if (!isset($_SESSION['account']) || !isset($_SESSION['admin'])) {
            header("Location: $this->appRootURL/auth");
        }

        $this->accountModel = $this->model("AccountModel");
        $this->topicModel = $this->model("TopicModel");
        $this->productModel = $this->model("ProductModel");
        $this->commentModel = $this->model("CommentModel");
        $this->billModel = $this->model("BillModel");
        $this->billDetailModel = $this->model("BillDetailModel");
    }

    function Show() {
        $month = date('m');
        $year = date('Y');

        $billIdsByMonth = json_decode($this->billModel->GetBillIdByMonth($month, $year));
        
        $totalByMonth = 0;
        foreach ($billIdsByMonth as $billId) {
            $rs = json_decode($this->billDetailModel->SumTotalByBillId($billId));
            $totalByMonth += $rs;
        }

        $total = json_decode($this->billDetailModel->SumTotal());

        $billIdsByGift = json_decode($this->billModel->GetBillIdByGift(1));
        $billIdsByBuy = json_decode($this->billModel->GetBillIdByGift(0));

        $gifter = 0;
        $buyer = 0;
        foreach ($billIdsByGift as $e) {
            $gifter += json_decode($this->billDetailModel->SumQuantityByBillId($e));
        }
        foreach ($billIdsByBuy as $e) {
            $buyer += json_decode($this->billDetailModel->SumQuantityByBillId($e));
        }

        if ($gifter + $buyer > 0) {
            $gifterPercent = $gifter * 100 / ($gifter + $buyer);
            $buyerPercent = 100 - $gifterPercent;
        } else {
            $gifterPercent = 0;
            $buyerPercent = 0;
        }

        $commentsNew3 = $this->commentModel->GetNew3Comments();
        $commentsTop10 = $this->commentModel->GetTop10Comments();
        $accounts = $this->accountModel->GetAccounts();

        $this->view("admin", [
            "pages" => "dashboard",
            "totalByMonth" => $totalByMonth,
            "total" => $total,
            "gifter" => $gifter,
            "buyer" => $buyer,
            "gifterPercent" => $gifterPercent,
            "buyerPercent" => $buyerPercent,
            "commentsNew3" => $commentsNew3,
            "commentsTop10" => $commentsTop10,
            "accounts" => $accounts
        ]);
    }

    function AccountList() {
        $accounts = $this->accountModel->GetAccounts();

        $this->view("admin", [
            "pages" => "account_list",
            "accounts" => $accounts
        ]);
    }
    function AccountAdd() {
        $this->view("admin", [
            "pages" => "account_add"
        ]);
    }
    function AddAccount() {
        $this->accountModel->AddAccount(
            $_POST['val-username'],
            $_POST['val-email'],
            $_POST['val-password'],
            $_POST['val-admin'],
            $_POST['val-phone'],
            $_POST['val-address']
        );

        header("Location: $this->appRootURL/admin/accountlist");
    }
    function AccountEdit($id) {
        $account = $this->accountModel->GetAccount($id);

        $this->view("admin", [
            "pages" => "account_edit",
            "account" => $account
        ]);
    }
    function EditAccount() {
        $this->accountModel->UpdateAccount(
            $_POST['val-id'],
            $_POST['val-username'],
            $_POST['val-email'],
            $_POST['val-password'],
            $_POST['val-admin'],
            $_POST['val-phone'],
            $_POST['val-address']
        );

        header("Location: $this->appRootURL/admin/accountlist");
    }
    function DeleteAccount() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $billIds = json_decode($this->billModel->GetBillIdByAccount($id));
        foreach ($billIds as $billId) {
            $this->billDetailModel->DeleteBillDetailsByBillId($billId);
        }
        $this->billModel->DeleteBillByAccount($id);
        $this->commentModel->DeleteCommentByAccount($id);
        $this->accountModel->DeleteAccount($id);

        header("Location: $this->appRootURL/admin/accountlist");
    }

    function TopicList() {
        $topics = $this->topicModel->GetTopics();

        $this->view("admin", [
            "pages" => "topic_list",
            "topics" => $topics
        ]);
    }
    function TopicAdd() {
        $this->view("admin", [
            "pages" => "topic_add"
        ]);
    }
    function AddTopic() {
        $this->topicModel->AddTopic($_POST['val-topicname'], $_POST['val-thumbnail']);

        header("Location: $this->appRootURL/admin/topiclist");
    }
    function TopicEdit($id) {
        $topic = $this->topicModel->GetTopic($id);

        $this->view("admin", [
            "pages" => "topic_edit",
            "topic" => $topic
        ]);
    }
    function EditTopic() {
        $this->topicModel->UpdateTopic(
            $_POST['val-id'],
            $_POST['val-topicname'],
            $_POST['val-thumbnail']
        );

        header("Location: $this->appRootURL/admin/topiclist");
    }
    function DeleteTopic() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $productIds = json_decode($this->productModel->GetProductIdsByTopic($id));
        foreach ($productIds as $productId) {
            $this->billDetailModel->DeleteBillDetailsByProduct($productId);
            $this->commentModel->DeleteCommentByProduct($productId);    
        }
        $this->productModel->DeleteProductByTopic($id);
        $this->topicModel->DeleteTopic($id);

        header("Location: $this->appRootURL/admin/topiclist");
    }

    function ProductList() {
        $products = $this->productModel->GetProducts();
        $topics = $this->topicModel->GetTopics();

        $this->view("admin", [
            "pages" => "product_list",
            "products" => $products,
            "topics" => $topics
        ]);
    }
    function ProductAdd() {
        $topics = $this->topicModel->GetTopics();

        $this->view("admin", [
            "pages" => "product_add",
            "topics" => $topics
        ]);
    }
    function AddProduct() {
        $this->productModel->AddProduct(
            $_POST['val-flowername'],
            $_POST['val-thumbnail'],
            $_POST['val-mean'],
            $_POST['val-soluong'],
            $_POST['val-dongia'],
            $_POST['val-kho'],
            $_POST['val-idtopic']
        );

        header("Location: $this->appRootURL/admin/productlist");
    }
    function ProductEdit($id) {
        $product = $this->productModel->GetProduct($id);
        $topics = $this->topicModel->GetTopics();

        $this->view("admin", [
            "pages" => "product_edit",
            "product" => $product,
            "topics" => $topics
        ]);
    }
    function EditProduct() {
        $this->productModel->UpdateProduct(
            $_POST['val-id'],
            $_POST['val-flowername'],
            $_POST['val-thumbnail'],
            $_POST['val-mean'],
            $_POST['val-soluong'],
            $_POST['val-dongia'],
            $_POST['val-kho'],
            $_POST['val-idtopic']
        );

        header("Location: $this->appRootURL/admin/productlist");
    }
    function DeleteProduct() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $this->billDetailModel->DeleteBillDetailsByProduct($id);
        $this->commentModel->DeleteCommentByProduct($id);
        $this->productModel->DeleteProduct($id);

        header("Location: $this->appRootURL/admin/productlist");
    }

    function CommentList() {
        $comments = $this->commentModel->GetComments();
        $accounts = $this->accountModel->GetAccounts();
        $products = $this->productModel->GetProducts();

        $this->view("admin", [
            "pages" => "comment_list",
            "comments" => $comments,
            "accounts" => $accounts,
            "products" => $products
        ]);
    }
    function DeleteComment() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $this->commentModel->DeleteComment($id);

        header("Location: $this->appRootURL/admin/commentlist");
    }

    function BillList() {
        $bills = $this->billModel->GetBills();
        $billDetails = $this->billDetailModel->GetBillDetails();
        $accounts = $this->accountModel->GetAccounts();

        $this->view("admin", [
            "pages" => "bill_list",
            "bills" => $bills,
            "billDetails" => $billDetails,
            "accounts" => $accounts
        ]);
    }

    function BillDetail($billId) {
        $billDetails = $this->billDetailModel->GetBillDetailsByBillId($billId);
        $bill = $this->billModel->GetBill($billId);
        $billJs = json_decode($bill);
        $customer = json_decode($this->accountModel->GetAccount($billJs[0]->{'id_account'}));
        $products = $this->productModel->GetProducts();

        $this->view("admin", [
            "pages" => "bill_detail",
            "billDetails" => $billDetails,
            "bill" => $billJs,
            "customer" => $customer[0],
            "products" => $products
        ]);
    }

    function DeleteBill() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $this->billDetailModel->DeleteBillDetailsByBillId($id);
        $this->billModel->DeleteBill($id);

        header("Location: $this->appRootURL/admin/billlist");
    }

    function DoneBill() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $this->billModel->UpdateBillStatus($id, 2);

        header("Location: $this->appRootURL/admin/billlist");
    }

    function Chart() {
        $this->view("admin", [
            "pages" => "chart"
        ]);
    }
}
?>