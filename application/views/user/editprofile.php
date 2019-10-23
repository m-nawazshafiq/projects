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

                <div class="cust-pages-container details-page mt-5">
                    <?php if ($viewType == "profile") { ?>
                        <?php echo form_open("User/editPersonalInfo"); ?>
                        <h2>Update Personal Information</h2>
                        <?php echo form_error(); ?>
                        <div class="login-sec mt-2 p-0 border-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3 color-purple">First Name</label>
                                    <?php if (form_error('firstname')) { ?>
                                        <label class="alert alert-danger error-msg"><?php echo form_error('firstname'); ?></label>
                                    <?php } ?>
                                    <input type="text" value="<?php echo $customer["firstName"] ?>" placeholder="Enter your first name" class="form-control" name="firstname">
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3 color-purple">Last Name</label>
                                    <?php if (form_error('lastname')) { ?>
                                        <label class="alert alert-danger error-msg"><?php echo form_error('lastname'); ?></label>
                                    <?php } ?>
                                    <input type="text" value="<?php echo $customer["lastName"] ?>" placeholder="Enter your last name" class="form-control" name="lastname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3 color-purple">Email</label>
                                    <?php if (form_error('email')) { ?>
                                        <label class="alert alert-danger error-msg"><?php echo form_error('email'); ?></label>
                                    <?php } ?>
                                    <input type="email" value="<?php echo $customer["EmailAddress"] ?>" placeholder="Enter your first email address" class="form-control" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3 color-purple">Phone</label>
                                    <?php if (form_error('contact')) { ?>
                                        <label class="alert alert-danger error-msg"><?php echo form_error('contact'); ?></label>
                                    <?php } ?>
                                    <input type="text" value="<?php echo $customer["contact"] ?>" placeholder="Enter your contact number" class="form-control" name="contact">
                                </div>
                            </div>

                            <div class="mt-4">
                                <input type="submit" value="Continue" class="btn register-btn shopping-cart-btn">
                            </div>
                        </div>
                        </form>
                    <?php } else if ($viewType == "addBillingAddress") { ?>
                        <?php echo form_open("User/addBillingAddress/" . $id); ?>
                        <h2>Update Personal Information</h2>
                        <div class="login-sec mt-2 p-0 border-0 select2-cust">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="Enter Your First Name" class="form-control" name="" id="" />

                                </div>
                                <div class="col-lg-6">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="Enter Your Last Name" class="form-control" name="" id="" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Company Name</label>
                                    <input type="text" placeholder="Enter Company Name" class="form-control" name="" id="" />

                                </div>

                                <div class="col-lg-6">
                                    <label for="">Phone</label>
                                    <input type="text" placeholder="Enter your phone number" class="form-control" name="" id="" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Address 1</label>
                                    <input type="text" placeholder="Enter your address 1" class="form-control" name="" id="" />

                                </div>
                                <div class="col-lg-6">
                                    <label for="">Address 2</label>
                                    <input type="text" placeholder="Enter your address 2" class="form-control" name="" id="" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">City Name</label>
                                    <input type="text" placeholder="Enter your city" class="form-control" name="" id="" />

                                </div>
                                <div class="col-lg-6">
                                    <label style="display: block;">Country</label>
                                    <select name="country" style="width: 100%;" class="shipping-country-box">
                                        <option value="">Pakistan</option>
                                        <option value="">China</option>
                                        <option value="">India</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Postcode / ZIP</label>
                                    <input type="text" placeholder="Enter your postcode" class="form-control" name="" id="" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="" style="display: block;">Region / State</label>
                                    <select name="country" style="width: 100%;" class="shipping-country-box">
                                        <option value="">Punjab</option>
                                        <option value="">China</option>
                                        <option value="">India</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Enter your email" class="form-control" name="" id="" />
                                </div>
                            </div>

                            <div class="billing-btn">
                                <div class="mt-4">
                                    <input type="submit" value="Continue" class="btn register-btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" />
                                </div>
                            </div>
                        </div>
                        </form>
                    <?php } ?>
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