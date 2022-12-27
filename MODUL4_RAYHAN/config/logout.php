<?php
session_start();
unset($_SESSION['email']);
header("location:../pages/Login_Rayhan.php");
?>
