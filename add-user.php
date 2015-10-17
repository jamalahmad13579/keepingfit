<?php
 include("dblogin.php");

 $user=$_POST["user"];
 $pass=$_POST["password1"];
 $pass2=$_POST["password2"];
$fn=$_POST["firstname"];
$sn=$_POST["surname"];


 $sql="SELECT * FROM users";
 $result=mysql_query($sql);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	if($user==$row["username"])
{
header ('Location: createnewaccount.php?user=exist');
}}

$sql='INSERT INTO users (username,firstname,surname,password,confirmpassword) VALUES ("'.$user.'","'.$fn.'","'.$sn.'","'.$pass.'","'.$pass2.'")';
mysql_query($sql); 
header ('Location:login.php');
?>