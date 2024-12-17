<?php
include("conn.php");

?>

<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/modave/shop-default-list.html by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 14 Dec 2024 14:49:37 GMT -->

<head>
    <meta charset="utf-8">
    <title>Modave - Multipurpose eCommerce</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Themesflat Modave, Multipurpose eCommerce Template">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

</head>

<body class="preload-wrapper">

    <!-- Scroll Top -->
    <button id="scroll-top">
        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
            xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_15741_24194)">
                <path
                    d="M3 11.9175L12 2.91748L21 11.9175H16.5V20.1675C16.5 20.3664 16.421 20.5572 16.2803 20.6978C16.1397 20.8385 15.9489 20.9175 15.75 20.9175H8.25C8.05109 20.9175 7.86032 20.8385 7.71967 20.6978C7.57902 20.5572 7.5 20.3664 7.5 20.1675V11.9175H3Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
                <clipPath id="clip0_15741_24194">
                    <rect width="24" height="24" fill="white" transform="translate(0 0.66748)" />
                </clipPath>
            </defs>
        </svg>
    </button>

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Top Bar-->
        <div class="tf-topbar bg-main">
            <div class="container">
                <div class="tf-topbar_wrap d-flex align-items-center justify-content-center justify-content-xl-between">
                    <ul class="topbar-left">
                        <li><a class="text-caption-1 text-white" href="tel:315-666-6688">315-666-6688</a></li>
                        <li><a class="text-caption-1 text-white" href="#">themesflat@gmail.com</a></li>
                        <li><a class="text-caption-1 text-white text-decoration-underline" href="store-list.html">Our
                                Store</a></li>
                    </ul>
                    <div class="topbar-right d-none d-xl-block">
                        <div class="tf-cur justify-content-end">
                            <div class="tf-currencies">
                                <select class="image-select center style-default type-currencies color-white">
                                    <option selected data-thumbnail="images/country/us.svg">USD</option>
                                    <option data-thumbnail="images/country/vn.svg">VND</option>
                                </select>
                            </div>
                            <div class="tf-languages">
                                <select class="image-select center style-default type-languages color-white">
                                    <option>English</option>
                                    <option>Vietnam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header id="header" class="header-default">
            <div class="container">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                            <i class="icon icon-categories"></i>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="index.html" class="logo-header">
                            <img src="images/logo/logo.svg" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                                <li class="menu-item">
                                    <a href="#" class="item-link">Home<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row-demo">
                                                <div class="demo-item">
                                                    <a href="index.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-womenswear.jpg"
                                                                src="images/demo/home-fashion-womenswear.jpg"
                                                                alt="home-fashion-womenswear">
                                                            <div class="demo-label">
                                                                <span class="demo-new">New</span>
                                                                <span>Trend</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Fashion Womenswear</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-eleganceNest.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-eleganceNest.jpg"
                                                                src="images/demo/home-fashion-eleganceNest.jpg"
                                                                alt="home-fashion-eleganceNest">
                                                            <div class="demo-label">
                                                                <span class="demo-new">New</span>
                                                                <span class="demo-hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Fashion EleganceNest</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-main.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-main.jpg"
                                                                src="images/demo/home-fashion-main.jpg"
                                                                alt="home-fashion-main">
                                                            <div class="demo-label">
                                                                <span class="demo-hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Fashion Main</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-trendset.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-trendset.jpg"
                                                                src="images/demo/home-fashion-trendset.jpg"
                                                                alt="home-fashion-trendset">
                                                        </div>
                                                        <span class="demo-name">Fashion TrendsetHome</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-vogueLing.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-vogueLiving.jpg"
                                                                src="images/demo/home-fashion-vogueLiving.jpg"
                                                                alt="home-fashion-vogueLiving">
                                                        </div>
                                                        <span class="demo-name">Fashion VogueLiving</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-elegantAbode.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-elegantAbode.jpg"
                                                                src="images/demo/home-fashion-elegantAbode.jpg"
                                                                alt="home-fashion-elegantAbode">
                                                        </div>
                                                        <span class="demo-name">Fashion ElegantAbode</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-glamDwell.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-glamDwell.jpg"
                                                                src="images/demo/home-fashion-glamDwell.jpg"
                                                                alt="home-fashion-glamDwell">
                                                            <div class="demo-label">
                                                                <span class="demo-new">New</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Fashion GlamDwell</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-classyCove.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-classycove.jpg"
                                                                src="images/demo/home-fashion-classycove.jpg"
                                                                alt="home-fashion-classyCove">
                                                        </div>
                                                        <span class="demo-name">Fashion ClassyCove</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-chicHaven.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-chicHaven.jpg"
                                                                src="images/demo/home-fashion-chicHaven.jpg"
                                                                alt="home-fashion-chicHaven1">
                                                        </div>
                                                        <span class="demo-name">Fashion ChicHaven 1</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-chicHaven-02.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-chicHaven2.jpg"
                                                                src="images/demo/home-fashion-chicHaven2.jpg"
                                                                alt="home-fashion-chicHaven2">
                                                        </div>
                                                        <span class="demo-name">Fashion ChicHaven 2</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-tiktok.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-tiktok.jpg"
                                                                src="images/demo/home-fashion-tiktok.jpg"
                                                                alt="home-fashion-tiktok">
                                                        </div>
                                                        <span class="demo-name">Fashion TikTok</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-fashion-luxeLiving.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload"
                                                                data-src="images/demo/home-fashion-luxeLiving.jpg"
                                                                src="images/demo/home-fashion-luxeLiving.jpg"
                                                                alt="home-fashion-luxeLiving">
                                                        </div>
                                                        <span class="demo-name">Fashion LuxeLiving</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center view-all-demo">
                                                <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn"><span
                                                        class="text">View All Demos</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item active">
                                    <a href="#" class="item-link">Shop<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Shop Layout</div>
                                                        <ul class="menu-list">
                                                            <li><a href="shop-default-grid.html"
                                                                    class="menu-link-text">Default Grid</a></li>
                                                            <li><a href="shop-default-list.html"
                                                                    class="active menu-link-text">Default List</a></li>
                                                            <li><a href="shop-fullwidth-list.html"
                                                                    class="menu-link-text">Full Width List</a></li>
                                                            <li><a href="shop-fullwidth-grid.html"
                                                                    class="menu-link-text">Full Width Grid</a></li>
                                                            <li><a href="shop-left-sidebar.html"
                                                                    class="menu-link-text">Left Sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html"
                                                                    class="menu-link-text">Right Sidebar</a></li>
                                                            <li><a href="shop-filter-dropdown.html"
                                                                    class="menu-link-text">Filter Dropdown</a></li>
                                                            <li><a href="shop-filter-canvas.html"
                                                                    class="menu-link-text">Filter Canvas</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Shop Features</div>
                                                        <ul class="menu-list">
                                                            <li><a href="shop-categories-top.html"
                                                                    class="menu-link-text">Categories Top 1</a></li>
                                                            <li><a href="shop-categories-top-02.html"
                                                                    class="menu-link-text">Categories Top 2</a></li>
                                                            <li><a href="shop-collection.html"
                                                                    class="menu-link-text">Shop Collection</a></li>
                                                            <li><a href="shop-breadcrumb-img.html"
                                                                    class="menu-link-text">Breadcrumb IMG</a></li>
                                                            <li><a href="shop-breadcrumb-left.html"
                                                                    class="menu-link-text">Breadcrumb Left</a></li>
                                                            <li><a href="shop-breadcrumb-background.html"
                                                                    class="menu-link-text">Breadcrumb BG</a></li>
                                                            <li><a href="shop-load-button.html"
                                                                    class="menu-link-text">Load Button</a></li>
                                                            <li><a href="shop-pagination.html"
                                                                    class="menu-link-text">Pagination</a></li>
                                                            <li><a href="shop-infinite-scrolling.html"
                                                                    class="menu-link-text">Infinite Scrolling</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Products Hover</div>
                                                        <ul class="menu-list">

                                                            <li><a href="product-style-01.html"
                                                                    class="menu-link-text">Product Style 1</a></li>
                                                            <li><a href="product-style-02.html"
                                                                    class="menu-link-text">Product Style 2</a></li>
                                                            <li><a href="product-style-03.html"
                                                                    class="menu-link-text">Product Style 3</a></li>
                                                            <li><a href="product-style-04.html"
                                                                    class="menu-link-text">Product Style 4</a></li>
                                                            <li><a href="product-style-05.html"
                                                                    class="menu-link-text">Product Style 5</a></li>
                                                            <li><a href="product-style-06.html"
                                                                    class="menu-link-text">Product Style 6</a></li>
                                                            <li><a href="product-style-07.html"
                                                                    class="menu-link-text">Product Style 7</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">My Pages</div>
                                                        <ul class="menu-list">
                                                            <li><a href="wish-list.html" class="menu-link-text">Wish
                                                                    List</a></li>
                                                            <li><a href="search-result.html"
                                                                    class="menu-link-text">Search Result</a></li>
                                                            <li><a href="shopping-cart.html"
                                                                    class="menu-link-text">Shopping Cart</a></li>
                                                            <li><a href="login.html"
                                                                    class="menu-link-text">Login/Register</a></li>
                                                            <li><a href="forget-password.html"
                                                                    class="menu-link-text">Forget Password</a></li>
                                                            <li><a href="order-tracking.html"
                                                                    class="menu-link-text">Order Tracking</a></li>
                                                            <li><a href="my-account.html" class="menu-link-text">My
                                                                    Account</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="wrapper-sub-shop">
                                                        <div class="menu-heading">Recent Products</div>
                                                        <div dir="ltr" class="swiper tf-product-header">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <a href="product-detail.html"
                                                                                class="product-img">
                                                                                <img class="lazyload img-product"
                                                                                    data-src="images/products/womens/women-19.jpg"
                                                                                    src="images/products/womens/women-19.jpg"
                                                                                    alt="image-product">
                                                                                <img class="lazyload img-hover"
                                                                                    data-src="images/products/womens/women-20.jpg"
                                                                                    src="images/products/womens/women-20.jpg"
                                                                                    alt="image-product">
                                                                            </a>
                                                                            <div class="list-product-btn">
                                                                                <a href="javascript:void(0);"
                                                                                    class="box-icon wishlist btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-heart"></span>
                                                                                    <span
                                                                                        class="tooltip">Wishlist</span>
                                                                                </a>
                                                                                <a href="#compare"
                                                                                    data-bs-toggle="offcanvas"
                                                                                    aria-controls="compare"
                                                                                    class="box-icon compare btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-gitDiff"></span>
                                                                                    <span class="tooltip">Compare</span>
                                                                                </a>
                                                                                <a href="#quickView"
                                                                                    data-bs-toggle="modal"
                                                                                    class="box-icon quickview tf-btn-loading">
                                                                                    <span class="icon icon-eye"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-btn-main">
                                                                                <a href="#shoppingCart"
                                                                                    data-bs-toggle="modal"
                                                                                    class="btn-main-product">Add To
                                                                                    cart</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="product-detail.html"
                                                                                class="title link">V-neck cotton
                                                                                T-shirt</a>
                                                                            <span class="price">$59.99</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <a href="product-detail.html"
                                                                                class="product-img">
                                                                                <img class="lazyload img-product"
                                                                                    data-src="images/products/womens/women-37.jpg"
                                                                                    src="images/products/womens/women-37.jpg"
                                                                                    alt="image-product">
                                                                                <img class="lazyload img-hover"
                                                                                    data-src="images/products/womens/women-38.jpg"
                                                                                    src="images/products/womens/women-38.jpg"
                                                                                    alt="image-product">
                                                                            </a>
                                                                            <div class="list-product-btn">
                                                                                <a href="javascript:void(0);"
                                                                                    class="box-icon wishlist btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-heart"></span>
                                                                                    <span
                                                                                        class="tooltip">Wishlist</span>
                                                                                </a>
                                                                                <a href="#compare"
                                                                                    data-bs-toggle="offcanvas"
                                                                                    aria-controls="compare"
                                                                                    class="box-icon compare btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-gitDiff"></span>
                                                                                    <span class="tooltip">Compare</span>
                                                                                </a>
                                                                                <a href="#quickView"
                                                                                    data-bs-toggle="modal"
                                                                                    class="box-icon quickview tf-btn-loading">
                                                                                    <span class="icon icon-eye"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-btn-main">
                                                                                <a href="#shoppingCart"
                                                                                    data-bs-toggle="modal"
                                                                                    class="btn-main-product">Add To
                                                                                    cart</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="product-detail.html"
                                                                                class="title link">Polarized
                                                                                sunglasses</a>
                                                                            <span class="price">$59.99</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <a href="product-detail.html"
                                                                                class="product-img">
                                                                                <img class="lazyload img-product"
                                                                                    data-src="images/products/womens/women-8.jpg"
                                                                                    src="images/products/womens/women-8.jpg"
                                                                                    alt="image-product">
                                                                                <img class="lazyload img-hover"
                                                                                    data-src="images/products/womens/women-9.jpg"
                                                                                    src="images/products/womens/women-9.jpg"
                                                                                    alt="image-product">
                                                                            </a>
                                                                            <div class="list-product-btn">
                                                                                <a href="javascript:void(0);"
                                                                                    class="box-icon wishlist btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-heart"></span>
                                                                                    <span
                                                                                        class="tooltip">Wishlist</span>
                                                                                </a>
                                                                                <a href="#compare"
                                                                                    data-bs-toggle="offcanvas"
                                                                                    aria-controls="compare"
                                                                                    class="box-icon compare btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-gitDiff"></span>
                                                                                    <span class="tooltip">Compare</span>
                                                                                </a>
                                                                                <a href="#quickView"
                                                                                    data-bs-toggle="modal"
                                                                                    class="box-icon quickview tf-btn-loading">
                                                                                    <span class="icon icon-eye"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-btn-main">
                                                                                <a href="#shoppingCart"
                                                                                    data-bs-toggle="modal"
                                                                                    class="btn-main-product">Add To
                                                                                    cart</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="product-detail.html"
                                                                                class="title link">Ribbed cotton-blend
                                                                                top</a>
                                                                            <span class="price">$59.99</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <a href="product-detail.html"
                                                                                class="product-img">
                                                                                <img class="lazyload img-product"
                                                                                    data-src="images/products/womens/women-171.jpg"
                                                                                    src="images/products/womens/women-172.jpg"
                                                                                    alt="image-product">
                                                                                <img class="lazyload img-hover"
                                                                                    data-src="images/products/womens/women-171.jpg"
                                                                                    src="images/products/womens/women-172.jpg"
                                                                                    alt="image-product">
                                                                            </a>
                                                                            <div class="list-product-btn">
                                                                                <a href="javascript:void(0);"
                                                                                    class="box-icon wishlist btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-heart"></span>
                                                                                    <span
                                                                                        class="tooltip">Wishlist</span>
                                                                                </a>
                                                                                <a href="#compare"
                                                                                    data-bs-toggle="offcanvas"
                                                                                    aria-controls="compare"
                                                                                    class="box-icon compare btn-icon-action">
                                                                                    <span
                                                                                        class="icon icon-gitDiff"></span>
                                                                                    <span class="tooltip">Compare</span>
                                                                                </a>
                                                                                <a href="#quickView"
                                                                                    data-bs-toggle="modal"
                                                                                    class="box-icon quickview tf-btn-loading">
                                                                                    <span class="icon icon-eye"></span>
                                                                                    <span class="tooltip">Quick
                                                                                        View</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-btn-main">
                                                                                <a href="#shoppingCart"
                                                                                    data-bs-toggle="modal"
                                                                                    class="btn-main-product">Add To
                                                                                    cart</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="product-detail.html"
                                                                                class="title link">Faux-leather
                                                                                trousers</a>
                                                                            <span class="price">$79.99</span>
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
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="item-link">Products<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Products Layout</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-detail.html"
                                                                    class="menu-link-text">Product Default</a></li>
                                                            <li><a href="product-grid-1.html"
                                                                    class="menu-link-text">Product Grid1</a></li>
                                                            <li><a href="product-grid-2.html"
                                                                    class="menu-link-text">Product Grid2</a></li>
                                                            <li><a href="product-stacked.html"
                                                                    class="menu-link-text">Product stacked</a></li>
                                                            <li><a href="product-right-thumbnails.html"
                                                                    class="menu-link-text">Product right thumbnails</a>
                                                            </li>
                                                            <li><a href="product-bottom-thumbnails.html"
                                                                    class="menu-link-text">Product bottom thumbnails</a>
                                                            </li>
                                                            <li><a href="product-description-accordion.html"
                                                                    class="menu-link-text">Product Description
                                                                    Accordion</a></li>
                                                            <li><a href="product-description-list.html"
                                                                    class="menu-link-text">Product Description List</a>
                                                            </li>
                                                            <li><a href="product-description-menutab.html"
                                                                    class="menu-link-text">Product Description
                                                                    MenuTab</a></li>
                                                            <li><a href="product-description-fullwidth.html"
                                                                    class="menu-link-text">Product Description
                                                                    Fullwidth</a></li>
                                                            <li><a href="product-fixed-price.html"
                                                                    class="menu-link-text">Product Fixed Price</a></li>
                                                            <li><a href="product-fixed-scroll.html"
                                                                    class="menu-link-text">Product Fixed Scrolls</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Colors Swatched</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-swatch-color.html"
                                                                    class="menu-link-text">Product Swatch Color</a></li>
                                                            <li><a href="product-swatch-rounded.html"
                                                                    class="menu-link-text">Product Swatch Rounded</a>
                                                            </li>
                                                            <li><a href="product-swatch-rounded-color.html"
                                                                    class="menu-link-text">Product Swatch Rounded
                                                                    Colors</a></li>
                                                            <li><a href="product-swatch-image.html"
                                                                    class="menu-link-text">Product Swatch Image</a></li>
                                                            <li><a href="product-swatch-rounded-image.html"
                                                                    class="menu-link-text">Product Swatch Rounded
                                                                    Image</a></li>
                                                            <li><a href="product-swatch-dropdown.html"
                                                                    class="menu-link-text">Product Swatch Dropdown</a>
                                                            </li>
                                                            <li><a href="product-swatch-dropdown-color.html"
                                                                    class="menu-link-text">Product Swatch Dropdown
                                                                    Colors</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Products Features</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-frequently-bought-together.html"
                                                                    class="menu-link-text">Frequently Bought Together
                                                                    1</a></li>
                                                            <li><a href="product-frequently-bought-together-02.html"
                                                                    class="menu-link-text">Frequently Bought Together
                                                                    2</a></li>
                                                            <li><a href="product-up-sell.html" class="menu-link-text">Up
                                                                    Sell</a></li>
                                                            <li><a href="product-pre-order.html"
                                                                    class="menu-link-text">Pre-orders</a></li>
                                                            <li><a href="product-grouped.html"
                                                                    class="menu-link-text">Grouped</a></li>
                                                            <li><a href="product-customer-note.html"
                                                                    class="menu-link-text">Customer Note</a></li>
                                                            <li><a href="product-out-of-stock.html"
                                                                    class="menu-link-text">Out Of Stock</a></li>
                                                            <li><a href="product-pickup-available.html"
                                                                    class="menu-link-text">Pick Up Available</a></li>
                                                            <li><a href="product-variable.html"
                                                                    class="menu-link-text">Variable</a></li>
                                                            <li><a href="product-deals.html"
                                                                    class="menu-link-text">Deals</a></li>
                                                            <li><a href="product-with-discount.html"
                                                                    class="menu-link-text">With Discount</a></li>
                                                            <li><a href="product-external.html"
                                                                    class="menu-link-text">External</a></li>
                                                            <li><a href="product-subscribe-save.html"
                                                                    class="menu-link-text">Subscribe Save</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-heading">Best seller</div>
                                                    <div class="sec-cls-header">
                                                        <div class="collection-position hover-img">
                                                            <a href="shop-collection.html" class="img-style">
                                                                <img class="lazyload"
                                                                    data-src="images/collections/cls-header.jpg"
                                                                    src="images/collections/cls-header.jpg"
                                                                    alt="banner-cls">
                                                            </a>
                                                            <div class="content">
                                                                <div class="title-top">
                                                                    <h4 class="title"><a href="shop-collection.html"
                                                                            class="link text-white wow fadeInUp">Shop
                                                                            our top picks</a></h4>
                                                                    <p class="desc text-white wow fadeInUp">Reserved for
                                                                        special occasions</p>
                                                                </div>
                                                                <div>
                                                                    <a href="shop-collection.html"
                                                                        class="tf-btn btn-md btn-white"><span
                                                                            class="text">Shop Now</span><i
                                                                            class="icon icon-arrowUpRight"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Blog<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="blog-default.html" class="menu-link-text">Blog Default</a></li>
                                            <li><a href="blog-list.html" class="menu-link-text">Blog List</a></li>
                                            <li><a href="blog-grid.html" class="menu-link-text">Blog Grid</a></li>
                                            <li><a href="blog-detail.html" class="menu-link-text">Blog Detail 1</a></li>
                                            <li><a href="blog-detail-02.html" class="menu-link-text">Blog Detail 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Pages<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="about-us.html" class="menu-link-text">About Us</a></li>
                                            <li>
                                                <a href="store-list.html" class="menu-link-text">Store List 1</a>

                                            </li>
                                            <li><a href="store-list-02.html" class="menu-link-text">Store List 2</a>
                                            </li>
                                            <li><a href="contact.html" class="menu-link-text">Contact Us 1</a></li>
                                            <li><a href="contact-02.html" class="menu-link-text">Contact Us 2</a></li>
                                            <li><a href="404.html" class="menu-link-text">404</a></li>
                                            <li><a href="FAQs.html" class="menu-link-text">FAQs</a></li>
                                            <li><a href="term-of-use.html" class="menu-link-text">Terms Of Use</a></li>
                                            <li><a href="coming-soon.html" class="menu-link-text">Coming Soon</a></li>
                                            <li><a href="customer-feedback.html" class="menu-link-text">Customer
                                                    Feedbacks</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item"><a
                                        href="../../../external.html?link=https://themeforest.net/user/themesflat"
                                        class="item-link">Buy Theme</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center">
                            <li class="nav-search"><a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a></li>
                            <li class="nav-account">
                                <a href="#" class="nav-icon-item">
                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="dropdown-account dropdown-login">
                                    <div class="sub-top">
                                        <a href="login.html" class="tf-btn btn-reset">Login</a>
                                        <p class="text-center text-secondary-2">Don’t have an account? <a
                                                href="register.html">Register</a></p>
                                    </div>
                                    <div class="sub-bot">
                                        <span class="body-text-">Support</span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-wishlist"><a href="wish-list.html" class="nav-icon-item">
                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item">
                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5078 10.8734V6.36686C16.5078 5.17166 16.033 4.02541 15.1879 3.18028C14.3428 2.33514 13.1965 1.86035 12.0013 1.86035C10.8061 1.86035 9.65985 2.33514 8.81472 3.18028C7.96958 4.02541 7.49479 5.17166 7.49479 6.36686V10.8734M4.11491 8.62012H19.8877L21.0143 22.1396H2.98828L4.11491 8.62012Z"
                                            stroke="#181818" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span class="count-box">1</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- page-title -->
        <div class="page-title" style="background-image: url(images/section/page-title.jpg);">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Women</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="index.html">Homepage</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                Women
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">



















                <div class="wrapper-control-shop">



                <?php
                    $sql = "select * from products";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                <div class="tf-list-layout wrapper-shop" id="listLayout">
                        <!-- card product list 1 -->
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Build the image path
                                $imagePath = '../digitals/uploads/thumbnails/' . basename($row['thumbnail']); // Extract the file name
                                $imagePath = file_exists($imagePath) ? $imagePath : 'assets/img/products/vender-upload-preview.jpg'; // Check if file exists, else use fallback
                        
                                ?>
                        <div class="card-product style-list" data-availability="Out of stock" data-brand="adidas">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                <img class="lazyload" data-src="<?php echo $imagePath; ?>"
                                                src="<?php echo $imagePath; ?>"
                                                alt="<?php echo !empty($row['name']) ? $row['name'] : 'Product image'; ?>">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link"><?php echo htmlspecialchars($row["name"]); ?></a>
                                <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$<?php echo htmlspecialchars($row["price"]); ?></span></div>
                                <p class="description text-secondary text-line-clamp-2"><?php echo htmlspecialchars($row["description"]); ?></p>
                                <div class="variant-wrap-list">
                                   
                                   
                                    <div class="list-product-btn">
                                        <a href="#quickView" data-bs-toggle="modal" class="btn-main-product" data-id="<?php echo $row['id']; ?>">Add To cart</a>
                                    </div>
                                </div>
        
                                
                            </div>
                        </div>

                        <?php
                            }
                            ?>

                        <!-- pagination -->
                        <ul class="wg-pagination">
                            <li><a href="#" class="pagination-item text-button">1</a></li>
                            <li class="active"><div class="pagination-item text-button">2</div></li>
                            <li><a href="#" class="pagination-item text-button">3</a></li>
                            <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                        </ul>
                    </div>

                    <?php
                            }
                            ?>
















                </div>
            </div>
        </section>
        <!-- /Section product -->


        <!-- Footer -->
        <footer id="footer" class="footer">
            <div class="footer-wrap">

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-bottom-wrap">
                                    <div class="left">
                                        <p class="text-caption-1">©2024 Modave. All Rights Reserved.</p>
                                        <div class="tf-cur justify-content-end">
                                            <div class="tf-currencies">
                                                <select class="image-select center style-default type-currencies">
                                                    <option selected data-thumbnail="images/country/us.svg">USD</option>
                                                    <option data-thumbnail="images/country/vn.svg">VND</option>
                                                </select>
                                            </div>
                                            <div class="tf-languages">
                                                <select class="image-select center style-default type-languages">
                                                    <option>English</option>
                                                    <option>Vietnam</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-payment">
                                        <p class="text-caption-1">Payment:</p>
                                        <ul>
                                            <li>
                                                <img src="images/payment/img-1.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-2.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-3.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-4.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-5.png" alt="">
                                            </li>
                                            <li>
                                                <img src="images/payment/img-6.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        <!-- toolbar-bottom -->
        <div class="tf-toolbar-bottom">
            <div class="toolbar-item">
                <a href="shop-default-grid.html">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                            <path
                                d="M8.125 3.125H4.375C4.04348 3.125 3.72554 3.2567 3.49112 3.49112C3.2567 3.72554 3.125 4.04348 3.125 4.375V8.125C3.125 8.45652 3.2567 8.77446 3.49112 9.00888C3.72554 9.2433 4.04348 9.375 4.375 9.375H8.125C8.45652 9.375 8.77446 9.2433 9.00888 9.00888C9.2433 8.77446 9.375 8.45652 9.375 8.125V4.375C9.375 4.04348 9.2433 3.72554 9.00888 3.49112C8.77446 3.2567 8.45652 3.125 8.125 3.125ZM8.125 8.125H4.375V4.375H8.125V8.125ZM15.625 3.125H11.875C11.5435 3.125 11.2255 3.2567 10.9911 3.49112C10.7567 3.72554 10.625 4.04348 10.625 4.375V8.125C10.625 8.45652 10.7567 8.77446 10.9911 9.00888C11.2255 9.2433 11.5435 9.375 11.875 9.375H15.625C15.9565 9.375 16.2745 9.2433 16.5089 9.00888C16.7433 8.77446 16.875 8.45652 16.875 8.125V4.375C16.875 4.04348 16.7433 3.72554 16.5089 3.49112C16.2745 3.2567 15.9565 3.125 15.625 3.125ZM15.625 8.125H11.875V4.375H15.625V8.125ZM8.125 10.625H4.375C4.04348 10.625 3.72554 10.7567 3.49112 10.9911C3.2567 11.2255 3.125 11.5435 3.125 11.875V15.625C3.125 15.9565 3.2567 16.2745 3.49112 16.5089C3.72554 16.7433 4.04348 16.875 4.375 16.875H8.125C8.45652 16.875 8.77446 16.7433 9.00888 16.5089C9.2433 16.2745 9.375 15.9565 9.375 15.625V11.875C9.375 11.5435 9.2433 11.2255 9.00888 10.9911C8.77446 10.7567 8.45652 10.625 8.125 10.625ZM8.125 15.625H4.375V11.875H8.125V15.625ZM15.625 10.625H11.875C11.5435 10.625 11.2255 10.7567 10.9911 10.9911C10.7567 11.2255 10.625 11.5435 10.625 11.875V15.625C10.625 15.9565 10.7567 16.2745 10.9911 16.5089C11.2255 16.7433 11.5435 16.875 11.875 16.875H15.625C15.9565 16.875 16.2745 16.7433 16.5089 16.5089C16.7433 16.2745 16.875 15.9565 16.875 15.625V11.875C16.875 11.5435 16.7433 11.2255 16.5089 10.9911C16.2745 10.7567 15.9565 10.625 15.625 10.625ZM15.625 15.625H11.875V11.875H15.625V15.625Z"
                                fill="#4D4E4F" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Shop</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="filterShop">
                    <div class="toolbar-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                            <path
                                d="M3.125 6.87502H5.70312C5.84081 7.41278 6.15356 7.88942 6.59207 8.22979C7.03057 8.57017 7.56989 8.75492 8.125 8.75492C8.68011 8.75492 9.21943 8.57017 9.65793 8.22979C10.0964 7.88942 10.4092 7.41278 10.5469 6.87502H16.875C17.0408 6.87502 17.1997 6.80917 17.3169 6.69196C17.4342 6.57475 17.5 6.41578 17.5 6.25002C17.5 6.08426 17.4342 5.92529 17.3169 5.80808C17.1997 5.69087 17.0408 5.62502 16.875 5.62502H10.5469C10.4092 5.08726 10.0964 4.61062 9.65793 4.27024C9.21943 3.92987 8.68011 3.74512 8.125 3.74512C7.56989 3.74512 7.03057 3.92987 6.59207 4.27024C6.15356 4.61062 5.84081 5.08726 5.70312 5.62502H3.125C2.95924 5.62502 2.80027 5.69087 2.68306 5.80808C2.56585 5.92529 2.5 6.08426 2.5 6.25002C2.5 6.41578 2.56585 6.57475 2.68306 6.69196C2.80027 6.80917 2.95924 6.87502 3.125 6.87502ZM8.125 5.00002C8.37223 5.00002 8.6139 5.07333 8.81946 5.21068C9.02502 5.34803 9.18524 5.54326 9.27985 5.77167C9.37446 6.00007 9.39921 6.25141 9.35098 6.49388C9.30275 6.73636 9.1837 6.95909 9.00888 7.1339C8.83407 7.30872 8.61134 7.42777 8.36886 7.476C8.12639 7.52423 7.87505 7.49948 7.64665 7.40487C7.41824 7.31026 7.22301 7.15004 7.08566 6.94448C6.94831 6.73892 6.875 6.49725 6.875 6.25002C6.875 5.9185 7.0067 5.60056 7.24112 5.36614C7.47554 5.13172 7.79348 5.00002 8.125 5.00002ZM16.875 13.125H15.5469C15.4092 12.5873 15.0964 12.1106 14.6579 11.7702C14.2194 11.4299 13.6801 11.2451 13.125 11.2451C12.5699 11.2451 12.0306 11.4299 11.5921 11.7702C11.1536 12.1106 10.8408 12.5873 10.7031 13.125H3.125C2.95924 13.125 2.80027 13.1909 2.68306 13.3081C2.56585 13.4253 2.5 13.5843 2.5 13.75C2.5 13.9158 2.56585 14.0748 2.68306 14.192C2.80027 14.3092 2.95924 14.375 3.125 14.375H10.7031C10.8408 14.9128 11.1536 15.3894 11.5921 15.7298C12.0306 16.0702 12.5699 16.2549 13.125 16.2549C13.6801 16.2549 14.2194 16.0702 14.6579 15.7298C15.0964 15.3894 15.4092 14.9128 15.5469 14.375H16.875C17.0408 14.375 17.1997 14.3092 17.3169 14.192C17.4342 14.0748 17.5 13.9158 17.5 13.75C17.5 13.5843 17.4342 13.4253 17.3169 13.3081C17.1997 13.1909 17.0408 13.125 16.875 13.125ZM13.125 15C12.8778 15 12.6361 14.9267 12.4305 14.7894C12.225 14.652 12.0648 14.4568 11.9701 14.2284C11.8755 14 11.8508 13.7486 11.899 13.5062C11.9472 13.2637 12.0663 13.041 12.2411 12.8661C12.4159 12.6913 12.6387 12.5723 12.8811 12.524C13.1236 12.4758 13.3749 12.5006 13.6034 12.5952C13.8318 12.6898 14.027 12.85 14.1643 13.0556C14.3017 13.2611 14.375 13.5028 14.375 13.75C14.375 14.0815 14.2433 14.3995 14.0089 14.6339C13.7745 14.8683 13.4565 15 13.125 15Z"
                                fill="#4D4E4F" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Filters</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#search" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                            <path
                                d="M17.9419 17.058L14.0302 13.1471C15.1639 11.7859 15.7293 10.04 15.6086 8.27263C15.488 6.50524 14.6906 4.85241 13.3823 3.65797C12.074 2.46353 10.3557 1.81944 8.58462 1.85969C6.81357 1.89994 5.12622 2.62143 3.87358 3.87407C2.62094 5.12671 1.89945 6.81406 1.8592 8.5851C1.81895 10.3561 2.46304 12.0745 3.65748 13.3828C4.85192 14.691 6.50475 15.4884 8.27214 15.6091C10.0395 15.7298 11.7854 15.1644 13.1466 14.0306L17.0575 17.9424C17.1156 18.0004 17.1845 18.0465 17.2604 18.0779C17.3363 18.1094 17.4176 18.1255 17.4997 18.1255C17.5818 18.1255 17.6631 18.1094 17.739 18.0779C17.8149 18.0465 17.8838 18.0004 17.9419 17.9424C17.9999 17.8843 18.046 17.8154 18.0774 17.7395C18.1089 17.6636 18.125 17.5823 18.125 17.5002C18.125 17.4181 18.1089 17.3367 18.0774 17.2609C18.046 17.185 17.9999 17.1161 17.9419 17.058ZM3.12469 8.75018C3.12469 7.63766 3.45459 6.55012 4.07267 5.6251C4.69076 4.70007 5.56926 3.9791 6.5971 3.55336C7.62493 3.12761 8.75593 3.01622 9.84707 3.23326C10.9382 3.4503 11.9405 3.98603 12.7272 4.7727C13.5138 5.55937 14.0496 6.56165 14.2666 7.6528C14.4837 8.74394 14.3723 9.87494 13.9465 10.9028C13.5208 11.9306 12.7998 12.8091 11.8748 13.4272C10.9497 14.0453 9.86221 14.3752 8.74969 14.3752C7.25836 14.3735 5.82858 13.7804 4.77404 12.7258C3.71951 11.6713 3.12634 10.2415 3.12469 8.75018Z"
                                fill="#4D4E4F" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Search</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#wishlist" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                            <path
                                d="M17.4215 4.45326C16.5724 3.60627 15.4225 3.12997 14.2231 3.1285C13.0238 3.12704 11.8727 3.60054 11.0215 4.44545L9.99965 5.39467L8.97699 4.44232C8.12602 3.59373 6.9728 3.11795 5.77103 3.11963C4.56926 3.12132 3.41738 3.60034 2.56879 4.45131C1.7202 5.30228 1.24441 6.4555 1.2461 7.65727C1.24778 8.85904 1.7268 10.0109 2.57777 10.8595L9.55824 17.9423C9.6164 18.0014 9.68572 18.0483 9.76217 18.0803C9.83862 18.1123 9.92067 18.1288 10.0036 18.1288C10.0864 18.1288 10.1685 18.1123 10.2449 18.0803C10.3214 18.0483 10.3907 18.0014 10.4489 17.9423L17.4215 10.8595C18.2707 10.0098 18.7477 8.85768 18.7477 7.65639C18.7477 6.45509 18.2707 5.30296 17.4215 4.45326ZM16.5348 9.98139L9.99965 16.6095L3.46059 9.97514C2.8452 9.35975 2.49948 8.52511 2.49948 7.65482C2.49948 6.78454 2.8452 5.9499 3.46059 5.33451C4.07597 4.71913 4.91061 4.37341 5.7809 4.37341C6.65118 4.37341 7.48583 4.71913 8.10121 5.33451L8.11684 5.35014L9.57387 6.7056C9.68953 6.81324 9.84166 6.87307 9.99965 6.87307C10.1576 6.87307 10.3098 6.81324 10.4254 6.7056L11.8825 5.35014L11.8981 5.33451C12.5139 4.71954 13.3488 4.37438 14.219 4.37497C15.0893 4.37555 15.9237 4.72184 16.5387 5.33764C17.1537 5.95344 17.4988 6.78831 17.4983 7.6586C17.4977 8.52888 17.1514 9.36329 16.5356 9.97826L16.5348 9.98139Z"
                                fill="#4D4E4F" />
                        </svg>
                        <!-- <div class="toolbar-count">1</div> -->
                    </div>
                    <div class="toolbar-label">Wishlist</div>
                </a>
            </div>
            <div class="toolbar-item">
                <a href="#shoppingCart" data-bs-toggle="modal">
                    <div class="toolbar-icon">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                            <path
                                d="M13.75 8.23389V4.48389C13.75 3.48932 13.3549 2.5355 12.6517 1.83224C11.9484 1.12897 10.9946 0.733887 10 0.733887C9.00544 0.733887 8.05161 1.12897 7.34835 1.83224C6.64509 2.5355 6.25 3.48932 6.25 4.48389V8.23389M3.4375 6.35889H16.5625L17.5 17.6089H2.5L3.4375 6.35889Z"
                                stroke="#4D4E4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="toolbar-label">Cart</div>
                </a>
            </div>
        </div>
        <!-- /toolbar-bottom -->

    </div>



    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <div class="mb-content-top">
                    <form class="form-search">
                        <fieldset class="text">
                            <input type="text" placeholder="What are you looking for?" class="" name="text" tabindex="0"
                                value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="#181818" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.9984 20.9999L16.6484 16.6499" stroke="#181818" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-one" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-one">
                                <span>Home</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-one" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="index.html" class="sub-nav-link">Fashion Womenswear</a></li>
                                    <li><a href="home-fashion-eleganceNest.html" class="sub-nav-link">Fashion
                                            EleganceNest</a></li>
                                    <li><a href="home-fashion-main.html" class="sub-nav-link">Fashion Main</a></li>
                                    <li><a href="home-fashion-trendset.html" class="sub-nav-link">Fashion
                                            TrendsetHome</a></li>
                                    <li><a href="home-fashion-vogueLing.html" class="sub-nav-link">Fashion
                                            VogueLiving</a></li>
                                    <li><a href="home-fashion-elegantAbode.html" class="sub-nav-link">Fashion
                                            ElegantAbode</a></li>
                                    <li><a href="home-fashion-glamDwell.html" class="sub-nav-link">Fashion GlamDwell</a>
                                    </li>
                                    <li><a href="home-fashion-classyCove.html" class="sub-nav-link">Fashion
                                            ClassyCove</a></li>
                                    <li><a href="home-fashion-chicHaven.html" class="sub-nav-link">Fashion ChicHaven
                                            1</a></li>
                                    <li><a href="home-fashion-chicHaven-02.html" class="sub-nav-link">Fashion ChicHaven
                                            2</a></li>
                                    <li><a href="home-fashion-tiktok.html" class="sub-nav-link">Fashion TikTok</a></li>
                                    <li><a href="home-fashion-luxeLiving.html" class="sub-nav-link">Fashion
                                            LuxeLiving</a></li>
                                    <li><a href="home-fashion-modernRetreat.html" class="sub-nav-link">Fashion
                                            ModernRetreat</a></li>
                                    <li><a href="home-beauty.html" class="sub-nav-link">Beauty</a></li>
                                    <li><a href="home-skincare.html" class="sub-nav-link">Skin Care</a></li>
                                    <li><a href="home-cosmetic.html" class="sub-nav-link">Cosmetic</a></li>
                                    <li><a href="home-decor.html" class="sub-nav-link">Decor</a></li>
                                    <li><a href="home-furniture.html" class="sub-nav-link">Furniture</a></li>
                                    <li><a href="home-jewelry-01.html" class="sub-nav-link">Jewelry ElegantGems</a></li>
                                    <li><a href="home-jewelry-02.html" class="sub-nav-link">Jewelry GlitterGlam</a></li>
                                    <li><a href="home-activewear.html" class="sub-nav-link">Activewear</a></li>
                                    <li><a href="home-organic.html" class="sub-nav-link">Organic</a></li>
                                    <li><a href="home-sock.html" class="sub-nav-link">Socks</a></li>
                                    <li><a href="home-camping.html" class="sub-nav-link">Camping</a></li>
                                    <li><a href="home-electronic.html" class="sub-nav-link">Electronic Market</a></li>
                                    <li><a href="home-pet-store.html" class="sub-nav-link">Pet Store</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-mb-item active">
                            <a href="#dropdown-menu-two" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-two">
                                <span>Shop</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-two" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="#sub-shop-one" class="sub-nav-link active collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-one">
                                            <span>Shop layout</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-one" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="shop-default-grid.html" class="sub-nav-link">Default
                                                        Grid</a></li>
                                                <li><a href="shop-default-list.html" class="sub-nav-link active">Default
                                                        List</a></li>
                                                <li><a href="shop-fullwidth-list.html" class="sub-nav-link">Full Width
                                                        List</a></li>
                                                <li><a href="shop-fullwidth-grid.html" class="sub-nav-link">Full Width
                                                        Grid</a></li>
                                                <li><a href="shop-left-sidebar.html" class="sub-nav-link">Left
                                                        Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html" class="sub-nav-link">Right
                                                        Sidebar</a></li>
                                                <li><a href="shop-filter-dropdown.html" class="sub-nav-link">Filter
                                                        Dropdown</a></li>
                                                <li><a href="shop-filter-canvas.html" class="sub-nav-link">Filter
                                                        Canvas</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-shop-two" class="sub-nav-link collapsed" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="sub-shop-two">
                                            <span>Shop Features</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-two" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="shop-categories-top.html" class="sub-nav-link">Categories
                                                        Top 1</a></li>
                                                <li><a href="shop-categories-top-02.html"
                                                        class="sub-nav-link">Categories Top 2</a></li>
                                                <li><a href="shop-collection.html" class="sub-nav-link">Shop
                                                        Collection</a></li>
                                                <li><a href="shop-breadcrumb-img.html" class="sub-nav-link">Breadcrumb
                                                        IMG</a></li>
                                                <li><a href="shop-breadcrumb-left.html" class="sub-nav-link">Breadcrumb
                                                        Left</a></li>
                                                <li><a href="shop-breadcrumb-background.html"
                                                        class="sub-nav-link">Breadcrumb BG</a></li>
                                                <li><a href="shop-load-button.html" class="sub-nav-link">Load Button</a>
                                                </li>
                                                <li><a href="shop-pagination.html" class="sub-nav-link">Pagination</a>
                                                </li>
                                                <li><a href="shop-infinite-scrolling.html" class="sub-nav-link">Infinite
                                                        Scrolling</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-shop-three" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-three">
                                            <span>Products Hover</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-three" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-style-01.html" class="sub-nav-link">Product Style
                                                        1</a></li>
                                                <li><a href="product-style-02.html" class="sub-nav-link">Product Style
                                                        2</a></li>
                                                <li><a href="product-style-03.html" class="sub-nav-link">Product Style
                                                        3</a></li>
                                                <li><a href="product-style-04.html" class="sub-nav-link">Product Style
                                                        4</a></li>
                                                <li><a href="product-style-05.html" class="sub-nav-link">Product Style
                                                        5</a></li>
                                                <li><a href="product-style-06.html" class="sub-nav-link">Product Style
                                                        6</a></li>
                                                <li><a href="product-style-07.html" class="sub-nav-link">Product Style
                                                        7</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-shop-four" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-shop-four">
                                            <span>My Pages</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-shop-four" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="wish-list.html" class="sub-nav-link">Wish List</a></li>
                                                <li><a href="search-result.html" class="sub-nav-link">Search Result</a>
                                                </li>
                                                <li><a href="shopping-cart.html" class="sub-nav-link">Shopping Cart</a>
                                                </li>
                                                <li><a href="login.html" class="sub-nav-link">Login/Register</a></li>
                                                <li><a href="forget-password.html" class="sub-nav-link">Forget
                                                        Password</a></li>
                                                <li><a href="order-tracking.html" class="sub-nav-link">Order
                                                        Tracking</a></li>
                                                <li><a href="my-account.html" class="sub-nav-link">My Account</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-three" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-three">
                                <span>Products</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-three" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li>
                                        <a href="#sub-product-one" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-one">
                                            <span>Products Layout</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-one" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-detail.html" class="sub-nav-link">Product
                                                        Default</a></li>
                                                <li><a href="product-grid-1.html" class="sub-nav-link">Product Grid1</a>
                                                </li>
                                                <li><a href="product-grid-2.html" class="sub-nav-link">Product Grid2</a>
                                                </li>
                                                <li><a href="product-stacked.html" class="sub-nav-link">Product
                                                        stacked</a></li>
                                                <li><a href="product-right-thumbnails.html" class="sub-nav-link">Product
                                                        right thumbnails</a></li>
                                                <li><a href="product-bottom-thumbnails.html"
                                                        class="sub-nav-link">Product bottom thumbnails</a></li>
                                                <li><a href="product-description-accordion.html"
                                                        class="sub-nav-link">Product Description Accordion</a></li>
                                                <li><a href="product-description-list.html" class="sub-nav-link">Product
                                                        Description List</a></li>
                                                <li><a href="product-description-menutab.html"
                                                        class="sub-nav-link">Product Description MenuTab</a></li>
                                                <li><a href="product-description-fullwidth.html"
                                                        class="sub-nav-link">Product Description Fullwidth</a></li>
                                                <li><a href="product-fixed-price.html" class="sub-nav-link">Product
                                                        Fixed Price</a></li>
                                                <li><a href="product-fixed-scroll.html" class="sub-nav-link">Product
                                                        Fixed Scrolls</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-product-two" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-two">
                                            <span>Colors Swatched</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-two" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-swatch-color.html" class="sub-nav-link">Product
                                                        Swatch Color</a></li>
                                                <li><a href="product-swatch-rounded.html" class="sub-nav-link">Product
                                                        Swatch Rounded</a></li>
                                                <li><a href="product-swatch-rounded-color.html"
                                                        class="sub-nav-link">Product Swatch Rounded Colors</a></li>
                                                <li><a href="product-swatch-image.html" class="sub-nav-link">Product
                                                        Swatch Image</a></li>
                                                <li><a href="product-swatch-rounded-image.html"
                                                        class="sub-nav-link">Product Swatch Rounded Image</a></li>
                                                <li><a href="product-swatch-dropdown.html" class="sub-nav-link">Product
                                                        Swatch Dropdown</a></li>
                                                <li><a href="product-swatch-dropdown-color.html"
                                                        class="sub-nav-link">Product Swatch Dropdown Colors</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#sub-product-three" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="true"
                                            aria-controls="sub-product-three">
                                            <span>Products Features</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-product-three" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                <li><a href="product-frequently-bought-together.html"
                                                        class="sub-nav-link">Frequently Bought Together 1</a></li>
                                                <li><a href="product-frequently-bought-together-02.html"
                                                        class="sub-nav-link">Frequently Bought Together 2</a></li>
                                                <li><a href="product-up-sell.html" class="sub-nav-link">Up Sell</a></li>
                                                <li><a href="product-pre-order.html" class="sub-nav-link">Pre-orders</a>
                                                </li>
                                                <li><a href="product-grouped.html" class="sub-nav-link">Grouped</a></li>
                                                <li><a href="product-customer-note.html" class="sub-nav-link">Customer
                                                        Note</a></li>
                                                <li><a href="product-out-of-stock.html" class="sub-nav-link">Out Of
                                                        Stock</a></li>
                                                <li><a href="product-pickup-available.html" class="sub-nav-link">Pick Up
                                                        Available</a></li>
                                                <li><a href="product-variable.html" class="sub-nav-link">Variable</a>
                                                </li>
                                                <li><a href="product-deals.html" class="sub-nav-link">Deals</a></li>
                                                <li><a href="product-with-discount.html" class="sub-nav-link">With
                                                        Discount</a></li>
                                                <li><a href="product-external.html" class="sub-nav-link">External</a>
                                                </li>
                                                <li><a href="product-subscribe-save.html" class="sub-nav-link">Subscribe
                                                        Save</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-four" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-four">
                                <span>Blog</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-four" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="blog-default.html" class="sub-nav-link">Blog Default</a></li>
                                    <li><a href="blog-list.html" class="sub-nav-link">Blog List</a></li>
                                    <li><a href="blog-grid.html" class="sub-nav-link">Blog Grid</a></li>
                                    <li><a href="blog-detail.html" class="sub-nav-link">Blog Detail 1</a></li>
                                    <li><a href="blog-detail-02.html" class="sub-nav-link">Blog Detail 2</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-mb-item">
                            <a href="#dropdown-menu-five" class="collapsed mb-menu-link" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-five">
                                <span>Pages</span>
                                <span class="btn-open-sub"></span>
                            </a>
                            <div id="dropdown-menu-five" class="collapse">
                                <ul class="sub-nav-menu">
                                    <li><a href="about-us.html" class="sub-nav-link">About Us</a></li>
                                    <li><a href="store-list.html" class="sub-nav-link">Store List 1</a></li>
                                    <li><a href="store-list-02.html" class="sub-nav-link">Store List 2</a></li>
                                    <li><a href="contact.html" class="sub-nav-link">Contact Us 1</a></li>
                                    <li><a href="contact-02.html" class="sub-nav-link">Contact Us 2</a></li>
                                    <li><a href="404.html" class="sub-nav-link">404</a></li>
                                    <li><a href="FAQs.html" class="sub-nav-link">FAQs</a></li>
                                    <li><a href="term-of-use.html" class="sub-nav-link">Terms Of Use</a></li>
                                    <li><a href="coming-soon.html" class="sub-nav-link">Coming Soon</a></li>
                                    <li><a href="customer-feedback.html" class="sub-nav-link">Customer Feedbacks</a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-mb-item">
                            <a href="../../../external.html?link=https://themeforest.net/user/themesflat"
                                class="mb-menu-link">Buy Theme</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-other-content">
                    <div class="group-icon">
                        <a href="wish-list.html" class="site-nav-icon">
                            <svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                <path
                                    d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Wishlist
                        </a>

                        <a href="login.html" class="site-nav-icon">
                            <svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
                                <path
                                    d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                    stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Login
                        </a>

                    </div>
                    <div class="mb-notice">
                        <a href="contact.html" class="text-need">Need Help?</a>
                    </div>
                    <div class="mb-contact">
                        <p class="text-caption-1">549 Oak St.Crystal Lake, IL 60014</p>
                        <a href="contact.html" class="tf-btn-default text-btn-uppercase">GET DIRECTION<i
                                class="icon-arrowUpRight"></i></a>
                    </div>
                    <ul class="mb-info">
                        <li>
                            <i class="icon icon-mail"></i>
                            <p>themesflat@gmail.com</p>
                        </li>
                        <li>
                            <i class="icon icon-phone"></i>
                            <p>315-666-6688</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option selected data-thumbnail="images/country/us.svg">USD</option>
                            <option data-thumbnail="images/country/vn.svg">VND</option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>Vietnam</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->




















    <!-- quickView -->
    <div class="modal fullRight fade modal-quick-view" id="quickView">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="tf-quick-view-image">
                    <div class="wrap-quick-view wrapper-scroll-quickview">
                        <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">
                            <img class="lazyload" data-src="images/products/womens/women-1.jpg"
                                src="images/products/womens/women-1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="wrap">
                    <div class="header">
                        <h5 class="title">Quick View</h5>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <div class="tf-product-info-name">
                                <div class="text text-btn-uppercase">Clothing</div>
                                <h3 class="name">Stretch Strap Top</h3>
                                <div class="sub">
                                    <div class="tf-product-info-rate">
                                        <div class="list-star">
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                            <i class="icon icon-star"></i>
                                        </div>
                                        <div class="text text-caption-1">(134 reviews)</div>
                                    </div>
                                    <div class="tf-product-info-sold">
                                        <i class="icon icon-lightning"></i>
                                        <div class="text text-caption-1">18 sold in last 32 hours</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-desc">
                                <div class="tf-product-info-price">
                                    <h5 class="price-on-sale font-2">$79.99</h5>
                                    <div class="compare-at-price font-2">$98.99</div>
                                    <div class="badges-on-sale text-btn-uppercase">
                                        -25%
                                    </div>
                                </div>
                                <p>The garments labelled as Committed are products that have been produced using
                                    sustainable fibres or processes, reducing their environmental impact.</p>
                                <div class="tf-product-info-liveview">
                                    <i class="icon icon-eye"></i>
                                    <p class="text-caption-1"><span class="liveview-count">28</span> people are viewing
                                        this right now</p>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-info-choose-option">


                            <div class="tf-product-info-quantity">
                                <div class="title mb_12">Quantity:</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /quickView -->


    <!-- Javascript -->


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buyNowButtons = document.querySelectorAll(".btn-main-product");
            const modalTitle = document.querySelector("#quickView .name");
            const modalImage = document.querySelector("#quickView .quickView-item img");
            const modalPrice = document.querySelector("#quickView .price-on-sale");
            const modalDescription = document.querySelector("#quickView .tf-product-info-desc p");

            buyNowButtons.forEach(button => {
                button.addEventListener("click", function () {
                    const productId = this.getAttribute("data-id");

                    // Fetch product details from server
                    fetch(`fetch_product.php?id=${productId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Update modal content
                            modalTitle.textContent = data.name;
                            modalImage.src = data.imagePath;
                            modalImage.setAttribute("alt", data.name);
                            modalPrice.textContent = `$${data.price}`;
                            modalDescription.textContent = data.description;
                        })
                        .catch(error => console.error("Error fetching product details:", error));
                });
            });
        });

    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>


<!-- Mirrored from themesflat.co/html/modave/shop-default-list.html by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 14 Dec 2024 14:49:37 GMT -->

</html>