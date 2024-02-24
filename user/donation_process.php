<?php
session_start();
require './admin_db.php';

$user_id = $_SESSION['user_id'];
$ngo_id = $_POST['ngo_id'];
$donation_details = $_POST['donation'];
$item_requirement_id = $_POST['item_requirement_id'];
if (!isset($_SESSION['user_id'])) {
    header("location:user_login.php");
}

$donation_query = mysqli_query($connection, "insert into tbl_donation(ngo_id, user_id, item_requirement_id,donation_details,donation_status) values('{$ngo_id}','{$user_id}','{$item_requirement_id}','{$donation_details}','pending')");

if ($donation_query) {
    header("location:thank_you.php");
    // echo "<script>alert('thank you');window.location='thank_you.php';</script>";
} else {
    echo "<script>alert('not added');window.location='ngo_listing.php';</script>";
}
