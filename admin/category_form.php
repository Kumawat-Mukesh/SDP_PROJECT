<?php
require 'admin_db.php';

session_start();
if (!isset($_SESSION["admin_id"])) {
  header("Location:admin_login.php");
}
if ($_POST) {
  $category_name = $_POST['category_name'];

  $query = mysqli_query($connection, "insert into tbl_category(category_name) values('{$category_name}')");
  if ($query) {
    echo "<script>alert('Category added to the database');window.location='category_form.php'</script>";
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
  <title>Category Form</title>
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
        <h1><i class="bi bi-ui-checks"></i> Category Form</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
        <li class="breadcrumb-item">Category</li>
        <li class="breadcrumb-item"><a href="category_form.php">Category-Form</a></li>
      </ul>
    </div>
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Add Category</h3>
        <div class="tile-body">
          <form class="row" method="post" id="category_form_js">
            <div class="mb-3 col-md-3">
              <label class="form-label">Name</label>
              <input class="form-control" type="text" onkeyup="Validatestring(this)" placeholder="Enter category" name="category_name" required>
            </div>
            <div class="mb-3 col-md-4 align-self-end">
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
    $(document).ready(function() {
      $("#category_form_js").validate({
        rules: {

          category_name: {
            required: true,
            minlength: 3
          },
        },
        messages: {

          category_name: {
            required: "Please Enter Category",
            minlength: "Your category name must consist of at least 3 characters"
          },
        }

      });
    });

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