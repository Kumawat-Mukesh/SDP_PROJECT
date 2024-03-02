<?php
include './admin_db.php';
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}
if (isset($_POST['add'])) {
    $ngo_id = $_POST['ngo_id'];
    $user_id = $_POST['user_id'];
    $item_requirement_id = $_POST['item_requirement_id'];
    $donation_details = $_POST['donation_details'];
    $donation_type = "item";
    // $donation_date = date('Y-m-d');
    $donation_address = $_POST['donation_address'];
    $donation_status = $_POST['donation_status'];
    $volunteer_id = $_POST['volunteer_id'];

    $query = mysqli_query($connection, "insert into tbl_donation(ngo_id,user_id,item_requirement_id,donation_details,donation_type,donation_address,donation_status,volunteer_id) values('{$ngo_id}','{$user_id}','{$item_requirement_id}','{$donation_details}','{$donation_type}','{$donation_address}','{$donation_status}','{$volunteer_id}')");
    if ($query) {
        echo "<script>alert('Item Donation added to the database');window.location='donation_form.php'</script>";
    }
}

// online

if (isset($_POST['add_online'])) {
    $ngo_id = $_POST['ngo_id'];
    $user_id = $_POST['user_id'];
    $donation_method = $_POST['donation_method'];
    $donation_type = "online";
    // $donation_date = date('Y-m-d');
    $donation_amount = $_POST['donation_amount'];

    $query = mysqli_query($connection, "insert into tbl_donation(ngo_id,user_id,donation_method,donation_type,donation_amount) values('{$ngo_id}','{$user_id}','{$donation_method}','{$donation_type}','{$donation_amount}')");
    if ($query) {
        echo "<script>alert('Online Donation added to the database');window.location='donation_form.php'</script>";
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
    <title>Donation Form</title>
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
                <h1><i class="bi bi-ui-checks"></i> Donation Form</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Donation</li>
                <li class="breadcrumb-item"><a href="donation_form.php">Donation-Form</a></li>
            </ul>
        </div>
        <!-- item donation -->
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add Item Donation</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="donation_form_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">NGO ID</label>
                                <!-- <input class="form-control" type="text" name="ngo_id" placeholder="Enter NGO ID" required> -->
                                <?php
                                $ngo_query = mysqli_query($connection, "select*from tbl_ngo where ngo_status=1");
                                echo "<select class='form-control' name='ngo_id'>";
                                echo "<option value=''>Select NGO</option>";
                                while ($ngo_row = mysqli_fetch_array($ngo_query)) {
                                    echo "<option value='{$ngo_row['ngo_id']}'>{$ngo_row['ngo_name']}</option>";
                                }
                                echo "</select>";
                                ?>
                                <br>
                                <label class="form-label">User ID</label>
                                <!-- <input class="form-control" type="text" name="user_id" placeholder="Enter user ID" required> -->
                                <?php
                                $user_query = mysqli_query($connection, "select*from tbl_user");
                                echo "<select class='form-control' name='user_id'>";
                                echo "<option value=''>Select User</option>";
                                while ($user_row = mysqli_fetch_array($user_query)) {
                                    echo "<option value='{$user_row['user_id']}'>{$user_row['user_first_name']}  {$user_row['user_last_name']}</option>";
                                }
                                echo "</select>";
                                ?>
                                </br>
                                <label class="form-label">Requirement ID</label>
                                <!-- <input class="form-control" type="text" name="item_requirement_id" placeholder="Enter Requirement ID" required> -->
                                <?php
                                $item_requirement_query = mysqli_query($connection, "select*from tbl_item_requirement ");
                                echo "<select class='form-control' name='item_requirement_id'>";
                                echo "<option value=''>Select Item Requirement</option>";
                                while ($item_requirement_row = mysqli_fetch_array($item_requirement_query)) {
                                    echo "<option value='{$item_requirement_row['item_requirement_id']}'>{$item_requirement_row['item_requirement_details']} </option>";
                                }
                                echo "</select>";
                                ?>
                                <br>
                                <label class="form-label">Dontion Details</label>
                                <textarea name="donation_details" class="form-control" cols="3" rows="5" placeholder="Enter donation details"></textarea>
                                <br>

                                <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Add</button>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Dontion Address</label>
                                <textarea name="donation_address" class="form-control" cols="3" rows="5" placeholder="Enter donation pick-up Address"></textarea>
                                <br>
                                <label class="form-label">Donation Status</label>
                                <input class="form-control" type="text" name="donation_status" placeholder="Enter status">
                                <br>
                                <label class="form-label">Volunteer ID</label>
                                <?php
                                $volunteer_query = mysqli_query($connection, "select*from tbl_volunteer where volunteer_verified='Yes'");
                                echo "<select class='form-control' name='volunteer_id'>";
                                echo "<option value=''>Select Volunteer</option>";
                                while ($volunteer_row = mysqli_fetch_array($volunteer_query)) {
                                    echo "<option value='{$volunteer_row['volunteer_id']}'>{$volunteer_row['volunteer_first_name']}  {$volunteer_row['volunteer_last_name']}</option>";
                                }
                                echo "</select>";
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- online -->
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Online Donation</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="donation_form_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">NGO ID</label>
                                <!-- <input class="form-control" type="text" name="ngo_id" placeholder="Enter NGO ID" required> -->
                                <?php
                                $ngo_query = mysqli_query($connection, "select*from tbl_ngo where ngo_status=1");
                                echo "<select class='form-control' name='ngo_id'>";
                                echo "<option value=''>Select NGO</option>";
                                while ($ngo_row = mysqli_fetch_array($ngo_query)) {
                                    echo "<option value='{$ngo_row['ngo_id']}'>{$ngo_row['ngo_name']}</option>";
                                }
                                echo "</select>";
                                ?>
                                <br>
                                <label class="form-label">User ID</label>
                                <!-- <input class="form-control" type="text" name="user_id" placeholder="Enter user ID" required> -->
                                <?php
                                $user_query = mysqli_query($connection, "select*from tbl_user");
                                echo "<select class='form-control' name='user_id'>";
                                echo "<option value=''>Select User</option>";
                                while ($user_row = mysqli_fetch_array($user_query)) {
                                    echo "<option value='{$user_row['user_id']}'>{$user_row['user_first_name']}  {$user_row['user_last_name']}</option>";
                                }
                                echo "</select>";
                                ?>
                                <br>

                                <button class="btn btn-primary" type="submit" name="add_online"><i class="bi bi-check-circle-fill me-2"></i>Add</button>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Donation Method</label>
                                <!-- <input class="form-control" type="text" name="item_requirement_id" placeholder="Enter Requirement ID" required> -->
                                <select class='form-control' name='donation_method' id="donation_method">
                                    <option value="">Select Donation Method</option>
                                    <option value="UPI">UPI</option>
                                    <option value="Net Banking">Net Banking</option>
                                    <option value="Debit/Credit">Debit/Credit Card</option>
                                </select>
                                <br>
                                <label class="form-label">Donation Amount</label>
                                <input class="form-control" type="text" name="donation_amount" placeholder="Enter donation amount">
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
            $("#donation_form_js").validate();
        });
    </script>
    <style>
        .error {
            color: red
        }
    </style>
</body>

</html>