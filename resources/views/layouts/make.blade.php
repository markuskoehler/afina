<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="../assets/global/images/favicon.png" type="image/png">
    <title>Make Admin Template &amp; Builder</title>
    <link href="../assets/global/css/style.css" rel="stylesheet">
    <link href="../assets/global/css/theme.css" rel="stylesheet">
    <link href="../assets/global/css/ui.css" rel="stylesheet">
    <link href="../assets/admin/layout4/css/layout.css" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="../assets/global/plugins/metrojs/metrojs.min.css" rel="stylesheet">
    <link href="../assets/global/plugins/maps-amcharts/ammap/ammap.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="../assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    @stack('header')
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->

<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
<body class="sidebar-top fixed-topbar fixed-sidebar theme-sltd color-default dashboard">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<section>
    @include('layouts.partials.navigation')
    <div class="main-content">
        @include('layouts.partials.header')
        @include('layouts.partials.content')
    </div>
    <!-- END MAIN CONTENT -->
    <!-- BEGIN BUILDER -->
    <!--<div class="builder hidden-sm hidden-xs" id="builder">
        <a class="builder-toggle"><i class="icon-wrench"></i></a>
        <div class="inner">
            <div class="builder-container">
                <a href="#" class="btn btn-sm btn-default" id="reset-style">reset default style</a>
                <h4>Layout options</h4>
                <div class="layout-option">
                    <span> Fixed Sidebar</span>
                    <label class="switch pull-right">
                        <input data-layout="sidebar" id="switch-sidebar" type="checkbox" class="switch-input" checked>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <div class="layout-option">
                    <span>Fixed Topbar</span>
                    <label class="switch pull-right">
                        <input data-layout="topbar" id="switch-topbar" type="checkbox" class="switch-input" checked>
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <div class="layout-option">
                    <span>Boxed Layout</span>
                    <label class="switch pull-right">
                        <input data-layout="boxed" id="switch-boxed" type="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
                <h4 class="border-top">Color</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="theme-color bg-dark" data-main="default" data-color="#2B2E33"></div>
                        <div class="theme-color background-primary" data-main="primary" data-color="#319DB5"></div>
                        <div class="theme-color bg-red" data-main="red" data-color="#C75757"></div>
                        <div class="theme-color bg-green" data-main="green" data-color="#1DA079"></div>
                        <div class="theme-color bg-orange" data-main="orange" data-color="#D28857"></div>
                        <div class="theme-color bg-purple" data-main="purple" data-color="#B179D7"></div>
                        <div class="theme-color bg-blue" data-main="blue" data-color="#4A89DC"></div>
                    </div>
                </div>
                <h4 class="border-top">Theme</h4>
                <div class="row row-sm">
                    <div class="col-xs-6">
                        <div class="theme clearfix sdtl" data-theme="sdtl">
                            <div class="header theme-left"></div>
                            <div class="header theme-right-light"></div>
                            <div class="theme-sidebar-dark"></div>
                            <div class="bg-light"></div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="theme clearfix sltd" data-theme="sltd">
                            <div class="header theme-left"></div>
                            <div class="header theme-right-dark"></div>
                            <div class="theme-sidebar-light"></div>
                            <div class="bg-light"></div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="theme clearfix sdtd" data-theme="sdtd">
                            <div class="header theme-left"></div>
                            <div class="header theme-right-dark"></div>
                            <div class="theme-sidebar-dark"></div>
                            <div class="bg-light"></div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="theme clearfix sltl" data-theme="sltl">
                            <div class="header theme-left"></div>
                            <div class="header theme-right-light"></div>
                            <div class="theme-sidebar-light"></div>
                            <div class="bg-light"></div>
                        </div>
                    </div>
                </div>
                <h4 class="border-top">Background</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bg-color bg-clean" data-bg="clean" data-color="#F8F8F8"></div>
                        <div class="bg-color bg-lighter" data-bg="lighter" data-color="#EFEFEF"></div>
                        <div class="bg-color bg-light-default" data-bg="light-default" data-color="#E9E9E9"></div>
                        <div class="bg-color bg-light-blue" data-bg="light-blue" data-color="#E2EBEF"></div>
                        <div class="bg-color bg-light-purple" data-bg="light-purple" data-color="#E9ECF5"></div>
                        <div class="bg-color bg-light-dark" data-bg="light-dark" data-color="#DCE1E4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- END BUILDER -->
</section>
@include('layouts.partials.sidebar')
<!-- BEGIN SEARCH -->
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <input class="morphsearch-input" type="search" placeholder="Search..."/>
        <button class="morphsearch-submit" type="submit">Search</button>
    </form>
    <div class="morphsearch-content withScroll">
        <div class="dummy-column user-column">
            <h2>Users</h2>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/avatars/avatar1_big.png" alt="Avatar 1"/>
                <h3>John Smith</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/avatars/avatar2_big.png" alt="Avatar 2"/>
                <h3>Bod Dylan</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/avatars/avatar3_big.png" alt="Avatar 3"/>
                <h3>Jenny Finlan</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/avatars/avatar4_big.png" alt="Avatar 4"/>
                <h3>Harold Fox</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/avatars/avatar5_big.png" alt="Avatar 5"/>
                <h3>Martin Hendrix</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/avatars/avatar6_big.png" alt="Avatar 6"/>
                <h3>Paul Ferguson</h3>
            </a>
        </div>
        <div class="dummy-column">
            <h2>Articles</h2>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/1.jpg" alt="1"/>
                <h3>How to change webdesign?</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/2.jpg" alt="2"/>
                <h3>News From the sky</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/3.jpg" alt="3"/>
                <h3>Where is the cat?</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/4.jpg" alt="4"/>
                <h3>Just another funny story</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/5.jpg" alt="5"/>
                <h3>How many water we drink every day?</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/6.jpg" alt="6"/>
                <h3>Drag and drop tutorials</h3>
            </a>
        </div>
        <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/7.jpg" alt="7"/>
                <h3>Design Inspiration</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/8.jpg" alt="8"/>
                <h3>Animals drawing</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/9.jpg" alt="9"/>
                <h3>Cup of tea please</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/10.jpg" alt="10"/>
                <h3>New application arrive</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/11.jpg" alt="11"/>
                <h3>Notification prettify</h3>
            </a>
            <a class="dummy-media-object" href="#">
                <img src="../assets/global/images/gallery/12.jpg" alt="12"/>
                <h3>My article is the last recent</h3>
            </a>
        </div>
    </div>
    <!-- /morphsearch-content -->
    <span class="morphsearch-close"></span>
</div>
<!-- END SEARCH -->
<!-- BEGIN PRELOADER -->
<div class="loader-overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- END PRELOADER -->
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="../assets/global/plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="../assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/global/plugins/gsap/main-gsap.min.js"></script>
<script src="../assets/global/plugins/tether/js/tether.min.js"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/global/plugins/appear/jquery.appear.js"></script>
<script src="../assets/global/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
<script src="../assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="../assets/global/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
<script src="../assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
<script src="../assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
<script src="../assets/global/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
<script src="../assets/global/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
<script src="../assets/global/plugins/select2/dist/js/select2.full.min.js"></script> <!-- Select Inputs -->
<script src="../assets/global/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
<script src="../assets/global/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
<script src="../assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
<script src="../assets/global/js/builder.js"></script> <!-- Theme Builder -->
<script src="../assets/global/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
<script src="../assets/global/js/application.js"></script> <!-- Main Application Script -->
<script src="../assets/global/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
<script src="../assets/global/js/widgets/notes.js"></script> <!-- Notes Widget -->
<script src="../assets/global/js/quickview.js"></script> <!-- Chat Script -->
<script src="../assets/global/js/pages/search.js"></script> <!-- Search Script -->
<!-- BEGIN PAGE SCRIPT -->
<script src="../assets/global/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
<script src="../assets/global/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
<script src="../assets/global/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- Context Menu -->
<script src="../assets/global/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
<script src="../assets/global/js/widgets/todo_list.js"></script>
<script src="../assets/global/plugins/metrojs/metrojs.min.js"></script> <!-- Flipping Panel -->
<script src="../assets/global/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
<script src="../assets/global/plugins/charts-highstock/js/highstock.js"></script> <!-- financial Charts -->
<script src="../assets/global/plugins/charts-highstock/js/modules/exporting.js"></script> <!-- Financial Charts Export Tool -->
<script src="../assets/global/plugins/maps-amcharts/ammap/ammap.js"></script> <!-- Vector Map -->
<script src="../assets/global/plugins/maps-amcharts/ammap/maps/js/worldLow.js"></script> <!-- Vector World Map  -->
<script src="../assets/global/plugins/maps-amcharts/ammap/themes/black.js"></script> <!-- Vector Map Black Theme -->
<script src="../assets/global/plugins/skycons/skycons.min.js"></script> <!-- Animated Weather Icons -->
<script src="../assets/global/plugins/simple-weather/jquery.simpleWeather.js"></script> <!-- Weather Plugin -->
<script src="../assets/global/js/widgets/widget_weather.js"></script>
<script src="../assets/global/js/pages/dashboard.js"></script>
<!-- END PAGE SCRIPT -->
<script src="../assets/admin/layout4/js/layout.js"></script>
@stack('footer')
</body>
</html>
