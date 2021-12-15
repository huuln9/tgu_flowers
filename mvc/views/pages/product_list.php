<?php $products = json_decode($data['products']) ?>
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Quản lý hoa</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Hoa</a>
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
                        <h4 class="card-title">Danh sách hoa</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Ảnh minh họa</th>
                                        <th>Chủ đề</th>
                                        <th>Ý nghĩa</th>
                                        <th>Số lượng hoa</th>
                                        <th>Đơn giá</th>
                                        <th>Kho</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <?php foreach ($products as $row) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row->{'id'} ?></td>
                                        <td><?php echo $row->{'name'} ?></td>
                                        <td><img width="100" height="100" src="<?php echo $row->{'thumbnail'} ?>"></td>
                                        <td><?php echo $row->{'id_topic'} ?></td>
                                        <td><?php echo $row->{'mean'} ?></td>
                                        <td><?php echo $row->{'number_flowers'} ?></td>
                                        <td><?php echo $row->{'unit_price'} ?></td>
                                        <td><?php echo $row->{'inventory'} ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo $appRootURL ?>/admin/productedit/<?php echo $row->{'id'} ?>" type="button" class="btn btn-success"><i class="mdi mdi-pen"></i></a>
                                                <a href="<?php echo $appRootURL ?>/admin/deleteproduct/<?php echo $row->{'id'} ?>" type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Ảnh minh họa</th>
                                        <th>Chủ đề</th>
                                        <th>Ý nghĩa</th>
                                        <th>Số lượng hoa</th>
                                        <th>Đơn giá</th>
                                        <th>Kho</th>
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