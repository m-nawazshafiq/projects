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

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="content-header clearfix">
                        <h1 class="pull-left">

                            Categories
                        </h1>
                        <div class="pull-right">
                            <a class="btn bg-blue" href="<?php echo base_url(); ?>Category/Create">
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

            <div id="page-content">
                <!-- Basic Data Tables -->
                <!--===================================================-->
                <div class="panel">
                    
                    <div class="panel-body">
                        <table id="demo-dt-basic" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td><a type="button" name="delete_all" id="delete_all" class="btn btn-danger">DELETE ALL</a></td>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th class="min-tablet">Parent Category</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Counter = 1;
                                $this->load->model('Category_model');
                                foreach ($category_list as $category) {

                                    //echo var_dump();
                                    if($category->ParentCategoryId > 0 ){
                                        $parentCategory=$this->Category_model->getCategoryById($category->ParentCategoryId);
                                        $parentCategoryName=$parentCategory[0]['Name'];
                                    }else{
                                        $parentCategoryName="";
                                    }
                                    
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" class="delete_checkbox" value="<?php echo $category->Id ?>" /></td>
                                        <td>
                                            <div><img src="<?php echo base_url('upload/' . $category->Picture); ?>" alt="No image"></div>
                                        </td>
                                        <td><?php echo $category->Name; ?></td>
                                        <td><?php echo $category->Code; ?></td>
                                        <td><?php echo $parentCategoryName; ?></td>
                                        <td><a href="<?php echo base_url() . 'Category/edit/' . $category->Id; ?>" class="btn btn-warning">Edit</a></td>
                                        <td><a href="<?php echo base_url() . 'Category/delete/' . $category->Id; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--===================================================-->
                <!-- End Striped Table -->
                <!-- Row selection (single row) -->
                <!--===================================================-->

                <!--===================================================-->
                <!-- End Row selection (single row) -->
                <!-- Row selection and deletion (multiple rows) -->
                <!--===================================================-->

                <!--===================================================-->
                <!-- End Row selection and deletion (multiple rows) -->
                <!-- Add Row -->
                <!--===================================================-->

                <!--===================================================-->
                <!-- End Add Row -->
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->

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