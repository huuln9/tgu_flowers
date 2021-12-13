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
                                                <input type="text" class="form-control" placeholder="Search">
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
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-bell f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/1.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. Dmitry</div>
                                                    <div class="notification-text">5 members joined today</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/2.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mariam</div>
                                                    <div class="notification-text">likes a photo of you</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/3.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Tasnim</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/4.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Ishrat Jahan</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-comment f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">2 New Messages</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/1.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Saiul Islam</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/2.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Ishrat Jahan</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/3.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Saiul Islam</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="./public/assets/images/avatar/4.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Ishrat Jahan</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)"> <i class="mdi mdi-crosshairs-gps f-s-18" aria-hidden="true"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="drop-down dropdown-task animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">Task Update</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">85% Complete</small>
                                                    <div class="notification-heading">Task One</div>
                                                    <div class="progress">
                                                        <div style="width: 85%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">60% Complete</small>
                                                    <div class="notification-heading">Task Two</div>
                                                    <div class="progress">
                                                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">25% Complete</small>
                                                    <div class="notification-heading">Task Three</div>
                                                    <div class="progress">
                                                        <div style="width: 25%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">75% Complete</small>
                                                    <div class="notification-heading">Task Four</div>
                                                    <div class="progress">
                                                        <div style="width: 75%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="mdi mdi-email"></i> <span>Inbox</span></a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-power"></i> <span>Logout</span></a>
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
                    <li class="nav-label">Main</li>
                    <li><a href="index.html"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>


                    <li class="nav-label">Components</li>
                    
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i> <span class="nav-text">Charts</span> <span class="badge badge-danger nav-badge">8</span></a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a>
                            </li>
                            <li><a href="chart-morris.html">Morris</a>
                            </li>
                            <li><a href="chart-chartjs.html">Chartjs</a>
                            </li>
                            <li><a href="chart-chartist.html">Chartist</a>
                            </li>
                            <li><a href="chart-sparkline.html">Sparkline</a>
                            </li>
                            <li><a href="chart-justgage.html">Justgage</a>
                            </li>
                            <li><a href="chart-knob.html">Knob</a>
                            </li>
                            <li><a href="chart-peity.html">Peity</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-email"></i> <span class="nav-text">Email</span></a>
                        <ul aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a>
                            </li>
                            <li><a href="email-read.html">Read</a>
                            </li>
                            <li><a href="email-compose.html">Compose</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="calender-event.html"><i class="mdi mdi-calendar-check"></i> <span class="nav-text">Calendar</span></a></li>
                    <li><a href="widget-basic-card.html"><i class="mdi mdi-widgets"></i> <span class="nav-text">Widget</span></a>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-diamond"></i> <span class="nav-text">Components</span> <span class="badge badge-success nav-badge">16</span></a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a>
                            </li>
                            <li><a href="ui-alert.html">Alert</a>
                            </li>
                            <li><a href="ui-badge.html">Badge</a>
                            </li>
                            <li><a href="ui-button.html">Button</a>
                            </li>
                            <li><a href="ui-button-group.html">Button Group</a>
                            </li>
                            <li><a href="ui-cards.html">Cards</a>
                            </li>
                            <li><a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="ui-dropdown.html">Dropdown</a>
                            </li>
                            <li><a href="ui-list-group.html">List Group</a>
                            </li>
                            <li><a href="ui-media-object.html">Media Object</a>
                            </li>
                            <li><a href="ui-modal.html">Modal</a>
                            </li>
                            <li><a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="ui-popover.html">Popover</a>
                            </li>
                            <li><a href="ui-progressbar.html">Progressbar</a>
                            </li>
                            <li><a href="ui-tab.html">Tab</a>
                            </li>
                            <li><a href="ui-typography.html">Typography</a>
                            </li>
                            <li><a href="uc-nestedable.html">Nestedable</a>
                            </li>
                            <li><a href="uc-sweetalert.html">Sweetalert</a>
                            </li>
                            <li><a href="uc-toastr.html">Toastr</a>
                            </li>
                            <li><a href="uc-weather.html">Weather</a>
                            </li>
                            <li><a href="uc-nestedable.html">Nestedable</a>
                            </li>
                            <li><a href="uc-sweetalert.html">Sweetalert</a>
                            </li>
                            <li><a href="uc-toastr.html">Toastr</a>
                            </li>
                            <li><a href="uc-weather.html">Weather</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-nfc-variant"></i> <span class="nav-text">Form</span></a>
                        <ul aria-expanded="false">
                            <li><a href="form-basic.html">Basic Forms</a>
                            </li>
                            <li><a href="form-addons.html">Form Addons</a>
                            </li>
                            <li><a href="form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="form-editor.html">Form Editor</a>
                            </li>
                            <li><a href="form-pickers.html">Form Pickers</a>
                            </li>
                            <li><a href="form-summernote.html">Form Summernote</a>
                            </li>
                            <li><a href="form-typehead.html">Form Typehead</a>
                            </li>
                            <li><a href="form-xeditable.html">Form Xeditable</a>
                            </li>
                            <li><a href="form-dropzone.html">Form Dropzone</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-table-edit"></i> <span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table-basic.html">Basic</a>
                            </li>
                            <li><a href="table-layout.html">Table Layout</a>
                            </li>
                            <li><a href="table-dt-basic.html">Datatable Basic</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="map-datamap.html"><i class="mdi mdi-map"></i> <span class="nav-text">Map</span></a></li>
                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-google-pages"></i> <span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a>
                            </li>
                            <li><a href="page-register.html">Register</a>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="page-recover.html">Recover</a>
                            </li>
                            <li><a href="page-error-400.html">Error 400</a>
                            </li>
                            <li><a href="page-error-403.html">Error 403</a>
                            </li>
                            <li><a href="page-error-404.html">Error 404</a>
                            </li>
                            <li><a href="page-error-500.html">Error 500</a>
                            </li>
                            <li><a href="page-error-503.html">Error 503</a>
                            </li>
                            <li><a href="page-one-column.html">One Column</a>
                            </li>
                            <li><a href="page-pricing.html">Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="page-invoice.html"><i class="mdi mdi-square-edit-outline"></i> <span class="nav-text">Invoice Summary</span></a>
                    </li>
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->
        <!-- content body -->
        <div class="content-body">
            <div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Download <span class="pull-right"><i class="ion-android-download f-s-30 text-primary"></i></span></h4>
                                <h6 class="m-t-20 f-s-14">50% Complete</h6>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-50pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Upload <span class="pull-right"><i class="ion-android-upload f-s-30 text-success"></i></span></h4>
                                <h6 class="m-t-20 f-s-14">90% Complete</h6>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-success wow animated progress-animated w-90pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>Ticket <span class="pull-right"><i class="ion-android-list f-s-30 text-danger"></i></span></h4>
                                <h6 class="m-t-20 f-s-14">65% Ticket Checked</h6>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-danger wow animated progress-animated w-65pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class=" card-title">Monthly Income</h4>
                                <div class="f-s-30 f-w-300 text-success">$3500 <span class="f-s-16 text-uppercase">USD</span>
                                </div>
                                <a href="#" class="btn btn-outline-dark btn-flat m-t-5 m-b-30 f-s-14">View Details</a>
                                <canvas id="sales-graph-top"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Messages</h4>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="./public/assets/images/avatar/1.jpg" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="./public/assets/images/avatar/2.jpg" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                                <div class="media p-t-15 p-b-15">
                                    <img src="./public/assets/images/avatar/3.jpg" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5>John Tomas</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div><span class="text-muted f-s-12">April 24, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="f-s-30 m-b-0">$6,932.60</h2><span class="f-w-600">Total Revenue</span>
                                <div class="m-t-30">
                                    <h4 class="f-w-600">2,365</h4>
                                    <h6 class="m-t-10 text-muted">Online Earning <span class="pull-right">50%</span></h6>
                                    <div class="progress m-t-15 h-6px">
                                        <div class="progress-bar bg-primary wow animated progress-animated w-50pc h-6px" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="m-t-20 m-b-20">
                                    <h4 class="f-w-600">1,250</h4>
                                    <h6 class="m-t-10">Offline Earning <span class="pull-right">50%</span></h6>
                                    <div class="progress m-t-15 h-6px">
                                        <div class="progress-bar bg-success wow animated progress-animated w-50pc h-6px" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <a href="#">
                                    <div class="card-bg-img-1">
                                        <div class="card-img-overlay dark-overlay-5 text-white">
                                            <div class="position-absolute left-20 bottom-20"><span class="label label-primary label-rounded">News</span>
                                                <h4 class="text-white m-t-20 m-b-10">The science<br>behind the dress</h4>
                                                <div><span class="f-s-16"><i class="ti-comment m-r-10 f-s-13"></i>74</span> <span class="p-l-10 p-r-10">|</span> <span class="f-s-16"><i class="ti-heart m-r-10 f-s-13"></i>210</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center"><i class="icon ion-ios-paper-outline f-s-75 text-success"></i>
                                    <h4 class="m-b-2">Knowledge Base</h4>
                                    <p class="p-l-30 p-r-30 m-t-15 m-b-30">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p><a href="#" class="btn btn-sm btn-success btn-block m-t-15">Browse Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs">
                                            <thead>
                                                <tr>
                                                    <th>Top Active Members</th>
                                                    <th>Views</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Comments</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="./public/assets/images/avatar/1.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>125</span>
                                                    </td>
                                                    <td>United States</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>84</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./public/assets/images/avatar/2.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>547</span>
                                                    </td>
                                                    <td>Canada</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./public/assets/images/avatar/3.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>557</span>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td><i class="fa fa-circle-o text-danger f-s-12 m-r-10"></i> Inactive</td>
                                                    <td><span>55</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./public/assets/images/avatar/4.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>753</span>
                                                    </td>
                                                    <td>England</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>45</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./public/assets/images/avatar/5.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>453</span>
                                                    </td>
                                                    <td>China</td>
                                                    <td><i class="fa fa-circle-o text-danger f-s-12 m-r-10"></i> Inactive</td>
                                                    <td><span>63</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="./public/assets/images/avatar/6.jpg" class="w-40px rounded-circle m-r-10" alt="">Arden Karn</td>
                                                    <td><span>658</span>
                                                    </td>
                                                    <td>Japan</td>
                                                    <td><i class="fa fa-circle-o text-success f-s-12 m-r-10"></i> Active</td>
                                                    <td><span>38</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./public/assets/images/users/2.jpg" class="rounded-circle m-t-15 w-75px" alt="">
                                    <h4 class="m-t-15 m-b-2">Paul Custard</h4>
                                    <p class="text-muted">Web Developer</p>
                                    <ul class="list-inline m-t-15">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin f-s-20 text-muted"></i></a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Name:</span> <span class="pull-right">Bob Springer</span>
                                        </div>
                                        <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Email:</span> <span class="pull-right">example@examplel.com</span>
                                        </div>
                                        <div class="col-12 p-t-10 p-b-10"><span class="pull-left f-w-600">Phone:</span> <span class="pull-right">+12 123 124 125</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Activity Timeline</h4>
                                <div class="timeline-">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div><a href="#" class="timeline-panel text-muted"><span>10 minutes ago</span><h6 class="m-t-5">Youtube, a video-sharing website, goes live.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning"></div><a href="#" class="timeline-panel text-muted"><span>20 minutes ago</span><h6 class="m-t-5">Mashable, a news website and blog, goes live.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger"></div><a href="#" class="timeline-panel text-muted"><span>30 minutes ago</span><h6 class="m-t-5">Google acquires Youtube.</h6></a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success"></div><a href="#" class="timeline-panel text-muted"><span>15 minutes ago</span><h6 class="m-t-5">StumbleUpon is acquired by eBay.</h6></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./public/assets/images/users/1.jpg" class="rounded-circle m-t-10 w-50px" alt="">
                                    <h6 class="f-w-500 m-t-15">Bob Springer</h6>
                                    <p class="m-b-0 f-s-12">Status: <strong>Online</strong>
                                    </p>
                                    <p class="m-b-0 f-s-12">Response Time: <strong>3 Hours</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./public/assets/images/users/2.jpg" class="rounded-circle m-t-10 w-50px" alt="">
                                    <h6 class="f-w-500 m-t-15">Bob Springer</h6>
                                    <p class="m-b-0 f-s-12">Status: <strong>Online</strong>
                                    </p>
                                    <p class="m-b-0 f-s-12">Response Time: <strong>3 Hours</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!-- #/ content body -->
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="https://ule.merkulov.design">Ule</a> 2019, by <a href="https://1.envato.market/tf-merkulove" target="_blank">merkulove</a></p>
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