<!DOCTYPE html>
<html lang="en">
<?php require("myHead.php"); ?>

<body>

    <?php require("myHeader.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="compare-cont">
                    <div class="table-responsive price-table compare-table">
                        <table class="roundedCorners">

                            <tr>
                                <th>Product</th>
                                <td>ok</td>
                                <td>ok</td>
                                <td>ok</td>
                                <td>ok</td>
                            </tr>

                            <tr>
                                <th>Image</th>
                                <td>img</td>
                                <td>img</td>
                                <td>img</td>
                                <td>img</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>canon</td>
                                <td>canon</td>
                                <td>canon</td>
                                <td>canon</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>70</td>
                                <td>70</td>
                                <td>70</td>
                                <td>70</td>
                            </tr>

                            <tr>
                                <th>Availability</th>
                                <td>instock</td>
                                <td>instock</td>
                                <td>instock</td>
                                <td>instock</td>
                            </tr>
                            <tr>
                                <th style="border-bottom: 0px;">Rating</th>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>

                        </table>
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