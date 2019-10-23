<?php
if (!isset($_SESSION['email'])) {

    redirect(base_url() . 'User/signup');
}
?>


<!DOCTYPE html>
<html lang="en">
<?php require(dirname(__DIR__) . "/myHead.php"); ?>

<body>

    <?php require(dirname(__DIR__) . "/myHeader.php"); ?>

    <div class="login-bg">
        <div class="login-color-bg">
            <h1>Newsletters</h1>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">

                <div class="user-aside-con">
                    <ul class="user-aside">
                        <li><a href="<?php echo base_url() . "User/profile"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Account Information</a></li>
                        <li><a href="<?php echo base_url() . "User/order"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Orders</a></li>
                        <li><a href="<?php echo base_url() . "User/wishlist"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Wishlist</a></li>
                        <li><a href="<?php echo base_url() . "User/newsletter"; ?>" class="color-purple"><i class="fa fa-caret-right color-purple" aria-hidden="true"></i> My Newsletter</a></li>
                        <li><a href="<?php echo base_url() . "User/changepassword"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Change Password</a></li>
                        <li><a href="<?php echo base_url() . "User/logout"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-9">
                <?php echo form_open("User/newsletter"); ?>
                <div class="cust-pages-container details-page mt-5">
                    <h2 class="mb-3">Newsletter Subscription</h2>
                    <span class="mr-3">Subscribe</span>
                    <div class="pretty p-default p-round p-thick p-pulse">
                        <input type="radio" value="1" name="newsletterSubs" id="card-pay" />
                        <div class="state p-primary-o">
                            <label>
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="pretty p-default p-round p-thick p-pulse">
                        <input type="radio" value="0" name="newsletterSubs" id="card-pay" />
                        <div class="state p-primary-o">
                            <label>
                                No
                            </label>
                        </div>
                    </div>
                    <?php if (form_error('newsletterSubs')) { ?>
                        <label class="alert alert-danger error-msg" style="margin-top:0px; float: none;"><?php echo form_error('newsletterSubs'); ?></label>
                    <?php } ?>
                    <div class="mt-4"><input type="submit" value="Continue" class="btn register-btn" /></div>
                </div>
                </form>
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