<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel - Login Admin</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>css/admincss/bootstrap.min.css" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>css/admincss/style.css" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/switchery/switchery.min.css" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>css/admincss/demo/jasmine.css" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.js"></script>
</head>

<body>
    <div class="container">
        <div>
            <h1>Admin Login</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">

            </div>
            <?php echo form_open_multipart('register/login'); ?>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <?php
                    echo form_error('email');
                    ?>
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                    <?php
                    echo form_error('pwd');
                    ?>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <button class="btn btn-success" name="signup">Login</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>

</html>