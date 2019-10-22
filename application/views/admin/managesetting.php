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
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.js"></script>
</head>

<body>
    <div id="container" class="effect mainnav-full">
        <!--NAVBAR-->
        <!--===================================================-->
        <?php require("adminheader.php"); ?>
        <!--===================================================-->
        <!--END NAVBAR-->
        <div id="container" class="effect mainnav-full">
            <!--NAVBAR-->
            <!--===================================================-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <form action="<?php echo base_url() . 'Settings/SaveSettings' ?>" method="post">
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
                        <br><br><br><br>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="content-header clearfix">
                                    <h1 class="pull-left">

                                        Setting
                                    </h1>
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="submit" class="btn bg-blue">
                                                <i class="fa fa-download"></i>
                                                Add new
                                            </button>
                                            <button type="button" class="btn btn-success">
                                                <i class="fa fa-download"></i>
                                                Export
                                            </button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">&nbsp;</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <button type="submit" name="exportxml-all">
                                                        <i class="fa fa-file-code-o"></i>
                                                        Export to XML (all found)
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" id="exportxml-selected">
                                                        <i class="fa fa-file-code-o"></i>
                                                        Export to XML (selected)
                                                    </button>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <button type="submit" name="exportexcel-all">
                                                        <i class="fa fa-file-excel-o"></i>
                                                        Export to Excel (all found)
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" id="exportexcel-selected">
                                                        <i class="fa fa-file-excel-o"></i>
                                                        Export to Excel (selected)
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="button" name="importexcel" class="btn bg-olive" data-toggle="modal" data-target="#importexcel-window">
                                            <i class="fa fa-upload"></i>
                                            Import
                                        </button>
                                        <div id="delete-selected-action-confirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-selected-action-confirmation-title">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        <h4 class="modal-title" id="delete-selected-action-confirmation-title">Are you sure?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to perform this action?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" id="delete-selected-action-confirmation-submit-button" class="btn btn-primary pull-right">
                                                            Yes
                                                        </button>
                                                        <span class="btn btn-default pull-right margin-r-5" data-dismiss="modal">No, cancel</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End page title-->
                        <!--Page content-->
                        <!--===================================================-->
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
                        <div class="col-md-12">

                            <div class="form-horizontal">
                                <?php if (isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-info">
                                        <?php echo $_SESSION['success'];  ?>
                                    </div>
                                <?php } else { ?>
                                    <!-- <div class="alert alert-danger">
                                                                                        <?php //echo $_SESSION['failed'];  
                                                                                        ?>
                                                                                    </div> -->
                                <?php } ?>
                                <!-- Published -->
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Website Name</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="websiteName" id="websiteName" value="<?php echo $settings->bannerName; ?>" class="form-control text-box single-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Address</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="address" id="address" value="<?php echo $settings->address; ?>" class="form-control text-box single-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Email</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="email" id="email" value="<?php echo $settings->email; ?>" class="form-control text-box single-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Contact</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="contact" id="contact" value="<?php echo $settings->contact; ?>" class="form-control text-box single-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Facebook</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="facebook" id="facebook" value="<?php echo $settings->facebook; ?>" class="form-control text-box single-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">LinkedIn</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="linkedin" id="linkedin" value="<?php echo $settings->linkedin; ?>" class="form-control text-box single-line">
                                    </div>
                                </div>




                            </div>


                        </div>
                        <!--===================================================-->
                        <!--End page content-->

                    </div>
                </form>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->

                <!-- product-page-ends -->

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