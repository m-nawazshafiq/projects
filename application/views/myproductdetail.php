<!DOCTYPE html>
<html lang="en">
<?php require("myHead.php"); ?>

<body>

    <?php require("myHeader.php"); ?>




    <!--Product Detail section-->

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6 product-images">
                        <section class="sli-for-pro-detail slider-for">
                            <?php
                            //echo print_r($product_detail);die();
                            $pics = json_decode($product_detail[0]['Picture']);
                            if ($pics) {
                                for ($x = 0; $x < count($pics); $x++) {
                                    ?>
                                    <div>
                                        <div class="product-images-bg">
                                            <img src="<?php echo base_url() . 'upload/' . $pics[$x]; ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                            <?php }
                            }else{
                                echo '<h4>No Pictures</h4>';
                            } ?>
                        </section>
                        <?php $pics = json_decode($product_detail[0]['Picture']);
                        if ($pics) {
                            $picsCount = count($pics);
                            if ($picsCount > 1) {
                                ?>
                                <section class="sli-pro-detail slider">
                                    <?php
                                            for ($x = 0; $x < $picsCount; $x++) {
                                                ?>
                                        <div>
                                            <img src="<?php echo base_url() . 'upload/' . $pics[$x]; ?>" class="img-fluid" alt="">
                                        </div>
                                    <?php } ?>

                                </section>
                        <?php }
                        } ?>
                    </div>
                    <div class="col-md-6">
                        <div class="ratting-wrapper">
                            <h1><?php echo $product_detail[0]['Name']; ?></h1>
                            <span>
                                <?php if (!isset($rating)) { ?>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <?php } else {
                                        for ($x = 0; $x < $rating; $x++) { ?>
                                        <i class="fa fa-star"></i>
                                        <?php }
                                            if ($rating < 5) {
                                                $count = 5 - $rating;
                                                for ($x = 0; $x < $count; $x++) {
                                                    ?>
                                            <i class="fa fa-star-o"></i>
                                <?php }
                                    }
                                } ?>
                            </span>
                            <a href="#"><?php echo count($review); ?> Reviews</a><span> / </span><a href="#">Write a review</a>
                        </div>
                        <ul class="unstyle product-detail-ul">
                            <li><span>Brands </span><a href="#"><?php echo $product_brand[0]['Name'] ?></a></li>
                            <li><span>Product Code: </span><?php echo $product_detail[0]['Code'] ?></li>
                            <li><span>Reward Points: </span>200</li>
                            <li><span>Availability: </span>In Stock</li>
                        </ul>
                        <ul class="unstyle product-detail-ul">
                            <li class="d-inline-block"><del><?php echo '$' . $product_detail[0]['OldPrice'] ?></del></li>
                            <li class="d-inline-block price"><span><?php echo '$' . $product_detail[0]['Price'] ?></span></li>
                            <li><span>Ex Tax: </span>$80.00</li>
                        </ul>
                        <h4>Available Options</h4>
                        <form action="#">
                            <div class="form-group">
                                <label for="">Select</label>
                                <select name="options" class="form-control options">
                                    <option value="">-------- Please Select --------</option>
                                    <option value="">Blue</option>
                                    <option value="">Red</option>
                                </select>
                                <label for="">Qty</label>
                                <input type="text" size="2" class="qty-number" />
                                <button class="btn btn-default add-cart-btn">Add to Cart</button>
                                <div class="detail-icons"><a href="#"> <i class="fa fa-heart-o"></i> </a></div>
                                <div class="detail-icons"><a href="#"> <i class="fa fa-exchange"></i> </a></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 product-detail-tab">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item pro-det-li-m">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">DESCRIPTION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">REVIEWS</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 tabs">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <?php echo $product_detail[0]['LongDescription'] ?>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 related-products">
                        <h3 class="rel-pro-title">
                            <span class="duck-bg">
                                <span></span>
                            </span>
                            Related Products
                        </h3>
                        <section class="related-products-slide slider">
                            <div>
                                <div class="sec-3-products">
                                    <div class="part-1">
                                        <p>Lorem Ipsum is simply</p>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div>
                                    <div class="part-2 d-flex justify-content-center">
                                        <img src="<?php echo base_url(); ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/rating.png" class="img-fluid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sec-3-products">
                                    <div class="part-1">
                                        <p>Lorem Ipsum is simply</p>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div>
                                    <div class="part-2 d-flex justify-content-center">
                                        <img src="<?php echo base_url(); ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/rating.png" class="img-fluid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sec-3-products">
                                    <div class="part-1">
                                        <p>Lorem Ipsum is simply</p>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div>
                                    <div class="part-2 d-flex justify-content-center">
                                        <img src="<?php echo base_url(); ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/rating.png" class="img-fluid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="sec-3-products">
                                    <div class="part-1">
                                        <p>Lorem Ipsum is simply</p>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </div>
                                    <div class="part-2 d-flex justify-content-center">
                                        <img src="<?php echo base_url(); ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php echo base_url(); ?>images/myImages/rating.png" class="img-fluid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside>
                    <div class="product-detail-aside">
                        <h3>CATEGORIES</h3>
                        <ul>
                            <li><a href="#">Kids (19)</a></li>
                            <li><a href="#">Tablets (4)</a></li>
                            <li><a href="#">Desktops (18)</a></li>
                            <li><a href="#">Teddys (10)</a></li>
                            <li><a href="#">Toys (6)</a></li>
                            <li><a href="#">Collection (0)</a></li>
                        </ul>
                    </div>
                    <div class="product-detail-aside">
                        <h3>BESTSELLERS</h3>
                        <ul>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>images/myImages/aside-pro-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-6 aside-pro-desc">
                                        <span><a href="#">IPod Classic</a></span>
                                        <p><b>$74.00 </b><del>$122.00</del></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>images/myImages/aside-pro-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-6 aside-pro-desc">
                                        <span><a href="#">IPod Classic</a></span>
                                        <p><b>$74.00 </b><del>$122.00</del></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>images/myImages/aside-pro-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-6 aside-pro-desc">
                                        <span><a href="#">IPod Classic</a></span>
                                        <p><b>$74.00 </b><del>$122.00</del></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="aside-img-shop-now d-flex justify-content-center">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>images/myImages/aside-img-shop-now.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="product-detail-aside">
                        <h3>BESTSELLERS</h3>
                        <ul>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>images/myImages/aside-pro-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-6 aside-pro-desc">
                                        <span><a href="#">IPod Classic</a></span>
                                        <p><b>$74.00 </b><del>$122.00</del></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>images/myImages/aside-pro-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-6 aside-pro-desc">
                                        <span><a href="#">IPod Classic</a></span>
                                        <p><b>$74.00 </b><del>$122.00</del></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>images/myImages/aside-pro-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-6 aside-pro-desc">
                                        <span><a href="#">IPod Classic</a></span>
                                        <p><b>$74.00 </b><del>$122.00</del></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <!--Product Detail section ends-->



    <!--Subscribe Section-->
    <div class="container-fluid subscribe-sec">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <form action="#" style="width: 100%;">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>images/myImages/envelope.png" class="img-fluid envelope-img"><span class="news">NEWSLETTER</span>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" placeholder="YOUR EMAIL ADDRESS" class="subs-input" />
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" class="btn subs-btn" value="SUBSCRIBE" />
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-4">
                    <div style="position: relative">
                        <img src="<?php echo base_url(); ?>images/myImages/kids.png" class="img-fluid">
                        <div class="social-icons">
                            <img src="<?php echo base_url(); ?>images/myImages/fb.png" class="img-fluid">
                            <img src="<?php echo base_url(); ?>images/myImages/insta.png" class="img-fluid">
                            <img src="<?php echo base_url(); ?>images/myImages/skype.png" class="img-fluid">
                            <img src="<?php echo base_url(); ?>images/myImages/twitter.png" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <!--Subscribe Section ends-->

    <?php require("myFooter.php"); ?>

</body>

</html>