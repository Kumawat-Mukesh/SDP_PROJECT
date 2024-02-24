<?php
session_start();
require './admin_db.php';
$user_id = $_SESSION['user_id'];

$edit_id = $_GET['edit_id'];

$feedback_select = mysqli_query($connection, "select *from tbl_feedback where feedback_id={$edit_id}");
$feedback_row = mysqli_fetch_array($feedback_select);

if ($_POST) {

    $feedback_details = $_POST['details'];
    $feedback_rating = $_POST['rating'];
    $query = mysqli_query($connection, "update tbl_feedback set feedback_details='{$feedback_details}',feedback_rating='{$feedback_rating}' where feedback_id='{$edit_id}'");

    if ($query) {
        echo "<script>alert('Your Feedback is Updated!');window.location='user_my_feedback.php'</script>";
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
                                        <img class="float-bob" src="/project/admin/uploads <?php echo ""; ?>" alt="">
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
                                <h2>Edit Feedback</h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="user_home.php">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li><a href="user_my_feedback.php">My Feedback</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">Edit Feedback</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donation information -->
        <section class="cause-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="tile">


                            <?php
                            if (isset($_SESSION['user_id'])) {

                            ?>
                                <!--Start Reply Form Box-->
                                <div class="reply-form-box">
                                    <div class="title">
                                        <h3 style="color:chocolate;">Edit Your Feedback</h3>
                                    </div>
                                    <form id="review-form" method="post">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="input-box">
                                                    <input type="radio" name="rating" required <?php if ($feedback_row['feedback_rating'] == 1) {
                                                                                                    echo "checked";
                                                                                                } ?> value=1> Bad &nbsp;
                                                    <input type="radio" name="rating" required <?php if ($feedback_row['feedback_rating'] == 2) {
                                                                                                    echo "checked";
                                                                                                } ?> value=2> Average &nbsp;
                                                    <input type="radio" name="rating" required <?php if ($feedback_row['feedback_rating'] == 3) {
                                                                                                    echo "checked";
                                                                                                } ?> value=3> Good &nbsp;
                                                    <input type="radio" name="rating" required <?php if ($feedback_row['feedback_rating'] == 4) {
                                                                                                    echo "checked";
                                                                                                } ?> value=4> Very Good &nbsp;
                                                    <input type="radio" name="rating" required <?php if ($feedback_row['feedback_rating'] == 5) {
                                                                                                    echo "checked";
                                                                                                } ?>value=5> Excellent &nbsp;
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="input-box">
                                                    <textarea name="details" placeholder="Enter Review" required><?php echo $feedback_row['feedback_details']; ?></textarea>
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
                                <h5><b>Give Feedback-></b>
                                    <a href="user_login.php">Login</a>
                                </h5>
                            <?php
                            }
                            ?>
                        </div>
                    </div>



                </div>
            </div>
        </section>



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
        function confirmDelete() {
            return confirm("Are you sure?");
        }
    </script>



</body>


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/causes-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:41 GMT -->

</html>