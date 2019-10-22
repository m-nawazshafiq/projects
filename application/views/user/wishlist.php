<?php
if (!isset($_SESSION['email'])) {

    redirect(base_url() . 'Customer/signup');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require(dirname(__DIR__) . "/myHead.php"); ?>

<body>

    <?php require(dirname(__DIR__) . "/myHeader.php"); ?>

    <div class="login-bg">
        <div class="login-color-bg">
            <h1>My Wishlist</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">

                <div class="user-aside-con">
                    <ul class="user-aside">
                        <li><a href="<?php echo base_url() . "User/profile"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Account Information</a></li>
                        <li><a href="<?php echo base_url() . "User/order"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Orders</a></li>
                        <li><a href="<?php echo base_url() . "User/wishlist"; ?>" class="color-purple"><i class="fa fa-caret-right color-purple" aria-hidden="true"></i> My Wishlist</a></li>
                        <li><a href="<?php echo base_url() . "User/newsletter"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Newsletter</a></li>
                        <li><a href="<?php echo base_url() . "User/changepassword"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Change Password</a></li>
                        <li><a href="<?php echo base_url() . "User/logout"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-9">
                <?php if (count($userWishlist) > 0) { ?>
                    <div class="whishlist-page mt-5">
                        <div class="table-responsive price-table">
                            <table class="roundedCorners">
                                <thead>
                                    <tr>
                                        <th>IMAGE</th>
                                        <th>PRODUCT NAME</th>
                                        <th>STOCK</th>
                                        <th>UNIT PRICE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($userWishlist as $wishlist) { ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="table-img">
                                                        <?php $pics = json_decode($wishlist->Picture); ?>
                                                        <img src="<?php echo base_url() . "upload/" . $pics[1]; ?>" width="60" height="60" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $wishlist->Name; ?></td>
                                            <td><?php if ($wishlist->stock > 0) {
                                                            echo "In Stock";
                                                        } else {
                                                            echo "Out of Stock";
                                                        } ?></td>
                                            <td><?php echo "$" . sprintf("%.2f", $wishlist->Price); ?> <strike><?php echo "$" . sprintf("%.2f", $wishlist->OldPrice); ?></strike></td>
                                            <td>
                                                <span class="whishlist-cart"><i class="fa fa-shopping-cart"></i></span>
                                                <span class="whishlist-del"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                <?php } else { ?>
                    <div class="cust-pages-container mt-5">
                        <h2>No product added to wishlist!</h2>
                    </div>
                <?php } ?>
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

    <?php require(dirname(__DIR__) . "/myFooter.php"); ?>

</body>

</html>