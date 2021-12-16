<?php
class Ajax extends Controller {
    public $accountModel;
    public $billModel;
    public $billDetailModel;

    function __construct() {
        $this->accountModel = $this->model("AccountModel");
        $this->billModel = $this->model("BillModel");
        $this->billDetailModel = $this->model("BillDetailModel");
    }

    function CheckEmail() {
        $email = $_POST['email'];

        echo $this->accountModel->CheckEmail($email);
    }

    function SumQuantityGiftByMonth() {
        $billIdsByMonth = [];
        $giftByMonth = [];
        for ($i = 1; $i <= 12; $i++) {
            $billIdsByMonth[$i] = json_decode($this->billModel->GetBillIdByMonth($i));
        }

        foreach ($billIdsByMonth as $billIds) {
            $giftInMonth = 0;
            for ($j = 0; $j < count($billIds); $j++) {
                $gift = json_decode($this->billDetailModel->SumQuantityGiftByBillId($billIds[$j]));
                $giftInMonth += $gift;
            }
            $giftByMonth[] = $giftInMonth;
        }
        
        $monthGift = [];
        for ($i = 1; $i <= count($giftByMonth); $i++) {
            $monthGift[] = [$i, $giftByMonth[$i-1]];
        }
        print_r(json_encode($monthGift));
    }

    function SumQuantityBuyByMonth() {
        $billIdsByMonth = [];
        $buyByMonth = [];
        for ($i = 1; $i <= 12; $i++) {
            $billIdsByMonth[$i] = json_decode($this->billModel->GetBillIdByMonth($i));
        }

        foreach ($billIdsByMonth as $billIds) {
            $buyInMonth = 0;
            for ($j = 0; $j < count($billIds); $j++) {
                $gift = json_decode($this->billDetailModel->SumQuantityBuyByBillId($billIds[$j]));
                $buyInMonth += $gift;
            }
            $buyByMonth[] = $buyInMonth;
        }
        
        $monthBuy = [];
        for ($i = 1; $i <= count($buyByMonth); $i++) {
            $monthBuy[] = [$i, $buyByMonth[$i-1]];
        }
        print_r(json_encode($monthBuy));
    }
}
?>