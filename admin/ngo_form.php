<?php
require 'admin_db.php';

session_start();
if (!isset($_SESSION["admin_id"])) {
  header("Location:admin_login.php");
}
if (isset($_POST['add'])) {
  $ngo_name = $_POST['ngo_name'];
  $ngo_details = $_POST['ngo_details'];
  $ngo_email = $_POST['ngo_email'];
  $ngo_password = $_POST['ngo_password'];
  $ngo_contact_no = $_POST['ngo_contact_no'];
  $ngo_address = $_POST['ngo_address'];
  $ngo_photo = $_POST['ngo_photo'];
  $area_id = $_POST['area_id'];
  $category_id = $_POST['category_id'];
  $ngo_status = $_POST['ngo_status'];

  $ngo_photo_name = $_FILES['ngo_photo']['name'];
  $ngo_photo_tmp_name = $_FILES['ngo_photo']['tmp_name'];


  $query = mysqli_query($connection, "insert into tbl_ngo(ngo_name,ngo_details,ngo_email,ngo_password,ngo_contact_no,ngo_address,ngo_photo,area_id,category_id,ngo_status) values('{$ngo_name}','{$ngo_details}','{$ngo_email}','{$ngo_password}','{$ngo_contact_no}','{$ngo_address}','{$ngo_photo_name}','{$area_id}','{$category_id}','{$ngo_status}')");
  move_uploaded_file($ngo_photo_tmp_name, "uploads/" . $ngo_photo_name);

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
        <h1><i class="bi bi-ui-checks"></i> NGO Form</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
        <li class="breadcrumb-item">NGO</li>
        <li class="breadcrumb-item"><a href="ngo_form.php">NGO-Form</a></li>
      </ul>
    </div>

    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Add NGO</h3>
        <div class="tile-body">
          <form class="row" method="post" id="ngo_form_js" enctype="multipart/form-data">
            <div class="mb-3 col-md-3">
              <label class="form-label">Name</label>
              <input class="form-control" type="text" onkeyup="Validatestring(this)" placeholder="Enter NGO name" name="ngo_name" required>
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
              <label class="form-label">Category Name</label>
              <!-- <input class="form-control" type="text" placeholder="Enter category id" name="category_id" required> -->
              <?php
              $category_query = mysqli_query($connection, "select*from tbl_category");
              echo "<select class='form-control' name='category_id'>";
              echo "<option value=''>Select Category</option>";
              while ($category_row = mysqli_fetch_array($category_query)) {
                echo "<option value='{$category_row['category_id']}'>{$category_row['category_name']}</option>";
              }
              echo "</select>";
              ?>
              <br>

              <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Add</button>
            </div>
            <div class="mb-3 col-md-3">
              <label class="form-label">Contact NO.</label>
              <input class="form-control" type="tel" maxlength="10" onkeyup="Validate(this)" placeholder="Enter contact number" name="ngo_contact_no" required>
              <br>
              <label class="form-label">Address</label>
              <!-- <input class="form-control" type="text" placeholder="Enter details" name="ngo_details"> -->
              <textarea name="ngo_address" placeholder="Enter NGO address" rows=5 cols=15 class="form-control" required></textarea>
              <br>
              <label class="form-label">Photo</label>
              <input class="form-control" type="file" placeholder="Upload NGO photo" name="ngo_photo" required>
              <br>
              <label class="form-label">Area Name</label>
              <!-- <input class="form-control" type="text" placeholder="Enter area id" name="area_id" required> -->
              <?php
              $area_query = mysqli_query($connection, "select*from tbl_area");
              echo "<select class='form-control' name='area_id'>";
              echo "<option value=''>Select Area</option>";
              while ($area_row = mysqli_fetch_array($area_query)) {
                echo "<option value='{$area_row['area_id']}'>{$area_row['area_name']}</option>";
              }
              echo "</select>";
              ?>
              <br>
              <label class="form-label">Verified</label>
              <label id="ngo_status-error" class="error" for="ngo_status"></label>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="ngo_status" value="1">Yes
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="ngo_status" value="0">No
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
    $(document).ready(function() {
      $("#ngo_form_js").validate({
        rules: {

          ngo_name: {
            required: true,
            minlength: 3
          },
          ngo_details: {
            required: "Plese Enter data",
          },
          ngo_email: {
            required: true,
            email: true
          },
          ngo_password: {
            required: true,
            minlength: 6
          },
          ngo_contact_no: {
            required: true,
            minlength: 10,
            maxlength: 10
          },
          ngo_address: "required",
          file: "required",
          category_id: {
            required: true
          },
          area_id: {
            required: true
          },
          ngo_status: {
            required: true
          }
        },
        messages: {

          ngo_name: {
            required: "Please Enter Name",
            minlength: "Your name must consist of at least 3 characters"
          },
          ngo_email: {
            required: "Please enter a valid email address",
            email: "Email contains (@) and (.)",
          },
          ngo_password: {
            required: "Please Enter Password",
            minlength: "Your password must be at least 6 characters long"
          },
          ngo_contact_no: {
            required: "Please Enter Your Mobile no.",
            minlength: "Enter Your 10 digit Mobile no. only",
            maxlength: "Enter Your 10 digit Mobile no. only",
          },

          file: "Please Select file",
          category_id: {
            required: "Select",
          },
          area_id: {
            required: "Select",
          },
          ngo_status: {
            required: "select"
          }
        }
      });
    });

    function Validate(no) {
      no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
    }

    function Validatestring(no) {
      no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
    }
  </script>
  <style>
    .error {
      color: red
    }
  </style>
</body>

</html>