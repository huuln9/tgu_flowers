<?php
class BillModel extends Database {
    public function GetBills() {
        $qr = "SELECT * FROM `bill`;";
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

    public function DeleteBill($id) {
        $qr = "DELETE FROM `bill` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>