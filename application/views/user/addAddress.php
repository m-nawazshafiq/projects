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

                    <?php if ($_SESSION['addressType'] == 'addbilling') { ?>
                        
                        <?php echo form_open('User/address/addbilling'); ?>
                        <h2>Add Default Billing Address</h2>
                    <?php } else if ($_SESSION['addressType'] == 'addshipping') { ?>

                        <?php echo form_open('User/address/addshipping'); ?>
                        <h2>Add Default Shipping Address</h2>
                    <?php } ?>

                    <div class="login-sec mt-2 p-0 border-0 select2-cust">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">First Name</label>
                                <?php if (form_error('firstname')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('firstname'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('firstname'); ?>" placeholder="Enter Your First Name" class="form-control" name="firstname" />
                            </div>
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Last Name</label>
                                <?php if (form_error('lastname')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('lastname'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('lastname'); ?>" placeholder="Enter Your Last Name" class="form-control" name="lastname" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Company Name</label>
                                <?php if (form_error('company')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('company'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('company'); ?>" placeholder="Enter Company Name" class="form-control" name="company" />
                            </div>

                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Phone</label>
                                <?php if (form_error('contact')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('contact'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('contact'); ?>" placeholder="Enter your phone number" class="form-control" name="contact" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Address 1</label>
                                <?php if (form_error('address1')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('address1'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('address1'); ?>" placeholder="Enter your address 1" class="form-control" name="address1" />
                            </div>
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Address 2</label>
                                <?php if (form_error('address2')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('address2'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('address2'); ?>" placeholder="Enter your address 2" class="form-control" name="address2" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">City Name</label>
                                <?php if (form_error('city')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('city'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('city'); ?>" placeholder="Enter your city" class="form-control" name="city" />
                            </div>
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Country</label>
                                <?php if (form_error('country')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('country'); ?></label>
                                <?php } ?>
                                <select name="country" style="width: 100%;" id="country" class="shipping-country-box">
                                    <option value="">Select Country</option>
                                    <?php for ($x = 0; $x < count($countries); $x++) {
                                        echo "<option value=" . $countries[$x]["id"] . ">" . $countries[$x]["name"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Postcode / ZIP</label>
                                <?php if (form_error('postcode')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('postcode'); ?></label>
                                <?php } ?>
                                <input type="text" value="<?php echo set_value('postcode'); ?>" placeholder="Enter your postcode" class="form-control" name="postcode" />
                            </div>
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Region / State</label>
                                <?php if (form_error('region')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('region'); ?></label>
                                <?php } ?>
                                <select name="region" style="width: 100%;" id="state" class="shipping-country-box">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="mt-3 color-purple">Email</label>
                                <?php if (form_error('email')) { ?>
                                    <label class="alert alert-danger error-msg"><?php echo form_error('email'); ?></label>
                                <?php } ?>
                                <input type="email" value="<?php echo set_value('email'); ?>" placeholder="Enter your email" class="form-control" name="email" />
                            </div>
                        </div>

                        <div class="billing-btn">
                            <div class="mt-4">
                                <input type="submit" value="Continue" class="btn register-btn" />
                            </div>
                        </div>
                    </div>
                    </form>
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

    <script>
        $(function() {
            $("#country").on("change", function(event) {
                var id = this.value;

                $.ajax({
                    url: "<?php echo base_url(); ?>" + "User/getStates",
                    type: 'post',
                    data: {
                        countryID: id
                    },
                    dataType: 'json',
                    success: function(json) {

                        var options = '';
                        options += '<option value="">Select State</option>';
                        for (var i = 0; i < json.length; i++) {
                            options += '<option value="' + json[i].id + '">' + json[i].name + '</option>';
                        }
                        jQuery("select#state").html(options);

                    },
                    error: function() {
                        alert("Invalide!");
                    }
                });
            });
        });
    </script>

</body>

</html>