<?php include 'connect.php'?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:53 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Cart Style1 - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo $path; ?>assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?php echo $path; ?>assets/css/plugins.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style-min.css">
        <link rel="stylesheet" href="<?php echo $path; ?>assets/css/responsive.css">
    </head>

    <style>
  
  
  
    #siteNav li{
        padding-inline-start: 25px;
    }
    .footer-img{
        margin-bottom: 14px;
    }

    </style>

    <body class="cart-page cart-style1-page">
        <!--Page Wrapper-->
        <div class="page-wrapper">
            

            <!--Header-->
          
            <?php include 'header.php';?>
            <!--End Header-->

              <!--Mobile Menu-->
            <?php include 'sidebar.php';?>
            <!--End Mobile Menu-->

            <!-- Body Container -->
            <div id="page-content"> 
                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1>Your Cart</h1></div>
                                <!--Breadcrumbs-->
                                <div class="breadcrumbs"></div>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">     
                    <div class="row">
                        <!--Cart Content-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                            <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                                <i class="align-middle icon anm anm-truck icon-large me-2"></i><strong class="text-uppercase">Congratulations!</strong> You've got free shipping!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <!--End Alert msg-->

                            <!--Cart Form-->
                            <form action="#" method="post" class="cart-table table-bottom-brd">
                                <table class="table align-middle">
                                    <thead class="cart-row cart-header small-hide position-relative">
                                        <tr>
                                            <th class="action">&nbsp;</th>
                                            <th colspan="2" class="text-start">Product</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart-row cart-flex position-relative">
                                            <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                            <td class="cart-image cart-flex-item">
                                                <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product1-120x170.jpg" src="<?php echo $path; ?>assets/images/products/product1-120x170.jpg" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                            </td>
                                            <td class="cart-meta small-text-left cart-flex-item">
                                                <div class="list-view-item-title">
                                                    <a href="product-layout1.html">Oxford Cuban Shirt</a>
                                                </div>
                                                <div class="cart-meta-text">
                                                    Color: Black<br>Size: Small<br>Qty: 2
                                                </div>
                                                <div class="cart-price d-md-none">
                                                    <span class="money fw-500">$99.00</span>
                                                </div>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small-hide">
                                                <span class="money">$99.00</span>
                                            </td>
                                            <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                        <input class="cart-qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small-hide">
                                                <span class="money fw-500">$198.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart-row cart-flex position-relative">
                                            <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove to Cart"><i class="icon anm anm-times-r"></i></a></td>
                                            <td class="cart-image cart-flex-item">
                                                <a href="product-layout1.html" ><img class="cart-image rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-120x170.jpg" src="<?php echo $path; ?>assets/images/products/product2-120x170.jpg" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                            </td>
                                            <td class="cart-meta small-text-left cart-flex-item">
                                                <div class="list-view-item-title">
                                                    <a href="product-layout1.html">Cuff Beanie Cap</a>
                                                </div>
                                                <div class="cart-meta-text">
                                                    Color: Black<br>Size: Small<br>Qty: 1
                                                </div>
                                                <div class="cart-price d-md-none">
                                                    <span class="money fw-500">$128.00</span>
                                                </div>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small-hide">
                                                <span class="money">$128.00</span>
                                            </td>
                                            <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                                <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                        <input class="cart-qty-input qty" type="text" name="updates[]" value="1" pattern="[0-9]*" />
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" title="Remove" class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                            </td>
                                            <td class="cart-price cart-flex-item text-center small-hide">
                                                <span class="money fw-500">$128.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table> 
                            </form>    
                            <!--End Cart Form-->

                        </div>
                        <!--End Cart Content-->

                        <!--Cart Sidebar-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                            <div class="cart-info sidebar-sticky">
                                <div class="cart-order-detail cart-col">
                                    <div class="row g-0 border-bottom pb-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$226.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon Discount</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">-$25.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">$10.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span class="money">Free shipping</span></span>
                                    </div>
                                    <div class="row g-0 pt-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">$311.00</b></span>
                                    </div>

                                    <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                                    <p class="cart-shipping fst-normal freeShipclaim"><i class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                                    <div class="customCheckbox cart-tearm">
                                        <input type="checkbox" value="allen-vela" id="cart-tearm">
                                        <label for="cart-tearm">I agree with the terms and conditions</label>
                                    </div>
                                    <a href="checkout-style1.html" id="cartCheckout" class="btn btn-lg my-4 checkout w-100" style="background-color:orangered;">Proceed To Checkout</a>
                                    <div class="paymnet-img text-center"><img src="<?php echo $path; ?>assets/images/icons/safepayment.png" alt="Payment" width="299" height="28" /></div>
                                </div>                               
                            </div>
                        </div>
                        <!--End Cart Sidebar-->
                    </div>
                </div>
                <!--End Main Content-->

              
            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <div class="footer footer-5 ftr-bg-black">


                <div class="footer-top border-0 clearfix">
                    <div class="container">                       
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="footer-newsletter icon-arrow">
                                <img src="<?php echo $path; ?>assets/images/samlogo.jpg" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" class="footer-img" width="250" height="70" /><br>
                                        <p>Samuthrika academy, is our educational institution, we offers specialized tutoring, instruction, or training to students or individuals seeking to improve their skills, knowledge, or performance in a particular subject, field, or area. </p>
                                   
                                       
                                        <ul class="list-inline social-icons d-inline-flex mt-3 pt-3" >
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon anm anm-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="icon anm anm-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="icon anm anm-pinterest-p"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="icon anm anm-linkedin-in"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon anm anm-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="icon anm anm-youtube"></i></a></li>
                                  
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links ps-lg-5">
                                <h4 class="h4">My Account</h4>
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="faqs-style1.html">Order History</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="#">Orders & Cart</a></li>
                                    <li><a href="#">Support Center</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                                <h4 class="h4">Information</h4>
                                <ul>
                                    <li><a href="aboutus-style1.html">About Us</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="blog-grid.html">Latest News</a></li>                                   
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms &amp; condition</a></li>
                                </ul>
                            </div>                              
                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-contact">
                                <h4 class="h4">Contact Info</h4>
                                <p class="address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> 10th Cross West Extension, Thillai Nagar, Trichy - 620018</p>
                                <p class="phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i>  <b class="me-2 fw-400">Mobile.No</b> <a href="tel:401234567890">07947336473</a></p>
                                <p class="email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">Email:</b> <a href="mailto:info@example.com">info@example.com</a></p>
                                <p class="work-hour d-flex mb-0"><i class="icon anm anm-clock-r pt-1"></i><span class="hour-time">Working Hours: <br/>Mon - Sun / 9:00 AM - 8:00 PM</span></p>    
                          
                            </div>
                        </div>
                          
                    </div>                      
                    <p class="copytext" style="text-align:center;margin-top:2%;">&copy; Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, exercitationem? Nostrum labore praesentium eaque suscipit ipsa et mollitia officia adipisci consequuntur ratione veniam dolore enim maiores magnam, pariatur aspernatur consectetur..</p>
                       

                </div>        

                <!--<div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse py-lg-1">
                           
                       
                        </div>
                    </div>
                </div>-->

            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <div id="site-scroll" style="background-color:orangered;"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->


            <!-- Product Quickshop Modal-->
            <div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-quickshop" class="product-form align-items-center">
                                <!-- Product Info -->
                                <div class="row g-0 item mb-3">
                                    <a class="col-4 product-image" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/addtocart-modal.jpg" src="<?php echo $path; ?>assets/images/products/addtocart-modal.jpg" alt="Product" title="Product" width="625" height="800" /></a>
                                    <div class="col-8 product-details">
                                        <div class="product-variant ps-3">

                                            <a class="product-title" href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                            <div class="priceRow mt-2 mb-3">
                                                <div class="product-price m-0"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                            </div>
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                                <input type="text" name="quantity" value="1" class="qty">
                                                <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Info -->
                                <!-- Swatches Color -->
                                <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1" data-option-index="0">
                                    <label class="label d-flex justify-content-center">Color:<span class="slVariant ms-1 fw-bold">Black</span></label>
                                    <ul class="swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large radius available active"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius available"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Black" /></li>
                                        <li class="swatch large radius available"><img src="<?php echo $path; ?>assets/images/products/swatches/blue-red.jpg" alt="image" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                        <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Color -->
                                <!-- Swatches Size -->
                                <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2" data-option-index="1">
                                    <label class="label d-flex justify-content-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                    <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                                        <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                        <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                    </ul>
                                </div>
                                <!-- End Swatches Size -->
                                <!-- Product Action -->
                                <div class="product-form-submit d-flex-justify-center">
                                    <button type="submit" name="add" class="btn product-cart-submit me-2"><span>Add to cart</span></button>
                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out d-none" disabled="disabled">Sold out</button>
                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout">Buy it now</button>
                                </div>
                                <!-- End Product Action -->
                                <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">View More Details</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Quickshop Modal -->

            <!-- Product Addtocart Modal-->
            <div class="addtocart-modal modal fade" id="addtocart_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <form method="post" action="#" id="product-form-addtocart" class="product-form align-items-center">
                                <h3 class="title mb-3 text-success text-center">Added to cart Successfully!</h3>
                                <div class="row d-flex-center text-center">
                                    <div class="col-md-6">
                                        <!-- Product Image -->
                                        <a class="product-image" href="product-layout1.html"><img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/addtocart-modal.jpg" src="<?php echo $path; ?>assets/images/products/addtocart-modal.jpg" alt="Product" title="Product" width="625" height="800" /></a>
                                        <!-- End Product Image -->
                                    </div>
                                    <div class="col-md-6 mt-3 mt-md-0">
                                        <!-- Product Info -->
                                        <div class="product-details">

                                            <a class="product-title" href="product-layout1.html">Cuff Beanie Cap</a>
                                            <p class="product-clr my-2 text-muted">Black / XL</p>
                                        </div>
                                        <div class="addcart-total rounded-5">
                                            <p class="product-items mb-2">There are <strong>1</strong> items in your cart</p>
                                            <p class="d-flex-justify-center">Total: <span class="price">$198.00</span></p>
                                        </div>
                                        <!-- End Product Info -->
                                        <!-- Product Action -->
                                        <div class="product-form-submit d-flex-justify-center">
                                            <a href="#" class="btn btn-outline-primary product-continue w-100">Continue Shopping</a>
                                            <a href="cart-style1.html" class="btn btn-secondary product-viewcart w-100 my-2 my-md-3">View Cart</a>
                                            <a href="checkout-style1.html" class="btn btn-primary product-checkout w-100">Proceed to checkout</a>
                                        </div>
                                        <!-- End Product Action -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Addtocart Modal -->

            <!-- Product Quickview Modal-->
            <div class="quickview-modal modal fade" id="quickview_modal" tabindex="-1" aria-hidden="true">           
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                                    <!-- Model Thumbnail -->
                                    <div id="quickView" class="carousel slide">
                                        <!-- Image Slide carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item carousel-item active" data-bs-slide-number="0">
                                                <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2.jpg" src="<?php echo $path; ?>assets/images/products/product2.jpg" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="1">
                                                <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-1.jpg" src="<?php echo $path; ?>assets/images/products/product2-1.jpg" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="2">
                                                <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-2.jpg" src="<?php echo $path; ?>assets/images/products/product2-2.jpg" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="3">
                                                <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-3.jpg" src="<?php echo $path; ?>assets/images/products/product2-3.jpg" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="4">
                                                <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-4.jpg" src="<?php echo $path; ?>assets/images/products/product2-4.jpg" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="item carousel-item" data-bs-slide-number="5">
                                                <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-5.jpg" src="<?php echo $path; ?>assets/images/products/product2-5.jpg" alt="product" title="Product" width="625" height="808" />
                                            </div>
                                        </div>
                                        <!-- End Image Slide carousel items -->
                                        <!-- Thumbnail image -->
                                        <div class="model-thumbnail-img">
                                            <!-- Thumbnail slide -->
                                            <div class="carousel-indicators list-inline">
                                                <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2.jpg" src="<?php echo $path; ?>assets/images/products/product2.jpg" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-1.jpg" src="<?php echo $path; ?>assets/images/products/product2-1.jpg" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-2.jpg" src="<?php echo $path; ?>assets/images/products/product2-2.jpg" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-3.jpg" src="<?php echo $path; ?>assets/images/products/product2-3.jpg" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-4.jpg" src="<?php echo $path; ?>assets/images/products/product2-4.jpg" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                                <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5" data-bs-target="#quickView">
                                                    <img class="rounded-0 blur-up lazyload" data-src="<?php echo $path; ?>assets/images/products/product2-5.jpg" src="<?php echo $path; ?>assets/images/products/product2-5.jpg" alt="product" title="Product" width="625" height="808" />
                                                </div>
                                            </div>
                                            <!-- End Thumbnail slide -->
                                            <!-- Carousel arrow button -->
                                            <a class="carousel-control-prev carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon anm anm-angle-left-r"></i></a>
                                            <a class="carousel-control-next carousel-arrow rounded-1" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon anm anm-angle-right-r"></i></a>
                                            <!-- End Carousel arrow button -->
                                        </div>
                                        <!-- End Thumbnail image -->
                                    </div>
                                    <!-- End Model Thumbnail -->
                                    <div class="text-center mt-3"><a href="product-layout1.html" class="text-link">View More Details</a></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="product-arrow d-flex justify-content-between">
                                        <h2 class="product-title">Product Quick View Popup</h2>
                                    </div>
                                    <div class="product-review d-flex mt-0 mb-2">
                                        <div class="rating"><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                        <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-vendor">Vendor:<span class="text"><a href="#">HVL</a></span></p>  
                                        <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                    </div>
                                    <div class="pro-stockLbl my-2">
                                        <span class="d-flex-center stockLbl instock d-none"><span> In stock</span></span>
                                        <span class="d-flex-center stockLbl preorder d-none"><span> Pre-order Now</span></span>
                                        <span class="d-flex-center stockLbl outstock d-none"><span>Sold out</span></span>
                                    </div>
                                    <div class="product-price d-flex-center my-3">
                                        <span class="price old-price">$135.00</span><span class="price">$129.00</span>
                                    </div>
                                    <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</div>
                                    <form method="post" action="#" id="product_form--option" class="product-form">
                                        <div class="product-options d-flex-wrap">
                                            <div class="product-item swatches-image w-100 mb-3 swatch-0 option1" data-option-index="0">
                                                <label class="label d-flex align-items-center">Color:<span class="slVariant ms-1 fw-bold">Blue</span></label>
                                                <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius available blue"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span></li>
                                                    <li class="swatch large radius available black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span></li>
                                                    <li class="swatch large radius available pink"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink"></span></li>
                                                    <li class="swatch large radius available green"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                                    <li class="swatch large radius soldout yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                                </ul>
                                            </div>
                                            <div class="product-item swatches-size w-100 mb-3 swatch-1 option2" data-option-index="1">
                                                <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold">S</span></label>
                                                <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                    <li class="swatch large radius soldout"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                                    <li class="swatch large radius available active"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                                    <li class="swatch large radius available"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                                </ul>
                                            </div>
                                            <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                                <div class="quantity">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>                                
                                                <div class="addtocart ms-3 fl-1">
                                                    <button type="submit" name="add" class="btn product-cart-submit w-100"><span>Add to cart</span></button>
                                                    <button type="submit" name="sold" class="btn btn-secondary product-sold-out w-100 d-none" disabled="disabled"><span>Sold out</span></button>
                                                    <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout w-100 d-none"><span>Buy it now</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="wishlist-btn d-flex-center">
                                        <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html" title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                                        <a class="add-compare d-flex-center" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to Compare</span></a>
                                    </div>
                                    <!-- Social Sharing -->
                                    <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                        <span class="sharing-lbl">Share :</span>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon anm anm-facebook-f"></i><span class="share-title d-none">Facebook</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon anm anm-twitter"></i><span class="share-title d-none">Tweet</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin it</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon anm anm-linkedin-in"></i><span class="share-title d-none">Instagram</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon anm anm-envelope-l"></i><span class="share-title d-none">WhatsApp</span></a>
                                        <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon anm anm-whatsapp"></i><span class="share-title d-none">Email</span></a>
                                    </div>
                                    <!-- End Social Sharing -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Product Quickview Modal-->


            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="<?php echo $path; ?>assets/js/plugins.js"></script>
            <!-- Main JS -->
            <script src="<?php echo $path; ?>assets/js/main.js"></script>

        </div>
        <!--End Page Wrapper-->
    </body>

<!-- Mirrored from www.annimexweb.com/items/hema/cart-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:55 GMT -->
</html>