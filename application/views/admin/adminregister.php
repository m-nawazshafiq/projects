<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel - Register Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
    <style>
        #error {
            color: red;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#email').blur(function() {
                var dataToSend = {
                    'email': $(this).val()
                };
                var ajaxObj = {
                    type: 'POST',
                    datatype: 'json',
                    url: '<?php echo base_url() ?>register/checkEmail',
                    data: dataToSend,
                    success: function(r) {
                        var bool = JSON.parse(r);
                        if (bool == true) {
                            $("#userName").attr("disabled", "disabled");
                            $("#pwd").attr("disabled", "disabled");
                            $("#signup").attr("disabled", "disabled");
                            $("#error").text("Email Already Exist!");
                        } else {
                            $("#userName").removeAttr("disabled");
                            $("#pwd").removeAttr("disabled");
                            $("#signup").removeAttr("disabled");
                            $("#error").text("");
                        }
                    },
                    onerror: function() {
                        console.log("Falied");
                    }
                }
                console.log(ajaxObj);
                $.ajax(ajaxObj);
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div>
            <h1>Admin Sign Up</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">

            </div>
            <?php echo form_open_multipart('register/signup'); ?>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <span id="error"></span>
                    <?php
                    echo form_error('email');
                    ?>
                </div>
                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="text" class="form-control" id="userName" name="userName" value="<?php echo set_value('userName'); ?>">
                    <?php
                    echo form_error('userName');
                    ?>
                </div>
                <div class=" form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                    <?php
                    echo form_error('pwd');
                    ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="passconf" name="passconf">
                    <?php
                    echo form_error('passconf');
                    ?>
                </div>
                <br>
                <div class=" form-group">
                    <div class="col-md-9">
                        <button class="btn btn-success" name="signup" id="signup">Sign Up</button>
                    </div>
                    <a href="<?php base_url(); ?>login">Go to Login Page</a>
                </div>


            </div>
        </div>
    </div>
</body>

</html>