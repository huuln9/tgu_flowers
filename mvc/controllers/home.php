<?php
class Home extends Controller {
    function SayHi() {
        echo "home - say hi";
    }

    function Show() {

        echo "home - show";
        // $md = $this->model("SinhVienModel");
        // $sv = $md->GetSV();

        // $this->view("aodep", [
        //     "sv" => $sv,
        //     "pages" => "page2"
        // ]);
    }
}
?>