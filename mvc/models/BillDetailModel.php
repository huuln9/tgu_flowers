<?php
class BillDetailModel extends Database {
    public function GetBillDetails() {
        $qr = "SELECT * FROM `bill_detail`;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetBillDetailsByBillId($billId) {
        $qr = "SELECT * FROM `bill_detail` WHERE id_bill=$billId;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function SumTotalByBillId($billId) {
        $qr = "SELECT SUM(`quantity`*`unit_price`) as `total` FROM `bill_detail` WHERE `id_bill`=$billId;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['total']);
    }

    public function SumTotal() {
        $qr = "SELECT SUM(`quantity`*`unit_price`) as `total` FROM `bill_detail`;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['total']);
    }

    public function SumQuantityByBillId($billId) {
        $qr = "SELECT SUM(quantity) as `quantity` FROM `bill_detail` WHERE `id_bill`=$billId;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['quantity']);
    }

    function CheckCartDetailExist($billId, $productId) {
        $qr = "SELECT `id` FROM `bill_detail` WHERE `id_bill`=$billId AND `id_product`=$productId;";
        $rs = $this->conn->query($qr);
        
        $result = false;
        if ($rs->num_rows > 0) {
            $result = true;
        }
        return json_encode($result); 
    }

    function AddCartDetail($billId, $productId, $price) {
        $qr = "INSERT INTO `bill_detail` VALUES (null, $billId, $productId, 1, $price);";
        $this->conn->query($qr);
    }

    function UpdateCartDetail($billId, $productId, $up) {
        if ($up) {
            $qr = "UPDATE `bill_detail` SET `quantity`=`quantity`+1 WHERE `id_bill`=$billId AND `id_product`=$productId;";
        } else {
            $qr = "UPDATE `bill_detail` SET `quantity`=`quantity`-1 WHERE `id_bill`=$billId AND `id_product`=$productId;";
        }
        $this->conn->query($qr);
    }

    function UpdateCartDetailDirect($id, $up) {
        if ($up) {
            $qr = "UPDATE `bill_detail` SET `quantity`=`quantity`+1 WHERE `id`=$id;";
        } else {
            $qr = "UPDATE `bill_detail` SET `quantity`=`quantity`-1 WHERE `id`=$id;";
        }
        $this->conn->query($qr);
    }

    function CheckQuantityZero($id) {
        $qr = "SELECT `quantity` FROM `bill_detail` WHERE `id`=$id;";
        $rs = $this->conn->query($qr);
        
        $result = $rs->fetch_assoc();
        $isZero = false;
        if ($result['quantity'] == 0) {
            $isZero = true; 
        }
        return json_encode($isZero); 
    }

    function CountNumCartByBillId($billId) {
        $qr = "SELECT COUNT(`id`) as num FROM `bill_detail` WHERE `id_bill`=$billId;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['num']); 
    }

    public function DeleteBillDetailsByBillId($billId) {
        $qr = "DELETE FROM `bill_detail` WHERE `id_bill`=$billId;";
        $this->conn->query($qr);
    }

    public function DeleteBillDetailsByProduct($productId) {
        $qr = "DELETE FROM `bill_detail` WHERE `id_product`=$productId;";
        $this->conn->query($qr);
    }

    public function DeleteBillDetail($id) {
        $qr = "DELETE FROM `bill_detail` WHERE `id`=$id;";
        $this->conn->query($qr);
    }
}
?>