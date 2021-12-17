<?php
$topics = json_decode($data['topics']);
$products = json_decode($data['products']);

?>
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/bg-1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">
                            Chúng tôi chuyên cung cấp các loại hoa tươi &amp; sạch
                        </h1>
                        <h2 class="subheading mb-4">Cam kết sản phẩm chất lượng</h2>
                        <p><a href="<?php echo $appRootURL ?>/home/shop" class="btn btn-primary">Đặt mua ngay</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/bg-2.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Miễn Phí giao hàng</h1>
                        <p><a href="<?php echo $appRootURL ?>/home/shop" class="btn btn-primary">Đặt mua ngay</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="
                  icon
                  bg-color-1
                  active
                  d-flex
                  justify-content-center
                  align-items-center
                  mb-2
                ">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Giao hàng miễn phí</h3>
                        <span>Trên tất cả đơn hàng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="
                  icon
                  bg-color-2
                  d-flex
                  justify-content-center
                  align-items-center
                  mb-2
                ">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Cam kết hoa tươi</h3>
                        <span>Sản phẩm luôn được nhập mới</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="
                  icon
                  bg-color-3
                  d-flex
                  justify-content-center
                  align-items-center
                  mb-2
                ">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Chất lượng hoàn hảo</h3>
                        <span>Sản phẩm chất lượng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="
                  icon
                  bg-color-4
                  d-flex
                  justify-content-center
                  align-items-center
                  mb-2
                ">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Nhân viên tư vấn nhiệt tình</h3>
                        <span>Hỗ trợ 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/products/hoa-5.jpg)">
                            <div class="text text-center">
                                <h2>Hoa Tươi</h2>
                                <p>Sản phẩm nổi bật</p>
                                <p><a href="<?php echo $appRootURL ?>/home/shop" class="btn btn-primary">Mua hoa ngay</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex  align-items-end " style="background-image: url(<?php echo $topics[0]->{'thumbnail'} ?>)">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="<?php echo $appRootURL ?>/home/shop/<?php echo $topics[0]->{'id'} ?>"><?php echo $topics[0]->{'name'} ?></a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?php echo $topics[1]->{'thumbnail'} ?>)">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="<?php echo $appRootURL ?>/home/shop/<?php echo $topics[1]->{'id'} ?>"><?php echo $topics[1]->{'name'} ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(<?php echo $topics[2]->{'thumbnail'} ?>)">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="<?php echo $appRootURL ?>/home/shop/<?php echo $topics[2]->{'id'} ?>"><?php echo $topics[2]->{'name'} ?></a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(<?php echo $topics[3]->{'thumbnail'} ?>)">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="<?php echo $appRootURL ?>/home/shop/<?php echo $topics[3]->{'id'} ?>"><?php echo $topics[3]->{'name'} ?></a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">TGU Flowers Shop</span>
                <h2 class="mb-4">Top Hoa Nổi Bật Nhất</h2>
                <p>
                    Chúng tôi cam kết hoa luôn tươi mới. Sản phẩm khi giao đẹp hơn
                    ảnh.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $row) { ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="product.html" class="img-prod"><img class="img-fluid" src="<?php echo $row->{'thumbnail'} ?>" alt="" />
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#"><?php echo $row->{'name'} ?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <!-- <span class="mr-2 price-dc">659.000</span> -->
                                    <span class="price-sale"><?php echo number_format($row->{'number_flowers'} * $row->{'unit_price'}, 0, ',', '.'); ?></span> / <?php echo $row->{'number_flowers'} ?> hoa
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="<?php echo $appRootURL ?>/home/addcart/<?php echo $row->{'id'} ?>/<?php echo $row->{'number_flowers'} * $row->{'unit_price'} ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="ftco-section img" style="background-image: url(<?php echo $appRootURL ?>/public/home/images/bg-3.jpg)">
    <div class="container">
        <div class="row justify-content-end">
            <div class="
              col-md-6
              heading-section
              ftco-animate
              deal-of-the-day
              ftco-animate
            ">
                <span class="subheading">Giá tốt cho bạn</span>
                <h2 class="mb-4">Ưu đãi mùa Giáng Sinh</h2>
                <p>TGU Flowers Shop tri ân quý khách hàng nhân dịp lễ Giáng Sinh</p>
                <h3><a href="#">Giảm giá</a></h3>
                <span class="price">0% cho tất cả sản phẩm</span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>