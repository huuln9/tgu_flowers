<?php 
$comments = json_decode($data['comments']);
$accounts = json_decode($data['accounts']);
$products = json_decode($data['products']);
?>
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Quản lý bình luận</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Bình luận</a>
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
                        <h4 class="card-title">Danh sách bình luận</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Người bình luận</th>
                                        <th>Nội dung bình luận</th>
                                        <th>Sản phẩm</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($comments as $row) { ?>
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
                                        <td><?php echo $row->{'content'} ?></td>
                                        <td>
                                            <?php 
                                            foreach ($products as $product) {
                                                if ($product->{'id'} == $row->{'id_product'}) {
                                                    echo $product->{'name'};
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo $appRootURL ?>/admin/deletecomment/<?php echo $row->{'id'} ?>" type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>ID</th>
                                        <th>Người bình luận</th>
                                        <th>Nội dung bình luận</th>
                                        <th>Sản phẩm</th>
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