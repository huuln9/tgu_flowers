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
}
?>