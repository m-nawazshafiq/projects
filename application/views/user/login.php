<!DOCTYPE html>
<html lang="en">
<?php require(dirname(__DIR__ )."/myHead.php"); ?>

<body>

    <?php require(dirname(__DIR__ )."/myHeader.php"); ?>


    <div class="login-bg">
        <div class="login-color-bg">
            <h1>LOG IN</h1>
        </div>
    </div>


    <?php echo form_open('User/login'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 mb-5">

                    <div class="login-sec">
                        <div class="row no-gutters">

                            <div class="col-md-6">
                                <div class="log-fb-btn">
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        <span> Facebook</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="log-google-btn">
                                    <a href="#" class="d-flex align-items-center">
                                        <img src="<?php echo base_url().'images/myImages/google-icon.png';?>" class="img-fluid" alt="">
                                        <span> Sign In With Google</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-5 login-or-opt"><span>OR</span></div>

                        <label>Email</label>
                        <?php if(form_error('email')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('email');?></label>
                        <?php }?>

                        <!--db validation error msg-->
                        <?php if(isset($_SESSION['fail'])){ ?>
                            <label class="alert alert-danger error-msg"><?php echo $_SESSION['fail'];?></label>
                        <?php }?>

                        <input type="email" placeholder="Enter Your Email Address" value="<?php if(!isset($_SESSION['fail'])) {echo set_value('email');} else{ echo $_SESSION['dbError'];}?>" class="form-control" name="email" id="">
                        
                        <label>Password</label>
                        <?php if(form_error('pass')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('pass');?></label>
                        <?php }?>

                        <input type="password" placeholder="Your Password" class="form-control" name="pass" id="">
                        <div class="login-join">
                            <div class="pretty p-default">
                                <input type="checkbox" name="rememberme" />
                                <div class="state">
                                    <label>Remember Me</label>
                                </div>
                            </div> <a href="#" class="for-pass">Forgot Password?</a>
                        </div>
                        <input type="submit" class="btn login-btn" value="LOG IN" name="" id="">
                        <div class="signup-for"><a href="#">Sign Up For An Account.</a></div>
                    </div>


                </div>
            </div>
        </div>
    </form>


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

    <?php require(dirname(__DIR__ )."/myFooter.php"); ?>

</body>

</html>