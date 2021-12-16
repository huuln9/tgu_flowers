<div class="hero-wrap hero-bread" style="background-image: url('<?php echo $appRootURL ?>/public/home/images/bg-2.jpg')">
    <div class="container">
        <div class="
            row
            no-gutters
            slider-text
            align-items-center
            justify-content-center
          ">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Giỏ hàng</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="product-remove">
                                    <a href="#"><span class="ion-ios-close"></span></a>
                                </td>

                                <td class="image-prod">
                                    <div class="img" style="
                          background-image: url(images/products/hoa-1.jpeg);
                        "></div>
                                </td>

                                <td class="product-name">
                                    <h3>Tên hoa</h3>
                                </td>

                                <td class="price">149.000</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100" />
                                    </div>
                                </td>

                                <td class="total">149.000</td>
                            </tr>
                            <!-- END TR-->

                            <tr class="text-center">
                                <td class="product-remove">
                                    <a href="#"><span class="ion-ios-close"></span></a>
                                </td>

                                <td class="image-prod">
                                    <div class="img" style="
                          background-image: url(images/products/hoa-10.jpeg);
                        "></div>
                                </td>

                                <td class="product-name">
                                    <h3>Tên Hoa</h3>
                                </td>

                                <td class="price">149.000</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100" />
                                    </div>
                                </td>

                                <td class="total">149.000</td>
                            </tr>
                            <!-- END TR-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Mã giảm giá</h3>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Nhập mã giảm giá vào đây</label>
                            <input type="text" class="form-control text-left px-3" placeholder="" />
                        </div>
                    </form>
                </div>
                <p><a href="#" class="btn btn-primary py-3 px-4">Áp dụng</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Xác nhận</h3>
                    <p class="d-flex">
                        <span>Tạm tính</span>
                        <span>200.000</span>
                    </p>
                    <p class="d-flex">
                        <span>Phí vận chuyển</span>
                        <span>0</span>
                    </p>
                    <p class="d-flex">
                        <span>Giảm giá</span>
                        <span>10.000</span>
                    </p>
                    <hr />
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        <span>190.000</span>
                    </p>
                </div>
                <p>
                    <a href="checkout.html" class="btn btn-primary py-3 px-4">Tiến hành thanh toán</a>
                </p>
            </div>
        </div>
    </div>
</section>