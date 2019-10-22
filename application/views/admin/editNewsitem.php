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
        <?php echo form_open_multipart('Newsitem/edit/' . $News['id']); ?>
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
                    <a href="<?php base_url(); ?>/Specification">Back to Specification List</a>
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
                                <i class="fa fa-info "></i> <span class="product-info-text">NewsItem</span>
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
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Heading</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="heading" name="heading" type="text" value="<?php echo $News['heading'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Description</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="description" class="" name="description" value="<?php echo $News['detail'] ?>"></textarea>
                                    </div>
                                </div>


                            </div>

                        </div>


                    </div>

                </div>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-12 col-xs-12">

                        <div class="Product-info-title">
                            <div class="product-info-icon">
                                <i class="fa fa-search-plus panel-icon"></i> <span class="product-info-text">SEO</span>
                            </div>
                            <div class="product-info-tab-icon">
                                <i class="toggle-icon fa fa-minus"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-horizontal">







                                <!-- ...............Search engine friendly page name.................... -->
                                <!-- <div class="form-group">
                                                    <div class="col-md-3">
                                                        <div class="label-wrapper"><label class="control-label" for="SearchProductName">Search engine friendly page name</label>
                                                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input class="form-control text-box single-line" id="SearchProductName" name="SearchProductName" type="text" value="">
                                                    </div>
                                                </div> -->

                                <!-- ...............Meta title.................... -->
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchProductName">Meta title</label>
                                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="metaKeyWord" name="metaKeyWord" type="text" value="<?php echo $News['metaTitle'] ?>">
                                    </div>
                                </div>


                                <!-- ...............Meta keywords.................... -->
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchProductName">Meta keywords</label>
                                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="metaTitle" name="metaTitle" type="text" value="<?php echo $News['metaKeyword'] ?>">
                                    </div>
                                </div>

                                <!-- Meta description -->
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchProductName">Meta description</label>
                                            <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="4" name="metaDescription" id="metaDescription"></textarea>
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