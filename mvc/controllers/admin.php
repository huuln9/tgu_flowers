<?php
class Admin extends Controller {
    public $accountModel;

    function __construct() {
        $this->accountModel = $this->model("AccountModel");
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

        $this->AccountList();
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

        $this->AccountList();
    }

    function DeleteAccount() {
        $urlArr = explode("/", $_SERVER['REQUEST_URI']);
        $id = $urlArr[count($urlArr) - 1];

        $this->accountModel->DeleteAccount($id);

        $this->AccountList();
    }

    function FlowerList() {
        $this->view("admin", [
            "pages" => "flower_list"
        ]);
    }
    function FlowerAdd() {
        $this->view("admin", [
            "pages" => "flower_add"
        ]);
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