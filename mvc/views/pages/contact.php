<?php
if (isset($_SESSION['account'])) {
    $account = $_SESSION['account'];
}
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo $appRootURL ?>/public/home/images/bg-2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Liên hệ</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Địa chỉ:</span> Thân Cửu Nghĩa, Châu Thành, Tiền Giang</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Điện thoại:</span> <a href="tel:+8412345679">+84 123 456 789</a></p>
                </div>
                <a href="tel:+"></a>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <a href="mailto:contact@tguflowers.com">contact@tguflowers.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Website:</span> <a href="#">tguflowers.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <?php if (!isset($_SESSION['account'])) { ?>
                <div style="height: 500px;"></div>
                
                <?php } ?>
                <?php if (isset($_SESSION['account'])) { ?>
                <form action="<?php echo $appRootURL ?>/home/editaccount" class="bg-white p-5 contact-form" method="post">
                    <h3 class="mb-3">Cập nhật thông tin</h3>
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" name="val-id" value="<?php echo $account->{'id'} ?>"/>
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input type="text" class="form-control" placeholder="Họ và tên" name="val-fullname" value="<?php echo $account->{'fullname'} ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Email" id="val-email" name="val-email" value="<?php echo $account->{'email'} ?>">
                    </div>
                    <div class="form-group row">
                        <div class="form-check">
                            <div id="check-email" style="color: red;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" id="val-password" class="form-control" name="val-password" placeholder="Mật khẩu" value="<?php echo $account->{'password'} ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" onclick="togglePassword()"> Hiển thị mật khẩu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="text" class="form-control" name="val-phone" placeholder="Số điện thoại" value="<?php echo $account->{'phone'} ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <textarea cols="30" rows="7" class="form-control" name="val-address" placeholder="Địa chỉ"><?php echo $account->{'address'} ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Cập nhật" class="btn btn-primary py-3 px-5">
                        <a href="<?php echo $appRootURL ?>/home/logout" type="button" class="btn btn-primary py-3 px-5">Đăng xuất</a>
                    </div>
                </form>
                <?php } ?>
            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>