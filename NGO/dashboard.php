<?php
session_start();
require 'admin_db.php';
if (!isset($_SESSION["ngo_id"])) {
  header("Location:ngo_login.php");
}
$ngo_id = $_SESSION["ngo_id"];
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
  <title>NGO's Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->

  <link rel="stylesheet" href="/assets/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/docs.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <?php
  require 'ngo_header.php';
  ?>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <?php
  require 'ngo_sidebar.php';
  ?>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="bi bi-speedometer"></i> Dashboard</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      </ul>
    </div>
    <div class="row">
      <center>
        <h2 style="color:brown;font-family: Garamond, serif;"><?php echo "Welcome , " . $_SESSION['ngo_name'] . "!!"; ?><img src="uploads/hand.png" height="35px" width="40px" /></h2><br>
      </center>
    </div>
    <div class="row">

    <div class="col-md-6 col-lg-3"><a href="donation_information.php" style="text-decoration:none">
        <div class="widget-small primary coloured-icon"><i class="icon bi bi-heart fs-1" style="background-color:steelblue;"></i>
      </a>
      <div class="info">
        <h4>Donation</h4>
        <?php
        $select = mysqli_query($connection, "select * from tbl_donation where ngo_id='{$ngo_id}'");
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
        <h4>Child</h4>
        <?php
        $select = mysqli_query($connection, "select*from tbl_child where ngo_id='{$ngo_id}'");
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
        $select = mysqli_query($connection, "select*from tbl_feedback where ngo_id='{$ngo_id}'");
        $count = mysqli_num_rows($select);
        echo "<p><b>{$count}</b></p>";
        ?>
      </div>
    </div>
    </div>

    </div>
   <br>
    <div class="row">
      <?php
      $select = mysqli_query($connection, "select * from tbl_ngo where ngo_id='{$ngo_id}'");
      $ngo_row = mysqli_fetch_array($select);
      echo "<a target='_blank' href='uploads/{$ngo_row['ngo_photo']}'><img src='/project/admin/uploads/{$ngo_row['ngo_photo']}' width='1550' height='600' alt='NGO Photo'></a>";
      ?>
    </div>

  </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
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
          'Child orphanage',
          'Old age home',
          'Blind people orphanage'
        ],
        datasets: [{
          label: 'Number of ngo:',
          data: [250, 100, 100],
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