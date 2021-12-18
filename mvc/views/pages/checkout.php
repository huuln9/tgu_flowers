<?php
$billId = json_decode($data['billId']);
$total = json_decode($data['total']);
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo $appRootURL ?>/public/home/images/bg-2.jpg')">
    <div class="container">
        <div class="
            row
            no-gutters
            slider-text
            align-items-center
            justify-content-center
          ">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                <div class="col-md-12">
                    <div class="cart-detail p-3 p-md-4">
                        <form action="<?php echo $appRootURL ?>/home/payment/<?php echo $billId ?>" id="receiver-info-form" class="billing-form" method="post">
                            <h3 class="billing-heading mb-4">Phương thức thanh toán</h3>
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="val-payment" value="1" class="mr-2" /> Chuyển khoản</label>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>Vietcombank: 0123456789</li>
                                            <p class="text-i">Nội dung: SDT + Tên đăng nhập</p>
                                            <li>Momo: 0123456789</li>
                                            <p class="text-i">Nội dung: SDT + Tên đăng nhập</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="val-payment" value="2" class="mr-2" checked/>
                                            Ship COD (Thanh toán khi nhận hàng)</label>
                                    </div>
                                </div>
                            </div>

                            <a data-toggle="collapse" href="#receiver-info" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <h5 class="my-4">Mua làm quà tặng</h5>
                            </a>
                            <div class="collapse border m-3 p-3" id="receiver-info">
                                <h3 class="mb-4 billing-heading">Thông tin người nhận</h3>
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <!-- <label><input type="checkbox" name="val-gift" class="mr-2" /> Quà tặng</label> -->
                                                <span class="mr-3" style="color:red">Làm quà tặng?</span>
                                                <label class="mr-3"><input type="radio" name="val-gift" value="1" class="mr-2"/> Có</label>
                                                <label><input type="radio" name="val-gift" value="0" class="mr-2" checked/> Không</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Họ và tên</label>
                                            <input type="text" name="val-receivername" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="streetaddress">Số điện thoại, Địa chỉ</label>
                                            <input type="text" name="val-receiveraddress" class="form-control" placeholder="0841 234 567, ABC XYZ ..." />
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Thời điểm nhận</label>
                                            <input type="text" name="val-receivetime" class="form-control" placeholder="VD: 14h30 21/12/2021" />
                                        </div>

                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="streetaddress">Lời nhắn</label>
                                            <textarea name="val-message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thanh toán</button>
                        </form>
                    </div>
                </div>
                <!-- END -->
            </div>
            <div class="col-xl-5">
                <div class="row">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Hóa đơn</h3>
                            <p class="d-flex">
                                <span>Tạm tính</span>
                                <span><?php echo number_format($total, 0, ',', '.') ?> đ</span>
                            </p>
                            <p class="d-flex">
                                <span>Phí vận chuyển</span>
                                <span>0</span>
                            </p>
                            <p class="d-flex">
                                <span>Giảm giá</span>
                                <span>0</span>
                            </p>
                            <hr />
                            <p class="d-flex total-price">
                                <span>Tổng tiền</span>
                                <span><?php echo number_format($total, 0, ',', '.') ?> VNĐ</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-8 -->
        </div>
    </div>
</section>