<?php
session_start();
require './admin_db.php';
if ($_POST) {
    $email = $_GET['email'];
    $admin_otp = $_POST['admin_otp'];
    $admin_new_password = $_POST['admin_new_password'];
    $admin_confirm_password = $_POST['admin_confirm_password'];

    $old_password_query  = mysqli_query($connection, "select * from tbl_admin where admin_email='{$email}' and admin_password ='{$admin_otp}'");
    $old_password_db = mysqli_fetch_array($old_password_query);
    if ($old_password_db['admin_password'] == $admin_otp) {
        if ($old_password_db['admin_password'] != $admin_new_password) {

            if ($admin_new_password == $admin_confirm_password) {
                $update_query = mysqli_query($connection, "update tbl_admin set admin_password = '{$admin_new_password}' where admin_email='{$email}'");
                echo "<script>alert('Password changes');window.location='dashboard.php'</script>";
            } else {
                echo "<script>alert('new and confirm Password Not Match');</script>";
            }
        } else {
            echo "<script>alert('OTP and new password must be different!!');</script>";
        }
    } else {
        echo "<script>alert('OTP Password Not Match');</script>";
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
    <title>Admin Forgot Password</title>

</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>Connecting Dots</h1>
        </div>
        <div class="login-box">
            <form class="login-form" method="POST" id="change_password_form_js">
                <h3 class="login-head"><i class="bi bi-person me-2"></i>Change Password</h3>
                <div class="mb-3">
                    <label class="form-label">OTP</label>
                    <input class="form-control" type="password" placeholder="Enter OTP" name="admin_otp" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input class="form-control" type="password" placeholder="Enter New Password" name="admin_new_password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input class="form-control" type="password" placeholder="Confirm Password" name="admin_confirm_password" required>
                </div>
                <div class="mb-3 btn-container d-grid">
                    <a href="/opt/lampp/htdocs/SDP/Admin/dashboard.php"><button type="submit" name="save" class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>Save</button></a>
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
            $("#change_password_form_js").validate({
                // rules: {

                //     admin_new_password: {
                //         required: true,
                //         minlength: 6
                //     },
                //     admin_confirm_password: {
                //         required: true,
                //         minlength: 6,
                //         equalTo: "#admin_new_password"
                //     },
                // },
                // messages: {
                //     admin_new_password: {
                //         required: "Please Enter Password",
                //         minlength: "Your password must be at least 6 characters long"
                //     },
                //     admin_confirm_password: {
                //         required: "Please Confirm Password",
                //         minlength: "Your password must be at least 6 characters long",
                //         equalTo: "Please enter the same password as above"
                //     }
                // }

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