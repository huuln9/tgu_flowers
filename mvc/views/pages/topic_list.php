<?php $topics = json_decode($data['topics']) ?>
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Quản lý chủ đề</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Chủ đề</a>
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
                        <h4 class="card-title">Danh sách chủ đề</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên chủ đề</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <?php foreach ($topics as $row) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row->{'id'} ?></td>
                                        <td><?php echo $row->{'name'} ?></td>
                                        <td>
                                            <div class="btn-group">
                                            <a href="<?php echo $appRootURL ?>/admin/topicedit/<?php echo $row->{'id'} ?>" type="button" class="btn btn-primary"><i class="mdi mdi-pen"></i></a>
                                                <a href="<?php echo $appRootURL ?>/admin/deletetopic/<?php echo $row->{'id'} ?>" type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên chủ đề</th>
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