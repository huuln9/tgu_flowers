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

    public function DeleteBillDetailsByBillId($billId) {
        $qr = "DELETE FROM `bill_detail` WHERE id_bill=$billId;";
        $this->conn->query($qr);
    }
}
?>