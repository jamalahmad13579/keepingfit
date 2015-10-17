<?php
session_start();
include("dblogin.php");
$username = $_POST['username'];
$password = $_POST['password'];
$row = $_SESSION["userid"];
$cfp = $_POST['cfp'];
$fn = $_POST['fn'];
$sn = $_POST['sn'];
$sql = "UPDATE users SET username = '$username', password = '$password', confirmpassword = '$cfp', firstname ='$fn', surname = '$sn' WHERE userid = $row";

$update = mysql_query($sql);
header('Location:login.php');
?>