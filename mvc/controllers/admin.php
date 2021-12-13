<?php
class Admin extends Controller {
    function Show() {
        $this->view("admin", [
            "pages" => "dashboard"
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