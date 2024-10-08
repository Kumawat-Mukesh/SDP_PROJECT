<?php
session_start();
require  'admin_db.php';
$volunteer_id = $_SESSION['volunteer_id'];
$volunteer_select = mysqli_query($connection, "select *from tbl_volunteer where volunteer_id={$volunteer_id}");
$volunteer_data = mysqli_fetch_array($volunteer_select);
if ($_POST) {
    $volunteer_email = $_POST['volunteer_email'];
    $volunteer_mobile_no = $_POST['volunteer_mobile_no'];
    $volunteer_address = $_POST['volunteer_address'];

    $query = mysqli_query($connection, "update tbl_volunteer set volunteer_email='{$volunteer_email}',volunteer_mobile_no='{$volunteer_mobile_no}',volunteer_address='{$volunteer_address}' where volunteer_id='{$volunteer_id}'");
    if ($query) {
        echo "<script>alert('Your information has been updated');window.location='user_home.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mehedi.asiandevelopers.com/loveicon/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:48 GMT -->

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
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <?php
    require 'user_header.php';
    require 'user_sidebar.php';
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
                                    <li class="active">Update Profile</li>
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

                        <div class="contact-style1_form">

                            <div class="sec-title">
                                <div class="mx-auto col-10 col-md-8 col-lg-6">
                                    <h2>Update Profile <i class="fa fa-pencil-square-o" aria-hidden="true"></i></h2>
                                </div>
                            </div>
                            <div class="contact-form">
                                <form id="volunteer_register" class="justify-content-center" style="justify-content: center; " method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="mx-auto col-10 col-md-8 col-lg-6">

                                            <div class="input-box">
                                                <input type="email" name="volunteer_email" placeholder="Enter your email" value="<?php echo $volunteer_data['volunteer_email']; ?>" required>
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="volunteer_mobile_no" placeholder="Enter mobile number " value="<?php echo $volunteer_data['volunteer_mobile_no']; ?>" required>
                                            </div>
                                            <div class="input-box">
                                                <textarea name="volunteer_address" class="form-control" placeholder="Enter your address" rows="5" cols="15" required><?php echo $volunteer_data['volunteer_address']; ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mx-auto col-10 col-md-8 col-lg-6">
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                    <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Update
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
    <?php
    require 'user_footer.php';
    ?>
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

    <script src="tools/jquery-3.7.1.min.js"></script>
    <script src="tools/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#volunteer_register").validate({
                rules: {
                    volunteer_email: {
                        required: true,
                        email: true
                    },
                    volunteer_mobile_no: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    item_requirement_details: "required"
                },
                messages: {
                    volunteer_email: {
                        required: "Please enter a valid email address",
                        email: "Email contains (@) and (.)",
                    },
                    volunteer_mobile_no: {
                        required: "Please Enter Your Mobile no.",
                        minlength: "Enter Your 10 digit Mobile no. only",
                        maxlength: "Enter Your 10 digit Mobile no. only",
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