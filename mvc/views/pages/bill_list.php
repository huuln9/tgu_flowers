<?php
$bills = json_decode($data['bills']);
$billDetails = json_decode($data['billDetails']);
$accounts = json_decode($data['accounts']);
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
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách hóa đơn    </h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Khách hàng</th>
                                        <th>Thời điểm tạo</th>
                                        <th>Loại</th>
                                        <th>Thành tiền</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Tình trạng</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bills as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->{'id'} ?></td>
                                        <td>
                                            <?php 
                                            foreach ($accounts as $account) {
                                                if ($account->{'id'} == $row->{'id_account'}) {
                                                    echo $account->{'fullname'};
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $row->{'date'} ?></td>
                                        <td><?php  if ($row->{'gift'} == 1) echo 'Quà tặng'; else echo 'Mua' ?></td>
                                        <td>
                                            <?php
                                            $total = 0;
                                            foreach ($billDetails as $billDetail) {
                                                if ($billDetail->{'id_bill'} == $row->{'id'}) {
                                                    $total += $billDetail->{'unit_price'} * $billDetail->{'quantity'};
                                                }
                                            }
                                            echo number_format($total, 0, ',', '.');
                                            ?>
                                            đ
                                        </td>
                                        <td>
                                        <?php  if ($row->{'payment'} == 1) echo 'Chuyển khoản'; else echo 'Khi nhận hàng' ?>
                                        </td>
                                        <td>
                                            <?php
                                            switch ($row->{'status'}) {
                                                case 1:
                                                    echo "<span style='color:#0876F9'><i class='mdi mdi-check-circle-outline'></i> Đã đặt hàng, đang giao</span>";
                                                    break;
                                                case 2:
                                                    echo "<span style='color:#0CB80F'><i class='mdi mdi-check-circle'></i> Đã thanh toán</span>";
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo $appRootURL ?>/admin/billdetail/<?php echo $row->{'id'} ?>" type="button" class="btn btn-success"><i class="mdi mdi-eye"></i></a>
                                                <a href="<?php echo $appRootURL ?>/admin/deletebill/<?php echo $row->{'id'} ?>" type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                <?php if ($row->{'status'} == 1) { ?>
                                                <a href='<?php echo $appRootURL ?>/admin/donebill/<?php echo $row->{'id'} ?>' type='button' class='btn btn-secondary'><i class='mdi mdi-check'></i></a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>ID</th>
                                        <th>Khách hàng</th>
                                        <th>Thời điểm tạo</th>
                                        <th>Loại</th>
                                        <th>Thành tiền</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Tình trạng</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>