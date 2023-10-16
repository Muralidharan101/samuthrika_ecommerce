<style>
    .logo1 img {
        display: block;
        max-width: 170px;
        width: 250px;
        /* height: 150px; */
       
    }
</style>


<?php include 'connect.php';?>
<header class="header header-1 header-fixed">
    <div class="container">


        <div class="row  d-flex justify-content-between pt-3">
            <!--Logo-->
            <div class="logo-main col-4 col-sm-4 col-md-4 col-lg-3 " style="">
                <a class="logo1" href="index.php">
                    <img src="<?php echo $path; ?>assets/images/samlogo.jpg" class="logo-img" alt=""
                        title="Hema Multipurpose Html Template" >
                </a>
            </div>
            <!--End Logo-->
            <!--Menu-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col">
                <nav class="navigation" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center">
                        <li class="lvl1 parent dropdown"><a href="index.php">Home
                                <!--<i class="icon anm anm-angle-down-l"></i>--></a>

                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Products<i
                                    class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="jewel-product.php" class="site-nav">Jewellery</a></li>
                                <li><a href="cloth-product.php" class="site-nav">Clothes</a></li>
                                <li><a href="tailoring-product.php" class="site-nav">Talioring</a></li>
                            </ul>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="contact-us.php">Contact Us
                                <!--<<i class="icon anm anm-angle-down-l"></i>--></a>

                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">About us
                                <!--<i class="icon anm anm-angle-down-l"></i>--></a>

                        </li>
                    </ul>
                </nav>
            </div>
            <!--End Menu-->
            <!--Right Icon-->
            <div class="col-8 col-sm-8 col-md-8 col-lg-3 align-self-center icons-col text-right">


                <!--Account-->
                <div class="account-parent iconset">
                    <div class="account-link" title="Account"><i class="hdr-icon icon anm anm-user-al"></i></div>
                    <div id="accountBox">
                        <div class="customer-links">
                            <ul class="m-0">
                                <li><a href="login.php"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                <li><a href="register.php"><i class="icon anm anm-user-al"></i>Register</a></li>
                                <li><a href="my-account.html"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                <li><a href="wishlist-style1.html"><i class="icon anm anm-heart-l"></i>Wishlist</a></li>
                                <li><a href="compare-style1.html"><i class="icon anm anm-random-r"></i>Compare</a></li>
                                <li><a href="login.html"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Account-->
                <!--Minicart-->
                <div class="header-cart iconset" title="Cart">
                    <a href="cart-section.php" class="header-cart btn-minicart clr-none"><i
                            class="hdr-icon icon anm anm-bag-l"></i><span class="cart-count"
                            style="background-color:orangered;">2</span></a>
                </div>
                <!--End Minicart-->

                <!--Mobile Toggle-->
                <button type="button" class="iconset menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"><i
                        class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                <!--End Mobile Toggle-->
            </div>
            <!--End Right Icon-->
        </div>
    </div>
           
</header>