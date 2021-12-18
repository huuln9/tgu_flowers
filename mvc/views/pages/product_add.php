<?php $topics = json_decode($data['topics']) ?>
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
                    <li class="breadcrumb-item active">Thêm mới</li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm mới hoa</h4>
                        <p class="text-muted m-b-15 f-s-12">Các thông tin có dấu (<code>*</code>) là bắt buộc</p>
                        <div class="form-validation">
                            <form class="form-valide" action="<?php echo $appRootURL ?>/admin/addproduct" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-flowername">Tên <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-flowername" name="val-flowername" placeholder="Nhập tên ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Ảnh minh họa
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-thumbnail" placeholder="Nhập đường dẫn ảnh ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Chủ đề <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="val-idtopic">
                                            <?php foreach ($topics as $row) { ?>
                                            <option value="<?php echo $row->{'id'} ?>"><?php echo $row->{'name'} ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Ý nghĩa
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" name="val-mean" placeholder="Nhập ý nghĩa ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-soluong">Số lượng <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" id="val-soluong" name="val-soluong" placeholder="Nhập số lượng hoa trong bó ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-dongia">Đơn giá <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control input-flat" id="val-dongia" name="val-dongia" placeholder="Nhập đơn giá ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Trạng thái <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <label class="radio-inline"><input type="radio" name="val-enable" value="1" checked> Hiện</label>
                                        <span style="margin: 5px;"></span>
                                        <label class="radio-inline"><input type="radio" name="val-enable" value="0"> Ẩn</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
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