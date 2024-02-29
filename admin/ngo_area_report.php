<?php
require 'admin_db.php';
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
    <title>NGO Information</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 30px;
            padding: 30px;
        }

        .info {
            border-collapse: collapse;
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="info">
            <br>
            <h2 class="tile-title" style="text-align:center;">Connecting Dots</h2><br>
            <hr>
            <h3 class="tile-title" style="text-align:center;">Area Wise NGO Information</h3><br>
            <form method="get">
                <?php
                echo "<h6 style='color:teal;'>Date : " . date('d-m-Y') . "</h6> <br>";

                $area_query = mysqli_query($connection, "select*from tbl_area");
                echo "<select class='form-control' name='area_id' style='width:300px;'>";
                echo "<option value=''>Select Area</option>";
                while ($area_row = mysqli_fetch_array($area_query)) {
                    echo "<option value='{$area_row['area_id']}'>{$area_row['area_name']}</option>";
                }
                echo "</select>";
                ?>
                <input type="submit" value="search">
            </form>
        </div>
        <?php
        if (isset($_GET['area_id'])) {
            $area_id = $_GET['area_id'];

            $select = mysqli_query($connection, "select * from tbl_ngo where area_id = '{$area_id}'");
            $area_select = mysqli_num_rows($select);
            if ($area_select > 0) {
        ?>
                <table border=1 class="table table-hover" style="width: 95%;">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Details</th>
                            <th>Email</th>
                            
                            <th>Contact No.</th>
                            <th>Adress</th>
                            
                            <th>Photo</th>
                            <th>Area Name</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php



                        while ($ngo_row = mysqli_fetch_array($select)) {
                            $area_query = mysqli_query($connection, "select*from tbl_area where area_id='{$ngo_row['area_id']}'");
                            $area_row = mysqli_fetch_array($area_query);

                            $category_query = mysqli_query($connection, "select*from tbl_category where category_id='{$ngo_row['category_id']}'");
                            $category_row = mysqli_fetch_array($category_query);
                            echo "<tr>";
                           
                            echo "<td>{$ngo_row['ngo_name']}</td>";
                            echo "<td>{$ngo_row['ngo_details']}</td>";
                            echo "<td>{$ngo_row['ngo_email']}</td>";
                            
                            echo "<td>{$ngo_row['ngo_contact_no']}</td>";
                            echo "<td>{$ngo_row['ngo_address']}</td>";

                           
                            echo "<td><a target='_blank' href='uploads/{$ngo_row['ngo_photo']}'><img src='uploads/{$ngo_row['ngo_photo']}' width='50'></a></td>";
                            echo "<td>{$area_row['area_name']}</td>";
                            echo "<td>{$category_row['category_name']}</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
        <?php } else {
                echo '
                <div class="page-error">
                <h1 class="text-danger"><i class="bi bi-exclamation-circle"></i> No Record Found</h1>
            </div>';
            }
        } ?>

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