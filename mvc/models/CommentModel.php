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

    public function GetNew3Comments() {
        $qr = "SELECT * FROM `comment` ORDER BY `id` DESC LIMIT 3;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetTop10Comments() {
        $qr = "SELECT `id_account`, COUNT(*) as `times` FROM `comment` GROUP BY `id_account` ORDER BY `times` DESC LIMIT 10;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetCommentByProduct($productId) {
        $qr = "SELECT * FROM `comment` WHERE `id_product`=$productId;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    function AddComment($accountId, $productId, $content) {
        $qr = "INSERT INTO `comment` VALUES (null, $accountId, $productId, '$content', current_timestamp());";
        $this->conn->query($qr);
    }

    public function DeleteComment($id) {
        $qr = "DELETE FROM `comment` WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteCommentByAccount($accountId) {
        $qr = "DELETE FROM `comment` WHERE `id_account`=$accountId;";
        $this->conn->query($qr);
    }

    public function DeleteCommentByProduct($productId) {
        $qr = "DELETE FROM `comment` WHERE `id_product`=$productId;";
        $this->conn->query($qr);
    }
}
?>