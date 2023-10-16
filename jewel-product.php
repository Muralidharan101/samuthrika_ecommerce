<?php include 'connect.php';

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from www.annimexweb.com/items/hema/shop-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:28 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Shop Grid - Hema Multipurpose eCommerce Bootstrap 5 Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $path;?>assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/style-min.css">
    <link rel="stylesheet" href="<?php echo $path;?>assets/css/responsive.css">
</head>
<style>
    #siteNav li {
        padding-inline-start: 25px;
    }

    .footer-img {
        margin-bottom: 14px;
    }



    .product-main-title {
        text-transform: capitalize;
    }

    #selectedOpts {
        font-size: .8rem;
        width: 100%;
    }
</style>

<body class="shop-page sidebar-filter shop-grid-view-page">
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
                        <div
                            class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                            <div class="page-title">
                                <h1>Product Jewellery</h1>
                            </div>
                            <!--Breadcrumbs-->
                            <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span
                                    class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span
                                    class="main-title"><i class="icon anm anm-angle-right-l"></i>Jewellery</span></div>
                            <!--End Breadcrumbs-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Header-->
            <!--Main Content-->
            <div class="container">


                <div class="row">
                    <!--Sidebar-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                        <div class="closeFilter"><i class="icon anm anm-times-r"></i></div>
                        <div class="sidebar-tags clearfix">
                            <!--Filter By-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Filter By</h2>
                                </div>
                                <div class="widget-content filterby filterDD">
                                    <ul class="items tags-list d-flex-wrap">
                                        <li class="item"><a href="#;" class="rounded-5"><span
                                                    class="filter-value">Women</span><i
                                                    class="icon anm anm-times-r"></i></a></li>
                                        <li class="item"><a href="#;" class="rounded-5"><span
                                                    class="filter-value">Blue</span><i
                                                    class="icon anm anm-times-r"></i></a></li>
                                        <li class="item"><a href="#;" class="rounded-5"><span
                                                    class="filter-value">XL</span><i
                                                    class="icon anm anm-times-r"></i></a></li>
                                    </ul>
                                    <a href="#;" class="btn btn-sm brd-link">Clear All</a>
                                </div>
                            </div>
                            <!--End Filter By-->
                            <!--Categories-->
                            <div class="sidebar-widget clearfix categories filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="sidebar-categories scrollspy morelist clearfix">
                                        <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Clothing</a>
                                            <ul class="sublinks">
                                                <li class="lvl2 sub-level sub-sub-level"><a href="#;"
                                                        class="site-nav">Men</a>
                                                    <ul class="sublinks">
                                                        <li class="lvl3"><a href="#" class="site-nav">Shirt <span
                                                                    class="count">(25)</span></a></li>
                                                        <li class="lvl3"><a href="#" class="site-nav">Jeans <span
                                                                    class="count">(6)</span></a></li>
                                                        <li class="lvl3"><a href="#" class="site-nav">Shoes <span
                                                                    class="count">(9)</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl2"><a href="#" class="site-nav">Women <span
                                                            class="count">(14)</span></a></li>
                                                <li class="lvl2"><a href="#" class="site-nav">Child <span
                                                            class="count">(26)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl1 sub-level more-item"><a href="#;" class="site-nav">Jewellery</a>
                                            <ul class="sublinks">
                                                <li class="lvl2"><a href="#" class="site-nav">Ring <span
                                                            class="count">(12)</span></a></li>
                                                <li class="lvl2"><a href="#" class="site-nav">Neckalses <span
                                                            class="count">(15)</span></a></li>
                                                <li class="lvl2"><a href="#" class="site-nav">Eaarings <span
                                                            class="count">(18)</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Accessories <span
                                                    class="count">(14)</span></a></li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Shoes <span
                                                    class="count">(18)</span></a></li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Electronic <span
                                                    class="count">(22)</span></a></li>
                                        <li class="lvl1 more-item"><a href="#" class="site-nav">Cosmetics <span
                                                    class="count">(27)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Categories-->
                            <!--Price Filter-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Price</h2>
                                </div>
                                <form class="widget-content price-filter filterDD" action="#" method="post">
                                    <div id="slider-range" class="mt-2"></div>
                                    <div class="row">
                                        <div class="col-6"><input id="amount" type="text" /></div>
                                        <div class="col-6 text-right"><button class="btn btn-sm">filter</button></div>
                                    </div>
                                </form>
                            </div>
                            <!--End Price Filter-->
                            <!--Color Swatches-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Color</h2>
                                </div>
                                <div class="widget-content filter-color filterDD">
                                    <ul class="swacth-list swatches d-flex-center clearfix pt-0">
                                        <li class="swatch large radius available active"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Blue" /></li>
                                        <li class="swatch large radius available"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Black" /></li>
                                        <li class="swatch large radius available"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Pink" /></li>
                                        <li class="swatch large radius available"><img
                                                src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                                alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Red" /></li>
                                        <li class="swatch large radius available black"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Black"></span>
                                        </li>
                                        <li class="swatch large radius available red"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Red"></span>
                                        </li>
                                        <li class="swatch large radius available blue"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Blue"></span>
                                        </li>
                                        <li class="swatch large radius available pink"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Pink"></span>
                                        </li>
                                        <li class="swatch large radius available gray"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Gray"></span>
                                        </li>
                                        <li class="swatch large radius available green"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span>
                                        </li>
                                        <li class="swatch large radius available orange"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Orange"></span>
                                        </li>
                                        <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Color Swatches-->
                            <!--Size Swatches-->
                            <div class="sidebar-widget filterBox filter-widget">
                                <div class="widget-title">
                                    <h2>Size</h2>
                                </div>
                                <div class="widget-content filter-size filterDD">
                                    <ul class="swacth-list size-swatches d-flex-center clearfix">
                                        <li class="swatch large radius soldout"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="X">X</span></li>
                                        <li class="swatch large radius available active"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span>
                                        </li>
                                        <li class="swatch large radius available"><span class="swatchLbl"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Size Swatches-->
                            <!--Product type-->
                            <div class="sidebar-widget filterBox filter-widget product-type">
                                <div class="widget-title">
                                    <h2>Product type</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="clearfix">
                                        <li><input type="checkbox" value="fashion" id="fashion"><label
                                                for="fashion"><span></span>Fashion</label></li>
                                        <li><input type="checkbox" value="electronic" id="electronic"><label
                                                for="electronic"><span></span>Electronic</label></li>
                                        <li><input type="checkbox" value="shoes" id="shoes"><label
                                                for="shoes"><span></span>Shoes</label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Product type-->
                            <!--Brand-->
                            <div class="sidebar-widget filterBox filter-widget brand-filter">
                                <div class="widget-title">
                                    <h2>Brands</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="clearfix">
                                        <li><input type="checkbox" value="avone" id="avone"><label
                                                for="avone"><span></span>Avone</label></li>
                                        <li><input type="checkbox" value="diva" id="diva"><label
                                                for="diva"><span></span>Diva</label></li>
                                        <li><input type="checkbox" value="optimal" id="optimal"><label
                                                for="optimal"><span></span>Optimal</label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Brand-->
                            <!--Availability-->
                            <div class="sidebar-widget filterBox filter-widget availability">
                                <div class="widget-title">
                                    <h2>Availability</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="clearfix">
                                        <li><input type="checkbox" value="instock" id="instock"><label
                                                for="instock"><span></span>In stock</label></li>
                                        <li><input type="checkbox" value="outofstock" id="outofstock"><label
                                                for="outofstock"><span></span>Out of stock</label></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Availability-->
                            <!--Product Tags-->
                            <div class="sidebar-widget filterBox filter-widget product-tag">
                                <div class="widget-title">
                                    <h2>Product Tags</h2>
                                </div>
                                <div class="widget-content filterDD">
                                    <ul class="tags-list product-tags d-flex-wrap clearfix">
                                        <li class="item active"><a class="rounded-5" href="#">Women</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Shoes</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Beauty</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Accessories</a></li>
                                        <li class="item"><a class="rounded-5" href="#">$100 - $400</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Above $800</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Black</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Blue</a></li>
                                        <li class="item"><a class="rounded-5" href="#">Red</a></li>
                                        <li class="item"><a class="rounded-5" href="#">M</a></li>
                                        <li class="item"><a class="rounded-5" href="#">XS</a></li>
                                    </ul>
                                    <span class="btn btn-sm brd-link btnview">View all</span>
                                </div>
                            </div>
                            <!--End Product Tags-->
                        </div>
                    </div>
                    <!--End Sidebar-->

                    <!--Products-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div
                                class="row col-row product-options row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel1.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-1</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel2.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel2.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-2</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel3.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel3.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-3</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel4.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel4.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-4</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel5.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel5.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-5</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div> 

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel6.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel6.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-6</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel7.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel7.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-7</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel8.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel8.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-8</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel9.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel9.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-9</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div> 
                                
                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="product-layout1.html" class="product-img rounded-0">
                                                <!-- Image -->
                                                <img class=""
                                                    data-src="<?php echo $path;?>assets/images/jewellary/jewel10.jpg"
                                                    src="<?php echo $path;?>assets/images/jewellary/jewel10.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                <!-- End Image -->

                                                <!-- Hover Image
                                                <img class="hover rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product10-1.jpg"
                                                    alt="Product" title="Product" width="625" height="808" />
                                                 End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                           
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details text-left">
                                            <!--Product Vendor-->
                                            <div class="product-vendor">Jewelry</div>
                                            <!--End Product Vendor-->
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Product-10</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">₹500</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!--Sort Description-->
                                            <p class="sort-desc hidden">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage...</p>
                                            <!--End Sort Description-->
                                            <!-- Product Review -->
                                            
                                            <!-- End Product Review -->
                                            <!-- Product Button -->
                                            <div class="button-action hidden">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#addtocart-modal" class="btn btn-md add-to-cart-modal"
                                                            data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                            <i class="icon anm anm-cart-l me-2"></i><span
                                                                class="text">Add to Cart</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <nav class="clearfix pagination-bottom">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i
                                                class="icon anm anm-angle-left-l"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="icon anm anm-angle-right-l"></i></a></li>
                                </ul>
                            </nav>
                            <!-- End Pagination -->
                        </div>
                        <!--End Product Grid-->
                    </div>
                    <!--End Products-->
                </div>
            </div>
            <!--End Main Content-->
        </div>
        <!-- End Body Container -->

        <!--Footer-->
        <?php include 'footer.php';?>
        <!--End Footer-->

        <!--Scoll Top-->
        <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
        <!--End Scoll Top-->

        <!--MiniCart Drawer-->
        <div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
            <!--MiniCart Empty-->
            <div id="cartEmpty" class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                <div class="minicart-header d-flex-center justify-content-between w-100">
                    <h4 class="fs-6">Your cart (0 Items)</h4>
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Close"></i></button>
                </div>
                <div class="cartEmpty-content mt-4">
                    <i class="icon anm anm-cart-l fs-1 text-muted"></i>
                    <p class="my-3">No Products in the Cart</p>
                    <a href="index.html" class="btn btn-primary cart-btn">Continue shopping</a>
                </div>
            </div>
            <!--End MiniCart Empty-->

            <!--MiniCart Content-->
            <div id="cart-drawer" class="block block-cart">
                <div class="minicart-header">
                    <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Close"></i></button>
                    <h4 class="fs-6">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="m-0 clearfix">
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image rounded-0" href="product-layout1.html">
                                <img class="rounded-0 blur-up lazyload"
                                    data-src="<?php echo $path;?>assets/images/products/cart-product-img1.jpg"
                                    src="<?php echo $path;?>assets/images/products/cart-product-img1.jpg" alt="product"
                                    title="Product" width="120" height="170" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Women Sandals</a>
                                <div class="variant-cart my-2">Black / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="price">$54.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="qtyField">
                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image rounded-0" href="product-layout1.html">
                                <img class="rounded-0 blur-up lazyload"
                                    data-src="<?php echo $path;?>assets/images/products/cart-product-img2.jpg"
                                    src="<?php echo $path;?>assets/images/products/cart-product-img2.jpg" alt="product"
                                    title="Product" width="120" height="170" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Sleeve Round T-Shirt</a>
                                <div class="variant-cart my-2">Yellow / M</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="qtyField">
                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon anm anm-pencil-ar"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="shipinfo">
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="freeShipMsg"><i class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Only <span
                                class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span> away from
                            <b>Free Shipping</b></div>
                        <div class="freeShipMsg d-none"><i
                                class="icon anm anm-truck-l fs-6 me-2 align-middle"></i>Congrats! You are eligible for
                            <b>Free Shipping</b></div>
                    </div>
                    <div class="subtotal clearfix my-3">
                        <div class="totalInfo clearfix mb-1 d-none"><span>Shipping:</span><span
                                class="item product-price">$10.00</span></div>
                        <div class="totalInfo clearfix mb-1 d-none"><span>Tax:</span><span
                                class="item product-price">$0.00</span></div>
                        <div class="totalInfo clearfix"><span>Total:</span><span
                                class="item product-price">$163.00</span></div>

                    </div>
                    <div class="agree-check customCheckbox">
                        <input id="prTearm" name="tearm" type="checkbox" value="tearm" required />
                        <label for="prTearm"> I agree with the </label><a href="#" class="ms-1 text-link">Terms &amp;
                            conditions</a>
                    </div>
                    <div class="minicart-action d-flex mt-3">
                        <a href="checkout-style1.html" class="proceed-to-checkout btn btn-primary w-50 me-1">Check
                            Out</a>
                        <a href="cart-style1.html" class="cart-btn btn btn-secondary w-50 ms-1">View Cart</a>
                    </div>
                </div>
            </div>
            <!--MiniCart Content-->
        </div>
        <!--End MiniCart Drawer-->

        <!-- Product Quickshop Modal-->
        <div class="quickshop-modal modal fade" id="quickshop_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <form method="post" action="#" id="product-form-quickshop"
                            class="product-form align-items-center">
                            <!-- Product Info -->
                            <div class="row g-0 item mb-3">
                                <a class="col-4 product-image" href="product-layout1.html"><img
                                        class="rounded-0 blur-up lazyload"
                                        data-src="<?php echo $path;?>assets/images/products/addtocart-modal.jpg"
                                        src="<?php echo $path;?>assets/images/products/addtocart-modal.jpg"
                                        alt="Product" title="Product" width="625" height="800" /></a>
                                <div class="col-8 product-details">
                                    <div class="product-variant ps-3">

                                        <a class="product-title" href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                        <div class="priceRow mt-2 mb-3">
                                            <div class="product-price m-0"><span class="old-price">$114.00</span><span
                                                    class="price">$99.00</span></div>
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
                            <div class="variants-clr swatches-image clearfix mb-3 swatch-0 option1"
                                data-option-index="0">
                                <label class="label d-flex justify-content-center">Color:<span
                                        class="slVariant ms-1 fw-bold">Black</span></label>
                                <ul class="swatches d-flex-justify-center pt-1 clearfix">
                                    <li class="swatch large radius available active"><img
                                            src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                            alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Blue" /></li>
                                    <li class="swatch large radius available"><img
                                            src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                            alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Black" /></li>
                                    <li class="swatch large radius available"><img
                                            src="<?php echo $path;?>assets/images/products/swatches/blue-red.jpg"
                                            alt="image" width="70" height="70" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Pink" /></li>
                                    <li class="swatch large radius available green"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Green"></span></li>
                                    <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Yellow"></span></li>
                                </ul>
                            </div>
                            <!-- End Swatches Color -->
                            <!-- Swatches Size -->
                            <div class="variants-size swatches-size clearfix mb-4 swatch-1 option2"
                                data-option-index="1">
                                <label class="label d-flex justify-content-center">Size:<span
                                        class="slVariant ms-1 fw-bold">S</span></label>
                                <ul class="size-swatches d-flex-justify-center pt-1 clearfix">
                                    <li class="swatch large radius soldout"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span></li>
                                    <li class="swatch large radius available active"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                    <li class="swatch large radius available"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                    <li class="swatch large radius available"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                    <li class="swatch large radius available"><span class="swatchLbl"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span></li>
                                </ul>
                            </div>
                            <!-- End Swatches Size -->
                            <!-- Product Action -->
                            <div class="product-form-submit d-flex-justify-center">
                                <button type="submit" name="add" class="btn product-cart-submit me-2"><span>Add to
                                        cart</span></button>
                                <button type="submit" name="sold" class="btn btn-secondary product-sold-out d-none"
                                    disabled="disabled">Sold out</button>
                                <button type="submit" name="buy" class="btn btn-secondary proceed-to-checkout">Buy it
                                    now</button>
                            </div>
                            <!-- End Product Action -->
                            <div class="text-center mt-3"><a class="text-link" href="product-layout1.html">View More
                                    Details</a></div>
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
                        <form method="post" action="#" id="product-form-addtocart"
                            class="product-form align-items-center">
                            <h3 class="title mb-3 text-success text-center">Added to cart Successfully!</h3>
                            <div class="row d-flex-center text-center">
                                <div class="col-md-6">
                                    <!-- Product Image -->
                                    <a class="product-image" href="product-layout1.html"><img
                                            class="rounded-0 blur-up lazyload"
                                            data-src="<?php echo $path;?>assets/images/products/addtocart-modal.jpg"
                                            src="<?php echo $path;?>assets/images/products/addtocart-modal.jpg"
                                            alt="Product" title="Product" width="625" height="808" /></a>
                                    <!-- End Product Image -->
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <!-- Product Info -->
                                    <div class="product-details">

                                        <a class="product-title" href="product-layout1.html">Cuff Beanie Cap</a>
                                        <p class="product-clr my-2 text-muted">Black / XL</p>
                                    </div>
                                    <div class="addcart-total rounded-5">
                                        <p class="product-items mb-2">There are <strong>1</strong> items in your cart
                                        </p>
                                        <p class="d-flex-justify-center">Total: <span class="price">$198.00</span></p>
                                    </div>
                                    <!-- End Product Info -->
                                    <!-- Product Action -->
                                    <div class="product-form-submit d-flex-justify-center">
                                        <a href="#" class="btn btn-outline-primary product-continue w-100">Continue
                                            Shopping</a>
                                        <a href="cart-style1.html"
                                            class="btn btn-secondary product-viewcart w-100 my-2 my-md-3">View Cart</a>
                                        <a href="checkout-style1.html"
                                            class="btn btn-primary product-checkout w-100">Proceed to checkout</a>
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
                                            <img class="rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path;?>assets/images/products/product2.jpg"
                                                src="<?php echo $path;?>assets/images/products/product2.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="1">
                                            <img class="rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path;?>assets/images/products/product2-1.jpg"
                                                src="<?php echo $path;?>assets/images/products/product2-1.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="2">
                                            <img class="rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path;?>assets/images/products/product2-2.jpg"
                                                src="<?php echo $path;?>assets/images/products/product2-2.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="3">
                                            <img class="rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path;?>assets/images/products/product2-3.jpg"
                                                src="<?php echo $path;?>assets/images/products/product2-3.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="4">
                                            <img class="rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path;?>assets/images/products/product2-4.jpg"
                                                src="<?php echo $path;?>assets/images/products/product2-4.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                        <div class="item carousel-item" data-bs-slide-number="5">
                                            <img class="rounded-0 blur-up lazyload"
                                                data-src="<?php echo $path;?>assets/images/products/product2-5.jpg"
                                                src="<?php echo $path;?>assets/images/products/product2-5.jpg"
                                                alt="product" title="Product" width="625" height="808" />
                                        </div>
                                    </div>
                                    <!-- End Image Slide carousel items -->
                                    <!-- Thumbnail image -->
                                    <div class="model-thumbnail-img">
                                        <!-- Thumbnail slide -->
                                        <div class="carousel-indicators list-inline">
                                            <div class="list-inline-item active" id="carousel-selector-0"
                                                data-bs-slide-to="0" data-bs-target="#quickView">
                                                <img class="rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product2.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product2.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1"
                                                data-bs-target="#quickView">
                                                <img class="rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product2-1.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product2-1.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2"
                                                data-bs-target="#quickView">
                                                <img class="rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product2-2.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product2-2.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3"
                                                data-bs-target="#quickView">
                                                <img class="rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product2-3.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product2-3.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4"
                                                data-bs-target="#quickView">
                                                <img class="rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product2-4.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product2-4.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                            <div class="list-inline-item" id="carousel-selector-5" data-bs-slide-to="5"
                                                data-bs-target="#quickView">
                                                <img class="rounded-0 blur-up lazyload"
                                                    data-src="<?php echo $path;?>assets/images/products/product2-5.jpg"
                                                    src="<?php echo $path;?>assets/images/products/product2-5.jpg"
                                                    alt="product" title="Product" width="625" height="808" />
                                            </div>
                                        </div>
                                        <!-- End Thumbnail slide -->
                                        <!-- Carousel arrow button -->
                                        <a class="carousel-control-prev carousel-arrow rounded-1" href="#quickView"
                                            data-bs-target="#quickView" data-bs-slide="prev"><i
                                                class="icon anm anm-angle-left-r"></i></a>
                                        <a class="carousel-control-next carousel-arrow rounded-1" href="#quickView"
                                            data-bs-target="#quickView" data-bs-slide="next"><i
                                                class="icon anm anm-angle-right-r"></i></a>
                                        <!-- End Carousel arrow button -->
                                    </div>
                                    <!-- End Thumbnail image -->
                                </div>
                                <!-- End Model Thumbnail -->
                                <div class="text-center mt-3"><a href="product-layout1.html" class="text-link">View More
                                        Details</a></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="product-arrow d-flex justify-content-between">
                                    <h2 class="product-title">Product Quick View Popup</h2>
                                </div>
                                <div class="product-review d-flex mt-0 mb-2">
                                    <div class="rating"><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i
                                            class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i></div>
                                    <div class="reviews ms-2"><a href="#">6 Reviews</a></div>
                                </div>
                                <div class="product-info">
                                    <p class="product-vendor">Vendor:<span class="text"><a href="#">HVL</a></span></p>
                                    <p class="product-sku">SKU:<span class="text">RF104</span></p>
                                </div>
                                <div class="pro-stockLbl my-2">
                                    <span class="d-flex-center stockLbl instock d-none"><span> In stock</span></span>
                                    <span class="d-flex-center stockLbl preorder d-none"><span> Pre-order
                                            Now</span></span>
                                    <span class="d-flex-center stockLbl outstock d-none"><span>Sold out</span></span>
                                </div>
                                <div class="product-price d-flex-center my-3">
                                    <span class="price old-price">$135.00</span><span class="price">$129.00</span>
                                </div>
                                <div class="sort-description">The standard chunk of Lorem Ipsum used since the 1500s is
                                    reproduced below for those interested.</div>
                                <form method="post" action="#" id="product_form--option" class="product-form">
                                    <div class="product-options d-flex-wrap">
                                        <div class="product-item swatches-image w-100 mb-3 swatch-0 option1"
                                            data-option-index="0">
                                            <label class="label d-flex align-items-center">Color:<span
                                                    class="slVariant ms-1 fw-bold">Blue</span></label>
                                            <ul class="variants-clr swatches d-flex-center pt-1 clearfix">
                                                <li class="swatch large radius available blue"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Blue"></span></li>
                                                <li class="swatch large radius available black"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Black"></span></li>
                                                <li class="swatch large radius available pink"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pink"></span></li>
                                                <li class="swatch large radius available green"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Green"></span></li>
                                                <li class="swatch large radius soldout yellow"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Yellow"></span></li>
                                            </ul>
                                        </div>
                                        <div class="product-item swatches-size w-100 mb-3 swatch-1 option2"
                                            data-option-index="1">
                                            <label class="label d-flex align-items-center">Size:<span
                                                    class="slVariant ms-1 fw-bold">S</span></label>
                                            <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
                                                <li class="swatch large radius soldout"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="XS">XS</span></li>
                                                <li class="swatch large radius available active"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="S">S</span></li>
                                                <li class="swatch large radius available"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="M">M</span></li>
                                                <li class="swatch large radius available"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="L">L</span></li>
                                                <li class="swatch large radius available"><span class="swatchLbl"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="XL">XL</span></li>
                                            </ul>
                                        </div>
                                        <div class="product-action d-flex-wrap w-100 pt-1 mb-3 clearfix">
                                            <div class="quantity">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"
                                                            aria-hidden="true"></i></a>
                                                    <input type="text" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-l"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="addtocart ms-3 fl-1">
                                                <button type="submit" name="add"
                                                    class="btn product-cart-submit w-100"><span>Add to
                                                        cart</span></button>
                                                <button type="submit" name="sold"
                                                    class="btn btn-secondary product-sold-out w-100 d-none"
                                                    disabled="disabled"><span>Sold out</span></button>
                                                <button type="submit" name="buy"
                                                    class="btn btn-secondary proceed-to-checkout w-100 d-none"><span>Buy
                                                        it now</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="wishlist-btn d-flex-center">
                                    <a class="add-wishlist d-flex-center me-3" href="wishlist-style1.html"
                                        title="Add to Wishlist"><i class="icon anm anm-heart-l me-1"></i> <span>Add to
                                            Wishlist</span></a>
                                    <a class="add-compare d-flex-center" href="compare-style1.html"
                                        title="Add to Compare"><i class="icon anm anm-random-r me-2"></i> <span>Add to
                                            Compare</span></a>
                                </div>
                                <!-- Social Sharing -->
                                <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                                    <span class="sharing-lbl">Share :</span>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i
                                            class="icon anm anm-facebook-f"></i><span
                                            class="share-title d-none">Facebook</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i
                                            class="icon anm anm-twitter"></i><span
                                            class="share-title d-none">Tweet</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i
                                            class="icon anm anm-pinterest-p"></i> <span class="share-title d-none">Pin
                                            it</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i
                                            class="icon anm anm-linkedin-in"></i><span
                                            class="share-title d-none">Instagram</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i
                                            class="icon anm anm-envelope-l"></i><span
                                            class="share-title d-none">WhatsApp</span></a>
                                    <a href="#" class="d-flex-center btn btn-link btn--share share-email"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i
                                            class="icon anm anm-whatsapp"></i><span
                                            class="share-title d-none">Email</span></a>
                                </div>
                                <!-- End Social Sharing -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Product Quickview Modal-->


        <!-- Sticky Cart 
        <div class="stickyCart">
            <div class="container">
                <form method="post" action="#" id="stickycart-form" class="d-flex-center justify-content-center">
                    <div class="product-featured-img"><img class="blur-up lazyload"
                            data-src="<?php echo $path ?>img/tennis.png"
                            src="<?php echo $path ?>assets/images/products/product1-120x170.jpg" alt="product"
                            width="120" height="170" /></div>
                    <div class="sticky-title ms-2 ps-1 pe-5">Tennis Trophy</div>
                    <div class="stickyOptions position-relative">
                        <div class="selectedOpt" id="selectedOpts">Small / 140mm -&nbsp;<span
                                class="money">₹2,50,000</span></div>
                        <ul>
                            <li class="vrOpt" data-val="31677941252156" data-no="0">Small / 120mm - ₹2,50,000</li>
                            <li class="vrOpt" data-val="31677941383228" data-no="1">Medium / 140mm - ₹3,75,000</li>
                            <li class="vrOpt" data-val="31677941514300" data-no="2">Large / 155mm - ₹5,50,000</li>
                             
                        </ul>
                    </div>
                    <select name="id" id="variantOptions1" class="product-form__variants selectbox no-js d-none ms-3">
                        <option selected="selected" value="31677941252156">Red / S</option>
                        <option value="31677941383228">RSmall / 120mm</option>
                        <option value="31677941514300">Medium / 140m</option>
                        <option value="31677941678140">Large / 155mm</option>
                       
                    </select>

                    <div class="qtyField mx-2">
                        <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                        <input type="text" name="quantity" value="1" class="product-form-input qty" />
                        <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                    </div>
                    <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit">
                        <span>Add to cart</span>
                    </button>
                </form>
            </div>
        </div>
         End Sticky Cart -->

        <!-- Including Jquery/Javascript -->
        <!-- Plugins JS -->
        <script src="<?php echo $path;?>assets/js/plugins.js"></script>
        <!-- Main JS -->
        <script src="<?php echo $path;?>assets/js/main.js"></script>

    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from www.annimexweb.com/items/hema/shop-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 07:28:29 GMT -->

</html>