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
        <?php echo form_open_multipart('Gift/SaveGift'); ?>
        <div>
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
                                    <i class="fa fa-info "></i> <span class="product-info-text">Gift</span>
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
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Gift Card Types</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control valid" data-val="true" data-val-required="The Vendor field is required." id="giftCardType" name="giftCardType">
                                                <option selected="selected" value="0">No vendor</option>
                                                <option value="1">Vendor 1</option>
                                                <option value="2">Vendor 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Initial Value</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control text-box single-line" id="initialValue" name="initialValue" type="number" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Is gift card activated </label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="check-box" data-val="true" data-val-required="The Search subcategories field is required." id="giftActive" name="giftActive" type="checkbox" value="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Generate Coupen </label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input class="form-control text-box single-line" id="GiftCardCouponCode" name="GiftCardCouponCode" type="text" value="">
                                                <span class="field-validation-valid" data-valmsg-for="GiftCardCouponCode" data-valmsg-replace="true"></span>
                                                <div class="input-group-btn">
                                                    <button type="button" id="generateCouponCode" class="btn btn-info">Generate code</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Recipient's Name</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="recipientName" name="recipientName" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Recipient's Email</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="recipientEmail" name="recipientEmail" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Sender's Name</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="senderName" name="senderName" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Sender's Email </label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control text-box single-line" id="senderEmail" name="senderEmail" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="label-wrapper"><label class="control-label" for="SearchIncludeSubCategories">Message</label>
                                                <div title="Check to search in subcategories." data-toggle="tooltip" class="ico-help"><i class="fa fa-question-circle"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="5" name="message" id="message"></textarea>
                                        </div>
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