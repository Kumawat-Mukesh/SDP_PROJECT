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
                                <h2>Event</h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="user_home.php">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">Event</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Cause Page One-->
        <section class="event-page-one">
            <div class="container">
                <div class="row">
                    <?php
                    $event_query = mysqli_query($connection, "select * from tbl_event");


                    while ($event_row = mysqli_fetch_array($event_query)) {
                        $ngo_query = mysqli_query($connection, "select*from tbl_ngo where ngo_id='{$event_row['ngo_id']}'");
                        $ngo_row = mysqli_fetch_array($ngo_query);
                    ?>
                        <!--Start Single Event Style2-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-event-style1 single-event-style2">
                                <div class="single-event-style2_bg" style="background-image: url('/project/NGO/uploads/<?php echo $event_row['event_photo']; ?>'">
                                </div>
                                <div class="static-content">
                                    <div class="date-box">
                                        <div class="left">
                                            <h2>
                                                <?php
                                                $d = $event_row['event_date'];
                                                echo date('d', strtotime($d));
                                                ?>
                                            </h2>
                                        </div>
                                        <div class="right">
                                            <h3>
                                                <?php
                                                echo date('M', strtotime($d));
                                                ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="meta-info">

                                        <p>Organized By:<?php echo $ngo_row['ngo_name']; ?></p>
                                    </div>
                                    <div class="title">
                                        <h2><a href=''><?php echo $event_row['event_title']; ?></a></h2>
                                    </div>
                                    <!-- <div class="inner-text">
                                    <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sed duis aute cupidata con
                                        proident sunt culpa.</p>
                                </div> -->
                                    <div class="border-box"></div>
                                    <div class="event-time">
                                        <div class="icon">
                                            <span class="flaticon-clock"></span>
                                        </div>
                                        <div class="text">
                                            <p>Time:
                                                <?php
                                                $t = $event_row['event_time'];
                                                echo date('g:i a', strtotime($t));
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="date-box">
                                        <div class="left">
                                            <h2>
                                                <?php
                                                $d = $event_row['event_date'];
                                                echo date('d', strtotime($d));
                                                ?>
                                            </h2>
                                        </div>
                                        <div class="right">
                                            <h3>
                                                <?php
                                                echo date('M', strtotime($d));
                                                ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="meta-info">
                                        <p>Organized By: <?php echo $ngo_row['ngo_name']; ?></p>
                                    </div>
                                    <div class="title">
                                        <h2><a href="event_details.php?event_id=<?php echo $event_row['event_id']; ?>"><?php echo $event_row['event_title']; ?></a></a>
                                        </h2>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="event_details.php?event_id=<?php echo $event_row['event_id']; ?>">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>View</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
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