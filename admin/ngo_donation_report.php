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
            <h3 class="tile-title" style="text-align:center;">NGO Wise Donation Report</h3><br>
            <form method="get">
                <?php
                echo "<h6 style='color:teal;'>Date : " . date('d-m-Y') . "</h6> <br>";

                $ngo_query = mysqli_query($connection, "select*from tbl_ngo");
                $count = mysqli_num_rows($ngo_query);
                echo "<select class='form-control' name='ngo_id' style='width:300px;'>";
                echo "<option value=''>Select NGO</option>";
                while ($ngo_row = mysqli_fetch_array($ngo_query)) {
                    echo "<option value='{$ngo_row['ngo_id']}'>{$ngo_row['ngo_name']}</option>";
                }
                echo "</select>";
                ?>
                <input type="submit" value="search">
            </form>
        </div>

        <!-- item donation information -->

        <?php
        if (isset($_GET['ngo_id'])) {
            $ngo_id = $_GET['ngo_id'];

            $select_item = mysqli_query($connection, "select * from tbl_donation where ngo_id = '{$ngo_id}' and donation_type='item'");
            $item_count = mysqli_num_rows($select_item);
            if ($item_count > 0) {
        ?>
                <table border=1 class="table table-hover" style="width: 95%;"></br>
                    <h2 style="margin: 30px;">Item Donation Information</h2>
                    <thead>
                        <tr>
                            <th>NGO Name</th>
                            <th>User Name</th>
                            <th>Item Requirement Details</th>
                            <th>Donation Details</th>
                            <th>Donation Date</th>
                            <th>Donation Address</th>
                            <th>Donation Status</th>
                            <th>Volunteer Name</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    while ($donation_row = mysqli_fetch_array($select_item)) {
                        $ngo_query = mysqli_query($connection, "select*from tbl_ngo where ngo_id='{$donation_row['ngo_id']}'");
                        $ngo_row = mysqli_fetch_array($ngo_query);

                        $item_requirement_query = mysqli_query($connection, "select*from tbl_item_requirement where item_requirement_id='{$donation_row['item_requirement_id']}'");
                        $item_requirement_row = mysqli_fetch_array($item_requirement_query);

                        $volunteer_query = mysqli_query($connection, "select*from tbl_volunteer where volunteer_id='{$donation_row['volunteer_id']}'");
                        $volunteer_row = mysqli_fetch_array($volunteer_query);

                        $user_query = mysqli_query($connection, "select * from tbl_user where user_id = '{$donation_row['user_id']}'");
                        $user_row = mysqli_fetch_array($user_query);

                        echo "<tr>";
                        // echo "<td>{$donation_row['donation_id']}</td>";
                        echo "<td>{$ngo_row['ngo_name']}</td>";
                        echo "<td>{$user_row['user_first_name']}</td>";
                        echo "<td>{$item_requirement_row['item_requirement_details']}</td>";
                        echo "<td>{$donation_row['donation_details']}</td>";
                        echo "<td>{$donation_row['donation_date']}</td>";
                        echo "<td>{$donation_row['donation_address']}</td>";
                        echo "<td>{$donation_row['donation_status']}</td>";
                        echo "<td>{$volunteer_row['volunteer_first_name']} {$volunteer_row['volunteer_last_name']}</td>";

                        echo "</tr>";
                    }
                }
                    ?>
                    </tbody>
                </table>
            <?php } ?>

            <?php
            if (isset($_GET['ngo_id'])) {
                $ngo_id = $_GET['ngo_id'];

                $select_online = mysqli_query($connection, "select * from tbl_donation where ngo_id = '{$ngo_id}' and donation_type='online'");
                $count_online = mysqli_num_rows($select_online);
                if ($count_online > 0) {
            ?>
                    <!-- online donation information -->
                    <table border=1 class="table table-hover" style="width: 95%;">
                        <h2 style="margin: 30px;">Online Donation Information</h2>
                        <thead>
                            <tr>
                                <th>NGO Name</th>
                                <th>User Name</th>
                                <th>Donation Method</th>
                                <th>Donation Date</th>
                                <th>Donation Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php

                        while ($donation_row = mysqli_fetch_array($select_online)) {
                            $ngo_query = mysqli_query($connection, "select*from tbl_ngo where ngo_id='{$donation_row['ngo_id']}'");
                            $ngo_row = mysqli_fetch_array($ngo_query);

                            $user_query = mysqli_query($connection, "select * from tbl_user where user_id = '{$donation_row['user_id']}'");
                            $user_row = mysqli_fetch_array($user_query);

                            echo "<tr>";
                            // echo "<td>{$donation_row['donation_id']}</td>";
                            echo "<td>{$ngo_row['ngo_name']}</td>";
                            echo "<td>{$user_row['user_first_name']}</td>";
                            echo "<td>{$donation_row['donation_method']}</td>";
                            echo "<td>{$donation_row['donation_date']}</td>";
                            echo "<td>{$donation_row['donation_amount']}</td>";

                            echo "</tr>";
                        }
                    }
                        ?>
                        </tbody>
                    </table>
                <?php } ?>
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