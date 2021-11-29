<?php
class SinhVienModel extends Database {
    public function GetSV() {
        $qr = "SELECT * FROM sinhvien";
        return $this->conn->query($qr);
    }
}
?>