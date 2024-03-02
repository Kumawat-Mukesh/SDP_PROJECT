<?php
session_start();
require './admin_db.php';
$ngo_id = $_GET['ngo_id'];
$ngo_query = mysqli_query($connection, "select * from tbl_ngo where ngo_id = '{$ngo_id}'");
$ngo_data = mysqli_fetch_array($ngo_query);

$item_requirement_query = mysqli_query($connection, "select * from tbl_item_requirement where ngo_id = {$ngo_id}  ");
$item_requirement_data = mysqli_fetch_array($item_requirement_query);

$_SESSION['$item_requirement_id'] = $item_requirement_data['item_requirement_id'];
if ($_POST) {
    $user_id = $_SESSION['user_id'];
    $feedback_details = $_POST['details'];
    $feedback_rating = $_POST['rating'];
    $query = mysqli_query($connection, "insert into tbl_feedback(ngo_id,user_id,feedback_details,feedback_rating) values('{$ngo_id}','{$user_id}','{$feedback_details}','{$feedback_rating}')");

    if ($query) {
        echo "<script>alert('Thank You For Your Feedback!');window.location='ngo_details.php?ngo_id=$ngo_id';</script>";
    }
}

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
    <style>
        table,
        th,
        td {
            border: 5px solid white;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0 30px;
            background-color: #F9ECD9;
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
                                        <!-- <img class="float-bob" src="/project/admin/uploads/ <?php echo $ngo_data['ngo_photo'] ?>" alt=""> -->
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
                                <h2>NGO Details</h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="user_home.php">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li><a href="ngo_listing.php">Registered NGO</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">NGO Details</li>
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
                        <div class="cause-details_content">
                            <div class="cause-details-image-box">
                                <img src="/project/admin/uploads/<?php echo $ngo_data['ngo_photo']; ?>" alt="">
                                <!-- <div class="category">
                                    <h6></h6>
                                </div> -->
                            </div>

                            <div class="donate-form-box donate-form-box--style2">
                                <div class="top-title">
                                    <h2><?php echo $ngo_data['ngo_name']; ?></h2>
                                </div>
                            </div>

                            <div class="cause-details-text-box-1">
                                <p><?php echo $ngo_data['ngo_details']; ?>
                                </p>
                            </div>
                            <hr>
                            <div class="cause-details-text-box-3">
                                <div class="cause-details-title">
                                    <h2>Our Requirements</h2>
                                    <div class="cause-details-title-shape wow zoomIn" data-wow-duration="2000ms">
                                        <img class="zoom-fade" src="assets/images/shape/cause-details-title-shape.png" alt="">
                                    </div>
                                </div>
                                <p><?php
                                    $item_requirement_query = mysqli_query($connection, "select * from tbl_item_requirement where ngo_id = {$ngo_id} ");
                                    $i = 0;
                                    echo "<table border='1'>";
                                    echo "<tr>
                                    <th>NO.</th>
                                    <th>Requirements</th>
                                    <th>Status</th>
                                    </tr>";
                                    while ($item_requirement_data = mysqli_fetch_array($item_requirement_query)) {
                                        $i++;
                                        echo "<tr>";
                                        echo "<td>{$i}</td>";
                                        echo "<td>{$item_requirement_data['item_requirement_details']}</td>";
                                        echo "<td>{$item_requirement_data['item_requirement_status']}</td>";
                                        echo "</tr>";
                                    }

                                    echo "</table>";
                                    ?>
                                </p>
                            </div>
                            <?php
                            if (isset($_SESSION['user_id'])) {

                            ?>

                                <section class="mission-vision-area">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mission-vision-tabs tabs-box">
                                                    <div class="shape1"><img src="assets/images/shape/thm-shape-13.png" alt=""></div>
                                                    <div class="tab-button-column clearfix">
                                                        <ul class="tab-buttons clearfix">
                                                            <li data-tab="#vision" class="tab-btn style2">Donate item</li>
                                                            <li data-tab="#mission" class="tab-btn style3">Donate Money</li>
                                                        </ul>
                                                    </div>

                                                    <div class="mission-vision-content-column clearfix">
                                                        <div class="tabs-content">

                                                            <!--Tab-->
                                                            <div class="tab" id="vision">
                                                                <div class="row clearfix">

                                                                    <div class="contact-form justify-content-left" style="justify-content:flex-start; ">
                                                                        <form class="justify-content-center" method="post" action="donation_process.php">
                                                                            <div class="row">
                                                                                <div class="input-box">
                                                                                    <textarea name="donation_details" cols="50" rows="3" placeholder="Enter donation details" required></textarea>
                                                                                </div>
                                                                                <div class="input-box">
                                                                                    <textarea name="donation_address" cols="50" rows="3" placeholder="Enter donation address" required></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="input-box">
                                                                                    <input type="hidden" value="<?php echo $_GET['ngo_id']; ?>" name="ngo_id" required="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="input-box">
                                                                                    <?php
                                                                                    $csq = mysqli_query($connection, "select * from tbl_item_requirement where ngo_id ='{$_GET['ngo_id']}'");
                                                                                    echo "<select name='item_requirement_id'>";
                                                                                    echo "<option value=''>Select</option>";

                                                                                    while ($redata = mysqli_fetch_array($csq)) {
                                                                                        echo "<option value='{$redata["item_requirement_id"]}'>{$redata['item_requirement_details']}</option>";
                                                                                    }

                                                                                    echo "</select>";
                                                                                    ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="button-box">
                                                                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                                                    <button class="btn-one" type="submit" name="donate" data-loading-text="Please wait...">
                                                                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Donate
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Tab-->
                                                            <div class="tab" id="mission">
                                                                <div class="row clearfix">

                                                                    <form method="post" action="payment-cod-online.php?ngo_id=<?php echo $ngo_data['ngo_id']; ?>">
                                                                        <div class="contact-form justify-content-l" style="justify-content:flex-start; ">
                                                                            <div class="donate-form-box donate-form-box--style2">
                                                                                <div class="donation_wrapper">
                                                                                    <div class="amount_wrapper">
                                                                                        <input name="amount" type="number" value="10.00" step="0.1" min="1.00">
                                                                                        <div class="suffix">₹</div>
                                                                                    </div>
                                                                                    <datalist class="single_amount_wrapper">
                                                                                        <option class="single_amount" value="50">50₹</option>
                                                                                        <option class="single_amount" value="100">100₹</option>
                                                                                        <option class="single_amount" value="200">200₹</option>
                                                                                        <option class="single_amount" value="500">500₹</option>
                                                                                        <option class="single_amount" value="1000">1000₹</option>
                                                                                        <option class="single_amount" value="0">Custom</option>
                                                                                    </datalist>
                                                                                    <div class="bottom-box">
                                                                                        <div class="btns">
                                                                                            <input class="btn-one" type="submit" value="Donate Now" />
                                                                                            <!-- <a class="btn-one" target="_blank" rel="nofollow">
                                                                                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate
                                                                                                    Now</span>
                                                                                            </a> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php } else { ?>
                                <h5>Want to Donate? -> <a href="user_login.php"> Login</a></h5>

                            <?php
                            }
                            ?>
                        </div>
                        <div class="comments-box-one">
                            <div class="title">
                                <h2 style="color:chocolate;">Feedbacks</h2>
                            </div>
                            <div class="inner">
                                <?php

                                $select = mysqli_query($connection, "select*from tbl_feedback where ngo_id='{$ngo_id}' limit 0,3");
                                $count = mysqli_num_rows($select);
                                if ($count > 0) {
                                    while ($feedback_row = mysqli_fetch_array($select)) {
                                        $user_query = mysqli_query($connection, "select*from tbl_user where user_id='{$feedback_row['user_id']}'");
                                        $user_row = mysqli_fetch_array($user_query);
                                ?>
                                        <!--Start Single Review Box-->
                                        <div class="text_box">
                                            <div class="inner">
                                                <div class="top">
                                                    <div class="left">
                                                        <h4><?php echo $user_row['user_first_name']; ?></h4>
                                                        <!-- <span>March 31, 2021 at 12:58 am</span> -->
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p><?php echo $feedback_row['feedback_details']; ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!--End Single Review Box-->
                                <?php
                                    }
                                } else {
                                    echo "No Reviews!";
                                    echo "<hr>";
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                        ?>
                            <!--Start Reply Form Box-->
                            <div class="reply-form-box">
                                <div class="title">
                                    <h3 style="color:chocolate;">Give Your Feedback</h3>
                                </div>
                                <form id="review-form" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="input-box">
                                                <input type="radio" name="rating" required value=1> Bad &nbsp;
                                                <input type="radio" name="rating" required value=2> Average &nbsp;
                                                <input type="radio" name="rating" required value=3> Good &nbsp;
                                                <input type="radio" name="rating" required value=4 checked> Very Good &nbsp;
                                                <input type="radio" name="rating" required value=5> Excellent &nbsp;
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="input-box">
                                                <textarea name="details" placeholder="Enter Review" required></textarea>
                                                <div class="icon"><span class="fa fa-pencil"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn-one" type="submit">
                                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Submit</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php
                        } else {
                        ?>
                            <br>
                            <h5><b>Give Feedback -></b>
                                <a href="user_login.php">Login</a>
                            </h5>
                        <?php
                        }
                        ?>
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
                                                    <input placeholder="NGO" type="text">
                                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                </form>
                                                </br>
                                                </br>

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