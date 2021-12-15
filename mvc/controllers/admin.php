<?php
class Admin extends Controller {
    public $accountModel;
    public $topicModel;
    public $productModel;
    public $commentModel;
    public $billModel;
    public $billDetailModel;

    function __construct() {
        $this->accountModel = $this->model("AccountModel");
        $this->topicModel = $this->model("TopicModel");
        $this->productModel = $this->model("ProductModel");
        $this->commentModel = $this->model("CommentModel");
        $this->billModel = $this->model("BillModel");
        $this->billDetailModel = $this->model("BillDetailModel");
    }

    function Show() {
        $this->view("admin", [
            "pages" => "dashboard"
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
        $this->topicModel->AddTopic($_POST['val-topicname']);

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
        );

        header("Location: $this->appRootURL/admin/topiclist");
    }
    function DeleteTopic() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

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
        $customer = $this->accountModel->GetAccount($billJs[0]->{'id_account'});

        $this->view("admin", [
            "pages" => "bill_detail",
            "billDetails" => $billDetails,
            "bill" => $billJs,
            "customer" => $customer
        ]);
    }

    function DeleteBill() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $this->billDetailModel->DeleteBillDetailsByBillId($id);
        $this->billModel->DeleteBill($id);

        header("Location: $this->appRootURL/admin/billlist");
    }

    function Chart() {
        $this->view("admin", [
            "pages" => "chart"
        ]);
    }
}
?>