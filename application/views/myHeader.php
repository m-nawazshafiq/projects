<?php
if (isset($_COOKIE["remember_me"])) {
    $_SESSION['email'] = $_COOKIE["remember_me"];
}
?>

<header>
    <!--Top NavBar-->
    <div class="container top-nav-content">
        <div class="row">
            <div class="col-md-3" id="logo">
                <div class="navbar-header">
                    <img src="<?php echo base_url(); ?>images/myImages/logo.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-11 col-md-8 col-xl-6">
                <div class="d-none d-sm-block">
                    <div class="input-group" id="search">
                        <select class="search-dropdown js-example-basic-single" name="state">
                            <option value="0">All Products</option>

                            <?php foreach ($product_name_list as $product) { ?>
                                <option value="<?php echo $product->Id; ?>"><?php echo $product->Name; ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" class="form-control search-input-box" aria-label="Text input with dropdown button" />
                        <div class="input-group-append search-btn">
                            <span class="input-group-text search-btn-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>


                <!--xm mobile search-->
                <div class="d-block d-sm-none">
                    <div class="input-group mobile-search">
                        <input type="text" placeholder="All products" class="form-control xm-search-box search-input-box" aria-label="Text input with dropdown button" />
                    </div>
                </div>

                <!--mobile search ends-->
            </div>
            <div class="col-1 col-xl-3">

                <!--mobile top sec-->
                <div class="d-xl-none">

                    <div class="mobile-nav-cont">
                        <div class="trigger-mobile-drop-btn">
                            <i class="fa fa-ellipsis-v vertical-mobile-icon"></i>
                        </div>

                        <div class="mobile-top-nav-sec">
                            <ul>
                                <li>
                                    <a class="active" href="<?php echo base_url() . "Cart/mycart"; ?>"><img src="<?php echo base_url(); ?>images/myImages/cart.png" />
                                        <span>Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#news"><img src="<?php echo base_url(); ?>images/myImages/heart.png" />
                                        <span>Whishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contact"><img src="<?php echo base_url(); ?>images/myImages/compare.png" />
                                        <span>Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!--mobile top sec ends-->
                    <div class="d-none d-xl-block">
                        <div class="d-flex justify-content-end">
                            <div class="topnav">
                                <ul>
                                    <li>
                                        <div style="position: relative;">
                                            <a class="active" href="<?php echo base_url() . "Cart/mycart"; ?>"><img src="<?php echo base_url(); ?>images/myImages/cart.png" />
                                                <p>Cart : <?php echo count($this->cart->contents());?></p>
                                            </a>
                                            <div class="cart-notification-cont">
                                                hi
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#news"><img src="<?php echo base_url(); ?>images/myImages/heart.png" />
                                            <p>Whishlist</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#contact"><img src="<?php echo base_url(); ?>images/myImages/compare.png" />
                                            <p>Compare</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!--Top NavBar ends-->

    <!--Main Navbar-->
    <div class="container-fluid main-menue">
        <div class="container">

            <!--main nav mobile-->

            <div class="d-xl-none">

                <div class="row no-gutters">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="main-menue-items cat-nav-item">
                            <div class="nav-link cat" style="width: 233px !important;" data-toggle="collapse" data-target="#demo">
                                <i class="fa fa-bars" aria-hidden="true"></i> All Categories
                            </div>
                            <div class="cat-container">
                                <div id="demo" class="cat-content collapse show">
                                    <ul class="cat-menu">
                                        <?php foreach ($category_list as $category) { ?>
                                            <li><?php echo $category->Name; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <?php } ?>

                                        <!--<li>Toy Animal <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Art & Craft Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Electronic Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Cunstruction Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Robot Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Toy Weapons <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Traditional Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Toy Vehicles <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Puzzles <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Water Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Beadtime toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Educational Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Dolls <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Sound Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Wooden Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Creative Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Action Figures <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                        <li>Spinning Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-2 offset-4 offset-sm-4 offset-md-6 offset-lg-7">
                        <div class="row" style="float: right;">
                            <div class="col-12">
                                <div class="icon">
                                    <span>&#9776;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="mobile" class="sidenav">
                    <div class="a-tags">
                        <a href="javascript:void(0)" class="closebtn">&times;</a>
                        <a class="active" href="#home">Components</a>
                        <a href="#">Tablets</a>
                        <a href="#">Desktop</a>
                        <a href="#">Software</a>
                        <a href="#">Baby Toys</a>
                        <a href="#">Pages</a>
                    </div>

                    <div class="dropdown">
                        <div class="dropdown-toggle country-menue-btn" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="flag-icon flag-icon-pk"></span> / English / USD
                            <span class="caret"></span>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="#" data-value="pk"><span class="flag-icon flag-icon-pk"></span> / English / USD</a></li>
                            <li><a href="#" data-value="another action"><span class="flag-icon flag-icon-ca"></span> / English /
                                    USD</a></li>
                            <li><a href="#" data-value="something else here"><span class="flag-icon flag-icon-sa"></span> / English
                                    / USD</a></li>
                            <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-in"></span> / English /
                                    USD</a></li>
                            <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-dk"></span> / English /
                                    USD</a></li>
                            <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-cn"></span> / English /
                                    USD</a></li>
                            <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-kw"></span> / English /
                                    USD</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!--main nav mobile ends-->


            <nav class="d-none d-xl-block navbar navbar-expand-lg main-menue-content">

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item main-menue-items cat-nav-item">
                        <div class="nav-link cat" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-bars" aria-hidden="true"></i> All Categories
                        </div>
                        <div class="cat-container">
                            <div id="demo" class="cat-content collapse <?php if (!isset($cat_display)) {
                                                                            echo 'show';
                                                                        } ?>">
                                <ul class="cat-menu">
                                    <?php foreach ($category_list as $category) { ?>
                                        <li><?php echo $category->Name; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <?php } ?>

                                    <!--<li>Toy Animal <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Art & Craft Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Electronic Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Cunstruction Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Robot Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Toy Weapons <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Traditional Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Toy Vehicles <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Puzzles <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Water Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Beadtime toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Educational Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Dolls <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Sound Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Wooden Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Creative Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Action Figures <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Spinning Toy <i class="fa fa-angle-right" aria-hidden="true"></i></li>-->
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item main-menue-items">
                        <a class="nav-link" href="#">Components</a>
                    </li>
                    <li class="nav-item main-menue-items">
                        <a class="nav-link" href="#">Tablets</a>
                    </li>
                    <li class="nav-item main-menue-items">
                        <a class="nav-link" href="#">Desktop</a>
                    </li>
                    <li class="nav-item main-menue-items">
                        <a class="nav-link" href="#">Software</a>
                    </li>
                    <li class="nav-item main-menue-items">
                        <a class="nav-link" href="#">Babies toys</a>
                    </li>
                    <li class="nav-item main-menue-items">
                        <a class="nav-link" href="#">Pages</a>
                    </li>
                    <li class="nav-item main-menue-items add-bar">
                        <div class="dropdown">
                            <div class="dropdown-toggle country-menue-btn" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="flag-icon flag-icon-pk"></span> / English / USD
                                <span class="caret"></span>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#" data-value="pk"><span class="flag-icon flag-icon-pk"></span> / English / USD</a></li>
                                <li><a href="#" data-value="another action"><span class="flag-icon flag-icon-ca"></span> / English /
                                        USD</a></li>
                                <li><a href="#" data-value="something else here"><span class="flag-icon flag-icon-sa"></span> / English
                                        / USD</a></li>
                                <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-in"></span> / English /
                                        USD</a></li>
                                <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-dk"></span> / English /
                                        USD</a></li>
                                <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-cn"></span> / English /
                                        USD</a></li>
                                <li><a href="#" data-value="separated link"><span class="flag-icon flag-icon-kw"></span> / English /
                                        USD</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="cust-bar">
                            <div class="menu-cust-bar"></div>
                        </div>
                    </li>
                    <li class="nav-item main-menue-items account-menu-item">
                        <div class="dropdown">
                            <a class="nav-link" style="line-height: normal;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i> <span style="line-height: normal; font-size: 14px;">Account <i style="font-size: 12px;" class="fa fa-caret-down" aria-hidden="true"></i></span></a>
                            <ul class="dropdown-menu">
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <li><a href="<?php echo base_url() . "User/login" ?>">Login</a></li>
                                    <li><a href="<?php echo base_url() . "User/signup" ?>">Register</a></li>
                                <?php } else { ?>
                                    <li><a href="<?php echo base_url() . "User/logout" ?>">Logout</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
    <!--Main Navbar ends-->
</header>