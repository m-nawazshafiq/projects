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
        <div id="container" class="effect mainnav-full">
            <!--NAVBAR-->
            <!--===================================================-->
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
                    <br><br><br><br>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="content-header clearfix">
                                <h1 class="pull-left">

                                    Product Reviews
                                </h1>
                                <div class="pull-right">
                                    <a class="btn bg-blue" href="<?php echo base_url(); ?>Specification/SaveSpecification">
                                        <i class="fa fa-plus-square"></i>
                                        Add new
                                    </a>

                                    <div class="btn-group">
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
                    <div class="product-page-tble">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr role="row">                                        
                                        <th>Product Name</th>
                                        <th class="min-tablet">Customer Name</th>
                                        <th class="min-desktop">Customer Email</th>
                                        <th class="min-desktop">Review Text</th>
                                        <th class="min-desktop">Rating Star</th>
                                        <th class="min-desktop">Approved</th>
                                        <th class="min-desktop">Posted Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $Counter = 1;
                                                                

                                    foreach ($review_list as $review) {
                                        $product=$this->Product_model->getProductById($review->ProductId);
                                        $customer=$this->Customer_model->getCustomerById($review->CustomerId);
                                        ?>
                                        <tr class="review_list">
                                            
                                            <td><?php echo $product[0]['Name']; ?></td>
                                            <td><?php echo $customer[0]['UserName']; ?></td>
                                            <td><?php echo $review->CustomerEmail; ?></td>
                                            <td><?php echo $review->ReviewText; ?></td>
                                            <td><?php echo $review->Rating; ?></td>
                                            <td class="isapproved">
                                                <input type="hidden" value="<?php echo $review->Id; ?>" name="reviewId" id="reviewId">
                                                <div class="btn-group">
                                                    <p class="approved badge badge-pill badge-success btn dropdown-toggle status" data-toggle="dropdown">
                                                        <?php echo $review->IsApproved; ?>
                                                    </p>
                                                </div>
                                            </td>
                                            <td><?php echo $review->CreatedDate; ?></td>
                                            <td><a href="<?php echo base_url() . 'Specification/edit/' . $review->Id; ?>" class="btn btn-warning">Edit</a></td>
                                            <td><a href="<?php echo base_url() . 'Specification/delete/' . $review->Id; ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="product-page-tble-pagination">
                                <div class="col-md-5">
                                    <div class="product-page-pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination  ">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link mt-10" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link mt-10" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link mt-10" href="#">3</a></li>

                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-12">
                                    <div class="item-selector text-center">
                                        <div class="form-group">
                                            <label>Show
                                                <select>
                                                    <option value="7">7</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> items</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-12">
                                    <div class=" text-center">
                                        <div class="dataTables_info" id="products-grid_info" role="status" aria-live="polite">1-15 of 45 items</div>
                                    </div>
                                </div>

                                <div class="col-lg-1 col-xs-12">
                                    <div class=" text-center data-tables-refresh">
                                        <div class="dt-buttons btn-group">
                                            <button class="btn btn-default" tabindex="0" aria-controls="products-grid" type="button"><span><i class="fa fa-refresh"></i></span>
                                            </button>
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