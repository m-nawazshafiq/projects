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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <script>
        $('.js-example-basic-single').select2({
            placeholder: 'Select an option'

        });
    </script>
</head>

<body>
    <?php echo form_open_multipart('Product/SaveProduct'); ?>
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


                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Page content-->
                <!--===================================================-->

                <!--===================================================-->
                <!--End page content-->
            </div>

            <div class="content-header clearfix">
                <h1 class="pull-left">
                    Add a new product

                    <small>
                        <i class="fa fa-arrow-circle-left"></i>
                        <a href="/Admin/Product/List">back to product list</a>
                    </small>
                </h1>
                <div class="pull-right">
                    <button id="submitBtn" type="submit" name="save" class="btn bg-blue">
                        <i class="fa fa-floppy-o"></i>
                        Save

                    </button>
                    <button type="submit" name="save-continue" class="btn bg-blue">
                        <i class="fa fa-floppy-o"></i>
                        Save and Continue Edit

                    </button>
                </div>

            </div>

            <div class="product-page-product-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-info "></i> <span class="product-info-text">Product info</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>
                            <!-- add-products-info-details -->
                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Product name</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="productName" name="productName" type="text" value="">
                                        </div>
                                    </div>
                                    <!-- Short-description -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Short Description</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="5" name="shortDescription" id="shortDescription"></textarea>
                                        </div>
                                    </div>
                                    <!-- full-description -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Full Description</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea id="txtEditor" name="fullDescription" id="fullDescription"></textarea>
                                        </div>
                                    </div>
                                    <!-- Sku -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">SKU</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="code" name="code" type="text" value="">
                                        </div>
                                    </div>
                                    <!-- Categories -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchcategoryName">Categories</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A category name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control valid" data-val="true" data-val-required="The Parent category field is required." id="ParentCategoryId" name="ParentCategoryId">
                                                <option value="0">[None]</option>
                                                <?php
                                                foreach ($category_list as $category) {
                                                    if ($category->ParentCategoryId != 0) {
                                                        echo "<option value='" . $category->Id . "'>" . $category->Name . "</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Manufacturers -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Manufacturers</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control valid" data-val="true" data-val-required="The Parent category field is required." id="ParentBrandId" name="ParentBrandId">
                                                <option value="0">[None]</option>
                                                <?php
                                                foreach ($brand_list as $brand) {
                                                    echo "<option value='" . $brand->Id . "'>" . $brand->Name . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Published -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Published</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="published" name="published" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <!-- Product tags -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Product tags</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="productTags" name="productTags" type="text" value="" placeholder="Enter tags">
                                        </div>
                                    </div>
                                    <!-- GTIN (global trade item number) -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">GTIN (global trade item number)</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="gtin" name="gtin" type="text" value="">
                                        </div>
                                    </div>
                                    <!-- Manufacturer part number -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Manufacturer part number</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="manufacturerPartNumber" name="manufacturerPartNumber" type="text" value="">
                                        </div>
                                    </div>
                                    <!-- Show on home page -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Show on home page</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="showInHomePage" name="showInHomePage" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <!-- Product type -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Product type</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="productType" name="productType" type="text" value="" placeholder="simple">
                                        </div>
                                    </div>

                                    <!--  Visible individually -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Visible individually</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="visibleIndiviually" name="visibleIndiviually" type="checkbox" value="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-6 pd-0">
                                                <div class="label-wrapper p-20"><label class="control-label" for="SearchProductName">Customer roles</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pd-0">
                                                <input class="form-control text-box single-line" id="customerRole" name="customerRole" type="text" value="" placeholder="simple">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="change-instructions ">
                                            <p>
                                                In order to use this functionality, you have to disable the following setting: Catalog settings &gt; Ignore ACL rules.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Limited to stores -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-6 pd-0">
                                                <div class="label-wrapper p-20"><label class="control-label" for="SearchProductName">Limited to stores</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pd-0">
                                                <input class="form-control text-box single-line" id="limitedToStores" name="limitedToStores" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="change-instructions ">
                                            <p>
                                                In order to use this functionality, you have to disable the following setting: Catalog settings &gt; Ignore ACL rules.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Vendor -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Vendor</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control valid" data-val="true" data-val-required="The Vendor field is required." id="VendorId" name="VendorId">
                                                <option selected="selected" value="0">No vendor</option>
                                                <option value="1">Vendor 1</option>
                                                <option value="2">Vendor 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Require other products -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Require other products</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="requireOtherProducts" name="requireOtherProducts" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <!-- Allow customer reviews -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Allow customer reviews</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="allowCustomerReviews" name="allowCustomerReviews" type="checkbox" value="true">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Available start date</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='date' class="form-control" name="availableStartDate" id="availableStartDate" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Available end date</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='date' class="form-control" name="availableEndDate" id="availableEndDate" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Mark as new -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Mark as new</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="markAsNew" name="markAsNew" type="checkbox" value="true">
                                        </div>
                                    </div>

                                    <!-- Admin comment -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Admin comment</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="4" name="adminComment" id="adminComment"></textarea>
                                        </div>
                                    </div>


                                    <!-- date-time- -->

                                    <!-- YouTube link -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">YouTube Link</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="code" name="youtubeLink" type="text" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">PDF</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="code" name="pdf" type="file" accept="application/pdf" value="">
                                        </div>
                                    </div>


                                    <?php if (isset($_SESSION['PDF_Upload_error'])) { ?>
                                        <div class="col-md-4 alert alert-danger">
                                            <?php

                                                echo 'File not uploaded!';

                                                ?>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- ...................Price-Section-info-details......................... -->

            <div class="product-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-usd panel-icon "></i> <span class="product-info-text">Price</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>
                            <!-- add-products-info-details -->
                            <!-- price -->
                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Price</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='number' class="form-control" name="price" id="price" />
                                                <span class="input-group-addon input-group-text-USD">
                                                    <span>USD</span>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- old-price -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Old price</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='number' class="form-control" name="oldPrice" id="oldPrice" />
                                                <span class="input-group-addon input-group-text-USD">
                                                    <span>USD</span>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Product cost -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Product cost</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="productCost" name="productCost" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <!-- .....Disable buy button.... -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Disable buy button</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="disableBuyButton" name="disableBuyButton" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <!-- ...............Disable wishlist button................. -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Disable wishlist button</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="disableWishlistButton" name="disableWishlistButton" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <!-- ..............Call for price........... -->

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Call for price</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="callForPrice" name="callForPrice" type="checkbox" value="true">
                                        </div>
                                    </div>


                                    <!-- ...Customer enters price.... -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Customer enters price</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="customerEnterPrice" name="customerEnterPrice" type="checkbox" value="true">
                                        </div>
                                        <br>
                                    </div>

                                    <!-- .....Discounts....... -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Discounts</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="discount" name="discount" type="text" value="">
                                        </div>
                                    </div>

                                    <!-- .....Purchase price....... -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Purchase price</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='number' step="0.01" class="form-control" name="purchasePrice" id="" />
                                                <span class="input-group-addon input-group-text-USD">
                                                    <span>USD</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Retail value</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="rValue" name="rValue" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Sale Tax</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="saleTax" name="saleTax" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Sale Tax Percentage</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="saleTaxPercentage" name="saleTaxPercentage" type="text">
                                        </div>
                                    </div>


                                </div>



                            </div>













                        </div>

                    </div>
                </div>
            </div>

            <!-- .................Shipping details.................... -->

            <div class="Shipping-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-truck panel-icon "></i> <span class="product-info-text">Shipping</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>
                            <!-- Shipping -->
                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Shipping</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="shipping" name="shipping" type="checkbox" value="true">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Ship Sep</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="shipSep" name="shipSep" type="checkbox" value="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Add Charges Ship</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="chargesShip" name="chargesShip" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Delivery Time</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="deliveryTime" name="deliveryTime" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ...............inventorySectionDetails................... -->

            <div class="Shipping-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-sitemap panel-icon "></i> <span class="product-info-text">Inventory</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-horizontal">
                                    <!-- Inventory method -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Inventory method</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control valid" data-val="true" data-val-required="The Inventory method field is required." id="ManageInventoryMethodId" name="ManageInventoryMethodId">
                                                <option selected="selected" value="0">Don't track inventory</option>
                                                <option value="1">Track inventory</option>
                                                <option value="2">Track inventory by product attributes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Warehouse -->

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Warehouse</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control valid" data-val="true" data-val-required="The Warehouse field is required." id="WarehouseId" name="WarehouseId">
                                                <option selected="selected" value="0">None</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Minimum cart qty</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type='number' class="form-control" name="minimumCartQty" id="minimumCartQty" />

                                        </div>
                                    </div>
                                    <!-- ..............Maximum cart qty............. -->

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Maximum cart qty</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type='number' class="form-control" name="maximumCartQty" id="maximumCartQty" />

                                        </div>
                                    </div>

                                    <!-- ...............Allowed quantities.................... -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Allowed quantities</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="allowedQuantities" name="allowedQuantities" type="text" value="">
                                        </div>
                                    </div>

                                    <!-- ...................Not returnable...................... -->

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Not returnable</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="notReturnable" name="notReturnable" type="checkbox" value="true">
                                        </div>
                                    </div>
                                </div>
                            </div>












                        </div>
                    </div>
                </div>
            </div>

            <!-- ..................Pictures................ -->

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-picture-o panel-icon "></i> <span class="product-info-text">Picture</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>
                            <div class="col-md-9">

                                <div class=" col-md-2 upload-picture-block">
                                    <div class="picture-container">
                                        <div id="picture420831652image" class="uploaded-image">
                                            <img src="http://admin-demo.nopcommerce.com/images/thumbs/default-image_100.png">
                                        </div>
                                    </div>

                                </div>
                                <div class=" col-md-10 add-categories-button ">
                                    <input id="upload-img" type="file" name="uploadPicture[]" multiple />
                                    <div class='img-preview'></div>
                                </div>
                                <div class="col-md-4 alert alert-danger">
                                    <?php
                                    if (isset($upload_error)) {
                                        echo $upload_error;
                                    }
                                    ?>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- .........products Attributes.................. -->
            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-paperclip panel-icon "></i> <span class="product-info-text">Product attributes</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-horizontal">
                                        <?php foreach ($attributes_list as $attributes) { ?>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories"><?php echo $attributes->Name ?></label>
                                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <?php

                                                            ?>
                                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." value="" id="<?php echo $attributes->Name  ?>" name="attributes[<?php echo $attributes->Id;  ?>]" type="<?php echo $attributes->inputType; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php  } ?>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-paperclip panel-icon "></i> <span class="product-info-text">Product Tags</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                                <div class="col-md-12">

                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <select class="select2 form-control" style="height:70px" multiple="true" name="tag[]">
                                                    <?php foreach ($tags_list as $tags) { ?>
                                                        <option value="<?php echo $tags->Id; ?>"><?php echo $tags->Name; ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Specification attributes -->

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title" style="margin-bottom:10px;">
                                <div class="product-info-icon">
                                    <i class="fa fa-cog panel-icon "></i> <span class="product-info-text">Specification attributes</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>

                            <?php if(!empty($spec_list)){?>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-12">

                                        <div id="addRows">

                                            <div class="row cloneRows" id="cloneDiv0">
                                                <div class="col-md-5">
                                                    <select class="form-control" name="spec[]">
                                                        <?php foreach($spec_list as $spec){
                                                            echo "<option value=".$spec->id.">".$spec->name."</option>";
                                                        }?>
                                                    </select>
                                                </div>

                                                <div class="col-md-6" id="cloneTxtWrapper"><input type="text" id="0cloneTxt" name="specText[]" class="form-control" /></div>

                                                <button type="button" class="btn btn-primary" id="0cloneDeleteBtn">Delete</button>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="btn btn-primary" id="addRowBtn">Add More</div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Gift card -->

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-gift panel-icon "></i> <span class="product-info-text">Gift card</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>


                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Not returnable</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="giftCard" name="giftCard" type="checkbox" value="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-download panel-icon "></i> <span class="product-info-text">Downloadable product</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Downloadable Product</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="downloadableProject" name="downloadableProject" type="checkbox" value="true">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- ............Rental................ -->

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-calendar panel-icon"></i> <span class="product-info-text">Rental</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>

                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Rental</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="rental" name="rental" type="checkbox" value="true">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ............Featured................ -->

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-calendar panel-icon"></i> <span class="product-info-text">Featured Product</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>

                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Featured</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="featuredProduct" name="featuredProduct" type="checkbox" value="true">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ............Best Seller................ -->

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-calendar panel-icon"></i> <span class="product-info-text">Best Seller</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>

                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Best Seller</label>
                                            <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="bestSeller" name="bestSeller" type="checkbox" value="true">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ............Seo............. -->
            <div class="Picture-page-price-info-details">
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
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Search engine friendly page name</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="SearchProductName" name="SearchProductName" type="text" value="">
                                        </div>
                                    </div>

                                    <!-- ...............Meta title.................... -->
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchProductName">Meta title</label>
                                                <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="metaKeyWord" name="metaKeyWord" type="text" value="">
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
                                            <input class="form-control text-box single-line" id="metaTitle" name="metaTitle" type="text" value="">
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

            <div class="Picture-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-search-plus panel-icon "></i> <span class="product-info-text">Related products</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div>

                            <?php if(!empty($product_list)){?>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-12">

                                        <div id="addCheckBoxRows">

                                            <div class="row cloneRows" id="cloneCheckBoxDiv0">
                                                <div class="col-md-5">
                                                    <select class="form-control" name="product[]">
                                                        <?php foreach($product_list as $product){
                                                            echo "<option value=".$product->Id.">".$product->Name."</option>";
                                                        }?>                                                        
                                                    </select>
                                                </div>

                                                <div class="col-md-1" id="cloneCheckboxWrapper"><input type="checkbox" id="0cloneCheckBox" name="productBox[]" class="check-box"/></div>

                                                <button type="button" class="btn btn-primary" id="0deleteCheckBoxCloneBtn">Delete</button>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="btn btn-primary" id="addCheckBoxRowBtn">Add More</div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>


            </form>

        </div>

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
    <!--ckeditor script-->
    <script>
        // Replace the <textarea id="shortDescription"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('shortDescription');
        CKEDITOR.replace('fullDescription');
    </script>
</body>

</html>