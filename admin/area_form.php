<?php

session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}

include './admin_db.php';

if ($_POST) {
    $area_name = $_POST['area_name'];
    $area_pincode = $_POST['area_pincode'];

    $query = mysqli_query($connection, "insert into tbl_area(area_name,area_pincode) values('{$area_name}','{$area_pincode}')");
    if ($query) {
        echo "<script>alert('Area added to the database');window.location='area_form.php'</script>";
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
    <title>Area Form</title>
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
    <?php require './admin_header.php' ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php require './admin_sidebar.php' ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-ui-checks"></i>Area Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Area</li>
                <li class="breadcrumb-item"><a href="area_form.php">Area-Form</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add Area</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="area_form_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Area Name</label>
                                <input class="form-control" type="text" name="area_name" onkeyup="Validatestring(this)" placeholder="Enter area name" required>
                                <br>
                                <label class="form-label">Area Pincode</label>
                                <input class="form-control" type="text" name="area_pincode" maxlength="6" placeholder="Enter area pincode" required>
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
            $("#area_form_js").validate({

                rules: {

                    area_name: {
                        required: true,
                        minlength: 3
                    },

                    area_pincode: {
                        required: true,
                        minlength: 6,
                        maxlength: 6
                    },
                },
                messages: {

                    area_name: {
                        required: "Please Enter Area Name",
                        minlength: "Area name must consist of at least 3 characters"
                    },
                    area_pincode: {
                        required: "Please Enter Area Pincode",
                        minlength: "Enter minimum 6 digit area pincode",
                        maxlength: "Enter maximum 6 digit area pincode",
                    }
                }

            });

        });

        function Validatestring(no) {
            no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
        }
    </script>
    <style>
        .error {
            color: red
        }
    </style>
</body>

</html>