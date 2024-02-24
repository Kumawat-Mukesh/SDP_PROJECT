<?php
session_start();
require './admin_db.php';
//Login Check
if (!isset($_SESSION['ngo_id'])) {
    header("location:ngo_login.php");
}
if ($_POST) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_pass = $_POST['confirm_password'];
    $ngo_id = $_SESSION['ngo_id'];
    $old_password_query  = mysqli_query($connection, "select * from tbl_ngo where ngo_id='{$ngo_id}' and ngo_password ='{$old_password}'");
    $old_password_db = mysqli_fetch_array($old_password_query);
    if ($old_password_db['ngo_password'] == $old_password) {
        if ($new_password == $confirm_pass) {
            if ($old_password == $new_password) {
                echo "<script>alert('Old Password and New Password Must be Different')</script>";
            } else {
                $update_query = mysqli_query($connection, "update tbl_ngo set ngo_password = '{$new_password}' where ngo_id='{$ngo_id}'");
                echo "<script>alert('Password Changed');window.location='ngo_setting.php';</script>";
            }
        } else {
            echo "<script>alert('New and Confirm Password Not Match');</script>";
        }
    } else {
        echo "<script>alert('Old Password Not Match');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>NGO Setting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 1vh;
            /* vh stands for viewport height */
        }

        form {
            width: 50%;
            /* adjust this value to control the form's width */
        }
    </style>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    require './ngo_header.php';
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <?php
    require './ngo_sidebar.php';
    ?>
    <main class="app-content">
        <div class="row user">
            <div class="col-md-12">
                <div>
                    <div class="info"><br>
                        <center>
                            <h2 style="color:brown"><?php echo $_SESSION['ngo_name']; ?></h2>
                        </center><br><br>
                    </div>
                    <div class="cover-image"></div>
                </div>
            </div>
            <br><br>
            <div class="form-container">
                <div class="col-md-6">
                    <div class="tile change_password">
                        <h4 class="line-head">Change Password</h4>
                        <form name="admin_setting_js" method="post">
                            <div class="row">
                                <div class="col-md-8 mb-4">
                                    <label>Old Password</label>
                                    <input class="form-control" name="old_password" type="text" required>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>New Password</label>
                                    <input class="form-control" name="new_password" type="text" required>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 mb-4">
                                    <label>Confirm Password</label>
                                    <input class="form-control" name="confirm_password" type="text" required>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#admin_setting_js").validate();
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</body>

</html>