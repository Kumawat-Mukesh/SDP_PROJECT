<?php
session_start();

session_destroy();
header("Location:ngo_login.php");
?>