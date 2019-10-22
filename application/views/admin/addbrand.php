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
        <?php echo form_open_multipart('Brand/SaveBrand'); ?>
        <form method="POST" action="<?php echo base_url(); ?>Brand/SaveBrand" enctype="multipart/form-data">
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
                        Add a new Brand

                        <small>
                            <i class="fa fa-arrow-circle-left"></i>
                            <a href="<?php base_url(); ?>/Brand">Back to Brand List</a>
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
                <div class="product-page-product-info-details">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12 col-xs-12">

                                <div class="Product-info-title">
                                    <div class="product-info-icon">
                                        <i class="fa fa-info "></i> <span class="product-info-text">Brand info</span>
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
                                                <div class="label-wrapper"><label class="control-label" for="SearchProductName">Name</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control text-box single-line" id="BrandName" name="BrandName" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchProductName">Code</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control text-box single-line" id="productCode" name="productCode" type="text" value="">
                                            </div>
                                        </div>

                                        <!-- full-description -->
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchProductName">Description</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="htmleditor">
                                                    <div class="row">

                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-12 nopadding">
                                                                    <textarea id="txtEditor" name="productDescription"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Parent category -->

                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchProductName">Parent Category</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control valid" data-val="true" data-val-required="The Parent category field is required." id="ParentCategoryId" name="ParentCategoryId">
                                                    <option selected="selected" value="0">[None]</option>
                                                    <option value="5">Electronics</option>
                                                    <option value="6">Electronics &gt;&gt; Camera &amp; photo</option>
                                                    <option value="7">Electronics &gt;&gt; Cell phones</option>
                                                    <option value="8">Electronics &gt;&gt; Others</option>
                                                    <option value="17">Electronics &gt;&gt; Others &gt;&gt; Test</option>
                                                    <option value="1">Computers</option>
                                                    <option value="2">Computers &gt;&gt; Desktops</option>
                                                    <option value="3">Computers &gt;&gt; Notebooks</option>
                                                    <option value="4">Computers &gt;&gt; Software</option>
                                                    <option value="9">Apparel</option>
                                                    <option value="10">Apparel &gt;&gt; Shoes</option>
                                                    <option value="11">Apparel &gt;&gt; Clothing</option>
                                                    <option value="12">Apparel &gt;&gt; Accessories</option>
                                                    <option value="13">Digital downloads</option>
                                                    <option value="14">Books</option>
                                                    <option value="15">Jewelry</option>
                                                    <option value="16">Gift Cards</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Picture -->
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Picture</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
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
                                                    <input type="file" class="btn btn-secondary" name="uploadfile">
                                                </div>


                                            </div>
                                        </div>


















                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- ...................Display-Section-info-details......................... -->

                <div class="product-page-price-info-details">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12 col-xs-12">

                                <div class="Product-info-title">
                                    <div class="product-info-icon">
                                        <i class="fa fa-info "></i> <span class="product-info-text">Display</span>
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
                                                <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Published</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="publishedBarnd" name="publishedBarnd" type="checkbox" value="true">
                                            </div>
                                        </div>
                                        <!-- .....Show on home page.... -->
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Show on home page</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="showOnHomeBrand" name="showOnHomeBrand" type="checkbox" value="true">
                                            </div>
                                        </div>
                                        <!-- ...............Include in top menu................. -->
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Include in top menu</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="includeOnTopBrand" name="includeOnTopBrand" type="checkbox" value="true">
                                            </div>
                                        </div>
                                        <!-- ..............Allow customers to select page size........... -->

                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Allow customers to select page size</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="allowCustomer" name="allowCustomer" type="checkbox" value="true">
                                            </div>
                                        </div>
                                        <!-- ........pageSize....... -->

                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper">
                                                    <label class="control-label" for="SearchIncludeSubCategories">Page size</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <input type='number' class="form-control" name="pageSize" id="pageSize" />



                                            </div>
                                        </div>

                                        <!-- .....Price ranges....... -->
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper"><label class="control-label" for="SearchProductName">Price ranges</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control text-box single-line" id="priceRange" name="priceRange" type="text" value="">
                                            </div>
                                        </div>
                                        <!-- Display order -->
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <div class="label-wrapper">
                                                    <label class="control-label" for="SearchIncludeSubCategories">Display order</label>
                                                    <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <input type='number' class="form-control" name="displayOrderBrand" id="displayOrderBrand" />



                                            </div>
                                        </div>






                                    </div>



                                </div>













                            </div>

                        </div>
                    </div>
                </div>

                <!-- .................Shipping details.................... -->

                <!-- <div class="Shipping-page-price-info-details">
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-md-12 col-xs-12">

                            <div class="Product-info-title">
                                <div class="product-info-icon">
                                    <i class="fa fa-bookmark panel-icon "></i> <span class="product-info-text">Mappings</span>
                                </div>
                                <div class="product-info-tab-icon">
                                    <i class="toggle-icon fa fa-minus"></i>
                                </div>
                            </div> -->
                <!-- Discounts -->
                <!-- <div class="col-md-12">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper">
                                                <label class="control-label" for="SearchIncludeSubCategories">Discounts</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                            <input type='text' class="form-control" placeholder="No discounts available. Create atleast one discount before mapping.">



                                        </div>
                                    </div> -->

                <!-- ...........Limited to customer roles........... -->

                <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-6 pd-0">
                                                <div class="label-wrapper p-20"><label class="control-label" for="SearchProductName">Limited to customer roles</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pd-0">
                                                <input class="form-control text-box single-line" id="SearchProductName" name="SearchProductName" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="change-instructions ">
                                            <p>
                                                In order to use this functionality, you have to disable the following setting: Catalog settings &gt; Ignore ACL rules.
                                            </p>
                                        </div>
                                    </div> -->
                <!-- Limited to stores -->
                <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-6 pd-0">
                                                <div class="label-wrapper p-20"><label class="control-label" for="SearchProductName">Limited to stores</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pd-0">
                                                <input class="form-control text-box single-line" id="SearchProductName" name="SearchProductName" type="text" value="">
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
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->
                <!-- ...............sEOSectionDetails................... -->

                <div class="Shipping-page-price-info-details">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12 col-xs-12">

                                <div class="Product-info-title">
                                    <div class="product-info-icon">
                                        <i class="fa fa-search-plus panel-icon "></i> <span class="product-info-text">SEO</span>
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

                <!-- ..................Products................ -->

                <div class="Picture-page-price-info-details">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12 col-xs-12">

                                <div class="Product-info-title">
                                    <div class="product-info-icon">
                                        <i class="fa fa-th-list panel-icon "></i> <span class="product-info-text">Products</span>
                                    </div>
                                    <div class="product-info-tab-icon">
                                        <i class="toggle-icon fa fa-minus"></i>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>









        </form>
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