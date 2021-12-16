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

    public function SumQuantityGiftByBillId($billId) {
        $qr = "SELECT SUM(`quantity`) as quantity FROM `bill_detail` WHERE `gift`=1 AND `id_bill`=$billId;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['quantity']);
    }

    public function SumQuantityBuyByBillId($billId) {
        $qr = "SELECT SUM(`quantity`) as `quantity` FROM `bill_detail` WHERE `gift`=0 AND `id_bill`=$billId;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['quantity']);
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

    public function SumQuantityGift() {
        $qr = "SELECT SUM(quantity) as `quantity` FROM `bill_detail` WHERE `gift`=1;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['quantity']);
    }

    public function SumQuantityBuy() {
        $qr = "SELECT SUM(quantity) as `quantity` FROM `bill_detail` WHERE `gift`=0;";
        $rs = $this->conn->query($qr);
        
        $row = $rs->fetch_assoc();
        return json_encode($row['quantity']);
    }

    public function DeleteBillDetailsByBillId($billId) {
        $qr = "DELETE FROM `bill_detail` WHERE id_bill=$billId;";
        $this->conn->query($qr);
    }
}
?>