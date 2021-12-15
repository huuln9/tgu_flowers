<?php
class CommentModel extends Database {
    public function GetComments() {
        $qr = "SELECT * FROM `comment`;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function DeleteComment($id) {
        $qr = "DELETE FROM `comment` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>