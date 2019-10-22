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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
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
        <?php echo form_open_multipart('Blog/edit/' . $blog['id']); ?>
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
                                <i class="fa fa-info "></i> <span class="product-info-text">Blog</span>
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
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Blog Name</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control text-box single-line" id="blogName" name="blogName" type="text" value="<?php echo $blog['name']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Blog Description</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea id="descriptionblog" class="" name="descriptionblog" value="<?php echo $blog['description']; ?>"></textarea>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Title</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea id="titleBlog" class="" name="titleBlog" value="<?php echo $blog['title']; ?>"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Quote Blog</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea id="quoteBlog" class="" name="quoteBlog" value="<?php echo $blog['quote']; ?>"></textarea>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Picture</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="btn btn-success" id="uploadPicture" name="uploadPicture[]" type="file" value="">
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