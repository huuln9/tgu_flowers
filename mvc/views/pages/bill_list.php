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
                                        <th>Thành tiền</th>
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
                                            <div class="btn-group">
                                                <a href="<?php echo $appRootURL ?>/admin/billdetail/<?php echo $row->{'id'} ?>" type="button" class="btn btn-success"><i class="mdi mdi-eye"></i></a>
                                                <a href="<?php echo $appRootURL ?>/admin/deletebill/<?php echo $row->{'id'} ?>" type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
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
                                        <th>Thành tiền</th>
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