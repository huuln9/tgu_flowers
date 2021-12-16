<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Bảng chính</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trang quản trị</a>
                    </li>
                    <li class="breadcrumb-item active">Bảng chính</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Doanh thu tháng</h4>
                        <div class="f-s-30 f-w-300 text-success"><?php echo number_format($data['totalByMonth'], 0, ',', '.') ?> <span class="f-s-16 text-uppercase">VNĐ</span>
                        </div>
                        <a href="<?php echo $appRootURL ?>/admin/chart" class="btn btn-outline-dark btn-flat m-t-5 m-b-30 f-s-14">Chi tiết</a>
                        <!-- <canvas id="sales-graph-top"></canvas> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="f-s-30 m-b-0"><?php echo number_format($data['total'], 0, ',', '.') ?> <span class="f-s-16 text-uppercase">VNĐ</span></h2>
                        <span class="f-w-600">Tổng doanh thu</span>
                        <div class="m-t-30">
                            <h4 class="f-w-600"><?php echo number_format($data['buyer'], 0, ',', '.') ?></h4>
                            <h6 class="m-t-10">Mua hoa <span class="pull-right"><?php echo number_format($data['buyerPercent'], 0, ',', '.') ?>%</span></h6>
                            <div class="progress m-t-15 h-6px">
                                <div class="progress-bar bg-primary wow animated progress-animated w-100pc h-6px" role="progressbar"></div>
                            </div>
                        </div>
                        <div class="m-t-20 m-b-20">
                            <h4 class="f-w-600"><?php echo number_format($data['gifter'], 0, ',', '.') ?></h4>
                            <h6 class="m-t-10">Tặng hoa <span class="pull-right"><?php echo number_format($data['gifterPercent'], 0, ',', '.') ?>%</span></h6>
                            <div class="progress m-t-15 h-6px">
                                <div class="progress-bar bg-danger wow animated progress-animated w-100pc h-6px" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ý kiến khách hàng</h4>
                        <?php 
                        $commentsNew3 = json_decode($data['commentsNew3']);
                        $commentsTop10 = json_decode($data['commentsTop10']);
                        $accounts = json_decode($data['accounts']);
                        foreach ($commentsNew3 as $row) {
                        ?>
                        <div class="media border-bottom-1 p-t-15 p-b-15">
                            <img src="<?php echo $appRootURL ?>/public/assets/images/avatar/1.jpg" class="mr-3 rounded-circle" alt="">
                            <div class="media-body">
                                <h5>
                                    <?php
                                    foreach ($accounts as $account) {
                                        if ($account->{'id'} == $row->{'id_account'}) {
                                            echo $account->{'fullname'};
                                        }
                                    }
                                    ?>
                                </h5>
                                <p class="m-b-0"><?php echo $row->{'content'} ?></p>
                            </div><span class="text-muted f-s-12"><?php echo $row->{'time'} ?></span>
                        </div>
                        <?php } ?>
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
                                            <th>Top khách hàng</th>
                                            <th>Ý kiến đóng góp</th>
                                            <th>Lượt mua</th>
                                            <th>Lượt tặng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($commentsTop10 as $row) { ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo $appRootURL ?>/public/assets/images/avatar/1.jpg" class="w-40px rounded-circle m-r-10" alt="">
                                                <?php
                                                foreach ($accounts as $account) {
                                                    if ($account->{'id'} == $row->{'id_account'}) {
                                                        echo $account->{'fullname'};
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td><span><?php echo $row->{'times'} ?></span>
                                            <td><span>#</span>
                                            </td>
                                            <td>#</td>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- #/ container -->
</div>