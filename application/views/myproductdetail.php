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
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="<?php echo base_url() . 'images/zoom/' . $pics[$x]; ?>">
                                                    <img src="<?php echo base_url() . 'upload/' . $pics[$x]; ?>" class="img-fluid pro-detail-img" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } else {
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
                                <div class="des-cont"><?php echo $product_detail[0]['LongDescription'] ?></div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="container">
                                    <div class="login-sec mt-2 p-0 border-0">
                                        <h3 class="heading-font-fam">Write a review</h3>
                                        <label>*Your Email</label>
                                        <input type="email" id="review-email" placeholder="Enter Your email" class="form-control" name="email">
                                        <label>*Your Review</label>
                                        <textarea name="review" id="review-text" class="form-control shipp-com" cols="30" rows="4"></textarea>
                                        <input type="hidden" id="pro-id" value="<?php echo $product_detail[0]['Id']; ?>" />
                                        <label style="display:block;">*Your Rating</label>

                                        <div class="rating-cont">
                                            <span class="margin-4">Good</span>
                                            <?php for ($x = 1; $x <= 5; $x++) { ?>
                                                <div class="pretty p-icon p-toggle p-plain">
                                                    <input type="radio" name="rating" value="<?php echo $x; ?>" />
                                                    <div class="state p-on">
                                                        <i class="fa fa-star color-purple font-s-20"></i>
                                                        <label></label>
                                                    </div>
                                                    <div class="state p-off">
                                                        <i class="fa fa-star-o color-purple font-s-20"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <span>Excellent</span>
                                            <button type="button" class="btn register-btn float-right" id="rating-submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
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


                            <?php $proCount = 0;
                            foreach ($relatedProduct as $product) {
                                $pic = json_decode($product->Picture);
                                ?>
                                <div>
                                    <div class="sec-3-products">
                                        <div class="part-1">
                                            <a style="text-decoration: none; color: black;" href="<?php echo base_url() . "Product/ProductDetail/" . $product->Id; ?>">
                                                <p id="pro-name<?php echo $proCount; ?>"><?php echo $product->Name ?></p>
                                            </a>
                                            <span>
                                                <?php
                                                    $rating = round($product->rate);
                                                    if (!isset($rating)) { ?>
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
                                        </div>
                                        <a href="<?php echo base_url() . "Product/ProductDetail/" . $product->Id; ?>">
                                            <div class="part-2 d-flex justify-content-center">

                                                <img src="<?php echo base_url() . "upload/" . $pic[0]; ?>" class="img-fluid pro-dis-img">

                                            </div>
                                        </a>
                                        <div class="part-3">
                                            <span><strike><?php echo "$" . $product->OldPrice ?></strike> <?php echo "$" . $product->Price ?></span>
                                            <div class="add-cart"><a href="<?php echo base_url() . "Cart/addCart/" . $product->Id; ?>">Add To Cart</a></div>
                                            <div class="icons-container">
                                                <input type="hidden" value="<?php echo $product->Id ?>" />
                                                <div class="icons" id="<?php if (!isset($_SESSION['email'])) {
                                                                                echo "unregistered" . $proCount;
                                                                            } else {
                                                                                echo "add-whishlist" . $product->Id;
                                                                            } ?>">
                                                    <svg class="pro-icons-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve" width="512px" height="512px">
                                                        <g fill="#979595">
                                                            <path d="M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543  c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503  c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z" data-original="#D75A4A" class="active-path" data-old_color="#D75A4A" />
                                                        </g>
                                                    </svg>
                                                </div>


                                                <div class="icons" id="short-view<?php echo $product->Id ?>" data-toggle="modal" data-target="#exampleModal">
                                                    <svg class="pro-icons-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 511.626 511.626" style="enable-background:new 0 0 511.626 511.626;" xml:space="preserve" class="">
                                                        <g fill="#979595">
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687   c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818   c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68   c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699   C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554   c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704   c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971   c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999   c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04   c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222   c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362   s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362   c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04   z" data-original="#000000" class="active-path" data-old_color="#000000" />
                                                        </g>
                                                    </svg>
                                                </div>


                                                <div class="icons" id="rating-trigger<?php echo $proCount; ?>">
                                                    <svg class="pro-icons-img" version="1.1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="#979595">
                                                            <path class="active-path" d="m77.109 401.66h-21.945c-30.418 0-55.164 24.75-55.164 55.168v40.168c0 8.2852 6.7148 15 15 15h64.691c-1.668-4.6953-2.582-9.7422-2.582-15z" data-old_color="#000000" data-original="#000000" />
                                                            <path class="active-path" d="m184.22 321.33h-21.941c-30.418 0-55.168 24.75-55.168 55.168v120.5c0 8.2852 6.7148 15 15 15h64.691c-1.6641-4.6953-2.582-9.7422-2.582-15z" data-old_color="#000000" data-original="#000000" />
                                                            <path class="active-path" d="m509.05 150.67-107.11-144.6c-2.832-3.8164-7.3008-6.0703-12.055-6.0703-4.7539 0-9.2266 2.2539-12.055 6.0703l-107.11 144.6c-3.3711 4.5508-3.8906 10.617-1.3438 15.676 2.5508 5.0586 7.7305 8.2539 13.398 8.2539h38.555v322.4c0 8.2852 6.7148 15 15 15h107.11c8.2852 0 15-6.7148 15-15v-322.4h38.559c5.6641 0 10.848-3.1953 13.395-8.2539 2.5508-5.0586 2.0312-11.125-1.3398-15.676z" data-old_color="#000000" data-original="#000000" />
                                                            <path class="active-path" d="m291.33 241h-21.945c-30.418 0-55.168 24.746-55.168 55.164v200.84c0 8.2852 6.7188 15 15 15h64.691c-1.6641-4.6953-2.5781-9.7422-2.5781-15z" data-old_color="#000000" data-original="#000000" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $proCount++;
                            } ?>


                            <!--<div>
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
                                        <img src="<?php //echo base_url(); 
                                                    ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/rating.png" class="img-fluid"></div>
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
                                        <img src="<?php //echo base_url(); 
                                                    ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/rating.png" class="img-fluid"></div>
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
                                        <img src="<?php //echo base_url(); 
                                                    ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/rating.png" class="img-fluid"></div>
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
                                        <img src="<?php //echo base_url(); 
                                                    ?>images/myImages/product-img.jpg" class="img-fluid">
                                    </div>
                                    <div class="part-3">
                                        <span><strike>$110.0</strike> $90.0</span>
                                        <p>Add To Cart</p>
                                        <div class="icons-container">
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/filll-heart.png" class="img-fluid">
                                            </div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/eye.png" class="img-fluid"></div>
                                            <div class="icons"><img src="<?php //echo base_url(); 
                                                                            ?>images/myImages/rating.png" class="img-fluid"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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
                            <?php foreach ($bestsellers as $product) {
                                $pic = json_decode($product->Picture); ?>
                                <li>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>upload/<?php echo $pic[0]; ?>" class="aside-pro-pic" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 aside-pro-desc">
                                            <span><a href="#"><?php echo $product->Name; ?></a></span>
                                            <p><b><?php echo "$" . $product->Price; ?> </b><del><?php echo '$' . $product->OldPrice; ?></del></p>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="d-none d-sm-block">
                        <div class="aside-img-shop-now d-flex justify-content-center">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>images/myImages/aside-img-shop-now.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-detail-aside">
                        <h3>LATESTPORDUCTS</h3>
                        <ul>
                            <?php foreach ($latest_products as $product) {
                                $pic = json_decode($product->Picture); ?>
                                <li>
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>upload/<?php echo $pic[0]; ?>" class="aside-pro-pic" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 aside-pro-desc">
                                            <span><a href="#"><?php echo $product->Name; ?></a></span>
                                            <p><b><?php echo "$" . $product->Price; ?> </b><del><?php echo '$' . $product->OldPrice; ?></del></p>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
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

    <!-- Review Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase title-quick-view" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product-images">
                            <div class="product-model-img">
                                <img src="#" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="unstyle product-detail-ul">
                                <li><span>Brands </span><a href="#" class="brand-quick-view">Canon</a></li>
                                <li><span>Product Code:</span>
                                    <p class="d-inline code-quick-view"></p>
                                </li>
                                <li><span>Availability: </span>
                                    <p class="d-inline stock-quick-view"></p>
                                </li>
                            </ul>
                            <ul class="unstyle product-detail-ul">
                                <li class="d-inline-block"><del class="oldprice-quick-view"></del></li>
                                <li class="d-inline-block price"><span class="price-quick-view"></span></li>
                                <li><span>Ex Tax: </span>
                                    <p class="pro-tax"></p>
                                </li>
                            </ul>
                            <form action="#">
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="number" class="qty-number" style="width: 40px;" />
                                    <button class="btn btn-default add-cart-btn">Add to Cart</button>
                                    <div class="detail-icons"><a href="#"> <i class="fa fa-heart-o"></i> </a></div>
                                    <div class="detail-icons"><a href="#"> <i class="fa fa-exchange"></i> </a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require("myFooter.php"); ?>

</body>

</html>