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
            <h1>Change Password</h1>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-5">

                <div class="user-aside-con">
                    <ul class="user-aside">
                        <li><a href="<?php echo base_url() . "User/profile"; ?>" class="color-purple"><i class="fa fa-caret-right color-purple" aria-hidden="true"></i> Account Information</a></li>
                        <li><a href="<?php echo base_url() . "User/order"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Orders</a></li>
                        <li><a href="<?php echo base_url() . "User/wishlist"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Wishlist</a></li>
                        <li><a href="<?php echo base_url() . "User/newsletter"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> My Newsletter</a></li>
                        <li><a href="<?php echo base_url() . "User/changepassword"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Change Password</a></li>
                        <li><a href="<?php echo base_url() . "User/logout"; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">

                <div class="cust-pages-container details-page mt-5">

                    <div class="col-md-10 offset-md-1">
                        <h2>CHANGE PASSWORD</h2>
                        <div class="login-sec mt-2 p-0 border-0">
                            <?php echo form_open("User/changePassword");?>
                            <?php if (form_error('currentPassword')) { ?>
                                <label class="alert alert-danger error-msg mb-2"><?php echo form_error('currentPassword'); ?></label>
                            <?php } ?>

                            <?php if (isset($_SESSION['error'])) { ?>
                                <label class="alert alert-danger error-msg mb-2"><?php echo $_SESSION['error']; ?></label>
                            <?php } ?>
                            <input type="password" value="<?php echo set_value('currentPassword'); ?>" placeholder="Current password" class="form-control mb-3" name="currentPassword">

                            <?php if (form_error('newPassword')) { ?>
                                <label class="alert alert-danger error-msg mb-2"><?php echo form_error('newPassword'); ?></label>
                            <?php } ?>
                            <input type="password" value="<?php echo set_value('newPassword'); ?>" placeholder="New password" class="form-control mb-3" name="newPassword">

                            <?php if (form_error('confirmPassword')) { ?>
                                <label class="alert alert-danger error-msg mb-2"><?php echo form_error('confirmPassword'); ?></label>
                            <?php } ?>
                            <input type="password" value="<?php echo set_value('confirmPassword'); ?>" placeholder="Confirm password" class="form-control mb-3" name="confirmPassword">


                            <input type="submit" value="Continue" class="btn register-btn shopping-cart-btn">
                            <!--<div class="float-right pointer btn cust-border">Back</div>-->
                            </form>
                        </div>
                    </div>

                </div>

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