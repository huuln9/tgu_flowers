<?php
class Admin extends Controller {
    function Show() {
        $this->view("dashboard", [
            "pages" => "page1"
        ]);
    }

    function Shows() {
        $md = $this->model("SinhVienModel");
        $sv = $md->GetSV();

        $this->view("aodep", [
            "sv" => $sv,
            "pages" => "page2"
        ]);
    }
}
?>