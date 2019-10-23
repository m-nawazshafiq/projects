<!DOCTYPE html>
<html lang="en">
<?php require("myHead.php"); ?>

<body>

    <?php require("myHeader.php"); ?>

    <div class="login-bg">
        <div class="login-color-bg">
            <h1>Shopping Cart</h1>
        </div>
    </div>




    <div class="container">


        <div class="table-responsive cart-table mt-5" style="margin-bottom: 60px;">
            <table>
                <tr>
                    <th scope="col">IMAGE</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">MODEL</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">UNIT PRICE</th>
                    <th scope="col">TOTAL</th>
                </tr>
                <?php foreach ($this->cart->contents() as $cart) {
                    $pic = json_decode($cart['cartData']['image']); ?>

                    <tr>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="table-img">
                                    <img src="<?php echo base_url() . "upload/" . $pic[0]; ?>" width="60" height="60" class="img-fluid" alt="">
                                </div>
                            </div>
                        </td>
                        <td><?php echo $cart['name']; ?></td>
                        <td>20 Products</td>
                        <td>
                            <div class="btn-group cart-btn-group" role="group" aria-label="Basic example">
                                <input type="number" max="<?php echo $cart['cartData']['maxQty']; ?>" min="<?php echo $cart['cartData']['minQty']; ?>" ; value="<?php echo $cart['qty']; ?>" class="qty-input" name="qty">
                                <div class="btn"><i class="fa fa-refresh" style="color: #ec9044;" aria-hidden="true"></i>
                                </div>
                                <div class="btn"><i class="fa fa-window-close" style="color:#92278f;" aria-hidden="true"></i></div>
                            </div>
                        </td>
                        <td><?php echo "$" . $cart['price']; ?></td>
                        <td>$144</td>
                    </tr>
                <?php } ?>
                <!--<tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="table-img">
                                <img src="images/Untitled-2.png" width="60" height="60" class="img-fluid" alt="">
                            </div>
                        </div>
                    </td>
                    <td>Lorem Ipsum is simply </td>
                    <td>20 Products</td>
                    <td>
                        <div class="btn-group cart-btn-group" role="group" aria-label="Basic example">
                            <div class="btn" style="cursor: text;" contenteditable="true">2</div>
                            <div class="btn"><i class="fa fa-refresh" style="color: #ec9044;" aria-hidden="true"></i>
                            </div>
                            <div class="btn"><i class="fa fa-window-close" style="color:#92278f;" aria-hidden="true"></i></div>
                        </div>
                    </td>
                    <td>$7886</td>
                    <td>$144</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="table-img">
                                <img src="images/toy.png" width="60" height="60" class="img-fluid" alt="">
                            </div>
                        </div>
                    </td>
                    <td>Lorem Ipsum is simply </td>
                    <td>20 Products</td>
                    <td>
                        <div class="btn-group cart-btn-group" role="group" aria-label="Basic example">
                            <div class="btn" style="cursor: text;" contenteditable="true">2</div>
                            <div class="btn"><i class="fa fa-refresh" style="color: #ec9044;" aria-hidden="true"></i>
                            </div>
                            <div class="btn"><i class="fa fa-window-close" style="color:#92278f;" aria-hidden="true"></i></div>
                        </div>
                    </td>
                    <td>$7886</td>
                    <td>$144</td>
                </tr>-->
            </table>
        </div>


        <h2>WHAT WOULD YOU LIKE TO DO NEXT?</h2>
        <p>Choose if you have discount code or reward points you want to use or would like to estimate your delivery
            cost.</p>

        <div class="row">
            <div class="col-lg-7">
                <div class="mw-600">
                    <div id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">

                                <a class="btn btn-link d-flex" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                                    Use Coupon Code
                                    <span class="ml-auto"></span></a>

                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body grp-btn-cust d-none d-sm-block">
                                    <div class="login-sec">
                                        <label class="mt-0" for="">Enter your coupon here</label>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter coupon here" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Apply Coupon</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body d-sm-none">
                                    <div class="login-sec">

                                        <label class="mt-0" for="">Enter your coupon here</label>
                                        <input type="text" class="form-control" placeholder="Enter coupon here" aria-label="Recipient's username" aria-describedby="button-addon2">


                                        <div class="mt-4">
                                            <button type="button" value="Continue" class="btn register-btn">Apply Coupn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">

                                <a class=" btn btn-link collapsed d-flex align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                    Estimate Shipping & Tax
                                    <span class="ml-auto"></span>
                                </a>

                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body select2-cust">
                                    <div class="login-sec">
                                        <label for="" class="mt-0">Country</label>
                                        <select name="country" style="width: 100%;" class="shipping-country-box">
                                            <option value="">Afghanistan</option>
                                            <option value="">Albania</option>
                                            <option value="">Algeria</option>
                                            <option value="">American Samoa</option>
                                            <option value="">Andorra</option>
                                            <option value="">Angola</option>
                                            <option value="">Anguilla</option>
                                            <option value="">Antarctica</option>
                                            <option value="">Antigua and Barbuda</option>
                                            <option value="">Argentina</option>
                                            <option value="">Armenia</option>
                                            <option value="">Aruba</option>
                                            <option value="">Ascension Island (British)</option>
                                            <option value="">Australia</option>
                                            <option value="">Austria</option>
                                            <option value="">Azerbaijan</option>
                                            <option value="">Bahamas</option>
                                            <option value="">Bahrain</option>
                                            <option value="">Bangladesh</option>
                                            <option value="">Barbados</option>
                                            <option value="">Belarus</option>
                                            <option value="">Belgium</option>
                                            <option value="">Belize</option>
                                            <option value="">Benin</option>
                                        </select>
                                        <label for="" style="display: block;">Region / State</label>
                                        <select name="country" style="width: 100%;" class="shipping-country-box">
                                            <option value="">Punjab</option>
                                            <option value="">Sindh</option>
                                            <option value="">KPK</option>
                                        </select>
                                        <label for="">Postcode / ZIP</label>
                                        <input type="text" placeholder="Enter your postcode" class="form-control" name="" id="" />
                                        <div class="mt-4">
                                            <button type="button" class="btn register-btn" data-toggle="modal" data-target="#exampleModal">
                                                Get Quotes
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="exampleModalLabel">Please select the preffered shipping method to use on this order</h6>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6 style="font-weight: bold;">Flat Rate</h6>
                                                            <div class="pretty p-default p-round p-thick p-pulse">
                                                                <input type="radio" name="payType" />
                                                                <div class="state p-primary-o">
                                                                    <label>
                                                                        Flat shipping rate - $8.00
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer get-quotes-btn">
                                                            <button type="button" class="btn btn-primary register-btn">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Ends-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">

                                <a class="btn btn-link collapsed d-flex" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                                    Use Gift Certificate<span class="ml-auto"></span>
                                </a>

                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body grp-btn-cust d-none d-sm-block">
                                    <div class="login-sec">
                                        <label class="mt-0" for="">Enter gift certificate code</label>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter your gift certificate code" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Apply Gift Certificate</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body d-sm-none">
                                    <div class="login-sec">

                                        <label class="mt-0" for="">Enter gift certificate code</label>
                                        <input type="text" class="form-control" placeholder="Enter your gift certificate code" aria-label="Recipient's username" aria-describedby="button-addon2">


                                        <div class="mt-4">
                                            <button type="button" value="Continue" class="btn register-btn">Apply Gift Certificate</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <input type="submit" value="Continue" class="btn register-btn shopping-cart-btn">
                </div>
            </div>
            <div class="col-lg-5">

                <div class="table-responsive price-table">
                    <table class="roundedCorners">
                        <tbody>
                            <tr>
                                <td>Sub Total:</td>
                                <td>$445</td>
                            </tr>
                            <tr>
                                <td>Eco Tax (-2.00):</td>
                                <td>$445</td>
                            </tr>
                            <tr>
                                <td>VAT (-2.00):</td>
                                <td>$445</td>
                            </tr>
                            <tr>
                                <td>Total:</td>
                                <td>$445</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-default check-out-btn">Check Out</button>
                </div>

            </div>
        </div>

    </div>



    <!--Subscribe Section-->
    <div class="container-fluid subscribe-sec">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <form action="#" style="width: 100%;">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>images/myImages/envelope.png" class="img-fluid envelope-img"><span class="news">NEWSLETTER</span>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" placeholder="YOUR EMAIL ADDRESS" class="subs-input" />
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" class="btn subs-btn" value="SUBSCRIBE" />
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-4">
                    <div style="position: relative">
                        <img src="<?php echo base_url(); ?>images/myImages/kids.png" class="img-fluid">
                        <div class="social-icons">
                            <img src="<?php echo base_url(); ?>images/myImages/fb.png" class="img-fluid">
                            <img src="<?php echo base_url(); ?>images/myImages/insta.png" class="img-fluid">
                            <img src="<?php echo base_url(); ?>images/myImages/skype.png" class="img-fluid">
                            <img src="<?php echo base_url(); ?>images/myImages/twitter.png" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <!--Subscribe Section ends-->

    <?php require("myFooter.php"); ?>

</body>

</html>