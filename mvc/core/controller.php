<?php
class Controller {
    protected $appRootURL = "http://localhost/github/tgu_flowers";

    public function model($model) {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data = []) {
        require_once "./mvc/core/variable.php";
        require_once "./mvc/views/".$view.".php";
    }
}
?>