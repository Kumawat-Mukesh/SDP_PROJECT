<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'admin_db.php';
$msg = "";
if (isset($_POST['admin_login_button'])) {
  $admin_email = $_POST['admin_email'];
  $admin_password = $_POST['admin_password'];
  $query = mysqli_query($connection, "select*from tbl_admin where admin_email = '{$admin_email}' and admin_password = '{$admin_password}'");
  $count = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);


  if ($count > 0) {
    $_SESSION['admin_id'] = $row['admin_id'];
    $_SESSION['admin_name'] = $row['admin_name'];
    $_SESSION['set_alert'] = "1";
    header("Location:dashboard.php");
  } else {
    $_SESSION['set_dalert'] = "1";
    $msg = "Email and password not matched!";
  }
}


if (isset($_POST["admin_forgot_button"])) {
  $admin_forgot_email = $_POST['admin_forgot_email'];
  $forgot_query = mysqli_query($connection, "select * from tbl_admin where admin_email = '{$admin_forgot_email}'");
  $forgot_count = mysqli_num_rows($forgot_query);
  $forgot_row = mysqli_fetch_array($forgot_query);
  if ($forgot_count == 1) {
    $otp = rand(1111, 9999);
    $admin_query =  mysqli_query($connection, "update tbl_admin set admin_password = '{$otp}' where admin_email = '{$admin_forgot_email}'");

    // $forgot_msg = "Hi {$forgot_row['admin_name']},<br/> your password is " . $otp . " <br/>Do not Share with anyone";

    $forgot_msg = "Dear {$forgot_row['admin_name']},<br/><br>
    We have received a request to reset the password for your administrator account associated with Connecting Dots.<br/>
    As a security measure, we require you to verify your identity before proceeding with the password reset.<br/>
    To complete the password reset process, please use the following One-Time Password (OTP):<br/><br>
    OTP: $otp <br><br/>
    Please enter this OTP on the password reset page to verify your identity and create a new password.
    <br>
    Thank you for your attention to this matter.
<br><br>
    Best regards,<br>
Connecting Dots Admin Team    
    ";


    //Load Composer's autoloader
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'sdp.project.2024@gmail.com';                     //SMTP username
      $mail->Password   = 'pguygxdcrdlejszi';                               //SMTP password dgdwalymnmpnndnl
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('sdp.project.2024@gmail.com', 'connecting dots');
      $mail->addAddress($admin_forgot_email, $forgot_row['admin_name']);     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Password Reset OTP Request for Admin Account';
      $mail->Body    = $forgot_msg;
      $mail->AltBody = $forgot_msg;

      $mail->send();
      echo "<script>alert('OTP is sent on email id');window.location='admin_change_password.php?email=$admin_forgot_email';</script>";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  } else {
    $_SESSION['set_user_name_alert'] = "1";
  }
}

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Admin-login</title>

</head>

<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1>Connecting Dots</h1>
    </div>
    <?php
    if (isset($_SESSION["set_dalert"])) {
      unset($_SESSION["set_dalert"]);
    ?>
      <div class="alert alert-dismissible alert-danger">
        <button class="btn-close" type="button" data-bs-dismiss="alert"></button><strong>Oops! Invalid Login Details.</strong>.
      </div>
    <?php } ?>
    <div class="login-box">

      <form class="login-form" method="POST" id="login_form_js">
        <h3 class="login-head"><i class="bi bi-person me-2"></i>SIGN IN</h3>
        <div class="mb-3">
          <label class="form-label">USERNAME</label>
          <input class="form-control" type="text" placeholder="Email" autofocus name="admin_email" required id="admin_email">
        </div>
        <div class="mb-3">
          <label class="form-label">PASSWORD</label>
          <input class="form-control" type="password" placeholder="Password" name="admin_password" required id="admin_password">
          <?php echo $msg; ?>
        </div>

        <div class="mb-3">
          <div class="utility">
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
          </div>
        </div>
        <div class="mb-3 btn-container d-grid">
          <a href="/opt/lampp/htdocs/SDP/Admin/dashboard.php"><button type="submit" name="admin_login_button" class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>SIGN IN</button></a>
        </div>
      </form>


      <form class="forget-form" method="post">

        <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Forgot Password ?</h3>
        <div class="mb-3">
          <label class="form-label">EMAIL</label>
          <input class="form-control" type="email" placeholder="Enter Email" name="admin_forgot_email">
        </div>
        <!-- <p class="semibold-text mb-2" style="text-align: center;"><a href="#" data-toggle="flip">Or Create New Account ?</a></p> -->
        <div class="mb-3 btn-container d-grid">
          <button type="submit" name="admin_forgot_button" class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>RESET</button>
        </div>
        <?php
        if (isset($_SESSION["set_user_name_alert"])) {
          unset($_SESSION["set_user_name_alert"]);
        ?>
          <div class="alert alert-dismissible alert-danger">
            <button class="btn-close" type="button" data-bs-dismiss="alert"></button><strong>Oops! Invalid Email.</strong>.
          </div>
        <?php } ?>
        <div class="mb-3 mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="bi bi-chevron-left me-1"></i> Back to Login</a></p>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
      $('.login-box').toggleClass('flipped');
      return false;
    });
  </script>
  <script src="tools/jquery-3.7.1.min.js"></script>
  <script src="tools/jquery.validate.js"></script>
  <script>
    $(document).ready(function() {
      $("#login_form_js").validate({
        rules: {
          admin_email: {
            required: true,
            email: true,
          },
          admin_password: {
            required: true,
            minlength: 3,
          },
        },
        msg: {
          admin_email: {
            required: "Please enter proper email",
            admin_password: "Password not matched!!",
          },
          admin_password: {
            required: "Please Enter Password",
            minlength: "Your password must consist of at least 3 characters",
          }
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

</html>