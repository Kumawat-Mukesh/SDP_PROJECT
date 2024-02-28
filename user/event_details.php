<?php
session_start();
require './admin_db.php';
$event_id = $_GET['event_id'];
$event_query = mysqli_query($connection, "select * from tbl_event where event_id = '{$event_id}'");
$event_data = mysqli_fetch_array($event_query);



?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/causes-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:41 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Help Others,Be Happy!</title>

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


        <!-- Main header-->
        <?php require './user_sidebar.php'; ?>
        <?php require './user_header.php'; ?>


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="parallax-scene parallax-scene-1">
                                <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                    <div class="shape1">
                                        <!-- <img class="float-bob" src="/project/admin/uploads/ <?php echo $event_data['event_photo'] ?>" alt=""> -->
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
                                <h2>Event Details</h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="user_home.php">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li><a href="event_listing.php">Event</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">Event Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Cause Details Area-->
        <section class="cause-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="event-details_content">

                            <div class="event-details-image-box">
                                <img src="/project/admin/events/<?php echo $event_data['event_photo']; ?>" alt="">

                            </div>

                            <div class="event-details-text-box">
                                <h2><?php echo $event_data['event_title']; ?></h2>
                                <ul class="event-info" style="width: 900px;">
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/icon/date-1.png" alt="">
                                            <div class="overlay-icon">
                                                <img src="assets/images/icon/date-1-bg.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Date Time</p>
                                            <h3><?php echo $event_data['event_date'] . " " . $event_data['event_time']; ?></h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/icon/map-marker-1.png" alt="">
                                            <div class="overlay-icon">
                                                <img src="assets/images/icon/map-marker-1-bg.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Location</p>
                                            <h3><?php echo $event_data['event_location']; ?></h3>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bottom-box">
                                    <div class="btns">
                                        <?php echo $event_data['event_details']; ?>
                                    </div>
                                </div>

                            </div>









                        </div>
                        <!-- <div class="cause-details_content">
                            <div class="cause-details-image-box">
                                <img src="/project/admin/uploads/<?php // $ngo_data['ngo_photo']; 
                                                                    ?>" alt="">
                                 <div class="category">
                                    <h6></h6>
                                </div>
                            </div>

                            <div class="donate-form-box donate-form-box--style2">
                                <div class="top-title">
                                    <h2><?php // $event_data['event_title']; 
                                        ?></h2>
                                    <p><?php // $event_data['event_details']; 
                                        ?>
                                </p>
                                </div>
                            </div>

                            <div class="cause-details-text-box-1">
                                
                                </p>
                            </div>
                            <hr>
                        </div> -->


                        <!--Start Reply Form Box-->

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

                                    <!--End Single Sidebar Box-->

                                    <!--Start Single Sidebar Box-->

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
                </div>


            </div>

        </section>
        <!--End Cause Details Area-->

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



</body>


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/causes-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:41 GMT -->

</html>