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

    public function GetProductsFromHome() {
        $qr = "SELECT * FROM `product` WHERE `enable`=1;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }
    
    public function GetProductsPaginate($page) {
        $qr = "SELECT * FROM `product` WHERE `enable`=1 LIMIT $page, 8;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function AddProduct($name, $thumbnail, $mean, $number_flowers, $unit_price, $enable, $id_topic) {
        $qr = "INSERT INTO `product` VALUES (null,'$name','$thumbnail','$mean',$number_flowers,$unit_price,$enable,$id_topic);";
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

    public function GetProductFromHome($id) {
        $qr = "SELECT * FROM `product` WHERE `id`=$id AND `enable`=1;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetProductsByTopic($topicId, $page) {
        $qr = "SELECT * FROM `product` WHERE `id_topic`=$topicId AND `enable`=1 LIMIT $page, 8;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function Get4ProductsByTopic($topicId) {
        $qr = "SELECT * FROM `product` WHERE `id_topic`=$topicId AND `enable`=1 ORDER BY `unit_price` DESC LIMIT 4;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetProductIdsByTopic($topicId) {
        $qr = "SELECT `id` FROM `product` WHERE `id_topic`=$topicId AND `enable`=1;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row['id'];
        }
        return json_encode($arr);
    }

    public function GetTop8Products() {
        $qr = "SELECT * FROM `product` WHERE `enable`=1 ORDER BY `unit_price` DESC LIMIT 8;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetNumProductsByTopic($topicId) {
        if ($topicId == 0) {
            $qr = "SELECT COUNT(*) as `num` FROM `product` WHERE `enable`=1;";
        } else {
            $qr = "SELECT COUNT(*) as `num` FROM `product` WHERE `id_topic`=$topicId AND `enable`=1;";
        }
        $rs = $this->conn->query($qr);
 
        $numProd = $rs->fetch_assoc();
        return json_encode($numProd['num']);
    }

    public function UpdateProduct($id, $name, $thumbnail, $mean, $number_flowers, $unit_price, $enable, $id_topic) {
        $qr = "UPDATE `product` SET `name`='$name',`thumbnail`='$thumbnail',`mean`='$mean',`number_flowers`='$number_flowers',`unit_price`='$unit_price',`enable`=$enable,`id_topic`='$id_topic' WHERE `id`='$id'";
        $this->conn->query($qr);
    }

    public function DeleteProduct($id) {
        $qr = "DELETE FROM `product` WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteProductByTopic($topicId) {
        $qr = "DELETE FROM `product` WHERE `id_topic`=$topicId;";
        $this->conn->query($qr);
    }
}
?>