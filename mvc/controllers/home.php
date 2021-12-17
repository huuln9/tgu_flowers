<?php
class Home extends Controller {
    public $topicModel;
    public $productModel;

    function __construct() {
        $this->topicModel = $this->model("TopicModel");
        $this->productModel = $this->model("ProductModel");
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

    function Cart() {
        if (!isset($_SESSION['account'])) {
            header("Location: $this->appRootURL/auth");
        }

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