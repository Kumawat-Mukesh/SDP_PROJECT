<?php
require 'admin_db.php';
session_start();

if (isset($_POST['add'])) {
  $ngo_name = $_POST['ngo_name'];
  $ngo_details = $_POST['ngo_details'];
  $ngo_email = $_POST['ngo_email'];
  $ngo_password = $_POST['ngo_password'];
  $ngo_contact_no = $_POST['ngo_contact_no'];
  $ngo_address = $_POST['ngo_address'];
  $ngo_certificate = $_POST['ngo_certificate'];
  $ngo_photo = $_POST['ngo_photo'];
  $area_id = $_POST['area_id'];
  $category_id = $_POST['category_id'];

  $ngo_photo_name=$_FILES['ngo_photo']['name'];
  $ngo_photo_tmp_name=$_FILES['ngo_photo']['tmp_name'];

  $certificate_photo_name=$_FILES['ngo_certificate']['name'];
  $certificate_photo_tmp_name=$_FILES['ngo_certificate']['tmp_name'];


  $query = mysqli_query($connection, "insert into tbl_ngo(ngo_name,ngo_details,ngo_email,ngo_password,ngo_contact_no,ngo_address,ngo_certificate,ngo_photo,area_id,category_id) values('{$ngo_name}','{$ngo_details}','{$ngo_email}','{$ngo_password}','{$ngo_contact_no}','{$ngo_address}','{$certificate_photo_name}','{$ngo_photo_name}','{$area_id}','{$category_id}')");
move_uploaded_file($ngo_photo_tmp_name,"uploads/".$ngo_photo_name);
move_uploaded_file($certificate_photo_tmp_name,"uploads/".$certificate_photo_name);


  if ($query) {
    echo "<script>alert('NGO added to the database');window.location='ngo_form.php'</script>";
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
  <title>NGO Form</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            /* vh stands for viewport height */
        }

        
    </style>
</head>

<body class="app sidebar-mini" style="background-color: #00695c;">
  <!-- Navbar-->
  
  <!-- Sidebar menu-->
 
  <br><br><br><br><br>

  <main class="center">
    <div class="col-md-12">
      <div class="tile" style="background-color: #D9DDDC;">
        <h3 class="tile-title">Registration Form</h3>
        <div class="tile-body">
          <form class="row" method="post" id="ngo_form_js" enctype="multipart/form-data">
            <div class="mb-5 col-md-5">
              <label class="form-label">Name</label>
              <input class="form-control" type="text" placeholder="Enter NGO name" name="ngo_name" required>
              <br>

              <label class="form-label">Details</label>
              <!-- <input class="form-control" type="text" placeholder="Enter details" name="ngo_details"> -->
              <textarea name="ngo_details" placeholder="Enter NGO details" rows=5 cols=15 class="form-control" required></textarea>
              <br>

              <label class="form-label">Email</label>
              <input class="form-control" type="email" placeholder="Enter NGO email" name="ngo_email" required>
              <br>

              <label class="form-label">Password</label>
              <input class="form-control" type="password" placeholder="Enter email password" name="ngo_password" required>
              <br>
              <label class="form-label">Category ID</label>
              <!-- <input class="form-control" type="text" placeholder="Enter category id" name="category_id" required> -->
              <?php
                $category_query=mysqli_query($connection,"select*from tbl_category");
                echo "<select class='form-control' name='category_id'>";
                echo "<option value=''>Select Category</option>";
                while($category_row=mysqli_fetch_array($category_query))
                {
                echo "<option value='{$category_row['category_id']}'>{$category_row['category_name']}</option>";

                }
                echo "</select>";
              ?>
              <br>

              <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Add</button>
            </div>
            <div class="mb-5 col-md-5">
              <label class="form-label">Contact NO.</label>
              <input class="form-control" type="tel" placeholder="Enter contact number" name="ngo_contact_no" required>
              <br>
              <label class="form-label">Address</label>
              <!-- <input class="form-control" type="text" placeholder="Enter details" name="ngo_details"> -->
              <textarea name="ngo_address" placeholder="Enter NGO address" rows=5 cols=15 class="form-control" required></textarea>
              <br>
              <label class="form-label">Certificate</label>
              <input class="form-control" type="file" placeholder="Upload NGO Certificate" name="ngo_certificate" required>
              <br>
              <label class="form-label">Photo</label>
              <input class="form-control" type="file" placeholder="Upload NGO photo" name="ngo_photo" required>
              <br>
              <label class="form-label">Area ID</label>
              <!-- <input class="form-control" type="text" placeholder="Enter area id" name="area_id" required> -->
              <?php
                $area_query=mysqli_query($connection,"select*from tbl_area");
                echo "<select class='form-control' name='area_id'>";
                echo "<option value=''>Select Area</option>";
                while($area_row=mysqli_fetch_array($area_query))
                {
                echo "<option value='{$area_row['area_id']}'>{$area_row['area_name']}</option>";

                }
                echo "</select>";
              ?>
              <br>
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
      $("#ngo_form_js").validate();
      });
    </script>
    <style>
      .error{
        color:red
      }
      </style>
</body>

</html>