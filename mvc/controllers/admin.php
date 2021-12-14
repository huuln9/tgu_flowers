<?php
class Admin extends Controller {
    function Show() {
        $this->view("admin", [
            "pages" => "dashboard"
        ]);
    }

    function AccountList() {
        $this->view("admin", [
            "pages" => "account_list"
        ]);

        // $md = $this->model("SinhVienModel");
        // $sv = $md->GetSV();

        // $this->view("aodep", [
        //     "sv" => $sv,
        //     "pages" => "page2"
        // ]);
    }
    function AccountAdd() {
        $this->view("admin", [
            "pages" => "account_add"
        ]);
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