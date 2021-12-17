<?php
class BillModel extends Database {
    public function GetBills() {
        $qr = "SELECT * FROM `bill` WHERE `status`!=0;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetCarts() {
        $qr = "SELECT * FROM `bill` WHERE `status`==0;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetBill($id) {
        $qr = "SELECT * FROM `bill` WHERE `id`=$id;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function GetBillIdByMonth($month, $year) {
        $qr = "SELECT `id` FROM `bill` WHERE MONTH(date)=$month AND YEAR(date)=$year;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row['id'];
        }
        return json_encode($arr);
    }

    public function GetBillIdByMonthAndGift($month, $year, $gift) {
        $qr = "SELECT `id` FROM `bill` WHERE MONTH(date)=$month AND YEAR(date)=$year AND `gift`=$gift;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row['id'];
        }
        return json_encode($arr);
    }

    public function GetBillIdByGift($isGift) {
        $qr = "SELECT `id` FROM `bill` WHERE `gift`=$isGift;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row['id'];
        }
        return json_encode($arr);
    }

    public function UpdateBillStatus($id, $status) {
        $qr = "UPDATE `bill` SET `status`=$status WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteBill($id) {
        $qr = "DELETE FROM `bill` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>