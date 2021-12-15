<?php
class Admin extends Controller {
    public $accountModel;
    public $topicModel;
    public $productModel;

    function __construct() {
        $this->accountModel = $this->model("AccountModel");
        $this->topicModel = $this->model("TopicModel");
        $this->productModel = $this->model("ProductModel");
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

        $this->view("admin", [
            "pages" => "product_list",
            "products" => $products
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

    function BillList() {
        $this->view("admin", [
            "pages" => "bill_list"
        ]);
    }
    function BillDetail() {
        $this->view("admin", [
            "pages" => "bill_detail"
        ]);
    }

    function Chart() {
        $this->view("admin", [
            "pages" => "chart"
        ]);
    }
}
?>