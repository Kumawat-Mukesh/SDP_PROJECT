<?php
session_start();
require './admin_db.php';
//Login Check
if (!isset($_SESSION['admin_id'])) {
    header("location:admin_login.php");
}
if (isset($_POST['change'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_pass = $_POST['confirm_password'];
    $admin_id = $_SESSION['admin_id'];
    $old_password_query  = mysqli_query($connection, "select * from tbl_admin where admin_id='{$admin_id}'");
    $old_password_db = mysqli_fetch_array($old_password_query);
    if ($old_password_db['admin_password'] == $old_password) {
        if ($new_password == $confirm_pass) {
            if ($old_password == $new_password) {
                echo "<script>alert('Old Password and New Password Must be Different')</script>";
            } else {
                $update_query = mysqli_query($connection, "update tbl_admin set admin_password = '{$new_password}' where admin_id='{$admin_id}'");
                echo "<script>alert('Password Changed');window.location='admin_setting.php';</script>";
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
    <title>Admin Setting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    require './admin_header.php';
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <?php
    require './admin_sidebar.php';
    ?>
    <main class="app-content">
        <div class="row user">
            <div class="col-md-12">
                <div class="profile">
                    <div class="info"><img class="user-img" src="https://randomuser.me/api/portraits/men/1.jpg">
                        <h4><?php echo $_SESSION['admin_name']; ?></h4>
                    </div>
                    <div class="cover-image"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tile p-0">
                    <ul class="nav flex-column nav-tabs user-tabs">
                        <!-- <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-bs-toggle="tab">Timeline</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#change_password" data-bs-toggle="tab">Change Password</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- <div class="tab-pane active" id="user-timeline">
                        <div class="timeline-post">
                            <div class="post-media"><a href="#"><img src="https://randomuser.me/api/portraits/men/1.jpg"></a>
                                <div class="content">
                                    <h5><a href="#"><?php echo $_SESSION['admin_name']; ?></a></h5>
                                    <p class="text-muted"><small>2 January at 9:30</small></p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <ul class="post-utility">
                                <li class="likes"><a href="#"><i class="bi bi-heart me-1"></i>Like</a></li>
                                <li class="shares"><a href="#"><i class="bi bi-share me-1"></i>Share</a></li>
                                <li class="comments"><i class="bi bi-chat-square-text me-1"></i> 5 Comments</li>
                            </ul>
                        </div>
                        <div class="timeline-post">
                            <div class="post-media"><a href="#"><img src="https://randomuser.me/api/portraits/men/1.jpg"></a>
                                <div class="content">
                                    <h5><a href="#"><?php echo $_SESSION['admin_name']; ?></a></h5>
                                    <p class="text-muted"><small>2 January at 9:30</small></p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <ul class="post-utility">
                                <li class="likes"><a href="#"><i class="bi bi-heart me-1"></i>Like</a></li>
                                <li class="shares"><a href="#"><i class="bi bi-share me-1"></i>Share</a></li>
                                <li class="comments"><i class="bi bi-chat-square-text me-1"></i> 5 Comments</li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="change_password">
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
                                        <button class="btn btn-primary" type="submit" name="change"><i class="bi bi-check-circle-fill me-2"></i> Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
            $("#admin_setting_js").validate({
                rules: {
                    old_password: {
                        required: true,
                    },
                    new_password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#admin_new_password"
                    },

                },
                messages: {
                    new_password: {
                        required: "Please Enter Password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    confirm_password: {
                        required: "Please Confirm Password",
                        minlength: "Your password must be at least 6 characters long",
                        equalTo: "Please enter the same password as above"
                    }
                }
            });
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</body>

</html>