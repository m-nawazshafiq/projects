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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
        .removeRow {
            background-color: #FF0000;
            color: #FFFFFF;
        }
    </style>
    <script>
        $(document).ready(function() {

            $('.delete_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $(this).closest('tr').addClass('removeRow');
                } else {
                    $(this).closest('tr').removeClass('removeRow');
                }
            });

            $('#delete_all').click(function() {
                var checkbox = $('.delete_checkbox:checked');
                if (checkbox.length > 0) {
                    var checkbox_value = [];
                    $(checkbox).each(function() {
                        checkbox_value.push($(this).val());
                    });
                    $.ajax({
                        url: "<?php echo base_url(); ?>Product/delete_all",
                        method: "POST",
                        data: {
                            checkbox_value: checkbox_value
                        },
                        success: function() {
                            $('.removeRow').fadeOut(1500);
                        }
                    })
                } else {
                    alert('Select atleast one records');
                }
            });
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

        <!-- product-page-starts -->

        <div class="container-fluid">
            <div class="row">
                <div class="content-header clearfix">
                    <h1 class="pull-left">
                        Products
                    </h1>
                    <div class="pull-right">

                        <button type="submit" name="download-catalog-pdf" class="btn bg-blue">

                            <i class="fa fa-plus-square"></i>
                            <a href="<?php echo base_url(); ?>Product/SaveProduct">
                                Add new
                            </a>
                        </button>

                        
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

        <!-- product-page-top-bar-ends -->


        <!-- product-page-table-starts -->
        <div class="panel-body">

            <table id="demo-dt-basic" class="table table-bordered">
                <thead>
                    <tr>
                        <td style="width:50px;"><a type="button" name="delete_all" id="delete_all" class="btn btn-danger">DELETE ALL</a></td>
                        <th>Picture</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Stock quantity</th>
                        <th>Product type</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Counter = 1;
                    foreach ($product_list as $Product) {
                        $pic = json_decode($Product->Picture);

                        ?>
                        <tr>
                            <td><input type="checkbox" class="delete_checkbox" value="<?php echo $Product->Id; ?>"></td>
                            <td>
                                <div><img style="width:50px" src="<?php echo base_url('upload/' . $pic[0]); ?>" alt="No image"></div>
                            </td>
                            <td><?php echo $Product->Name; ?></td>
                            <td><?php echo $Product->Price; ?></td>
                            <td style="width:10px"><?php echo $Product->Price; ?></td>
                            <td><?php echo $Product->CategoryId; ?></td>
                            <td><a href="<?php echo base_url() . 'Product/edit/' . $Product->Id; ?>" class="btn btn-warning">Edit</a></td>
                            <td><a href="<?php echo base_url() . 'Product/delete/' . $Product->Id; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>


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
</body>

</html>