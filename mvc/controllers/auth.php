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

    // function Login() {    
    //     $resp = $this->accountModel->CheckLogin($_POST['val-email'], $_POST['val-password']);

    //     $rs = json_decode($resp);

    //     if (count($rs) > 0) {
    //         $_SESSION['account'] = $rs[0];
    //         if ($rs[0]->{'admin'} == 1) {
    //             $_SESSION['admin'] = 1;
    //             header("Location: $this->appRootURL/admin");
    //         } else {
    //             header("Location: $this->appRootURL/home");
    //         }
    //     } else {
    //         header("Location: $this->appRootURL/auth");
    //     }
    // }

    function Login() {    
        $emailExist = $this->accountModel->CheckEmail($_POST['val-email']);
        if ($emailExist == "true") {
            $hashedPassword = json_decode($this->accountModel->GetPassword($_POST['val-email']));

            if (password_verify($_POST['val-password'], $hashedPassword)) {
                $rs = json_decode($this->accountModel->GetAccountByEmail($_POST['val-email']));

                $_SESSION['account'] = $rs[0];
                if ($rs[0]->{'admin'} == 1) {
                    $_SESSION['admin'] = 1;
                    header("Location: $this->appRootURL/admin");
                } else {
                    header("Location: $this->appRootURL/home");
                }
            } else {
                header("Location: $this->appRootURL/auth");
            }
        } else {
            header("Location: $this->appRootURL/auth");
        } 
    }

    function Logout() {    
        unset($_SESSION['account']);
        unset($_SESSION['admin']);
        header("Location: $this->appRootURL/auth");
    }

    function Register() {
        $this->view("auth", [
            "pages" => "register"
        ]);
    }
    function SignUp() {
        $hashed_password = password_hash($_POST['val-password'], PASSWORD_DEFAULT);

        $this->accountModel->AddAccount(
            $_POST['val-fullname'],
            $_POST['val-email'],
            $hashed_password,
            0,
            $_POST['val-phone'],
            ''
        );

        header("Location: $this->appRootURL/auth");
    }
}
?>