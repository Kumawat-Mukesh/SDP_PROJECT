<?php
require  'admin_db.php';
session_start();
if(!isset($_SESSION["admin_id"])){
  header("Location:admin_login.php");
}
$edit_id = $_GET['edit_id'];
$volunteer_select = mysqli_query($connection, "select*from tbl_volunteer where volunteer_id='{$edit_id}'");
$volunteer_data = mysqli_fetch_array($volunteer_select);
if($_POST)
{
  $volunteer_first_name=$_POST['volunteer_first_name'];
  $volunteer_last_name=$_POST['volunteer_last_name'];
  $volunteer_email=$_POST['volunteer_email'];
  $volunteer_password=$_POST['volunteer_password'];
  $volunteer_gender=$_POST['volunteer_gender'];
  $volunteer_mobile_no=$_POST['volunteer_mobile_no'];
  $volunteer_address=$_POST['volunteer_address'];
  $volunteer_photo=$_POST['volunteer_photo'];
  $volunteer_verified=$_POST['volunteer_verified'];

  $volunteer_photo_name=$_FILES['volunteer_photo']['name'];
  $volunteer_photo_tmp_name=$_FILES['volunteer_photo']['tmp_name'];


  $query=mysqli_query($connection,"update tbl_volunteer set volunteer_first_name='{$volunteer_first_name}',volunteer_last_name='{$volunteer_last_name}',volunteer_email='{$volunteer_email}',volunteer_password='{$volunteer_password}',volunteer_gender='{$volunteer_gender}',volunteer_mobile_no='{$volunteer_mobile_no}',volunteer_address='{$volunteer_address}',volunteer_photo='{$volunteer_photo_name}',volunteer_verified='{$volunteer_verified}' where volunteer_id={$edit_id}");

  move_uploaded_file($volunteer_photo_tmp_name,"uploads/".$volunteer_photo_name);
  if($query)
  {
    echo "<script>alert('Volunteer updated to the database');window.location='volunteer_information.php'</script>";
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
  <title>Volunteer Form</title>
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
        <h1><i class="bi bi-ui-checks"></i> Volunteer Update Form</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
        <li class="breadcrumb-item">Volunteer</li>
        <li class="breadcrumb-item"><a href="volunteer_information.php">Volunteer-Update</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="clearix"></div>
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Update Volunteer</h3>
          <div class="tile-body">
          <form class="row" method="post" enctype="multipart/form-data" id="volunteer_form_js">
              <div class="mb-3 col-md-3">
                <label class="form-label">First Name</label>
                <input class="form-control" type="text" name="volunteer_first_name" placeholder="Enter your first name" value="<?php echo $volunteer_data['volunteer_first_name']; ?>" required>
                <br>
                <label class="form-label">Last Name</label>
                <input class="form-control" type="text" name="volunteer_last_name" placeholder="Enter your last name" value="<?php echo $volunteer_data['volunteer_last_name']; ?>" required>
                <br>
                <label class="form-label">Email</label>
                <input class="form-control" type="email" name="volunteer_email" placeholder="Enter your email" value="<?php echo $volunteer_data['volunteer_email']; ?>" required>
                <br>
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="volunteer_password" placeholder="Enter email password" value="<?php echo $volunteer_data['volunteer_password']; ?>" required>
                <br>
                <label class="form-label">Gender</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="volunteer_gender" <?php if ($volunteer_data['volunteer_gender'] == 'Male') {echo "checked"; } ?> value="Male">Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="volunteer_gender" <?php if ($volunteer_data['volunteer_gender'] == 'Female') {echo "checked"; } ?> value="Female">Female
                  </label>
                </div>
                <br>
                <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Update</button>
              </div>
              <div class="mb-3 col-md-3">
                <label class="form-label">Mobile NO.</label>
                <input class="form-control" type="tel" name="volunteer_mobile_no" placeholder="Enter mobile number " value="<?php echo $volunteer_data['volunteer_mobile_no']; ?>" required>
                <br>
                <label class="form-label">Address</label>
                <textarea name="volunteer_address" class="form-control" placeholder="Enter your address" rows="5" cols="15" required><?php echo $volunteer_data['volunteer_address']; ?></textarea>
                <br>
                <label class="form-label">Photo</label>
                <input class="form-control" type="file" name="volunteer_photo" placeholder="Upload your photo" required>
                <br>
                <label class="form-label">Verified</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="volunteer_verified" <?php if ($volunteer_data['volunteer_verified'] == 'Yes') {echo "checked"; } ?>  value="Yes">Yes
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="volunteer_verified" <?php if ($volunteer_data['volunteer_verified'] == 'No') {echo "checked"; } ?>  value="No">No
                  </label>
                </div>
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
      $("#volunteer_form_js").validate();
      });
    </script>
    <style>
      .error{
        color:red
      }
      </style>
</body>

</html>