<?php
include './admin_db.php';
session_start();


if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}
$edit_id=$_GET['edit_id'];
$event_select=mysqli_query($connection,"select*from tbl_event where event_id={$edit_id}");
$event_data=mysqli_fetch_array($event_select);


if ($_POST) {
    //$admin_id = $_SESSION['admin_id'];
    $event_title = $_POST['event_title'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $event_location = $_POST['event_location'];
    $event_details = $_POST['event_details'];
    $event_photo_name = $_FILES['event_photo']['name'];
    $event_photo_tmp_name = $_FILES['event_photo']['tmp_name'];

    $query = mysqli_query($connection, "update tbl_event set event_title='{$event_title}',event_date='{$event_date}',event_time='{$event_time}',event_location='{$event_location}',event_details='{$event_details}',event_photo='{$event_photo_name}' where event_id='{$edit_id}'");
    move_uploaded_file($event_photo_tmp_name, "uploads/" . $event_photo_name);
    if ($query) {
        echo "<script>alert('Event data updated!');window.location='event_information.php'</script>";
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
    <title>Event Update Form</title>
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
    <?php require 'admin_header.php' ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php require 'admin_sidebar.php' ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-ui-checks"></i>Event Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Event</li>
                <li class="breadcrumb-item"><a href="event_information.php">Update-Event</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Update Event</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="blog_form" enctype="multipart/form-data">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Event Title</label>
                                <input class="form-control" type="text" name="event_title" placeholder="Enter event title" value="<?php echo $event_data['event_title'];?>" required>
                                <br>
                                <label class="form-label">Date</label>
                                <input class="form-control" type="text" name="event_date" placeholder="YYYY-MM-DD" value="<?php echo $event_data['event_date'];?>"required>
                                <br>
                                <label class="form-label">Time</label>
                                <input class="form-control" type="text" name="event_time" placeholder="HH:MM:SS" value="<?php echo $event_data['event_time'];?>"required>
                                <br>
                                <label class="form-label">Location</label>
                                <textarea name="event_location" class="form-control" cols="3" rows="5" placeholder="Enter event location" required><?php echo $event_data['event_location'];?></textarea>
                                <br>
                                <label class="form-label">Details</label>
                                <textarea name="event_details" class="form-control" cols="3" rows="5" placeholder="Enter event details" required><?php echo $event_data['event_details'];?></textarea>
                                <br>
                                <label class="form-label">Photo</label>
                                <input class="form-control" type="file" name="event_photo" placeholder="Upload event photo" required>
                                <br>
                                <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Update</button>
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
            $("#blog_form").validate();
        });
    </script>
    <style>
        .error {
            color: red
        }
    </style>
</body>

</html>