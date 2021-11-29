<?php
class Home extends Controller {
    function SayHi() {
        $this->view("aodep", [
            "pages" => "page1"
        ]);
    }

    function Show() {
        $md = $this->model("SinhVienModel");
        $sv = $md->GetSV();

        $this->view("aodep", [
            "sv" => $sv,
            "pages" => "page2"
        ]);
    }
}
?>