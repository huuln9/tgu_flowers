<?php
class Home extends Controller {


    function Show() {
        $this->view("home", [
            "pages" => "main"
        ]);
    }

    function Shop() {
        $this->view("home", [
            "pages" => "shop"
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

    function Cart() {
        $this->view("home", [
            "pages" => "cart"
        ]);
    }

    function Checkout() {
        $this->view("home", [
            "pages" => "checkout"
        ]);
    }

}
?>