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

    public function GetBillIdByAccount($accountId) {
        $qr = "SELECT `id` FROM `bill` WHERE `id_account`=$accountId;";
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

    public function GetBillIdByAccountAndStatus($accountId, $status) {
        $qr = "SELECT `id` FROM `bill` WHERE `id_account`=$accountId AND `status`=$status;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row['id'];
        }
        return json_encode($arr);
    }

    function CheckCartExist($accountId) {
        $qr = "SELECT `id` FROM `bill` WHERE `id_account`=$accountId AND `status`=0;";
        $rs = $this->conn->query($qr);
        
        $result = false;
        if ($rs->num_rows > 0) {
            $result = true;
        }
        return json_encode($result); 
    }

    public function AddCart($accountId) {
        $qr = "INSERT INTO `bill`(`id`, `id_account`, `status`, `gift`) VALUES (null, $accountId, 0, 0);";
        $this->conn->query($qr);
    }

    public function GetCartByAccount($accountId) {
        $qr = "SELECT * FROM `bill` WHERE `status`=0 AND `id_account`=$accountId;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function UpdateBillStatus($id, $status) {
        $qr = "UPDATE `bill` SET `status`=$status WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function UpdateBill($id, $payment, $gift, $receiverName, $receiverAddress, $receiveTime, $message) {
        $qr = "UPDATE `bill` SET `date`=now(),`payment`=$payment,`status`=1,`gift`=$gift,`receiver_name`='$receiverName',
                `receiver_address`='$receiverAddress',`receive_time`='$receiveTime',`message`='$message' WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteBill($id) {
        $qr = "DELETE FROM `bill` WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteBillByAccount($accountId) {
        $qr = "DELETE FROM `bill` WHERE `id_account`=$accountId;";
        $this->conn->query($qr);
    }
}
?>