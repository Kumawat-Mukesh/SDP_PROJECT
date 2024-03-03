<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'admin_db.php';

if (isset($_POST['submit'])) {
    $user_email = $_POST['user_email'];
    $user_query = mysqli_query($connection, "select * from tbl_user where user_email = '{$user_email}'");
    $user_count = mysqli_num_rows($user_query);
    $user_row = mysqli_fetch_array($user_query);
    if ($user_count == 1) {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $user_subject = $_POST['user_subject'];
        $user_message = $_POST['user_message'];
        // $user_pass = $user_row['user_pas']
        // $contact_msg = "Name: " . $user_name . "<br> Subject: " . $user_subject . "<br> Message: " . $user_message;

        $contact_msg = " 

        Dear ,$user_name <br><br>

        Thank you for contacting us regarding '$user_subject'. <br><br> 
        Your Message is: $user_message <br><br><br>
        We have also received your contact information:<br>

        &nbsp;&nbsp;&nbsp;&nbsp;Email: $user_email <br>
        Thank you for reaching out to us. Your inquiry is important to us, and we are dedicated to providing you with the assistance you need.<br>
        
        Our team will review your message promptly and get back to you as soon as possible. We strive to respond to all inquiries within working days, but please understand that during peak periods, it may take a little longer.<br>
        
        In the meantime, if you have any urgent concerns or additional information to add, please feel free to reply to this email, and we'll prioritize your request.<br>
        
        Once again, thank you for contacting us. We appreciate your patience and look forward to assisting you.<br><br>
        
        Best regards,<br>
        Connecting Dots.";

        $admin_msg = "
        <table><th>Inquiry about $user_subject</th>
        
        <tr>
            <td>User Name</td>
            <td>{$user_name}</td>
        </tr>
        <tr>
            <td>User Email</td>
            <td>{$user_email}</td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>{$user_subject}</td>
        </tr>
        <tr >
            <td>Message</td>
            <td>{$user_message}</td>
        </tr>
        </table>
        
         ";


        //Load Composer's autoloader
        //Create an instance; passing true enables exceptions
        $mail = new PHPMailer(true);
        $mail2 = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'sdp.project.2024@gmail.com';                     //SMTP username
            $mail->Password   = 'pguygxdcrdlejszi';                               //SMTP password dgdwalymnmpnndnl
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

            //Recipients
            $mail->setFrom($user_email, $user_name);
            $mail->addAddress($user_email);     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $user_subject;
            $mail->Body    = $contact_msg;
            $mail->AltBody = $contact_msg;
            $mail->send();

            $mail->ClearAllRecipients();

            $mail->setFrom($user_email, $user_name);
            $mail->addAddress('sdp.project.2024@gmail.com');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Inquery';
            $mail->Body    = $admin_msg;
            $mail->AltBody = $admin_msg;
            $mail->send();
            echo "<script>alert('Thank you for Contacting us!!');window.location='user_home.php'</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script>alert('User Not Found')</script>";
    }
}
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
        table,

        td {
            border: 1px solid;
            border-style: inset;
            padding: 50px;
            margin: 50px;
        }

        th {
            padding: 30px;
            margin: 30px;
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
        <?php
        require 'user_sidebar.php';
        ?>
        <!-- End sidebar widget content -->


        <!-- Main header-->
        <?php
        require 'user_header.php';
        ?>



        <!--Start Contact Style1 Area-->
        <section id="contact" class="contact-style1-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-style1_form">
                            <div class="sec-title">
                                <div class="sub-title martop0">
                                    <div class="inner">
                                        <h3>Support Connecting Dots With Heart!</h3>
                                    </div>
                                </div>
                                <h2>Get In Touch With Us</h2>
                                <p>Your donation is like a superhero cape for people who need help. It's like giving a warm hug to those who might be feeling cold or lonely. With your kindness, we can make the world a better and happier place for everyone. So, thank you for being a superhero of kindness!
                                </p>
                            </div>
                            <div class="contact-form">
                                <form id="user_contact" name="contact_form" action="user_contact_us.php" method="post">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="user_name" placeholder="Your Name" required>
                                                <div class="icon"><span class="flaticon-user"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="email" name="user_email" placeholder="Email" required>
                                                <div class="icon"><span class="flaticon-opened"></span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="user_phone" placeholder="Phone" required>
                                                <div class="icon"><span class="fa fa-phone"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="input-box">
                                                <input type="text" name="user_subject" placeholder="Subject" required>
                                                <div class="icon"><span class="fa fa-comment-o"></span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <textarea name="user_message" placeholder="message" required></textarea>
                                                <div class="icon"><span class="fa fa-pencil"></span></div>
                                            </div>
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn-one" name="submit" type="submit" data-loading-text="Please wait...">
                                                    <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Send
                                                        Message</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4">
                        <div class="sidebar-content-box">
                            <div class="contact-info-sidebar">
                                <ul>
                                    <li>
                                        <div class="top">
                                            <div class="icon">
                                                <span class="flaticon-maps-and-flags"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Visit Office</h3>
                                            </div>
                                        </div>
                                        <p>K/8,Shree Krishna Centre Above Crossword Library<br>Navrangpura - 380009</p>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <div class="icon">
                                                <span class="flaticon-phone-call-1"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Phone</h3>
                                            </div>
                                        </div>
                                        <p>Support <a href="tel:+91 9898741235">+91 95862 48516</a></p>
                                    </li>

                                    <li>
                                        <div class="top">
                                            <div class="icon">
                                                <span class="flaticon-opened"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Email</h3>
                                            </div>
                                        </div>
                                        <p><a href="mailto:info@aarniktechnology.com">info@aarniktechnology.com</a></p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact Style1 Area-->


        <!--Start footer area -->
        <?php
        require 'user_footer.php';
        ?>
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

    <script src="tools/jquery-3.7.1.min.js"></script>
    <script src="tools/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#user_contact").validate();
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