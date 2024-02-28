<?php
include './admin_db.php';
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location:admin_login.php");
}
if ($_POST) {
    $user_id = $_POST["user_id"];
    $faq_question = $_POST['faq_question'];
    $faq_answer = $_POST['faq_answer'];
    $query = mysqli_query($connection, "insert into tbl_faq (user_id,faq_question,faq_answer) values('{$user_id}','{$faq_question}','{$faq_answer}')");
    if ($query) {
        echo "<script>alert('FAQ added to the database');window.location='faq_form.php'</script>";
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
    <title>FAQ Form</title>
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
                <h1><i class="bi bi-ui-checks"></i>FAQ Form</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door fs-6"></i></a></li>
                <li class="breadcrumb-item">FAQ</li>
                <li class="breadcrumb-item"><a href="faq_form.php">FAQ-Form</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="clearix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Add FAQ</h3>
                    <div class="tile-body">
                        <form method="post" class="row" id="faq_form_js">
                            <div class="mb-3 col-md-3">
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
                                <label class="form-label">Questions</label>
                                <textarea name="faq_question" class="form-control" cols="3" rows="5" placeholder="Enter question" required></textarea>
                                <br>
                                <label class="form-label">Answer</label>
                                <textarea name="faq_answer" class="form-control" cols="3" rows="5" placeholder="Enter answer" required></textarea>
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
        $(document).ready(function() {
            $("#faq_form_js").validate({
                rules: {
                    user_id: {
                        required: true,
                    },
                    faq_question: "required",
                    faq_answer: "required",
                },
                messages: {
                    user_id: {
                        required: "Select user",
                    }
                }
            });
        });
    </script>
    <style>
        .error {
            color: red
        }
    </style>
</body>

</html>