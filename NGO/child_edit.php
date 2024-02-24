<?php
require  'admin_db.php';
session_start();
if (!isset($_SESSION['ngo_id'])) {
    header("location:ngo_login.php");
}
$edit_id=$_GET['edit_id'];
$child_select=mysqli_query($connection,"select *from tbl_child where child_id={$edit_id}");
$child_row=mysqli_fetch_array($child_select);
if ($_POST) {
    
    $ngo_id = $_POST['ngo_id'];
    $child_name = $_POST['child_name'];
    $child_gender = $_POST['child_gender'];
    $child_age = $_POST['child_age'];
    $child_photo_name = $_FILES['child_photo']['name'];
    $child_photo_tmp_name = $_FILES['child_photo']['tmp_name'];

    $query = mysqli_query($connection, "update tbl_child set child_name='{$child_name}',child_gender='{$child_gender}',child_age='{$child_age}',child_photo='{$child_photo_name}' where child_id='{$edit_id}'");
    move_uploaded_file($child_photo_tmp_name, "uploads/" . $child_photo_name);
    if ($query) {
        echo "<script>alert('Child information updated!!');window.location='child_information.php'</script>";
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
    <title>Child Form</title>
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
    require 'ngo_header.php';
    ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php
    require 'ngo_sidebar.php';
    ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-ui-checks"></i> Child Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Child</li>
                <li class="breadcrumb-item"><a href="child_edit.php">Child-Form</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Update Child Information</h3>
                    <div class="tile-body">
                        <form class="row" method="post" id="child_from_js" enctype="multipart/form-data">
                            <div class="mb-3 col-md-3">
                               
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="child_name" placeholder="Enter child name " value="<?php echo $child_row['child_name'];?>" required>
                                <br>
                                <label class="form-label">Gender</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="child_gender" value="Male"  <?php if ($child_row['child_gender'] == 'Male') {echo "checked";} ?>>Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="child_gender" value="Female" <?php if ($child_row['child_gender'] == 'Female') {echo "checked";} ?>>Female
                                    </label>
                                </div>
                                <br>
                                <label class="form-label">Age</label>
                                <input class="form-control" type="text" name="child_age" placeholder="Enter child age" min="1" max="25" value="<?php echo $child_row['child_age'];?>" required>
                                <br>
                                <label class="form-label">Photo</label>
                                <input class="form-control" type="file" name="child_photo" placeholder="Upload child photo" required>
                                <br>
                                <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Update+</button>
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
            $("#child_form_js").validate();
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</body>

</html>