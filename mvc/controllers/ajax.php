<?php
class Ajax extends Controller {
    public $accountModel;

    function __construct() {
        $this->accountModel = $this->model("AccountModel");
    }

    function CheckEmail() {
        $email = $_POST['email'];

        echo $this->accountModel->CheckEmail($email);
    }
}
?>