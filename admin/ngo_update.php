<?php
require 'admin_db.php';

session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}
$edit_id = $_GET['edit_id'];
$ngo_select = mysqli_query($connection, "select *from tbl_ngo where ngo_id={$edit_id}");
$ngo_row = mysqli_fetch_array($ngo_select);
if (isset($_POST['add'])) {
    $ngo_name = $_POST['ngo_name'];
    $ngo_details = $_POST['ngo_details'];
    $ngo_email = $_POST['ngo_email'];
    $ngo_contact_no = $_POST['ngo_contact_no'];
    $ngo_address = $_POST['ngo_address'];
    $ngo_certificate = $_POST['ngo_certificate'];
    $ngo_photo = $_POST['ngo_photo'];
    $area_id = $_POST['area_id'];
    $category_id = $_POST['category_id'];

    $ngo_photo_name = $_FILES['ngo_photo']['name'];
    $ngo_photo_tmp_name = $_FILES['ngo_photo']['tmp_name'];

    $certificate_photo_name = $_FILES['ngo_certificate']['name'];
    $certificate_photo_tmp_name = $_FILES['ngo_certificate']['tmp_name'];


    $query = mysqli_query($connection, "update tbl_ngo set ngo_name='{$ngo_name}',ngo_details='{$ngo_details}',ngo_email='{$ngo_email}',ngo_contact_no='{$ngo_contact_no}',ngo_address='{$ngo_address}',ngo_certificate='{$certificate_photo_name}',ngo_photo='{$ngo_photo_name}',area_id='{$area_id}',category_id='{$category_id}' where ngo_id='{$edit_id}'");
    move_uploaded_file($ngo_photo_tmp_name, "uploads/" . $ngo_photo_name);
    move_uploaded_file($certificate_photo_tmp_name, "uploads/" . $certificate_photo_name);


    if ($query) {
        echo "<script>alert('NGO updated');window.location='ngo_information.php'</script>";
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
    <title>NGO Update Form</title>
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
                <h1><i class="bi bi-ui-checks"></i> Update NGO</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">NGO</li>
                <li class="breadcrumb-item"><a href="ngo_edit.php">Update-NGO</a></li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Update NGO</h3>
                <div class="tile-body">
                    <form class="row" method="post" id="ngo_form_js" enctype="multipart/form-data">
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Name</label>
                            <input class="form-control" type="text" placeholder="Enter NGO name" name="ngo_name" value="<?php echo $ngo_row['ngo_name']; ?>" required>
                            <br>

                            <label class="form-label">Details</label>
                            <!-- <input class="form-control" type="text" placeholder="Enter details" name="ngo_details"> -->
                            <textarea name="ngo_details" placeholder="Enter NGO details" rows=5 cols=15 class="form-control" required><?php echo $ngo_row['ngo_details']; ?></textarea>
                            <br>

                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" placeholder="Enter NGO email" name="ngo_email" required value="<?php echo $ngo_row['ngo_email']; ?>">
                            <br>

                            <label class="form-label">Contact NO.</label>
                            <input class="form-control" type="tel" placeholder="Enter contact number" name="ngo_contact_no" value="<?php echo $ngo_row['ngo_contact_no']; ?>" required>
                            <br>

                            <label class="form-label">Category ID</label>
                            <!-- <input class="form-control" type="text" placeholder="Enter category id" name="category_id" required> -->
                            <?php
                            $category_query = mysqli_query($connection, "select*from tbl_category");
                            echo "<select class='form-control' name='category_id'>";
                            echo "<option value=''>Select Category</option>";
                            while ($category_row = mysqli_fetch_array($category_query)) {
                                $select_category =  $category_row['category_id'] == $ngo_row['category_id'] ? "selected" : "";
                                echo "<option value='{$category_row['category_id']}' $select_category>{$category_row['category_name']}</option>";
                            }
                            echo "</select>";
                            ?>
                            <br>

                            <button class="btn btn-primary" type="submit" name="add"><i class="bi bi-check-circle-fill me-2"></i>Update</button>
                        </div>
                        <div class="mb-3 col-md-3">

                            <label class="form-label">Address</label>
                            <!-- <input class="form-control" type="text" placeholder="Enter details" name="ngo_details"> -->
                            <textarea name="ngo_address" placeholder="Enter NGO address" rows=5 cols=15 class="form-control" required><?php echo $ngo_row['ngo_address']; ?></textarea>
                            <br>
                            <label class="form-label">Certificate</label>
                            <input class="form-control" type="file" placeholder="Upload NGO Certificate" name="ngo_certificate" value="<?php echo $ngo_row['ngo_certificate']; ?>" required>
                            <br>
                            <label class="form-label">Photo</label>
                            <input class="form-control" type="file" placeholder="Upload NGO photo" name="ngo_photo" required>
                            <br>
                            <label class="form-label">Area ID</label>
                            <!-- <input class="form-control" type="text" placeholder="Enter area id" name="area_id" required> -->
                            <?php
                            $area_query = mysqli_query($connection, "select*from tbl_area");
                            echo "<select class='form-control' name='area_id'>";
                            echo "<option value=''>Select Area</option>";
                            while ($area_row = mysqli_fetch_array($area_query)) {
                                $select_area =   $area_row['area_id'] == $ngo_row['area_id'] ? "selected" : "";
                                echo "<option value='{$area_row['area_id']}' $select_area>{$area_row['area_name']}</option>";
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
        $(document).ready(function() {
            $("#ngo_form_js").validate();
        });
    </script>
    <style>
        .error {
            color: red
        }
    </style>
</body>

</html>