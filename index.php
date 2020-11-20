<?php
require('Models/category.php');
require('Models/subcategory.php');
require('Models/product.php');
$cate = new category();
$sub = new Subcategory();
$product = new Product();
$list_sub = $cate-
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mini Shop</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="Public/garcia/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Public/garcia/ssets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="Public/garcia/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="Public/garcia/assets/css/vendor/icofont.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="Public/garcia/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="Public/garcia/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="Public/garcia/assets/css/plugins/nice-select.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="Public/garcia/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="Public/garcia/assets/css/style.css">

</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section section section-wide header-sticky">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="#"><img src="Public/garcia/assets/images/logo/logo_1.png" alt="Logo"></a>
                        </div>
                    </div><!-- Header Logo End -->

                    <!-- Main Menu One Start -->
                    <div class="col-auto d-none d-lg-block position-static">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children"><a href="index.html">Home</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                        </ul> -->
                                    </li>
									<li class="menu-item-has-children"><a href="shop.html">Laptops</a>
										<ul class="sub-menu">
											<?php $list_sub =  ?>
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                        </ul>
									</li>
									<li class="menu-item-has-children"><a href="shop.html">Mobile Phones</a>
									</li>
									<li class="menu-item-has-children"><a href="shop.html">PCs and Compoments</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- Main Menu One End -->
                    <!-- User & Cart & Mobile Menu Button Start -->
                    <div class="col-auto d-flex flex-wrap align-items-center mr-5 mr-lg-0">
                        <div class="header-action">
                            <div class="header-user">
                                <a href="#" class="login"><i class="icofont-login"></i></a>
                                <a href="#" class="user"><i class="icofont-user-alt-3"></i></a>
                            </div>
                            <div class="header-cart">
                                <a href="#" class="offcanvas-cart-toggle"><span class="icon"><i class="icofont-cart"></i><span class="count">3</span></span> <span class="text">$256(3 items)</span></a>
                            </div>
                            <button class="mobile-menu-toggle"><i></i></button>
                        </div>
                    </div><!-- User & Cart & Mobile Menu Button End -->

                </div>
            </div>
        </div><!-- Header Section End -->

        <!--Offcanvas Cart Section Start-->
        <div class="offcanvas-cart-section">
            <div class="inner">

                <!--Offcanvas Cart Top Start-->
                <div class="offcanvas-cart-top">
                    <button class="offcanvas-cart-close">Close Cart <i class="icofont-close-line"></i></button>
                </div>
                <!--Offcanvas Cart Top End-->

                <!--Offcanvas Cart Wrapper Start-->
                <div class="offcanvas-cart-wrap">

                    <!--Offcanvas Cart Start-->
                    <div class="offcanvas-cart">

                        <!--Offcanvas Cart Item Start-->
                        <div class="offcanvas-cart-item">
                            <a href="#" class="image"><img src="Public/garcia/assets/images/products/product-1.jpg" alt=""></a>
                            <div class="content">
                                <a href="#" class="title">Camera Pro 440</a>
                                <span class="price">Price: $295</span>
                                <span class="qty">Qty: 01</span>
                            </div>
                            <button class="cart-item-remove"><i class="icofont-ui-delete"></i></button>
                        </div>
                        <!--Offcanvas Cart Item End-->

                        <!--Offcanvas Cart Item Start-->
                        <div class="offcanvas-cart-item">
                            <a href="single-product.html" class="image"><img src="Public/garcia/assets/images/products/product-2.jpg" alt=""></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Red Digital Camera</a>
                                <span class="price">Price: $275</span>
                                <span class="qty">Qty: 01</span>
                            </div>
                            <button class="cart-item-remove"><i class="icofont-ui-delete"></i></button>
                        </div>
                        <!--Offcanvas Cart Item End-->

                        <!--Offcanvas Cart Item Start-->
                        <div class="offcanvas-cart-item">
                            <a href="single-product.html" class="image"><img src="assets/images/products/product-3.jpg" alt=""></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Axor Digital camera</a>
                                <span class="price">Price: $295</span>
                                <span class="qty">Qty: 01</span>
                            </div>
                            <button class="cart-item-remove"><i class="icofont-ui-delete"></i></button>
                        </div>
                        <!--Offcanvas Cart Item End-->

                    </div>
                    <!--Offcanvas Cart End-->

                    <!--Offcanvas Cart Footer Start-->
                    <div class="offcanvas-cart-footer">
                        <h5 class="total">Total: <span class="amount">$1160</span></h5>
                        <a href="#" class="btn checkout-btn">Check out</a>
                    </div>
                    <!--Offcanvas Cart Footer End-->

                </div>
                <!--Offcanvas Cart Wrapper End-->

            </div>
        </div>
        <!--Offcanvas Cart Section End-->

        <!--Offcanvas Mobile Menu Section Start-->
        <!-- <div class="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger"><i class="icofont-close-line"></i></a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="shop.html">Shop Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="shop-3-column.html">Three Column</a></li>
                                            <li><a href="shop-4-column.html">Four Column</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-list.html">Shop List</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-list.html">Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="shop-list-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="single-product.html">Single Product</a>
                                        <ul class="sub-menu">
                                            <li><a href="single-product.html">Standard</a></li>
                                            <li><a href="single-product-variable.html">Variable</a></li>
                                            <li><a href="single-product-affiliate.html">Affiliate</a></li>
                                            <li><a href="single-product-group.html">Group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login & Register</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="blog-left-sidebar.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-3-column.html">Blog Three Column</a></li>
                                    <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                                    <li><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="my-account.html">MY ACCOUNT </a>
                                    <ul class="sub-menu">
                                        <li><a href="login-register.html">Register</a></li>
                                        <li><a href="login-register.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)">€ Euro</a></li>
                                        <li><a href="javascript:void(0)">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:void(0)">English</a></li>
                                        <li><a href="javascript:void(0)">Germany</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="offcanvas-contact-widget">
                            <ul class="header-contact-info">
                                <li><i class="fa fa-phone"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                            </ul>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="offcanvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        <!-- </div> --> 
        <!--Offcanvas Mobile Menu Section End-->




        <!--Page Banner Section Start-->
        <div class="section section-wide">
            <div class="container-fluid">

                <!--Page Banner Start-->
                <div class="page-banner">
                    <div class="container">
                        <h2 class="page-title">Shop Left Sidebar</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
                <!--Page Banner End-->

            </div>
        </div>
        <!--Page Banner Section End-->

        <!--Product Section Start-->
        <div class="section section-padding">
            <div class="container">
                <div class="row mbn-40">

                    <!--Product Wrapper Start-->
                    <div class="col-lg-9 col-12 order-lg-2 mb-40">

                        <!--Shop Toolbar Start-->
                        <div class="shop-toolbar">

                            <!--Product View Mode Start-->
                            <div class="product-view-mode">
                                <button class="active" data-mode="grid"><i class="fa fa-th"></i></button>
                                <button data-mode="list"><i class="fa fa-align-justify"></i></button>
                            </div>
                            <!--Product View Mode End-->

                            <!--Product Showing Start-->
                            <div class="product-showing mr-auto">
                                <p>Showing 9 of 72</p>
                            </div>
                            <!--Product Showing End-->

                            <!--Product Short Start-->
                            <div class="product-short">
                                <p>Short by</p>
                                <select class="nice-select">
                                    <option value="trending">Trending items</option>
                                    <option value="sales">Best sellers</option>
                                    <option value="rating">Best rated</option>
                                    <option value="date">Newest items</option>
                                    <option value="price-asc">Price: low to high</option>
                                    <option value="price-desc">Price: high to low</option>
                                </select>
                            </div>
                            <!--Product Short End-->

                        </div>
                        <!--Shop Toolbar End-->

                        <div class="shop-product-wrap row mbn-35">

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="Public/garcia/assets/images/products/product-1.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                            <span class="label sale">Sale</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Camera Pro 440</a></h4>

                                            <span class="price">$295.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="Public/garcia/assets/images/products/product-2.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Red Digital Camera</a></h4>

                                            <span class="price">$275.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span style="width: 92%;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-3.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Axor Digital camera</a></h4>

                                            <span class="price">$295.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span style="width: 80%;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-4.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                            <span class="label sale">Sale</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Neko Digital Camera</a></h4>

                                            <span class="price">$199.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-5.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Retro Digital Camera</a></h4>

                                            <span class="price">$245.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span style="width: 50%;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-6.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Polaid camera 300</a></h4>

                                            <span class="price">$325.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span style="width: 92%;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-7.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                            <span class="label sale">Sale</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Retro Pro 600</a></h4>

                                            <span class="price">$285.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-8.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Puls Coolpix SS3</a></h4>

                                            <span class="price">$215.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span style="width: 95%;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="col-md-4 col-6 col-xxs-12 mb-35">
                                <div class="product">

                                    <!--Image & Action Start-->
                                    <div class="image-action">

                                        <a class="image" href="single-product.html"><img src="assets/images/products/product-9.jpg" alt=""></a>

                                        <div class="labels">
                                            <span class="label new">New</span>
                                            <span class="label sale">Sale</span>
                                        </div>

                                        <a href="#" class="wishlist-btn"><i class="icofont-heart"></i></a>

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Image & Action End-->

                                    <!--Content Start-->
                                    <div class="content">

                                        <!--Title & Price Start-->
                                        <div class="title-price">

                                            <h4 class="title"><a href="single-product.html">Retro ProPlus 300</a></h4>

                                            <span class="price">$399.99</span>

                                        </div>
                                        <!--Title & Price End-->

                                        <!--Ratting Start-->
                                        <div class="ratting">
                                            <div class="inner">
                                                <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        <!--Ratting End-->

                                        <!--Description Start-->
                                        <div class="desc">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis quod numquam, sit fugiat, deserunt ipsa mollitia sunt quam corporis ullam rem, accusantium adipisci officia eaque.</p>
                                        </div>
                                        <!--Description End-->

                                        <!--Action Start-->
                                        <div class="action">
                                            <a href="#" class="action-btn action-quickview"><i class="icofont-search-1"></i></a>
                                            <a href="#" class="action-btn action-cart"><i class="icofont-shopping-cart"></i></a>
                                            <a href="#" class="action-btn action-compare"><i class="icofont-refresh"></i></a>
                                        </div>
                                        <!--Action End-->

                                    </div>
                                    <!--Content End-->

                                </div>
                            </div>
                            <!--Product End-->

                            <div class="col-12 mb-35 mt-15">
                                <div class="page-pagination">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--Product Wrapper End-->

                    <!--Sidebar Wrapper Start-->
                    <div class="col-lg-3 col-12 order-lg-1 mb-40">
                        <div class="row mbn-35">

                            <!--Sidebar Start-->
                            <div class="col-12 mb-35">
                                <div class="widget">
                                    <h4 class="widget-title">Search</h4>
                                    <div class="widget-search">
                                        <form action="#">
                                            <input type="search" placeholder="Search">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Sidebar End-->

                            <!--Sidebar Start-->
                            <div class="col-12 mb-35">
                                <div class="widget">
                                    <h4 class="widget-title">Brand</h4>
                                    <ul class="widget-link">
                                        <li><a href="#">Nikkon</a></li>
                                        <li><a href="#">Sumsang</a></li>
                                        <li><a href="#">Phillips</a></li>
                                        <li><a href="#">Zeon</a></li>
                                        <li><a href="#">Panasonic</a></li>
                                        <li><a href="#">Uawei</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Sidebar End-->

                            <!--Sidebar Start-->
                            <div class="col-12 mb-35">
                                <div class="widget">
                                    <h4 class="widget-title">Price</h4>
                                    <div id="price-range" class="widget-price-range"></div>
                                </div>
                            </div>
                            <!--Sidebar End-->

                            <!--Sidebar Start-->
                            <div class="col-12 mb-35">
                                <div class="widget">
                                    <div class="widget-banner banner">
                                        <a href="#"><img src="assets/images/banner/banner-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--Sidebar End-->

                            <!--Sidebar Start-->
                            <div class="col-12 mb-35">
                                <div class="widget">
                                    <h4 class="widget-title">Tags</h4>
                                    <div class="widget-tags">
                                        <a href="#">Digital</a>
                                        <a href="#">DSLR</a>
                                        <a href="#">Red</a>
                                        <a href="#">Retro</a>
                                        <a href="#">Pro</a>
                                        <a href="#">ProPlus</a>
                                        <a href="#">Zoom</a>
                                    </div>
                                </div>
                            </div>
                            <!--Sidebar End-->

                        </div>
                    </div>
                    <!--Sidebar Wrapper End-->

                </div>
            </div>
        </div>
        <!--Product Section End-->

        <!--Subscribe Section Start-->
        <div class="section section-wide">
            <div class="container-fluid">
                <div class="subscribe-section section">

                    <!--Subscribe Content Start-->
                    <div class="subscribe-content">
                        <h2 class="title">Subscribe our Newsletter<span>Get update for news, offers</span></h2>

                        <form id="mc-form" class="mc-form subscribe-form">
                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email here" name="EMAIL">
                            <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->

                    </div>
                    <!--Subscribe Content End-->

                </div>
            </div>
        </div>
        <!--Subscribe Section End-->

        <!--Service/Feature Section Start-->
        <div class="section section-wide section-padding">
            <div class="container-fluid">
                <div class="row mbn-30">

                    <div class="service col-xl-3 col-md-6 col-12 mb-30">
                        <div class="icon"></div>
                        <div class="content">
                            <h3>Free home delivery</h3>
                            <p>Provide free home delivery for the all product over $100</p>
                        </div>
                    </div>

                    <div class="service col-xl-3 col-md-6 col-12 mb-30">
                        <div class="icon"></div>
                        <div class="content">
                            <h3>Quality Products</h3>
                            <p>We ensure the product quality that is our main goal</p>
                        </div>
                    </div>

                    <div class="service col-xl-3 col-md-6 col-12 mb-30">
                        <div class="icon"></div>
                        <div class="content">
                            <h3>3 Days Return</h3>
                            <p>Our Return Policy is very simple and easy for all</p>
                        </div>
                    </div>

                    <div class="service col-xl-3 col-md-6 col-12 mb-30">
                        <div class="icon"></div>
                        <div class="content">
                            <h3>Online Support</h3>
                            <p>Provide 24/7 online support for any information</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Service/Feature Section End-->

        <!--Footer Section Start-->
        <div class="section section-wide">
            <div class="container-fluid">
                <div class="footer-section">

                    <!--Footer Top Start-->
                    <div class="footer-top">
                        <div class="row mbn-40">

                            <!--Footer Widget Start-->
                            <div class="col-lg-3 col-md-6 col-12 mb-40">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">About us</h4>
                                    <div class="footer-widget-text">
                                        <p>The new hero pieces bring instant fashion credibility. Bright florals clash with camouflage prints.</p>
                                    </div>
                                </div>
                                <div class="footer-widget mt-20">
                                    <h4 class="footer-widget-title">Follow us</h4>
                                    <div class="footer-widget-socail">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Widget End-->

                            <!--Footer Widget Start-->
                            <div class="col-lg-3 col-md-6 col-12 mb-40">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Information</h4>
                                    <ul class="footer-widget-link">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Delivary Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Footer Widget End-->

                            <!--Footer Widget Start-->
                            <div class="col-lg-3 col-md-6 col-12 mb-40">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">My Account</h4>
                                    <ul class="footer-widget-link">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Validation</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Footer Widget End-->

                            <!--Footer Widget Start-->
                            <div class="col-lg-3 col-md-6 col-12 mb-40">
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Get In Touch</h4>
                                    <div class="footer-widget-text mb-15">
                                        <p><i class="fa fa-home"></i> 14 Tottenham Road, London, England.</p>
                                        <p><i class="fa fa-phone"></i> (102) 6666 8888</p>
                                        <p><i class="fa fa-envelope"></i> <a href="mailto:info@demo.com">info@demo.com</a></p>
                                        <p><i class="fa fa-fax"></i> (102) 8888 9999</p>
                                    </div>
                                    <img src="assets/images/payment.png" alt="">
                                </div>
                            </div>
                            <!--Footer Widget End-->

                        </div>
                    </div>
                    <!--Footer Top End-->

                    <!--Footer Bottom Start-->
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="copyright col-12">
                                <p>Copyright &copy; 2019 <a href="#">Garcia</a>. All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                    <!--Footer Bottom End-->

                </div>
            </div>
        </div>
        <!--Footer Section End-->


    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="Public/garcia/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="Public/garcia/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="Public/garcia/assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="Public/garcia/assets/js/plugins/slick.min.js"></script>
    <script src="Public/garcia/assets/js/plugins/jqueryui.min.js"></script>
    <script src="Public/garcia/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="Public/garcia/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="Public/garcia/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="Public/garcia/assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="Public/garcia/assets/js/plugins/ajaxchimp.min.js"></script>
    <!-- Main JS -->
    <script src="Public/garcia/assets/js/main.js"></script>

</body>
</html>