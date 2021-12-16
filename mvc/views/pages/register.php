<section class="ftco-section img section-custom" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/bg-3.jpg)">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">TGU Flowers Shop</span>
                <h2 class="mb-4">Đăng ký</h2>
                <form action="<?php echo $appRootURL ?>/auth/signup" class="p-3 contact-form" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <input type="text" class="form-control" name="val-fullname" placeholder="Họ và tên" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <div id="check-email" style="color: red;"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="val-password" placeholder="Mật khẩu" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="val-phone" placeholder="Số điện thoại" required/>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Đăng ký" class="btn btn-primary py-3 px-5" />
                    </div>
                </form>
                <div>
                    <p>Bạn đã có tài khoản? <a href="<?php echo $appRootURL ?>/auth">Đăng nhập</a></p>
                </div>
            </div>
        </div>
    </div>
</section>