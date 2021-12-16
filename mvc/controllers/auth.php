<?php
class Auth extends Controller {
    public $accountModel;

    function __construct() {
        $this->accountModel = $this->model("AccountModel");
    }

    function Show() {
        $this->view("auth", [
            "pages" => "login"
        ]);
    }

    function Login() {    
        $resp = $this->accountModel->CheckLogin($_POST['val-email'], $_POST['val-password']);

        $rs = json_decode($resp);

        if (count($rs) > 0) {
            $_SESSION['account'] = $rs[0];
            header("Location: $this->appRootURL/admin");
        } else {
            header("Location: $this->appRootURL/auth");
        }
    }

    function Logout() {    
        unset($_SESSION['account']);
        header("Location: $this->appRootURL/auth");
    }

    function Register() {
        $this->view("auth", [
            "pages" => "register"
        ]);
    }
    function SignUp() {
        $this->accountModel->AddAccount(
            $_POST['val-fullname'],
            $_POST['val-email'],
            $_POST['val-password'],
            0,
            $_POST['val-phone'],
            ''
        );

        header("Location: $this->appRootURL/auth");
    }
}
?>