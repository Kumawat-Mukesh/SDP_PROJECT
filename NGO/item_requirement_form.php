<?php
include './admin_db.php';
session_start();
if(!isset($_SESSION["ngo_id"])){
    header("Location:ngo_login.php");
}
if ($_POST) {
    $ngo_id = $_SESSION['ngo_id'];
    $item_requirement_details = $_POST['item_requirement_details'];
    $item_requirement_status = $_POST['item_requirement_status'];
    $query = mysqli_query($connection, "insert into tbl_item_requirement(ngo_id,item_requirement_details,item_requirement_status) values('{$ngo_id}','{$item_requirement_details}','{$item_requirement_status}')");
    if ($query) {
        echo "<script>alert('Item Requirement');window.location='item_requirement_form.php'</script>";
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
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">faq
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Item Requirement Form</title>
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
    <?php require './ngo_header.php' ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php require './ngo_sidebar.php' ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-ui-checks"></i>Items Requirement Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Item Requirement</li>
                <li class="breadcrumb-item"><a href="item_requirement_form.php">Item-Requirement-Form</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add Items</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="item_requirement_form_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Requirement Details</label>
                                <textarea name="item_requirement_details" class="form-control" cols="3" rows="5" placeholder="Enter requirement details" required></textarea>
                                <br>
                                <br>
                                <label class="form-label">Requirement Status</label>
                                <input class="form-control" type="text" name="item_requirement_status" placeholder="Enter status" required>
                                <br>
                                <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Add</button>
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
            $("#item_requirement_form_js").validate();
        });
    </script>
    <style>
        .error {
            color: red
        }
    </style>
</body>

</html>