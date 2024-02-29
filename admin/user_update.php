<?php
session_start();
require 'admin_db.php';
if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}
$edit_id = $_GET['edit_id'];
$user_select = mysqli_query($connection, "select*from tbl_user where user_id='{$edit_id}'");
$user_data = mysqli_fetch_array($user_select);

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

    $query = mysqli_query($connection, "update tbl_user set user_first_name='{$user_first_name}',user_last_name='{$user_last_name}',user_email='{$user_email}',user_password='{$user_password}',user_gender='{$user_gender}',user_mobile_no='{$user_mobile_no}',user_address='{$user_address}',user_pincode='{$user_pincode}',area_id='{$area_id}' where user_id='{$edit_id}'");
    if ($query) {
        echo "<script>alert('User information updated');window.location='user_information.php'</script>";
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
    <title>User Update Form</title>
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
    require 'admin_header.php';
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php
    require 'admin_sidebar.php';
    ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-ui-checks"></i> User Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item"><a href="user_information.php">Update-User</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Update User</h3>
                    <div class="tile-body">
                        <form class="row" method="post" id="user_from_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">First Name</label>
                                <input class="form-control" type="text" name="user_first_name" placeholder="Enter your first name" value="<?php echo $user_data['user_first_name']; ?>" required>
                                <br>
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="user_last_name" placeholder="Enter your last name" value="<?php echo $user_data['user_last_name']; ?>" required>
                                <br>
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" name="user_email" placeholder="Enter your email" value="<?php echo $user_data['user_email']; ?>" required>
                                <br>
                                <label class="form-label">Password</label>
                                <input class="form-control" type="text" name="user_password" placeholder="Enter email password" value="<?php echo $user_data['user_password']; ?>" required>
                                <br>
                                <label class="form-label">Gender</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="user_gender" value="Male" <?php if ($user_data['user_gender'] == 'Male') {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="user_gender" value="Female" <?php if ($user_data['user_gender'] == 'Female') {
                                                                                                                            echo "checked";
                                                                                                                        } ?>>Female
                                    </label>
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Update</button>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Mobile NO.</label>
                                <input class="form-control" type="tel" name="user_mobile_no" placeholder="Enter mobile number " value="<?php echo $user_data['user_mobile_no']; ?>" required>
                                <br>
                                <label class="form-label">Address</label>
                                <textarea name="user_address" class="form-control" placeholder="Enter your address" rows="5" cols="15" required><?php echo $user_data['user_address']; ?></textarea>
                                <br>
                                <label class="form-label">Pincode</label>
                                <input class="form-control" type="number" minlength="6" maxlength="6" name="user_pincode" placeholder="Enter area pincode" value="<?php echo $user_data['user_pincode']; ?>" required>
                                <br>
                                <label class="form-label">Area ID</label>
                                <?php
                                $area_query = mysqli_query($connection, "select * from tbl_area");
                                echo "<select class='form-control' name = 'area_id'>";
                                echo "<option value=''>Select Area</ option>";
                                while ($area_row = mysqli_fetch_array($area_query)) {
                                    $select_area = $area_row['area_id'] == $user_data['area_id'] ? "selected" : "";
                                    echo "<option value='{$area_row['area_id']}' $select_area>{$area_row['area_name']}</option>";
                                }
                                echo "</select>";   
                                ?>
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
    <script src="tools/jquery-3.7.1.min.js"></script>
    <script src="tools/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#user_form_js").validate();
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</body>

</html>