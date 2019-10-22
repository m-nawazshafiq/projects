adminName<?php
if (!isset($_SESSION['adminName'])) {
    //die(print_r($_SESSION));
    redirect(base_url() . 'register/login');
}
//print_r($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blank Page | SmartAdmin - Responsive admin template..</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <style>
        .error {
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
                    url: '<?php echo base_url() ?>customer/checkEmail',
                    data: dataToSend,
                    success: function(r) {
                        var bool = JSON.parse(r);
                        if (bool == true) {
                            $("#username").attr("disabled", "disabled");
                            $("#password2").attr("disabled", "disabled");
                            $("#confirm-password").attr("disabled", "disabled");
                            $("#save").attr("disabled", "disabled");
                            $("#error").text("Email Already Exist!");
                        } else {
                            $("#username").removeAttr("disabled");
                            $("#password2").removeAttr("disabled");
                            $("#confirm-password").removeAttr("disabled");
                            $("#save").removeAttr("disabled");
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

    <div id="container" class="effect mainnav-full">
        <!--NAVBAR-->
        <!--===================================================-->
        <?php require("adminheader.php"); ?>
        <!--===================================================-->
        <!--END NAVBAR-->
        <?php echo form_open_multipart('Customer/SaveCustomer'); ?>
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            div id="content-container">
            <div id="profilebody">
                <div class="pad-all animated fadeInDown">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Users</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Inbox</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">FAQ</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Settings</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Calender</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                            <div class="panel panel-default mar-no">
                                <div class="panel-body">
                                    <a href="JavaScript:void(0);">
                                        <div class="pull-left">
                                            <p class="profile-title text-bricky">Pictures</p>
                                        </div>
                                        <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->

            <!--===================================================-->
            <!--End page content-->
        </div>
        <br><br><br><br><br>

        <div class="content-header clearfix">
            <h1 class="pull-left">
                Add a new Specification

                <small>
                    <i class="fa fa-arrow-circle-left"></i>
                    <a id="save" href="<?php base_url(); ?>/Customer/AllCustomers">Back to Specification List</a>
                </small>
            </h1>
            <div class="pull-right">
                <button type="submit" name="save" class="btn bg-blue">
                    <i class="fa fa-floppy-o"></i>
                    Save

                </button>
                <button type="submit" name="save-continue" class="btn bg-blue">
                    <i class="fa fa-floppy-o"></i>
                    Save and Continue Edit

                </button>
            </div>
        </div>
        <div class="product-page-price-info-details">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-12 col-xs-12">

                        <div class="Product-info-title">
                            <div class="product-info-icon">
                                <i class="fa fa-info "></i> <span class="product-info-text">Specification</span>
                            </div>
                            <div class="product-info-tab-icon">
                                <i class="toggle-icon fa fa-minus"></i>
                            </div>
                        </div>
                        <!-- add-products-info-details -->
                        <!-- price -->
                        <div class="col-md-12">
                            <div class="form-horizontal">

                                <!-- Published -->
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Customer Name</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="username" name="username" type="text" value="<?php echo set_value('username'); ?>">
                                        <span class="error"><?php
                                                            echo form_error('username');
                                                            ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Email</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="email" name="email" type="text" value="<?php echo set_value('email'); ?>">
                                        <span class="error"><?php
                                                            echo form_error('email');
                                                            ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Password</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="password2" name="password2" type="password" value="">
                                        <span class="error"><?php
                                                            echo form_error('password2');
                                                            ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Confirm Password</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="confirm-password" name="confirm-password" type="password" value="">
                                        <span class="error"><?php
                                                            echo form_error('confirm-password');
                                                            ?></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>






















    <!--===================================================-->
    <!--END CONTENT CONTAINER-->


    <!-- FOOTER -->
    <!--===================================================-->
    <?php require("adminfooter.php"); ?>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <?php require("adminbottom.php"); ?>
</body>

</html>