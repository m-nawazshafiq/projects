<?php
if (!isset($_SESSION['adminName'])) {
    //die(print_r($_SESSION));
    redirect(base_url() . 'register/login');
}
//print_r($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<?php require("adminhead.php"); ?>

<body>
    <div id="container" class="effect mainnav-full">
        <!--NAVBAR-->
        <!--===================================================-->
        <?php require("adminheader.php"); ?>
        <!--===================================================-->
        <!--END NAVBAR-->
        <form method="post" action="<?php echo base_url() . 'Category/edit/' . $category['Id']; ?>" enctype="multipart/form-data">
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
                        Edit your Existing Record

                        <small>
                            <i class="fa fa-arrow-circle-left"></i>
                            <a href="<?php base_url(); ?>/Category">Back to Category List</a>
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
                                        <i class="fa fa-info "></i> <span class="product-info-text">Category info</span>
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
                                                <div class="label-wrapper"><label class="control-label" for="txtCategoryName">Name</label>
                                                    <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control text-box single-line" id="txtCategoryName" name="txtCategoryName" type="text" value="<?php echo $category['Name']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <div class="label-wrapper"><label class="control-label" for="txtCategoryName">Code</label>
                                                        <div title="" data-toggle="tooltip" class="ico-help" data-original-title="A product name."><i class="fa fa-question-circle"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control text-box single-line" id="txtCategoryCode" name="txtCategoryCode" type="text" value="<?php echo $category['Code']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-horizontal">


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
                                                                            <textarea id="descriptionCategory" name="descriptionCategory"></textarea>
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
                                                            <?php
                                                            foreach ($parent_category as $category) {
                                                                echo "<option value=" . $category->Id . ">" . $category->Name . "</option>";
                                                            }
                                                            ?>
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
                                                            <input class="btn btn-sucess" type="file" name="uploadPicture">
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
                                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="publishCategory" value="<?php echo $category->Published; ?>" name="publishCategory" type="checkbox">
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
                                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="showOnHomeCategory" value="" name="showOnHomeCategory" type="checkbox">
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
                                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="categoryOnTop" name="categoryOnTop" type="checkbox">
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
                                                        <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="customerSelectCategory" name="customerSelectCategory" type="checkbox" value="true">
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

                                                        <input type='number' class="form-control" />



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
                                                        <input class="form-control text-box single-line" id="priceRangeCategory" name="priceRangeCategory" type="text" value="<?php echo $category->PriceRange; ?>">
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

                                                        <input type='number' class="form-control" name="displayOrderCategory" id="displayOrderCategory" />



                                                    </div>
                                                </div>






                                            </div>



                                        </div>













                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- .................Shipping details.................... -->
                        <!-- 
                        <div class="Shipping-page-price-info-details">
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
                                        </div>
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

                                                        <input type='text' class="form-control" placeholder="No discounts available. Create atleast one discount before mapping." name="discountCategory" id="discountCategory">



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
                                                </div>
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
                                                        <input class="form-control text-box single-line" id="SearchProductName" name="SearchProductName" type="text" value="<?php echo $category->Searchenginefriendly; ?>">
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
                                                        <input class="form-control text-box single-line" id="metaTitle" name="metaTitle" type="text" value="<?php echo $category->Metatitle; ?>">
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
                                                        <input class="form-control text-box single-line" id="metaKeyWord" name="metaKeyWord" type="text" value="<?php echo $category->Metakeywords; ?>">
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

                    </div>












        </form>
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