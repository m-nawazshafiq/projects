<!DOCTYPE html>
<html lang="en">
<?php require(dirname(__DIR__ )."/myHead.php"); ?>

<body>

    <?php require(dirname(__DIR__ )."/myHeader.php"); ?>



    <div class="login-bg">
        <div class="login-color-bg">
            <h1>Register</h1>
        </div>
    </div>
    <?php echo form_open('User/signup'); ?>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-5">

                    <div class="login-sec mb-4">
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

                        <div class="d-flex justify-content-center mt-5"><span>OR</span></div>
                        
                        <label>*First Name</label>
                        <?php if(form_error('firstname')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('firstname');?></label>
                        <?php }?>

                        <input type="text" placeholder="Enter Your Name" value="<?php echo set_value('firstname');?>"  class="form-control" name="firstname">

                        <label>*Last Name</label>
                        <?php if(form_error('lastname')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('lastname');?></label>
                        <?php }?>
                        <input type="text" placeholder="Enter Your Last Name" value="<?php echo set_value('lastname');?>" class="form-control" name="lastname">

                        <label>*E-mail</label>
                        <?php if(form_error('email')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('email');?></label>
                        <?php }?>
                        <input type="email" placeholder="Enter Your E-mail" value="<?php echo set_value('email');?>" class="form-control" name="email">

                        <label>Telephone</label>
                        <?php if(form_error('contact')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('contact');?></label>
                        <?php }?>
                        <input type="text" placeholder="Your Number" value="<?php echo set_value('contact');?>" class="form-control" name="contact">

                        <label>*Password</label>
                        <?php if(form_error('pass')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('pass');?></label>
                        <?php }?>
                        <input type="password" placeholder="Enter Your Password" class="form-control" name="pass">

                        <label>*Confirm Password</label>
                        <?php if(form_error('confpass')){ ?>
                            <label class="alert alert-danger error-msg" ><?php echo form_error('confpass');?></label>
                        <?php }?>
                        <input type="password" placeholder="Confirm Password" class="form-control" name="confpass">

                    </div>

                    <span style="margin-left: 60px;">I've Read and Ready to the
                        <b>Privacy Policy</b>
                    </span>
                    <div class="pretty p-default p-thick p-pulse">
                        <input type="checkbox" name="privacy" />
                        <div class="state p-primary-o">
                            <label>
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <input type="submit" value="Register Now" name="register" class="btn register-btn">
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