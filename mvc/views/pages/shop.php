<?php
$topics = json_decode($data['topics']);
$products = json_decode($data['products']);
?>
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
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Sản Phẩm</h1>
            </div>
        </div>
    </div>
</div>
<?php
$urlArr = explode("/", $_SERVER['REQUEST_URI']);
$topicId = $urlArr[count($urlArr) - 1];
?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="<?php echo $appRootURL ?>/home/shop" class="<?php if ($topicId == "shop") echo "active" ?>">Tất cả</a></li>
                    <?php foreach ($topics as $row) { ?>
                    <li>
                        <a href="<?php echo $appRootURL ?>/home/shop/<?php echo $row->{'id'} ?>" class="<?php if ($topicId == $row->{'id'}) echo "active" ?>">
                            <?php echo $row->{'name'} ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php foreach ($products as $row) { ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $row->{'thumbnail'} ?>" alt="" />
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#"><?php echo $row->{'name'} ?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <!-- <span class="mr-2 price-dc">659.000</span> -->
                                    <span class="price-sale"><?php echo number_format($row->{'number_flowers'} * $row->{'unit_price'}, 0, ',', '.') ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</section>