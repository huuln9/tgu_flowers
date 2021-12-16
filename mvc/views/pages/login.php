<section class="ftco-section img section-custom" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/bg-3.jpg)">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">TGU Flowers Shop</span>
                <h2 class="mb-4">Đăng nhập</h2>
                <form action="<?php echo $appRootURL ?>/auth/login" class="p-3 contact-form" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <input type="text" class="form-control" name="val-email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="val-password" placeholder="Mật khẩu" />
                    </div>
                    <div class="d-flex flex-bt">
                        <div class="form-group">
                            <input id="remember" type="checkbox" />
                            <label for="remember">Ghi nhớ đăng nhập</label>
                        </div>
                        <div>
                            <a href="<?php echo $appRootURL ?>/auth/register"> Quên mật khẩu? </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Đăng nhập" class="btn btn-primary py-3 px-5" />
                    </div>
                </form>
                <div>
                    <p>
                        Bạn chưa có tài khoản? <a href="<?php echo $appRootURL ?>/auth/register">Đăng ký ngay</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>