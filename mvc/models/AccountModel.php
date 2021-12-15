<?php
class AccountModel extends Database {
    public function GetAccounts() {
        $qr = "SELECT * FROM `account`;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function AddAccount($fullname, $email, $password, $admin, $phone, $address) {
        $qr = "INSERT INTO `account` VALUES(null, '$fullname', '$email', '$password', $admin, '$phone', '$address');";
        $this->conn->query($qr);
    }

    public function GetAccount($id) {
        $qr = "SELECT * FROM `account` WHERE `id`=$id;";
        $rs = $this->conn->query($qr);
        
        $arr = array();
        while ($row = $rs->fetch_assoc()) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }

    public function UpdateAccount($id, $fullname, $email, $password, $admin, $phone, $address) {
        $qr = "UPDATE `account` SET `fullname`='$fullname',`email`='$email',`password`='$password',`admin`=$admin,`phone`='$phone',`address`='$address' WHERE `id`=$id;";
        $this->conn->query($qr);
    }

    public function DeleteAccount($id) {
        $qr = "DELETE FROM `account` WHERE id=$id;";
        $this->conn->query($qr);
    }
}
?>