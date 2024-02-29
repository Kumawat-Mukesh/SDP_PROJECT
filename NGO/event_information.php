<?php
session_start();
if(!isset($_SESSION["ngo_id"])){
    header("Location:ngo_login.php");
}
$ngo_id=$_SESESSION['ngo_id'];
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
    <title>Event Information</title>
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
                <h1><i class="bi bi-table"></i> Event</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Event</li>
                <li class="breadcrumb-item active"><a href="event_information.php">Event Information</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Event Information</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Title</th>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Details</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'admin_db.php';

                            if (isset($_GET['delete_id'])) {
                                $delete_id = $_GET['delete_id'];
                                $delete_query = "delete from tbl_event where event_id = $delete_id";
                                $data = mysqli_query($connection, $delete_query);
                                if ($data) {
                                    echo "<script>alert('Record deleted from the database');window.location='event_information.php'</script>";
                                } else {
                                    echo "<script>alert('Record not deleted from the database');window.location='event_information.php'</script>";
                                }
                            }

                            $select = mysqli_query($connection, "select*from tbl_event where ngo_id='{$ngo_id}'");
                            while ($event_row = mysqli_fetch_array($select)) {
                                echo "<tr>";
                                // echo "<td>{$blog_row['blog_id']}</td>";  
                                echo "<td>{$event_row['event_title']}</td>";
                                echo "<td>{$event_row['event_date']}</td>";
                                echo "<td>{$event_row['event_date']}</td>";
                                echo "<td>{$event_row['event_location']}</td>";
                                echo "<td>{$event_row['event_details']}</td>";
                                
                                echo "<td><a target='_blank' href='/project/admin/uploads/{$event_row['event_photo']}'><img src='/project/admin/uploads/{$event_row['event_photo']}' width='50'></a></td>";
                                echo "<td>
                                    <a href='event_information.php?delete_id={$event_row['event_id']}' 
                                    onclick='return confirmDelete()'>
                                    <i class='bi bi-trash'></i></a>|  
                                    <a href='event_edit.php?edit_id={$event_row['event_id']}'><i class='bi bi-pencil-square'></i></a>   
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