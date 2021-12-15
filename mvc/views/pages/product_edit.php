<?php 
$product = json_decode($data['product']);
$topics = json_decode($data['topics']);
?>
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Quản ký hoa</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Hoa</a>
                    </li>
                    <li class="breadcrumb-item active">Cập nhật</li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật hoa</h4>
                        <p class="text-muted m-b-15 f-s-12">Các thông tin có dấu (<code>*</code>) là bắt buộc</p>
                        <div class="form-validation">
                            <?php 
                            $urlArr = explode("/", $_SERVER['REQUEST_URI']);
                            $id = $urlArr[count($urlArr) - 1];
                            ?>
                            <form class="form-valide" action="<?php echo $appRootURL ?>/admin/editproduct" method="post">
                                <?php foreach ($product as $rowp) { ?>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <input type="hidden" name="val-id" value="<?php echo $id ?>"/>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-flowername">Tên <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-flowername" name="val-flowername" value="<?php echo $rowp->{'name'} ?>" placeholder="Nhập tên ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Ảnh minh họa
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-thumbnail" value="<?php echo $rowp->{'thumbnail'} ?>" placeholder="Nhập đường dẫn ảnh ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Chủ đề <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="val-idtopic">
                                            <?php foreach ($topics as $row) { ?>
                                            <option value="<?php echo $row->{'id'} ?>" 
                                                <?php if ($rowp->{'id_topic'}==$row->{'id'}) echo 'selected' ?>
                                            ><?php echo $row->{'name'} ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Ý nghĩa
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" name="val-mean" value="<?php echo $rowp->{'mean'} ?>" placeholder="Nhập ý nghĩa ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-soluong">Số lượng <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" id="val-soluong" name="val-soluong" value="<?php echo $rowp->{'number_flowers'} ?>" placeholder="Nhập số lượng hoa trong bó ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-dongia">Đơn giá <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" id="val-dongia" name="val-dongia" value="<?php echo $rowp->{'unit_price'} ?>" placeholder="Nhập đơn giá ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-kho">Kho <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" id="val-kho" name="val-kho" value="<?php echo $rowp->{'inventory'} ?>" placeholder="Nhập số lượng hoa trong kho ...">
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>