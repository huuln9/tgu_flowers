<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TGU Flowers</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./public/assets/images/favicon.png">
    <link href="./public/main/css/style.css" rel="stylesheet">
    <!-- <script src="../../public/js/modernizr-3.6.0.min.js"></script> -->
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><a href="index.html"><b><img src="./public/assets/images/logo.png" alt=""> </b><span class="brand-title"><img src="./public/assets/images/logo-text.png" alt=""></span></a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account-circle f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="mdi mdi-settings"></i> <span>Cài đặt</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-power"></i> <span>Đăng xuất</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">TRANG QUẢN TRỊ</li>
                    <li><a href="index.html"><i class="mdi mdi-view-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-account-settings-variant"></i> <span class="nav-text">Quản lý tài khoản</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-account-multiple"></i> Danh sách tài khoản</a>
                            </li>
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-account-plus"></i> Thêm tài khoản</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-flower"></i> <span class="nav-text">Quản lý hoa</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-format-list-bulleted"></i> Danh sách hoa</a>
                            </li>
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-plus-circle-outline"></i> Thêm hoa</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-cash-usd"></i> <span class="nav-text">Quản lý hóa đơn</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-format-list-bulleted"></i> Danh sách hóa đơn</a>
                            </li>
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-plus-circle-outline"></i> Thêm hóa đơn</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-line"></i> <span class="nav-text">Thống kê</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="table-dt-basic.html"><i class="mdi mdi-image-filter-vintage"></i> Doanh thu hoa</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->
        <!-- content body -->
        <?php require_once './mvc/views/pages/'.$data['pages'].'.php'; ?>
        <!-- #/ content body -->
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="#">TGU</a> 2021, by <a href="#">Nhóm 5</a></p>
            </div>
        </div>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="./public/assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="./public/main/js/custom.min.js"></script>
    <!-- Chartjs chart -->
    <!-- <script src="../../public/assets/plugins/chartjs/Chart.bundle.js"></script> -->
    <!-- Custom dashboard script -->
    <!-- <script src="../../public/js/dashboard-1.js"></script>   -->
</body>

</html>