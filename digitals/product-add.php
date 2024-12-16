
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <title>Ekka - Admin Dashboard HTML Template.</title>

    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <!-- <script src="assets/js/tinymce.min.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <!-- <script src="assets/js/ckeditor.js"></script> -->
     
</head>
<style>
.tox-notification{
  display: none;
  visibility: hidden;
}
.tox-notifications-container{
  display: none !important;
  visibility: hidden !important;
}
.tox-statusbar__path{
  display: none;
  visibility: hidden;
}
a[rel="noopener"] {
    display: none !important;
}
/* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"); */
.open-modal-btn {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #695cfe;
    color: #fff;
    border: none;
    border-radius: 4px;
}
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}
.modal-content {
    padding: 10px;
    background-color: #fff;
    width: 90%;
    max-width: 800px;
    height: 90vh;
    border-radius: 8px;
    display: flex;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    color: #333;
    cursor: pointer;
}
.sidebar-modal {
    display: flex;
    width: 100%;
    font-family: "Poppins", sans-serif;
}
.sidebar-cate {
    width: 50%;
    background-color: #fff;
    padding: 5px 14px;
    transition: 0.3s ease;
    border-right: 1px solid #ddd;
}
.sidebar-cate.close {
    width: 70px;
}
.sidebar-cate header {
    position: relative;
    padding: 10px 0;
    text-align: center;
}
.sidebar-cate .logo-text {
    display: flex;
    flex-direction: column;
    align-items: center;
}
header .image-text .name {
    font-size: 18px;
    font-weight: 600;
}
header .image-text .profession {
    font-size: 14px;
    color: #707070;
}
.sidebar-cate header .toggle {
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: #695cfe;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: 0.3s ease;
}
.sidebar-cate.close .toggle {
    transform: translateY(-50%) rotate(0deg);
}
.menu-links {
    list-style: none;
    padding: 0;
    margin: 5px 0 0;
    margin-left: -10px;
    overflow-y: scroll !important;
}
.menu-links li {
    margin: 10px 0;
}
.menu-links li a {
    text-decoration: none;
    color: #333;
    display: flex;
    align-items: center;
    padding: 8px;
    border-radius: 6px;
    transition: background 0.3s ease;
}
.menu-links li a:hover {
    background-color: #695cfe;
    color: #fff;
}
.menu-links .icon {
    min-width: 40px;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #707070;
    transition: color 0.3s ease;
}
.menu-links li a:hover .icon {
    color: #fff;
}
.main-menu {
    width: 70%;
    padding: 20px;
    background-color: #f9f9f9;
    overflow-y: auto;
}
.main-menu h2 {
    font-size: 24px;
    color: #333;
    margn-bottom: 10px;
}
.main-menu p {
    color: #555;
    line-height: 1.6;
}
.main-menu #subCategoryList {
    margin-left: 10px;
    margin-top: 30px;
}
.main-menu li {
    margin-bottom: 10px;
    font-size: 18px;
    font-size: 18px;
    line-height: 30px;
    text-align: justify;
    letter-spacing: 1px;
    font-family: "Raleway", serif;
    /* list-style-type: disc; */
}
.ck.ck-powered-by{
    display:none !important;
    visibility: hidden !important;
}
#description{
    height:250px !important;
}
.sidebar-modal {
    height: 100%; /* Ensure it takes full height of the modal */
}

.menu-bar {
    flex: 1; /* Allow the menu-bar to grow and take available space */
    overflow-y: auto; /* Enable vertical scrolling */
    max-height: 400px; /* Set a maximum height for the menu */
}

.menu-links {
    list-style-type: none; /* Remove default list styling */
    padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
}

.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.loading-spinner {
    width: 60px;
    height: 60px;
    border: 6px solid #f3f3f3;
    border-top: 6px solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.ck-editor__editable {
    height: 300px;  /* Set your desired height */
}
</style>
<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        <div class="ec-left-sidebar ec-bg-sidebar">
            <div id="sidebar" class="sidebar ec-sidebar-footer">

                <div class="ec-brand">
                    <a href="index.html" title="Ekka">
                        <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" />
                        <span class="ec-brand-name text-truncate">Ekka</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="ec-navigation" data-simplebar>
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <!-- Dashboard -->
                        <li>
                            <a class="sidenav-item-link" href="index.html">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                            <hr>
                        </li>

                        <!-- Vendors -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-account-group-outline"></i>
                                <span class="nav-text">Vendors</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="vendor-card.html">
                                            <span class="nav-text">Vendor Grid</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="vendor-list.html">
                                            <span class="nav-text">Vendor List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="vendor-profile.html">
                                            <span class="nav-text">Vendors Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Users -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-account-group"></i>
                                <span class="nav-text">Users</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="user-card.html">
                                            <span class="nav-text">User Grid</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="user-list.html">
                                            <span class="nav-text">User List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="user-profile.html">
                                            <span class="nav-text">Users Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                        </li>

                        <!-- Category -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Categories</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="main-category.html">
                                            <span class="nav-text">Main Category</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="sub-category.html">
                                            <span class="nav-text">Sub Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Products -->
                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-palette-advanced"></i>
                                <span class="nav-text">Products</span> <b class="caret"></b>
                            </a>
                            <div class="collapse show">
                                <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                                    <li class="active">
                                        <a class="sidenav-item-link" href="product-add.html">
                                            <span class="nav-text">Add Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="product-list.html">
                                            <span class="nav-text">List Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="product-grid.html">
                                            <span class="nav-text">Grid Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="product-detail.html">
                                            <span class="nav-text">Product Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Orders -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-cart"></i>
                                <span class="nav-text">Orders</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="new-order.html">
                                            <span class="nav-text">New Order</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="order-history.html">
                                            <span class="nav-text">Order History</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="order-detail.html">
                                            <span class="nav-text">Order Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="invoice.html">
                                            <span class="nav-text">Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Reviews -->
                        <li>
                            <a class="sidenav-item-link" href="review-list.html">
                                <i class="mdi mdi-star-half"></i>
                                <span class="nav-text">Reviews</span>
                            </a>
                        </li>

                        <!-- Brands -->
                        <li>
                            <a class="sidenav-item-link" href="brand-list.html">
                                <i class="mdi mdi-tag-faces"></i>
                                <span class="nav-text">Brands</span>
                            </a>
                            <hr>
                        </li>

                        <!-- Authentication -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-login"></i>
                                <span class="nav-text">Authentication</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a href="sign-in.html">
                                            <span class="nav-text">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="sign-up.html">
                                            <span class="nav-text">Sign Up</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Icons -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-diamond-stone"></i>
                                <span class="nav-text">Icons</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="material-icon.html">
                                            <span class="nav-text">Material Icon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="font-awsome-icons.html">
                                            <span class="nav-text">Font Awsome Icon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="flag-icon.html">
                                            <span class="nav-text">Flag Icon</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Other Pages -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-image-filter-none"></i>
                                <span class="nav-text">Other Pages</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
                                    <li class="has-sub">
                                        <a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            <header class="ec-main-header" id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle"></button>
                    <!-- search form -->
                    <div class="search-form d-lg-inline-block">
                        <div class="input-group">
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="search.." autofocus autocomplete="off" />
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <!-- navbar right -->
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            John Deo <small class="pt-1">john.example@gmail.com</small>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-email"></i> Message
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                    </li>
                                    <li class="right-sidebar-in">
                                        <a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown notifications-menu custom-dropdown">
                                <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                                    <i class="mdi mdi-bell-outline"></i>
                                </button>

                                <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                                    <div class="card-header card-header-border-bottom px-3">
                                        <h2>Notifications</h2>
                                    </div>

                                    <div class="card-body px-0 py-0">
                                        <ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab"
                                            role="tablist">
                                            <li class="nav-item mx-3 my-0 py-0">
                                                <a href="#" class="nav-link active pb-3" id="home2-tab"
                                                    data-bs-toggle="tab" data-bs-target="#home2" role="tab"
                                                    aria-controls="home2" aria-selected="true">All (10)</a>
                                            </li>

                                            <li class="nav-item mx-3 my-0 py-0">
                                                <a href="#" class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile2" role="tab" aria-controls="profile2"
                                                    aria-selected="false">Msgs (5)</a>
                                            </li>

                                            <li class="nav-item mx-3 my-0 py-0">
                                                <a href="#" class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#contact2" role="tab" aria-controls="contact2"
                                                    aria-selected="false">Others (5)</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabContent3">
                                            <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                                aria-labelledby="home2-tab">
                                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u2.jpg"
                                                                    alt="Image">
                                                                <span class="status away"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Nitin</h4>
                                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                        consectetur adipisicing elit. Nam itaque
                                                                        doloremque odio, eligendi delectus vitae.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 30 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification media-active">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u1.jpg"
                                                                    alt="Image">
                                                                <span class="status active"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Lovina</h4>
                                                                    <p class="last-msg">Donec mattis augue a nisl
                                                                        consequat, nec imperdiet ex rutrum. Fusce et
                                                                        vehicula enim. Sed in enim eu odio vehic.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-white">
                                                                        <i class="mdi mdi-clock-outline"></i> Just
                                                                        now...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u5.jpg"
                                                                    alt="Image">
                                                                <span class="status away"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Crinali</h4>
                                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                        consectetur adipisicing elit. Nam itaque
                                                                        doloremque odio, eligendi delectus vitae.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification event-active">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                                <i class="mdi mdi-calendar-check font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Upcomming event added</h4>
                                                                    <p class="last-msg font-size-14">03/Jan/2020 (1pm -
                                                                        2pm)</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 10 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                                <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Yearly Sales report</h4>
                                                                    <p class="last-msg font-size-14">Lorem ipsum dolor
                                                                        sit, amet consectetur adipisicing elit. Nam
                                                                        itaque doloremque odio, eligendi delectus vitae.
                                                                    </p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                                <i
                                                                    class="mdi mdi-account-multiple-check font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">New request</h4>
                                                                    <p class="last-msg font-size-14">Add Dany Jones as
                                                                        your contact consequat nec imperdiet ex rutrum.
                                                                        Fusce et vehicula enim. Sed in enim.</p>

                                                                    <span
                                                                        class="my-1 btn btn-sm btn-success">Accept</span>
                                                                    <span
                                                                        class="my-1 btn btn-sm btn-secondary">Delete</span>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary d-block">
                                                                        <i class="mdi mdi-clock-outline"></i> 5 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                                <i class="mdi mdi-server-network-off font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Server overloaded</h4>
                                                                    <p class="last-msg font-size-14">Donec mattis augue
                                                                        a nisl consequat, nec imperdiet ex rutrum. Fusce
                                                                        et vehicula enim. Sed in enim eu odio vehic.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 30 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                                                <i class="mdi mdi-playlist-check font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Task complete</h4>
                                                                    <p class="last-msg font-size-14">Nam ut nisi erat.
                                                                        Ut quis tortor varius, hendrerit arcu quis,
                                                                        congue nisl. In scelerisque, sem ut ve.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="tab-pane fade" id="profile2" role="tabpanel"
                                                aria-labelledby="profile2-tab">
                                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u6.jpg"
                                                                    alt="Image">
                                                                <span class="status away"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Hardiko</h4>
                                                                    <p class="last-msg">Donec mattis augue a nisl
                                                                        consequat, nec imperdiet ex rutrum. Fusce et
                                                                        vehicula enim. Sed in enim eu odio vehic.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u7.jpg"
                                                                    alt="Image">
                                                                <span class="status away"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Browin</h4>
                                                                    <p class="last-msg">Nam ut nisi erat. Ut quis tortor
                                                                        varius, hendrerit arcu quis, congue nisl. In
                                                                        scelerisque, sem ut ve.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification media-active">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u1.jpg"
                                                                    alt="Image">
                                                                <span class="status active"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">jenelia</h4>
                                                                    <p class="last-msg">Donec mattis augue a nisl
                                                                        consequat, nec imperdiet ex rutrum. Fusce et
                                                                        vehicula enim. Sed in enim eu odio vehic.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-white">
                                                                        <i class="mdi mdi-clock-outline"></i> Just
                                                                        now...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u2.jpg"
                                                                    alt="Image">
                                                                <span class="status away"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Bhavlio</h4>
                                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                        consectetur adipisicing elit. Nam itaque
                                                                        doloremque odio, eligendi delectus vitae.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">
                                                            <div class="position-relative mr-3">
                                                                <img class="rounded-circle" src="assets/img/user/u5.jpg"
                                                                    alt="Image">
                                                                <span class="status away"></span>
                                                            </div>
                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Browini</h4>
                                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                        consectetur adipisicing elit. Nam itaque
                                                                        doloremque odio, eligendi delectus vitae.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="tab-pane fade" id="contact2" role="tabpanel"
                                                aria-labelledby="contact2-tab">
                                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification event-active">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                                <i class="mdi mdi-calendar-check font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Upcomming event added</h4>
                                                                    <p class="last-msg font-size-14">03/Jan/2020 (1pm -
                                                                        2pm)</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 10 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                                <i class="mdi mdi-chart-areaspline font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">New Sales report</h4>
                                                                    <p class="last-msg font-size-14">Lorem ipsum dolor
                                                                        sit, amet consectetur adipisicing elit. Nam
                                                                        itaque doloremque odio, eligendi delectus vitae.
                                                                    </p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                                <i
                                                                    class="mdi mdi-account-multiple-check font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">New Request</h4>
                                                                    <p class="last-msg font-size-14">Add Dany Jones as
                                                                        your contact consequat nec imperdiet ex rutrum.
                                                                        Fusce et vehicula enim. Sed in enim.</p>

                                                                    <span
                                                                        class="my-1 btn btn-sm btn-success">Accept</span>
                                                                    <span
                                                                        class="my-1 btn btn-sm btn-secondary">Delete</span>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary d-block">
                                                                        <i class="mdi mdi-clock-outline"></i> 5 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                                <i class="mdi mdi-server-network-off font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">Server overloaded</h4>
                                                                    <p class="last-msg font-size-14">Donec mattis augue
                                                                        a nisl consequat, nec imperdiet ex rutrum. Fusce
                                                                        et vehicula enim. Sed in enim eu odio vehic.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 30 min
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javscript:void(0)"
                                                            class="media media-message media-notification">

                                                            <div
                                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
                                                                <i class="mdi mdi-playlist-check font-size-20"></i>
                                                            </div>

                                                            <div class="media-body d-flex justify-content-between">
                                                                <div class="message-contents">
                                                                    <h4 class="title">New Task complete</h4>
                                                                    <p class="last-msg font-size-14">Nam ut nisi erat.
                                                                        Ut quis tortor varius, hendrerit arcu quis,
                                                                        congue nisl. In scelerisque, sem ut ve.</p>

                                                                    <span
                                                                        class="font-size-12 font-weight-medium text-secondary">
                                                                        <i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                        ago...
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="dropdown-menu dropdown-menu-right d-none">
                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> New user registered
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> User deleted
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-supervisor"></i> New client
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> View All </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-sidebar-in right-sidebar-2-menu">
                                <i class="mdi mdi-settings-outline mdi-spin"></i>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>Add Product</h1>
                            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Product
                            </p>
                        </div>
                        <div>
                            <a href="product-list.html" class="btn btn-primary"> View All
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Add Product</h2>
                                </div>

                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-4">
                                            <div class="ec-vendor-img-upload">
                                                <div class="ec-vendor-main-img">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" class="ec-image-upload"
                                                                accept=".png, .jpg, .jpeg, .gif" name="thumbnail"/>
                                                            <label for="imageUpload"><img
                                                                    src="assets/img/icons/edit.svg"
                                                                    class="svg_img header_svg" alt="edit" /></label>
                                                        </div>
                                                        <div class="avatar-preview ec-preview">
                                                            <div class="imagePreview ec-div-preview">
                                                                <img class="ec-image-preview"
                                                                    src="assets/img/products/vender-upload-preview.jpg"
                                                                    alt="edit" />
                                                            </div>
                                                            <div class="avatar-delete" style="position: absolute;display:
                                                            none;">
                                                                <button class="con-thumb-delete"><i class="mdi
                                                                mdi-delete-outline"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ec-vendor-upload-detail">
                                                <form class="row g-3" action="" id="productAdd">
                                                    <div class="col-md-6">
                                                        <label for="product-name" class="form-label">Product
                                                            name</label>
                                                        <input type="text" class="form-control slug-title"
                                                            id="product-name" name="productName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Select Categories</label>
                                                        <input type="hidden" name="category" id="categoryInput">
                                                        <button type="button" name="categories" class="btn open-modal-btn form-select" onclick="openModal()" id="Categories">Open Sidebar Modal</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Price <span>( In NGN )</span></label>
                                                        <input type="number" class="form-control" id="price1" name="price">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Discount <span>( % )</span></label>
                                                        <input type="number" class="form-control" id="discount" name="discount" min="0" max="100" step="1">
                                                    </div>
                                                    <div class="col-md-12"
                                                    style="margin-top:20px;">
                                                        <label
                                                        class="form-label">Short
                                                        Description</label>
                                                        <textarea class="form-control" rows="4" id="shortDescription" name="shortDescription"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Full Description</label>
                                                        <textarea
                                                        class="form-control"
                                                        rows="4"
                                                        id="descriptionInput"
                                                        name="description"
                                                        style="height:
                                                        300px;"></textarea>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top:30px;">
                                                        <label class="form-label">Product Tags <span>( Type and make comma to separate tags )</span></label>
                                                        <input type="text" class="form-control" id="productTag" name="productTags" value="" placeholder="" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Delivery Method</label>
                                                        <select class="form-select" id="deliveryMethod" name="deliveryMethod">
                                                            <option value="direct download">Direct Download</option>
                                                            <option value="email">Email</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Licence Key</label>
                                                        <input type="text" class="form-control" id="licenseKey" name="licenseKey" placeholder="Optional license key">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">File Upload</label>
                                                        <input type="file" name="productFile" id="productFile" accept=".zip,.7z,.rar,.txt,.epub,.iba,.pdf,.doc,.docx,.mp4,.jpg,.png,.gif,.svg,.bmp,.tiff,.avi,.mkv,.mov,.wmv,.flv,.mp3,.wav,.aac,.flac,.ogg,.exe,.deb,.msi,.dmg,.app,.apk,.ipa,.jar,.psd,.ai,.indd,.dwg">
                                                    </div>
                                                    <div class="col-md-12 d-none" id="external_productLink">
                                                        <label for="external_product_link" class="col-12 col-form-label">External product link</label>
                                                        <div class="col-12">
                                                            <input id="external_product_link" name="external_product_link"
                                                                class="form-control here" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="text-danger d-none" id="error"></p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Copyright &copy; <span id="ec-year"></span><a class="text-primary"
                            href="" target="_blank"> Ekka Admin
                            Dashboard</a>. All Rights Reserved.
                    </p>
                </div>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <div class="sidebar-modal">
                <nav class="sidebar-cate">
                    <header>
                        <div class="image-text">
                            <div class="text logo-text">
                                <span class="name">Main Categories</span>
                            </div>
                        </div>
                    </header>
                    <div class="menu-bar">
                        <ul id="mainCategories" class="menu-links">
                            <!-- Main categories will be loaded here -->
                        </ul>
                    </div>
                </nav>
                <div class="main-menu">
                    <div id="breadcrumb" class="header-link">
                        <a href="#" onclick="showMainCategories()" style="color:blue;">Home</a>
                        <span id="breadcrumbSeparator" style="color:blue;"> > </span>
                        <span id="breadcrumbText" style="color:blue;"></span>
                    </div>
                    <div class="subcategory-list">
                        <p id="mainCategoryText" style="text-align: center; font-size: 18px; color: #555;">Select Main Category</p>
                        <ul id="subCategoryList" style="display: none;"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="loadingOverlay" class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>
    <script src="assets/js/ekka.js"></script>
    <script src="assets/js/sweetalert.js"></script>
    <script src="raw.js"></script>
    <script>
        // Load main categories on modal open
        function openModal() {
            document.getElementById('modal').style.display = 'flex';
            loadMainCategories();
        }
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
        function subCategoryRadio(value){
            document.getElementById('categoryInput').value=value;
            closeModal();
        }
        function loadMainCategories() {
            $.ajax({
                url: 'fetch_categories.php',
                method: 'GET',
                data: { parentId: "" },
                success: function(data) {
                    console.log('Response:', data);

                    if (!Array.isArray(data)) {
                        console.error('Unexpected response format:', data);
                        return;
                    }

                    const mainCategories = $('#mainCategories');
                    mainCategories.empty();
                    data.forEach(category => {
                        mainCategories.append(`
                            <li>
                                <a href="#" onclick="loadSubCategories(${category.categoryId}, '${category.name}', true)">
                                    <span class="text nav-text">${category.name}</span>
                                </a>
                            </li>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });

        }
        let breadcrumbStack = [];
        function loadSubCategories(categoryId, name, isMainCategory = false) {
            const subCategoryList = $("#subCategoryList");
            const mainCategoryText = $("#mainCategoryText");
            const breadcrumbText = $("#breadcrumbText");
            const breadcrumbSeparator = $("#breadcrumbSeparator");

            subCategoryList.show();
            mainCategoryText.hide();
            subCategoryList.empty();

            // Update breadcrumb
            if (isMainCategory) {
                breadcrumbText.text(name); // Set the main category name
                breadcrumbSeparator.show(); // Show separator
            } else {
                breadcrumbText.append(" > " + name); // Append subcategory name
            }

            $.ajax({
                url: 'fetch_categories.php',
                method: 'GET',
                data: { parentId: categoryId },
                success: function(data) {
                    if (data.length > 0) {
                        data.forEach(subCategory => {
                            subCategoryList.append(`
                                <li>
                                    <div class="d-flex">
                                        <input type="radio" style="margin-right: 10px" value="${subCategory.categoryId}" onclick="subCategoryRadio(this.value)" name="subcategoryChoose">
                                        <a href="#" onclick="loadSubCategories(${subCategory.categoryId}, '${subCategory.name}')">${subCategory.name}</a>
                                    </div>
                                </li>
                            `);
                        });
                    } else {
                        document.getElementById('categoryInput').value = categoryId;
                        closeModal();
                    }
                }
            });
        }

        // tinymce.init({
        //     selector: '#descriptionInput',
        //     height: 400,
        //     plugins: [
        //         'advlist', 'autolink', 'lists', 'link', 'image',
        //         'charmap', 'preview', 'anchor', 'searchreplace',
        //         'visualblocks', 'code', 'fullscreen'
        //     ],
        //     toolbar: 'undo redo | ' +
        //         'bold italic underline | alignleft aligncenter alignright | ' +
        //         'bullist numlist | link image | code',
        //     content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        // });
        ClassicEditor
    .create(document.querySelector('#descriptionInput')),{
        height: '500px'
    }
    .then(editor => {
      console.log('Editor was initialized');
    })
    .catch(error => {
      console.error(error);
    });
        // Other JavaScript functions remain unchanged
    </script>
    <style>
</body>
</html>
