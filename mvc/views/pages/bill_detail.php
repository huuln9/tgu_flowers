<?php
$billDetails = json_decode($data['billDetails']);
$bill = $data['bill'][0];
$customer = json_decode($data['customer']);
?>
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Quản lý hóa đơn</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Hóa đơn</a>
                    </li>
                    <li class="breadcrumb-item active">Chi tiết</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="invoice" class="effect2">
                    <div id="invoice-top">
                        <div class="invoice-logo"></div>
                        <div class="invoice-info">
                            <h2>TGU Flowers</h2>
                            <p>tguflowers@gmail.com
                                <br>2444.666.666
                            </p>
                        </div>
                        <!--End Info-->
                        <div class="title">
                            <h4>Hóa đơn #<?php echo $bill->{'id'} ?></h4>
                            <p>Thời điểm tạo: <?php echo $bill->{'date'} ?></p>
                        </div>
                        <!--End Title-->
                    </div>
                    <!--End InvoiceTop-->
                    <div id="invoice-mid">
                        <div class="clientlogo"></div>
                        <div class="invoice-info">
                            <?php foreach ($customer as $row) { ?>
                            <h2><?php echo $row->{'fullname'} ?></h2>
                            <p><?php echo $row->{'email'} ?>
                                <br><?php echo $row->{'phone'} ?>
                                <br>
                            </p>
                            <?php } ?>
                        </div>
                        <!-- <div id="project">
                            <h2>Project Description</h2>
                            <p>Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel purus. Curabitur semper malesuada urna ut suscipit.</p>
                        </div> -->
                    </div>
                    <!--End Invoice Mid-->
                    <div id="invoice-bot">
                        <div id="invoice-table">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr class="tabletitle">
                                        <td>
                                            <h2>Sản phẩm</h2>
                                        </td>
                                        <td>
                                            <h2>Trạng thái</h2>
                                        </td>
                                        <td>
                                            <h2>Loại</h2>
                                        </td>
                                        <td>
                                            <h2>Số lượng</h2>
                                        </td>
                                        <td >
                                            <h2>Đơn giá</h2>
                                        </td>
                                        <td>
                                            <h2>Thành tiền</h2>
                                        </td>
                                    </tr>
                                    <?php foreach ($billDetails as $row) { ?>
                                    <tr class="service">
                                        <td class="tableitem">
                                            <p class="itemtext"><?php echo $row->{'id_product'} ?></p>
                                        </td>
                                        <td class="tableitem">
                                            <p class="itemtext">
                                                <?php
                                                switch ($row->{'status'}) {
                                                    case 1:
                                                        echo 'Đã đặt hàng';
                                                        break;
                                                    case 2:
                                                        echo 'Đã nhận hàng';
                                                        break;
                                                    default:
                                                        echo '';
                                                        break;
                                                }
                                                ?>
                                            </p>
                                        </td>
                                        <td class="tableitem">
                                            <p class="itemtext"><?php  if ($row->{'gift'} == 1) echo 'Quà tặng'; else echo 'Mua' ?></p>
                                        </td>
                                        <td class="tableitem">
                                            <p class="itemtext"><?php echo $row->{'quantity'} ?></p>
                                        </td>
                                        <td class="tableitem">
                                            <p class="itemtext"><?php echo number_format($row->{'unit_price'}, 0, ',', '.') ?> đ</p>
                                        </td>
                                        <td class="tableitem">
                                            <p class="itemtext"><?php echo number_format($row->{'unit_price'} * $row->{'quantity'}, 0, ',', '.') ?> đ</p>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr class="tabletitle">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="Rate">
                                            <h2>Tổng cộng</h2>
                                        </td>
                                        <td class="payment">
                                            <h2>
                                                <?php
                                                $total = 0;
                                                foreach ($billDetails as $row) {
                                                    $total += $row->{'unit_price'} * $row->{'quantity'};
                                                }
                                                echo number_format($total, 0, ',', '.');
                                                ?>
                                                đ 
                                            </h2>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--End Table-->
                        <!-- <form action="#" method="post" target="_top" class="m-t-15">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </form> -->
                        <div id="legalcopy">
                            <p class="legal"><strong>Cảm ơn bạn đã ủng hộ shop!</strong> Mong rằng bạn sẽ cảm thấy hài lòng
                            về chất lượng sản phẩm. Nếu còn điều gì chưa hài lòng, mong bạn đừng vội đánh giá thấp shop, bạn
                            hãy vui lòng để lại ý kiến đóng góp hoặc liên hệ theo hotline bên dưới để shop có thể hỗ trợ nhanh nhất!</p>
                            <p>Hotline: 2444.666.666</p>
                        </div>
                    </div>
                    <!--End InvoiceBot-->
                </div>
                <!--End Invoice-->
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>