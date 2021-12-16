<?php
class TopicModel extends Database {
    public function GetTopics() {
        $qr = "SELECT * FROM `topic`;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function AddTopic($name, $thumbnail) {
        $qr = "INSERT INTO `topic` VALUES (null,'$name', '$thumbnail');";
        $this->conn->query($qr);
    }

    public function GetTopic($id) {
        $qr = "SELECT * FROM `topic` WHERE `id`=$id;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function Get4Topics() {
        $qr = "SELECT * FROM `topic` ORDER BY `id` ASC LIMIT 4;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function UpdateTopic($id, $name, $thumbnail) {
        $qr = "UPDATE `topic` SET `name`='$name', `thumbnail`='$thumbnail' WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteTopic($id) {
        $qr = "DELETE FROM `topic` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>