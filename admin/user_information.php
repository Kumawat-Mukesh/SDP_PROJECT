<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
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
    <title>User Information</title>
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
                <h1><i class="bi bi-table"></i> User</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active"><a href="#">User Information</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <h3 class="tile-title">User Information</h3>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <!-- <th>Password</th> -->
                                    <th>Gender</th>
                                    <th>Mobile No.</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>Area Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'admin_db.php';
                                if (isset($_GET['delete_id'])) {
                                    $delete_id = $_GET['delete_id'];
                                    $delete_query = "delete from tbl_user where user_id = $delete_id";
                                    $data = mysqli_query($connection, $delete_query);
                                    if ($data) {
                                        echo "<script>alert('Record deleted from the database');window.location='user_information.php'</script>";
                                    } else {
                                        echo "<script>alert('Record not deleted from the database');window.location='user_information.php'</script>";
                                    }
                                }

                                $select = mysqli_query($connection, "select*from tbl_user");
                                while ($user_row = mysqli_fetch_array($select)) {
                                    $area_query = mysqli_query($connection, "select*from tbl_area where area_id='{$user_row['area_id']}'");
                                    $area_row = mysqli_fetch_array($area_query);

                                    echo "<tr>";
                                    // echo "<td>{$user_row['user_id']}</td>";
                                    echo "<td>{$user_row['user_first_name']}</td>";
                                    echo "<td>{$user_row['user_last_name']}</td>";
                                    echo "<td>{$user_row['user_email']}</td>";
                                    // echo "<td>{$user_row['user_password']}</td>";
                                    echo "<td>{$user_row['user_gender']}</td>";
                                    echo "<td>{$user_row['user_mobile_no']}</td>";
                                    echo "<td>{$user_row['user_address']}</td>";
                                    echo "<td>{$user_row['user_pincode']}</td>";
                                    echo "<td>{$area_row['area_name']}</td>";
                                    echo "<td>
                                <a href='user_information.php?delete_id={$user_row['user_id']}' 
                                onclick='return confirmDelete()'>
                                <i class='bi bi-trash'></i></a>|  
                                <a href='user_update.php?edit_id={$user_row['user_id']}'><i class='bi bi-pencil-square'></i></a>    
                                </td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
    </script>
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