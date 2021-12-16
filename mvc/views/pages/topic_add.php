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
                    <li class="breadcrumb-item active">Thêm mới</li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm mới chủ đề</h4>
                        <p class="text-muted m-b-15 f-s-12">Các thông tin có dấu (<code>*</code>) là bắt buộc</p>
                        <div class="form-validation">
                            <form class="form-valide" action="<?php echo $appRootURL ?>/admin/addtopic" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-topicname">Tên chủ đề <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-topicname" name="val-topicname" placeholder="Nhập tên chủ đề ...">
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