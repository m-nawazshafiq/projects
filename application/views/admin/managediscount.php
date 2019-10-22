<?php
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

    <link href="<?php echo base_url(); ?>js/adminplugins/bootstrap-datepicker/bootstrap-datetimepicker.css" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</head>

<body>
    <div id="container" class="effect mainnav-full">
        <!--NAVBAR-->
        <!--===================================================-->
        <?php require("adminheader.php"); ?>
        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
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

                <!--===================================================-->
                <!--End page content-->
            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
        </div>



        <!-- Discount-page -->


        <div class="container-fluid">
            <div class="row">
                <div class="content-header clearfix">
                    <h1 class="pull-left">

                        Discounts
                    </h1>
                    <div class="pull-right">
                        <a class="btn bg-blue" href="<?php echo base_url(); ?>Discount/Create">
                            <i class="fa fa-plus-square"></i>
                            Add new
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!--Discount Search Form-->

        <div class="product-page-forms">
            <div class="container-fluid">

                <div class="row">
                    <div class="product-page-form-bar">
                        <div class="col-md-6">
                            <div class="search-title">
                                <i class="fa fa-search"> <span class="search-text">Search</span> </i>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="search-text-drop-btn pull-right">
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchStartDate">Start date</label>
                                        <div title="A product name." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <div class="input-group date">

                                        <input type="text" class="form-control" name="startDate" id="startDate" />

                                        <span class="input-group-addon">

                                            <span class="glyphicon glyphicon-calendar"></span>

                                        </span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchEndDate">End date</label>
                                        <div title="End date" data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <div class="input-group date">

                                        <input type="text" class="form-control" name="endDate" id="endDate" />

                                        <span class="input-group-addon">

                                            <span class="glyphicon glyphicon-calendar"></span>

                                        </span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchDiscountType">Discount type</label>
                                        <div title="Search by Discount type." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" data-val="true" data-val-required="" name="">
                                        ?<?php foreach($discount_list as $discount){?>
                                            <option value="<?php echo $discount->Id;?>"><?php echo $discount->DiscountType; ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-horizontal">




                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchVendorId">Coupon code</label>
                                        <div title="Search by Coupon code." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="couponCode">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper"><label class="control-label" for="SearchVendorId">Discount name</label>
                                        <div title="Search by Discount name." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="discountName">
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-7 col-md-offset-5">
                            <button type="button" id="search-discounts" class="btn btn-primary btn-search">
                                <i class="fa fa-search"></i>
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Discount Search Form ends-->



        <!-- Discount-page-table-starts -->
        <div class="panel-body">

            <table id="demo-dt-basic" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Discount type</th>
                        <th>Discount</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Times used</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Counter = 1;
                    foreach ($discount_list as $discount) {
                        ?>
                        <tr>
                            <td><?php echo $discount->Name; ?></td>
                            <td><?php echo $discount->DiscountType; ?></td>
                            <td><?php echo $discount->PerFlat; ?></td>
                            <td><?php echo $discount->StartDate; ?></td>
                            <td><?php echo $discount->EndDate; ?></td>
                            <td><?php echo $discount->Status; ?></td>
                            <td><a href="<?php echo base_url() . 'Discount/edit/' . $discount->Id; ?>" class="btn btn-warning">Edit</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>


        </div>
        <!-- Discount-page-table-ends -->


        <!-- Discount-page-ends -->

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