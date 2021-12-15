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

    public function AddTopic($name) {
        $qr = "INSERT INTO `topic` VALUES (null,'$name');";
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

    public function UpdateTopic($id, $name) {
        $qr = "UPDATE `topic` SET `name`='$name' WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteTopic($id) {
        $qr = "DELETE FROM `topic` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>