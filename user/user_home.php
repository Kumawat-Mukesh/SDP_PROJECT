<?php
session_start();
require './admin_db.php';

$donation_query = mysqli_query($connection, 'select * from tbl_donation');
$donation_count = mysqli_num_rows($donation_query);

$user_query = mysqli_query($connection, 'select * from tbl_user');
$user_count = mysqli_num_rows($user_query);

$volunteer_query_db = mysqli_query($connection, 'select * from tbl_volunteer');
$volunteer_count = mysqli_num_rows($volunteer_query_db);

$donation_complete_query = mysqli_query($connection, 'select * from tbl_volunteer');
$donation_complete_count = mysqli_num_rows($donation_complete_query);
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



        <!-- Start Main Slider -->
        <section id="banner" class="main-slider style1">
            <?php if (isset($_SESSION['set_alert'])) {
                unset($_SESSION["set_alert"]);
            ?>
                <div class="alert alert-dismissible alert-success">
                    <button class="btn-close" type="button" data-bs-dismiss="alert"></button><strong>You successfully Logged In</strong>.
                </div>
            <?php } ?>
            <div class="shape2 paroller"></div>
            <div class="slider-box">
                <!-- Banner Carousel -->
                <div class="banner-carousel owl-theme owl-carousel">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-1.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <h3>Change the life, Change the world</h3>
                                <div class="big-title">
                                    <h2>A Little Care Can<br> Change the World</h2>
                                </div>
                                <div class="border-box"></div>

                                <div class="btns-box">
                                    <a class="btn-one btn-one-style2" href="user_about_us.php">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we help</span>
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a class="btn-one btn-one-style1" href="ngo_listing.php">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate Now</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-2.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <h3>Change the life, Change the world</h3>
                                <div class="big-title">
                                    <h2>A Little Care Can<br> Change the World</h2>
                                </div>
                                <div class="border-box"></div>

                                <div class="btns-box">
                                    <a class="btn-one btn-one-style2" href="user_about_us.php">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we help</span>
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a class="btn-one btn-one-style1" href="ngo_listing.php">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-3.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <h3>Change the life, Change the world</h3>
                                <div class="big-title">
                                    <h2>A Little Care Can<br> Change the World</h2>
                                </div>
                                <div class="border-box"></div>

                                <div class="btns-box">
                                    <a class="btn-one btn-one-style2" href="user_about_us.php">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we help</span>
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a class="btn-one btn-one-style1" href="ngo_listing.php">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Main Slider -->


        <!--Start Testimonial style1 Area-->
        <section class="testimonial-style1-area">
            <div class="testimonial-style1-area_bg" style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
            <div class="container">
                <div class="testimonial-style1-content">
                    <div class="testimonial-style1_carousel owl-carousel owl-theme">
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="c1.jpeg" style='border-radius:50%; height:100%;' alt="">
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="quote">
                                    <span class="flaticon-right-quotes-symbol"></span>
                                </div>
                                <div class="text">
                                    <h3>Power to create opportunities</h3>
                                    <p>No one has ever become poor by giving.</p>
                                </div>
                                <div class="client-info">
                                    <h4>Anne Frank</h4>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="child1.jpeg" style='border-radius:50%' alt="">
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="quote">
                                    <span class="flaticon-right-quotes-symbol"></span>
                                </div>
                                <div class="text">
                                    <h3>Power to create opportunities</h3>
                                    <p>We make a living by what we get, but we make a life by what we give.</p>
                                </div>
                                <div class="client-info">
                                    <h4> Winston Churchill</h4>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="child2.jpeg" style='border-radius:50%' alt="">

                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="quote">
                                    <span class="flaticon-right-quotes-symbol"></span>
                                </div>
                                <div class="text">
                                    <h3>Power to create opportunities</h3>
                                    <p>Remember that the happiest people are not those getting more, but those giving more.</p>
                                </div>
                                <div class="client-info">
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->


                    </div>

                </div>
            </div>
        </section>
        <!--End Testimonial Style1 Area-->

        <!--Start Cause Style3 Area-->

        <!--End Cause Style3 Area-->

        <!--Start Fact Counter Area-->

        <section class="fact-counter-area">
            <div class="fact-counter-area_bg" style="background-image: url(assets/images/parallax-background/fact-counter-area_bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="fact-counter_box">
                            <ul class="clearfix">
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png" alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png" alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img src="assets/images/icon/fact-counter/fact-counter-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="<?php echo $donation_count; ?>"><?php echo $donation_count; ?></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Received Donations From<br> Our Loving People</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png" alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png" alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img src="assets/images/icon/fact-counter/fact-counter-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box style2">
                                                <span class="count-text" data-speed="3000" data-stop="<?php echo $user_count; ?>"><?php echo $user_count; ?></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Different Projects Done With<br> The Help Of Donators</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png" alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png" alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img src="assets/images/icon/fact-counter/fact-counter-3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box style3">
                                                <span class="count-text" data-speed="3000" data-stop="1.4">0</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>With Our Volunteers We’ve<br> Solved Many Causes </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png" alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png" alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img src="assets/images/icon/fact-counter/fact-counter-4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box style4">
                                                <span class="count-text" data-speed="3000" data-stop="<?php echo $volunteer_count; ?>"><?php echo $volunteer_count; ?></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>A Team consisting Of The<br> Best Volunteers </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Fact Counter Area-->

        <!--Start Donate Form Area-->

        <!--End Donate Form Area-->

        <!--Start Team Style1 Area-->
        <section class="team-style1-area">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="inner">
                            <h3>We Change Your Life & World</h3>
                        </div>
                        <!-- <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div> -->
                    </div>
                    <h2>Meet Our Volunteers</h2>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <!--Start Single Cause Style1-->
                        <div class="theme_carousel team-carousel owl-dot-style1 owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 2000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "4" }}}'>
                            <!--Start Single Team Style1-->
                            <?php
                            $volunteer_query = mysqli_query($connection, "select * from tbl_volunteer where volunteer_verified='Yes'");
                            while ($volunteer_data = mysqli_fetch_array($volunteer_query)) {
                            ?>
                                <div class="single-team-style1">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <a href="volunteer_listing.php">
                                                <img src="/project/admin/uploads/<?php echo $volunteer_data['volunteer_photo']; ?>" style="height: 250px; width:400px;" />
                                            </a>
                                            <div class=" icon">
                                                <span class=""></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder text-center">
                                        <h3><?php echo $volunteer_data['volunteer_first_name'] . " " . $volunteer_data['volunteer_last_name']; ?></h3>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <!--End Single Team Style1-->
                    </div>
                    <!--End Single Cause Style1-->
                </div>

            </div>
        </section>
        <!--End Team Style1 Area-->

        <!--End Blog Style1 Area-->


        <!--Start footer area -->
        <?php require './user_footer.php'; ?>
        <!--End footer area-->

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>
        <!-- </section> -->
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