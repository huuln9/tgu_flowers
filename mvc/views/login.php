<!DOCTYPE html>
<html lang="en">

<head>
    <title>TGU Flowers Shop | Shop Hoa Tươi Uy Tín</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?php echo $appRootURL ?>/public/home/images/favicon.ico" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/animate.css" />

    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/magnific-popup.css" />

    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/aos.css" />

    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/ionicons.min.css" />

    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/jquery.timepicker.css" />

    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/icomoon.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/style.css" />
    <link rel="stylesheet" href="<?php echo $appRootURL ?>/public/home/css/custom.css" />
</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-phone2"></span>
                            </div>
                            <span class="text">+84 123 456 789</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <span class="text">contact@tguflowers.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Miễn Phí Vận Chuyển</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section img section-custom" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/bg-3.jpg)">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">TGU Flowers Shop</span>
                    <h2 class="mb-4">Đăng nhập</h2>
                    <form action="<?php echo $appRootURL ?>/auth/login" class="p-3 contact-form" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
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
                                <a href="#"> Quên mật khẩu? </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Đăng nhập" class="btn btn-primary py-3 px-5" />
                        </div>
                    </form>
                    <div>
                        <p>
                            Bạn chưa có tài khoản? <a href="register.html">Đăng ký ngay.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy; <a href="#">TGU</a>
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , by <a href="#">Nhóm 5</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>

    <script src="<?php echo $appRootURL ?>/public/home/js/jquery.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/popper.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/bootstrap.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/jquery.stellar.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/owl.carousel.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/aos.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/google-map.js"></script>
    <script src="<?php echo $appRootURL ?>/public/home/js/main.js"></script>
</body>

</html>