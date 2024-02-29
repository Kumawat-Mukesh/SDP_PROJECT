<?php
include './admin_db.php';
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}
$edit_id = $_GET['edit_id'];
$donation_select = mysqli_query($connection, "select*from tbl_donation where donation_id='{$edit_id}'");
$donation_data = mysqli_fetch_array($donation_select);

if ($_POST) {
    $item_requirement_id = $_POST['item_requirement_id'];
    $donation_details = $_POST['donation_details'];
    $donation_status = $_POST['donation_status'];
    $volunteer_id = $_POST['volunteer_id'];

    $query = mysqli_query($connection, "update tbl_donation set item_requirement_id='{$item_requirement_id}',donation_details='{$donation_details}',donation_status='{$donation_status}',volunteer_id='{$volunteer_id}' where donation_id='{$edit_id}'");
    if ($query) {
        echo "<script>alert('Donation updated to the database');window.location='donation_information.php'</script>";
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
                <h1><i class="bi bi-ui-checks"></i> Update Donation</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Donation</li>
                <li class="breadcrumb-item"><a href="donation_information.php">Update-Donation</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Update Donation</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="donation_form_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Requirement ID</label>
                                <!-- <input class="form-control" type="text" name="item_requirement_id" placeholder="Enter Requirement ID" required> -->
                                <?php
                                $item_requirement_query = mysqli_query($connection, "select*from tbl_item_requirement");
                                echo "<select class='form-control' name='item_requirement_id'>";
                                echo "<option value=''>Select Item Requirement</option>";
                                while ($item_requirement_row = mysqli_fetch_array($item_requirement_query)) {
                                    $select_item =  $item_requirement_row['item_requirement_id'] == $donation_data['item_requirement_id'] ? "selected" : "";
                                    echo "<option value='{$item_requirement_row['item_requirement_id']}' $select_item>{$item_requirement_row['item_requirement_details']} </option>";
                                }
                                echo "</select>";
                                ?>
                                <br>
                                <label class="form-label">Dontion Details</label>
                                <textarea name="donation_details" class="form-control" cols="3" rows="5" placeholder="Enter donation details" required><?php echo $donation_data['donation_details']; ?></textarea>
                                <br>
                                <label class="form-label">Donation Status</label>
                                <input class="form-control" type="text" name="donation_status" placeholder="Enter status" value="<?php echo $donation_data['donation_status']; ?>" required>
                                <br>
                                <label class="form-label">Volunteer ID</label>
                                <?php
                                $volunteer_query = mysqli_query($connection, "select*from tbl_volunteer");
                                echo "<select class='form-control' name='volunteer_id'>";
                                echo "<option value=''>Select Volunteer</option>";
                                while ($volunteer_row = mysqli_fetch_array($volunteer_query)) {
                                    $select_volunteer =  $volunteer_row['volunteer_id'] == $donation_data['volunteer_id'] ? "selected" : "";
                                    echo "<option value='{$volunteer_row['volunteer_id']}' $select_volunteer>{$volunteer_row['volunteer_first_name']}  {$volunteer_row['volunteer_last_name']}</option>";
                                }
                                echo "</select>";
                                ?>
                                <br>
                                <button class="btn btn-primary" type="submit" name="update"><i class="bi bi-check-circle-fill me-2"></i>Update</button>
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