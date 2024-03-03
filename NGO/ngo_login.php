<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'admin_db.php';
$msg = "";
if (isset($_POST['ngo_login_button'])) {
  $ngo_email = $_POST['ngo_email'];
  $ngo_password = $_POST['ngo_password'];
  $query = mysqli_query($connection, "select*from tbl_ngo where ngo_email = '{$ngo_email}' and ngo_password = '{$ngo_password}' ");
  $count = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);

  if ($count > 0) {
    if ($row['ngo_status'] == 1) {
      $_SESSION['ngo_id'] = $row['ngo_id'];
      $_SESSION['ngo_name'] = $row['ngo_name'];
      $_SESSION['set_alert'] = "1";
      header("Location:dashboard.php");
    } else {
      $msg = "Account is not Activated";
    }
  } else {
    $_SESSION['set_dalert'] = "1";
    $msg = "Email and password not matched!";
  }
}


if (isset($_POST["ngo_forgot_button"])) {
  $ngo_forgot_email = $_POST['ngo_forgot_email'];
  $forgot_query = mysqli_query($connection, "select * from tbl_ngo where ngo_email = '{$ngo_forgot_email}'");
  $forgot_count = mysqli_num_rows($forgot_query);
  $forgot_row = mysqli_fetch_array($forgot_query);
  if ($forgot_count == 1) {
    $otp = rand(1111, 9999);
    mysqli_query($connection, "update tbl_ngo set ngo_password = '{$otp}' where ngo_email = '{$ngo_forgot_email}'");



    $forgot_msg = "Dear {$forgot_row['ngo_name']},<br><br>

    You are receiving this email because you have requested a password reset for your account on the NGO panel.<br>
    
    To proceed with resetting your password, please use the following One-Time Password (OTP):<br>
    
    OTP: $otp<br>
    
    Please enter this OTP on the password reset page within the NGO panel to verify your identity and create a new password. Please don't share this OTP with any other person.<br>
    
    If you did not request this password reset, please disregard this email. Your account security is of utmost importance to us.<br>
    
    Thank you for your cooperation.<br>
    <br>
    Best regards,<br>
    NGO Panel Administrator";



    //Load Composer's autoloader
    //Create an instance; passing true enables exceptions
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
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

      //Recipients
      $mail->setFrom('sdp.project.2024@gmail.com', 'connecting dots');
      $mail->addAddress($ngo_forgot_email, $forgot_row['ngo_name']);     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Password Reset OTP for NGO Panel Access.';
      $mail->Body    = $forgot_msg;
      $mail->AltBody = $forgot_msg;

      $mail->send();
      echo "<script>alert('Password is sent on email id');window.location='ngo_change_password.php?email=$ngo_forgot_email';</script>";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  } else {
    echo "<script>alert('NGO not found.')</script>";
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
  <title>NGO-login</title>

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
          <input class="form-control" type="text" placeholder="Email" autofocus name="ngo_email" required id="ngo_email">
        </div>
        <div class="mb-3">
          <label class="form-label">PASSWORD</label>
          <input class="form-control" type="password" placeholder="Password" name="ngo_password" required id="ngo_password"><?php echo $msg; ?>
        </div>
        <div class="mb-3">
          <div class="utility">
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
          </div>
          <div>
            <p class="semibold-text mb-2"><a href="ngo_form.php">Don't have an account ?</a></p>
          </div>
        </div>
        <div class="mb-3 btn-container d-grid">
          <a href="/opt/lampp/htdocs/SDP/NGO/dashboard.php"><button type="submit" name="ngo_login_button" class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>SIGN IN</button></a>
        </div>
      </form>
      <form class="forget-form" method="post">
        <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Forgot Password ?</h3>
        <div class="mb-3">
          <label class="form-label">EMAIL</label>
          <input class="form-control" type="email" name="ngo_forgot_email" placeholder="Enter Email">
        </div>
        <!-- <p class="semibold-text mb-2" style="text-align: center;"><a href="#" data-toggle="flip">Or Create New Account ?</a></p> -->
        <div class="mb-3 btn-container d-grid">
          <button class="btn btn-primary btn-block" type="submit" name="ngo_forgot_button"><i class="bi bi-unlock me-2 fs-5"></i>RESET</button>
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
          ngo_email: {
            required: true,
            email: true,
          },
          ngo_password: "required",
        },
        msg: {
          ngo_email: "Please enter proper email",
          ngo_password: "Password not matched!!",
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