<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("location:admin_login.php");
}
$ngo_id = $_SESSION["ngo_id"];
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
    <title>Child Information</title>
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
                <h1><i class="bi bi-table"></i> Child</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">child</li>
                <li class="breadcrumb-item active"><a href="child_information.php">Child-Information</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Child Information</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'admin_db.php';
                            if (isset($_GET['delete_id'])) {
                                $delete_id = $_GET['delete_id'];
                                $delete_query = "delete from tbl_child where child_id = $delete_id";
                                $data = mysqli_query($connection, $delete_query);
                                if ($data) {
                                    echo "<script>alert('Record deleted from the database');window.location='child_information.php'</script>";
                                } else {
                                    echo "<script>alert('Record not deleted from the database');window.location='child_information.php'</script>";
                                }
                            }
                            $select = mysqli_query($connection, "select * from tbl_child");
                            while ($child_row = mysqli_fetch_array($select)) {
                                $child_query = mysqli_query($connection, "select * from tbl_child where child_id='{$child_row['child_id']}'");
                                $child_row = mysqli_fetch_array($child_query);

                                $ngo_query = mysqli_query($connection, "select * from tbl_ngo where ngo_id='{$child_row['ngo_id']}'");
                                $ngo_row = mysqli_fetch_array($ngo_query);

                                echo "<tr>";
                                echo "<td>{$child_row['child_name']}</td>";
                                echo "<td>{$child_row['child_gender']}</td>";
                                echo "<td>{$child_row['child_age']}</td>";
                                echo "<td><a target='_blank' href='uploads/{$child_row['child_photo']}'><img src='uploads/{$child_row['child_photo']}' width='50'></a></td>";
                                echo "<td>
                                <a href='child_information.php?delete_id={$child_row['child_id']}' 
                                onclick='return confirmDelete()'>
                                <i class='bi bi-trash'></i></a>|  
                                <a href='child_update.php?edit_id={$child_row['child_id']}'><i class='bi bi-pencil-square'></i></a>   
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
    <script>
        function confirmDelete() {
            return confirm("Are you Confirm?");
        }
    </script>
</body>

</html>