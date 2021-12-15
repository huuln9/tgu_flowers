<?php $account = json_decode($data['account']) ?>
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>TGU Flowers, <span>Quản lý tài khoản</span></h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tài khoản</a>
                    </li>
                    <li class="breadcrumb-item active">Cập nhật</li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật tài khoản</h4>
                        <p class="text-muted m-b-15 f-s-12">Các thông tin có dấu (<code>*</code>) là bắt buộc</p>
                        <div class="form-validation">
                            <?php 
                            $urlArr = explode("/", $_SERVER['REQUEST_URI']);
                            $id = $urlArr[count($urlArr) - 1];
                            ?>
                            <form class="form-valide" action="<?php echo $appRootURL ?>/admin/editaccount" method="post">
                                <?php foreach ($account as $row) { ?>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <input type="hidden" name="val-id" value="<?php echo $id ?>"/>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Họ và tên <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="val-username" value="<?php echo $row->{'fullname'} ?>" placeholder="Nhập họ và tên ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-email" name="val-email" value="<?php echo $row->{'email'} ?>" placeholder="Nhập email ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Quyền <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <label class="radio-inline"><input type="radio" name="val-admin" value="1" 
                                        <?php if ($row->{'admin'} == 1) echo 'checked' ?>
                                        > Quản trị</label>
                                        <span style="margin: 5px;"></span>
                                        <label class="radio-inline"><input type="radio" name="val-admin" value="0"
                                        <?php if ($row->{'admin'} == 0) echo 'checked' ?>
                                        > Khách</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-password">Mật khẩu <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="val-password" name="val-password" value="<?php echo $row->{'password'} ?>" placeholder="Nhập mật khẩu ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" onclick="togglePassword()"> Hiển thị mật khẩu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-password">Xác nhận mật khẩu <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" value="<?php echo $row->{'password'} ?>" placeholder="Nhập lại mật khẩu ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" onclick="toggleRePassword()"> Hiển thị mật khẩu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Số điện thoại
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-phone" value="<?php echo $row->{'phone'} ?>" placeholder="Nhập số điện thoại ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Địa chỉ
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" rows="5" name="val-address" placeholder="Nhập địa chỉ ..."><?php echo $row->{'address'} ?></textarea>
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