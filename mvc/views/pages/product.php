<?php
$product = $data['product'];
$comments = json_decode($data['comments']);
$quantity = json_decode($data['quantity']);
$otherProds = json_decode($data['otherProds']);
$accounts = json_decode($data['accounts']);
?>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="<?php echo $product->{'thumbnail'} ?>" class="image-popup"><img src="<?php echo $product->{'thumbnail'} ?>" class="img-fluid" alt=""></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?php echo $product->{'name'} ?></h3>
                <div class="rating d-flex">
                    <!-- <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p> -->
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;"><?php echo count($comments) ?> <span style="color: #bbb;">Đánh
                                giá</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;"><?php echo $quantity ?> <span style="color: #bbb;">Đã
                                bán</span></a>
                    </p>
                </div>
                <p class="price"><span><?php echo number_format($product->{'number_flowers'} * $product->{'unit_price'}, 0, ',', '.') ?></span></p>
                <p><?php echo $product->{'mean'} ?></p>
                <p class="text-i">
                    * Do mỗi sản phẩm đều được làm thủ công nên sẽ có chút khác biệt so với hình ảnh sẵn có trên
                    website.
                </p>
                <div class="row mt-4">
                    <div class="input-group col-md-6 d-flex mb-3">
                        <form action="<?php echo $appRootURL ?>/home/updatecartdetail/<?php echo $product->{'id'} ?>/<?php echo $product->{'number_flowers'} * $product->{'unit_price'} ?>" method="post">
                            <input type="number" name="quantity" class="form-control input-number" value="1" min=0 max="100">
                            <button type="submit" style="cursor:pointer;padding:5px;margin-top:10px;width: 250px;">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
                <p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-degree-bg" style="padding: 0;">
    <div class="container">
        <div class="row">
            <div class="pt-5 mt-5">
                <h5 class="mb-5"><?php echo count($comments) ?> Đánh giá</h5>
                <ul class="comment-list">
                    <?php foreach ($comments as $row) { ?>
                    <li class="comment">
                        <div class="vcard bio">
                            <img src="<?php echo $appRootURL ?>/public/home/images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                            <h6>
                                <?php 
                                foreach ($accounts as $account) {
                                    if ($row->{'id_account'} == $account->{'id'}) {
                                        echo $account->{'fullname'};
                                    }
                                }
                                ?>
                            </h6>
                            <div class="meta"><?php echo $row->{'time'} ?></div>
                            <p><?php echo $row->{'content'} ?></p>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                <!-- END comment-list -->

                <?php if (isset($_SESSION['account'])) { ?>
                <div class="comment-form-wrap pt-5">
                    <h6 class="mb-0">Viết đánh giá</h6>
                    <form action="<?php echo $appRootURL ?>/home/addcomment/<?php echo $product->{'id'} ?>" class="p-5" method="post">
                        <div class="form-group">
                            <label for="message">Nội dung</label>
                            <textarea name="val-content" id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Đánh giá" class="btn py-3 px-4 btn-primary">
                        </div>

                    </form>
                </div>
                <?php } ?>
            </div>
        </div> <!-- .col-md-8 -->


    </div>
    </div>
</section> <!-- .section -->


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">TGU Flowers Shop</span>
                <h2 class="mb-4">Sản phẩm gợi ý</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($otherProds as $row) { ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="<?php echo $appRootURL ?>/home/product/<?php echo $row->{'id'} ?>" class="img-prod"><img class="img-fluid" src="<?php echo $row->{'thumbnail'} ?>" alt="">
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="<?php echo $appRootURL ?>/home/product/<?php echo $row->{'id'} ?>"><?php echo $row->{'name'} ?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <span class="price-sale">
                                        <?php echo number_format($product->{'number_flowers'} * $product->{'unit_price'}, 0, ',', '.') ?>
                                    </span>
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