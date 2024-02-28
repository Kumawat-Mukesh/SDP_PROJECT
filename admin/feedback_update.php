<?php
include './admin_db.php';
session_start();
if(!isset($_SESSION["admin_id"])){
    header("Location:admin_login.php");
}
$edit_id = $_GET['edit_id'];
$feedback_select = mysqli_query($connection, "select*from tbl_feedback where feedback_id='{$edit_id}'");
$feedback_data = mysqli_fetch_array($feedback_select);
if($_POST)
{
    $ngo_id=$_POST['ngo_id'];
    $user_id=$_POST['user_id'];
    $feedback_details=$_POST['feedback_details'];
    $feedback_rating=$_POST['feedback_rating'];
    $query=mysqli_query($connection,"update tbl_feedback set ngo_id='{$ngo_id}',user_id='{$user_id}',feedback_details='{$feedback_details}',feedback_rating='{$feedback_rating}' where feedback_id='{$edit_id}'");

    if($query)
    {
        echo "<script>alert('Feedback updated to the database');window.location='feedback_information.php'</script>";
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
    <title>Feedback Form</title>
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
                <h1><i class="bi bi-ui-checks"></i> Feedback Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">Feedback</li>
                <li class="breadcrumb-item"><a href="feedback_form.php">Feedback-Form</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add Feedback</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="feedback_form_js">
                            <div class="mb-3 col-md-3">
                                <label class="form-label">NGO ID</label>
                                <!-- <input class="form-control" type="text" name="ngo_id" placeholder="Enter NGO ID" required> -->
                                <?php
                                $ngo_query = mysqli_query($connection, "select*from tbl_ngo");
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
                                <label class="form-label">Feedback Details</label>
                                <textarea name="feedback_details" class="form-control" cols="3" rows="5" placeholder="Enter feedback details" required><?php echo $feedback_data['feedback_details'];?></textarea>
                                <br>
                                <br>
                                <label class="form-label">Feedback Rating</label>
                                <input class="form-control" type="number" max="5" name="feedback_rating" placeholder="Enter rating" value="<?php echo $feedback_data['feedback_rating'];?>" required>
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
    $(document).ready(function(){
      $("#feedback_form_js").validate();
      });
    </script>
    <style>
      .error{
        color:red
      }
      </style>
</body>

</html>