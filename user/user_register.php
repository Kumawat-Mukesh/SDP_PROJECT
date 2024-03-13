<?php
session_start();
require './admin_db.php';
$msg = "";
if ($_POST) {
    $user_first_name = $_POST['user_first_name'];
    $user_last_name = $_POST['user_last_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_gender = $_POST['user_gender'];
    $user_mobile_no = $_POST['user_mobile_no'];
    $user_address = $_POST['user_address'];
    $user_pincode = $_POST['user_pincode'];
    $area_id = $_POST['area_id'];

    $query = mysqli_query($connection, "insert into tbl_user(user_first_name,user_last_name,user_email,user_password,user_gender,user_mobile_no,user_address,user_pincode,area_id) values('{$user_first_name}','{$user_last_name}','{$user_email}','{$user_password}','{$user_gender}','{$user_mobile_no}','{$user_address}','{$user_pincode}','{$area_id}')");
    if ($query) {
        // echo "<script>alert('User added to the database');window.location='user_login.php'</script>";

        $msg = "<div class='alert alert-success' role='alert'><a href='user_login.php' class='alert-link'>Login</a>. You are Sucessfully registered .</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>

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

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Favicon
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16"> -->

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <?php
    require './user_header.php';
    require './user_sidebar.php';
    ?>
    <div class="boxed_wrapper ltr">
        <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-7.jpg);">
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
                                <h2>Registration Form</h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="user_home.php">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">Registration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-style1-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <?php echo $msg; ?>
                        <div class="contact-style1_form">
                            <div class="sec-title">
                                <div class="mx-auto col-10 col-md-8 col-lg-6">
                                    <h2>Registration <i class="fa fa-pencil-square-o" aria-hidden="true"></i></h2>
                                </div>
                            </div>
                            <div class="contact-form">
                                <form id="user_register_form" class="justify-content-center" style="justify-content: center;" method="post">
                                    <div class="row">
                                        <div class="mx-auto col-10 col-md-8 col-lg-6">
                                            <div class="input-box">
                                                <input type="text" name="user_first_name" value="" placeholder="Enter Your First Name" required>
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="user_last_name" value="" placeholder="Enter Your Last Name" required>
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="user_mobile_no" maxlength="10" value="" placeholder="Enter Your Phone Number" required>
                                            </div>
                                            <div class="input-box">
                                                <textarea rows="10" cols="20" name="user_address" placeholder="Enter Your Address" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="mx-auto col-10 col-md-8 col-lg-6">
                                            <div class="input-box">
                                                <label>Select Gender: </label> &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="user_gender" value="male" required=""> Male &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="user_gender" value="female" required=""> Female
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="user_pincode" value="" placeholder="Enter Your Pincode" required>
                                            </div>
                                            <div class="input-box">
                                                <?php
                                                $area_query = mysqli_query($connection, "select * from tbl_area");
                                                echo "<select class='form-control' name = 'area_id' required>";
                                                echo "<option value=''>Select Area</ option>";
                                                while ($area_row = mysqli_fetch_array($area_query)) {
                                                    echo "<option value='{$area_row['area_id']}'>{$area_row['area_name']}</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                            <div class="input-box">
                                                <input type="email" name="user_email" value="" placeholder="Email" required>
                                                <div class="icon"><span class="flaticon-opened"></span></div>
                                            </div>
                                            <div class="input-box">
                                                <input type="password" name="user_password" value="" placeholder="Password" required>
                                                <div class="icon"><span class="fa fa-key"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mx-auto col-10 col-md-8 col-lg-6">
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                    <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Register
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>

    </div>
    <?php require './user_footer.php'; ?>
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

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&amp;callback=initMap">
    </script>
    <!-- thm custom script -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            $("#user_register_form").validate({

                rules: {

                    user_first_name: {
                        required: true,
                        minlength: 2
                    },
                    user_last_name: {
                        required: true,
                        minlength: 2
                    },
                    user_mobile_no: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    user_address: "required",
                    user_pincode: {
                        required: true,
                        minlength: 6
                    },
                    user_email: {
                        required: true,
                        email: true
                    },
                    user_password: {
                        required: true,
                        minlength: 6
                    },
                    area_id: {
                        required: true
                    },
                },
                messages: {

                    user_first_name: {
                        required: "Please Enter Name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    user_last_name: {
                        required: "Please Enter Name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    user_mobile_no: {
                        required: "Please Enter Your Mobile no.",
                        minlength: "Enter Your 10 digit Mobile no. only",
                        maxlength: "Enter Your 10 digit Mobile no. only",
                    },
                    user_pincode: {
                        required: "Please Enter Pincode",
                        minlength: "Enter 6 digit area pincode"
                    },
                    user_email: {
                        required: "Please enter a valid email address",
                        email: "Email contains (@) and (.)",
                    },
                    user_password: {
                        required: "Please Enter Password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    area_id: {
                        required: "Select",
                    },
                }
            });
        });
    </script>

    <style>
        .error {
            color: red
        }
    </style>
</body>


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:48 GMT -->

</html>