<?php
session_start();
require './admin_db.php';

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:24 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Help Others, Be Happy!</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/imp.css">
    <link rel="stylesheet" href="assets/css/custom-animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/scrollbar.css">
    <link rel="stylesheet" href="assets/css/hiddenbar.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!-- Module css -->
    <link rel="stylesheet" href="assets/css/module-css/header-section.css">
    <link rel="stylesheet" href="assets/css/module-css/banner-section.css">
    <link rel="stylesheet" href="assets/css/module-css/about-section.css">
    <link rel="stylesheet" href="assets/css/module-css/blog-section.css">
    <link rel="stylesheet" href="assets/css/module-css/fact-counter-section.css">
    <link rel="stylesheet" href="assets/css/module-css/faq-section.css">
    <link rel="stylesheet" href="assets/css/module-css/contact-page.css">
    <link rel="stylesheet" href="assets/css/module-css/breadcrumb-section.css">
    <link rel="stylesheet" href="assets/css/module-css/team-section.css">
    <link rel="stylesheet" href="assets/css/module-css/partner-section.css">
    <link rel="stylesheet" href="assets/css/module-css/testimonial-section.css">
    <link rel="stylesheet" href="assets/css/module-css/footer-section.css">

    <link rel="stylesheet" href="assets/css/color.css">
    <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16"> -->

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <style>
        .cause-page-one {
            display: flex;
        }
    </style>

</head>

<body>

    <div class="boxed_wrapper ltr">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end switcher menu -->

        <!-- Start sidebar widget content -->
        <?php require './user_sidebar.php'; ?>
        <!-- End sidebar widget content -->


        <!-- Main header-->
        <?php require './user_header.php'; ?>




        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="parallax-scene parallax-scene-1">
                                <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                    <div class="shape1">
                                        <img class="float-bob" src="assets/images/shape/breadcrumb-shape1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="parallax-scene parallax-scene-1">
                                <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                    <div class="shape2">
                                        <img class="zoominout" src="assets/images/shape/breadcrumb-shape2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <h2>Registered NGO </h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="user_home.php">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">Registered NGO</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Cause Page One-->
        <section class="cause-page-one">

            <div class="auto-container">
                <div class="row">
                    <?php
                    if (isset($_GET['category_id'])) {
                        $category_id = $_GET['category_id'];
                        $ngo_query = mysqli_query($connection, "select * from tbl_ngo where category_id = '{$category_id}' and ngo_status=1");
                    } else {
                        $ngo_query = mysqli_query($connection, "select * from tbl_ngo where ngo_status=1");
                    }

                    while ($ngo_data = mysqli_fetch_array($ngo_query)) {
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="/project/admin/uploads/<?php echo $ngo_data['ngo_photo']; ?> " alt="">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery" href="/project/admin/uploads/<?php echo $ngo_data['ngo_photo']; ?> ">
                                            <img src="/project/admin/uploads/<?php echo $ngo_data['ngo_photo']; ?> " alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3><a href="ngo_details.php?ngo_id=<?php echo $ngo_data['ngo_id']; ?>"><?php echo $ngo_data['ngo_name']; ?></a></h3>
                                    <!-- <p><?php echo $ngo_data['ngo_details']; ?></p> -->

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="50" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000" data-stop="50">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="ngo_details.php?ngo_id=<?php echo $ngo_data['ngo_id']; ?>"><span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--End Single Cause Style1-->
                </div>
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sidebar-content-box">
                            <!--Start Single Sidebar Box-->
                            <!--End Single Sidebar Box-->
                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="single-sidebar_search_box">
                                    <div class="title">
                                        <h3>Search</h3>
                                    </div>
                                    <div class="sidebar-search-box wow fadeInUp animated animated animated" data-wow-delay="0.1s" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <form class="search-form" action="#">
                                            <input placeholder="Keyword" type="text">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->
                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-categories">
                                    <div class="title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="sidebar-categories-box">
                                        <?php

                                        $category_query = mysqli_query($connection, "select * from tbl_category");
                                        echo "<li><a href='ngo_listing.php'><i class='fa fa-check-circle' aria-hidden='true'></i>All</li>";
                                        while ($category_data = mysqli_fetch_array($category_query)) {
                                            echo "<li><a href='ngo_listing.php?category_id={$category_data['category_id']}'><i class='fa fa-check-circle' aria-hidden='true'></i>{$category_data['category_name']}</a></li>";
                                        }
                                        ?>
                                        <!-- <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Charity for
                                                Poor</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->

                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-slogan-box" style="background-image: url(assets/images/sidebar/sidebar-slogan-img.jpg);">
                                    <div class="icon">
                                        <img src="assets/images/icon/thm-logo1.png" alt="" />
                                    </div>
                                    <h2>Small Donations<br> Bigger Impact</h2>
                                    <div class="btn-box">
                                        <div class="hand"><img src="assets/images/shape/hand.png" alt=""></div>
                                        <a class="btn-one" href="ngo_listing.php">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>donate now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->

                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-campaigns">
                                    <div class="title">
                                        <h3>Recent Blog</h3>
                                    </div>
                                    <ul class="recent-campaigns">
                                        <?php
                                        $blog_query = mysqli_query($connection, "select * from tbl_blog order by blog_id desc limit 0,3");

                                        while ($blog_data = mysqli_fetch_array($blog_query)) {
                                        ?>
                                            <li>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="assets/images/sidebar/campaigns-1.jpg" alt="Awesome Image">
                                                        <div class="overlay-content">
                                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="title-box">
                                                        <h4><a href="blog_listing.php"><?php echo $blog_data['blog_title']; ?></a></h4>
                                                        <div class="btns">
                                                            <a href="blog_listing.php">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cause Page One-->

        <!--Start footer area -->
        <?php require './user_footer.php'; ?>
        <!--End footer area-->

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>

    </div>






    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.enllax.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/knob.js"></script>
    <script src="assets/js/map-script.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/pagenav.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/timePicker.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/jquery-sidebar-content.js"></script>


    <!-- thm custom script -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $("#user_contact_form").validate();
        });
    </script>
    <style>
        .error {
            color: red
        }
    </style>


</body>


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:24 GMT -->

</html>