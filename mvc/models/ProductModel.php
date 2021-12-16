<?php
class ProductModel extends Database {
    public function GetProducts() {
        $qr = "SELECT * FROM `product`;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function AddProduct($name, $thumbnail, $mean, $number_flowers, $unit_price, $inventory, $id_topic) {
        $qr = "INSERT INTO `product` VALUES (null,'$name','$thumbnail','$mean',$number_flowers,$unit_price,$inventory,$id_topic);";
        $this->conn->query($qr);
    }

    public function GetProduct($id) {
        $qr = "SELECT * FROM `product` WHERE `id`=$id;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetProductsByTopic($topicId) {
        $qr = "SELECT * FROM `product` WHERE `id_topic`=$topicId;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetTop8Products() {
        $qr = "SELECT * FROM `product` ORDER BY `unit_price` DESC LIMIT 8;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function UpdateProduct($id, $name, $thumbnail, $mean, $number_flowers, $unit_price, $inventory, $id_topic) {
        $qr = "UPDATE `product` SET `name`='$name',`thumbnail`='$thumbnail',`mean`='$mean',`number_flowers`='$number_flowers',`unit_price`='$unit_price',`inventory`='$inventory',`id_topic`='$id_topic' WHERE `id`='$id'";
        $this->conn->query($qr);
    }

    public function DeleteProduct($id) {
        $qr = "DELETE FROM `product` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>