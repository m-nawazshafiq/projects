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
            <h1>Profile</h1>
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

                <div class="cust-pages-container mt-5">
                    <h2>MY PROFILE</h2>
                    <p class="mb-0 mt-3 letter-space-3">
                        Hello
                        <span class="text-uppercase">
                            <?php echo $customer[0]['firstName'] . " " . $customer[0]['lastName'] . "!"; ?>
                        </span>
                    </p>
                    <p class="profile-p">
                        From your account dashboard you the ability to view a snapshot of
                        recent account activity and update your account account.
                        Select a link below to view or edit account
                    </p>
                    <h2>Account Information</h2>

                    <div class="row">
                        <div class="col-md-6 cust-cont-info-cont">
                            <div class="mt-2 cust-border cust-cont-info-link">
                                Contact Information <a href="<?php echo base_url() . "User/editPersonalInfo"; ?>" class="color-purple">edit</a>
                            </div>
                            <div class="ml-4 mt-3">
                                <span>
                                    <span class="text-uppercase">
                                        <?php echo $customer[0]['firstName'] . " " . $customer[0]['lastName']; ?>
                                    </span><br />
                                    <?php echo $customer[0]['EmailAddress']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 cust-cont-info-cont">
                            <div class="mt-2 cust-border cust-cont-info-link">
                                Newsletter <a href="<?php echo base_url() . "User/editNewsletter"; ?>" class="color-purple">edit</a>
                            </div>
                            <div class="ml-4 mt-3">
                                <span>
                                    You are currently not subscribed to any newsletters.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mt-3">
                                <h2 class="d-inline-block">Address Book</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php if (count($billingdetail) > 0) { ?>
                            <div class="col-md-6">
                                <div class="mt-2 cust-border profile-dashboard">
                                    <p>Default Billing Address</p>
                                    <p><?php echo $billingdetail[0]["address1"]; ?></p>
                                    <a href="<?php echo base_url() . "User/address/editbilling"; ?>" class="color-purple">edit</a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-6">
                                <div class="mt-2 cust-border profile-dashboard">
                                    <p>Default Billing Address</p>
                                    <p>You have not set a default billing address.</p>
                                    <a href="<?php echo base_url() . "User/address/addbilling"; ?>" class="color-purple">Manage Address</a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if (count($shippingdetail) > 0) { ?>
                            <div class="col-md-6">
                                <div class="mt-2 cust-border profile-dashboard">
                                    <p>Default Shipping Address</p>
                                    <p><?php echo $shippingdetail[0]["address1"]; ?></p>
                                    <a href="<?php echo base_url() . "User/address/editshipping"; ?>" class="color-purple">edit</a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-6">
                                <div class="mt-2 cust-border profile-dashboard">
                                    <p>Default Shipping Address</p>
                                    <p>You have not set a default shipping address.</p>
                                    <a href="<?php echo base_url() . "User/address/addshipping"; ?>" class="color-purple">Manage Address</a>
                                </div>
                            </div>
                        <?php } ?>

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