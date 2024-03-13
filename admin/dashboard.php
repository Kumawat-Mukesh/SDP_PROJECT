<?php
session_start();
include 'admin_db.php';
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
  <title>Admin's Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->

  <link rel="stylesheet" href="/assets/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/docs.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn..net/v/bs5/dt-1.13.4/datatables.min.css">


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
        <h1><i class="bi bi-speedometer"></i> Dashboard</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb  ">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      </ul>
    </div>
    <div class="row">
      <?php if (isset($_SESSION['set_alert'])) {
        unset($_SESSION["set_alert"]);
      ?>
        <div class="alert alert-dismissible alert-success">
          <button class="btn-close" type="button" data-bs-dismiss="alert"></button><strong>You successfully Logged In</strong>.
        </div>
      <?php } ?>

      <div class="col-md-6 col-lg-3"><a href="ngo_information.php" style="text-decoration:none">
          <div class="widget-small primary coloured-icon"><i class="icon bi bi-building fs-1"></i>
        </a>
        <div class="info">
          <h4>NGO</h4>
          <?php
          $select = mysqli_query($connection, "select*from tbl_ngo");
          $count = mysqli_num_rows($select);
          echo "<p><b>{$count}</b></p>";
          ?>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3"><a href="donation_information.php" style="text-decoration:none">
        <div class="widget-small primary coloured-icon"><i class="icon bi bi-heart fs-1" style="background-color:steelblue;"></i>
      </a>
      <div class="info">
        <h4>Donation</h4>
        <?php
        $select = mysqli_query($connection, "select * from tbl_donation");
        $count = mysqli_num_rows($select);
        echo "<p><b>{$count}</b></p>";
        ?>
      </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3"><a href="user_information.php" style="text-decoration:none">
        <div class="widget-small warning coloured-icon"><i class="icon bi bi-people fs-1"></i>
      </a>
      <div class="info">
        <h4>Users</h4>
        <?php
        $select = mysqli_query($connection, "select*from tbl_user");
        $count = mysqli_num_rows($select);
        echo "<p><b>{$count}</b></p>";
        ?>
      </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3"><a href="feedback_information.php" style="text-decoration:none">
        <div class="widget-small danger coloured-icon"><i class="icon bi bi-star-half fs-1"></i>
      </a>
      <div class="info">
        <h4>Feedback</h4>
        <?php
        $select = mysqli_query($connection, "select*from tbl_feedback");
        $count = mysqli_num_rows($select);
        echo "<p><b>{$count}</b></p>";
        ?>
      </div>
    </div>
    </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title"><a href="category_information.php" style="text-decoration:none">NGO's category</a></h3>
          <div class="ratio ratio-16x9 d-flex justify-content-center">
            <canvas id="supportRequestChart"></canvas>
          </div>
        </div>
      </div>


    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h3 class="tile-title">NGO Information</h3>
            <table class="table table-hover table-bordered" id="sampleTable1">
              <thead>
                <tr>
                  <!-- <th>ID</th> -->
                  <th>NGO Name</th>
                  <th>E-mail</th>
                  <th>Contact No</th>
                  <th>Category Name</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'admin_db.php';
                $select = mysqli_query($connection, "select*from tbl_ngo");
                while ($ngo_row = mysqli_fetch_array($select)) {
                  $area_query = mysqli_query($connection, "select*from tbl_area where area_id='{$ngo_row['area_id']}'");
                  $area_row = mysqli_fetch_array($area_query);

                  $category_query = mysqli_query($connection, "select*from tbl_category where category_id='{$ngo_row['category_id']}'");
                  $category_row = mysqli_fetch_array($category_query);
                  echo "<tr>";
                  echo "<td>{$ngo_row['ngo_name']}</td>";
                  echo "<td>{$ngo_row['ngo_email']}</td>";
                  echo "<td>{$ngo_row['ngo_contact_no']}</td>";
                  echo "<td>{$category_row['category_name']}</td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h3 class="tile-title">User Information</h3>
            <table class="table table-hover table-bordered" id="sampleTable2">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>E-mail</th>
                  <th>Contact No</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'admin_db.php';
                $select = mysqli_query($connection, "select*from tbl_user");
                while ($user_row = mysqli_fetch_array($select)) {
                  $area_query = mysqli_query($connection, "select*from tbl_area where area_id='{$user_row['area_id']}'");
                  $area_row = mysqli_fetch_array($area_query);

                  echo "<tr>";
                  // echo "<td>{$user_row['user_id']}</td>";
                  echo "<td>{$user_row['user_first_name']}</td>";
                  echo "<td>{$user_row['user_last_name']}</td>";
                  echo "<td>{$user_row['user_email']}</td>";

                  echo "<td>{$user_row['user_mobile_no']}</td>";

                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- <div class="row">

    </div> -->
    </div>

  </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#sampleTable1').DataTable();
    $('#sampleTable2').DataTable();
  </script>

  <!-- Page specific javascripts-->
  <script type="text/javascript" src="js/plugins/chart.js"></script>
  <script type="text/javascript">
    const salesData = {
      type: "line",

    }

    const supportRequests = {
      type: "doughnut",
      data: {
        labels: [
          'Old Age Home',
          'Child orphanage',
          'Blind people orphanage'
        ],
        datasets: [{
          label: 'Number of ngo:',
          data: [25, 1, 10],
          backgroundColor: [
            '#EFCC00',
            '#5AD3D1',
            '#FF5A5E'
          ],
          hoverOffset: 4
        }]
      }
    };



    const supportChartCtx = document.getElementById('supportRequestChart');
    new Chart(supportChartCtx, supportRequests);
  </script>
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


</body>

</html>