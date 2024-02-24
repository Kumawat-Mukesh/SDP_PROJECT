<?php
session_start();
if (!isset($_SESSION["ngo_id"])) {
    header("Location:ngo_login.php");
}
$ngo_id=$_SESSION["ngo_id"];
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
    <title>NGO Information</title>
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
                <h1><i class="bi bi-table"></i> NGO</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">NGO</li>
                <li class="breadcrumb-item active"><a href="ngo_information.php">NGO Information</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">NGO Information</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Contact No.</th>
                                <th>Address</th>
                                <th>Certificate</th>
                                <th>Photo</th>
                                <th>Area Name</th>
                                <th>Category Name</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'admin_db.php';
                            $select = mysqli_query($connection, "select * from tbl_ngo where ngo_id='{$ngo_id}'");
                            while ($ngo_row = mysqli_fetch_array($select)) {
                                $area_query = mysqli_query($connection, "select*from tbl_area where area_id='{$ngo_row['area_id']}'");
                                $area_row = mysqli_fetch_array($area_query);

                                $category_query = mysqli_query($connection, "select*from tbl_category where category_id='{$ngo_row['category_id']}'");
                                $category_row = mysqli_fetch_array($category_query);
                                echo "<tr>";
                                echo "<td>{$ngo_row['ngo_name']}</td>";
                                echo "<td>{$ngo_row['ngo_details']}</td>";
                                echo "<td>{$ngo_row['ngo_email']}</td>";
                                echo "<td>{$ngo_row['ngo_password']}</td>";
                                echo "<td>{$ngo_row['ngo_contact_no']}</td>";
                                echo "<td>{$ngo_row['ngo_address']}</td>";

                                echo "<td><a target='_blank' href='uploads/{$ngo_row['ngo_certificate']}'><img src='uploads/{$ngo_row['ngo_certificate']}' width='50'></a></td>";
                                echo "<td><a target='_blank' href='uploads/{$ngo_row['ngo_photo']}'><img src='uploads/{$ngo_row['ngo_photo']}' width='50'></a></td>";
                                echo "<td>{$area_row['area_name']}</td>";
                                echo "<td>{$category_row['category_name']}</td>";
                                echo "<td>  
                                    <a href='ngo_edit.php?edit_id={$ngo_row['ngo_id']}'><i class='bi bi-pencil-square'></i></a>   
                                    </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
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
</body>

</html>