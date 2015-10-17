<?php
ob_start();
session_start(); 
include("dblogin.php");
$_SESSION["order"]="";
 $user=$_POST["user"];
 $pass=$_POST["password"];
 if (preg_match('/[0-9]+/', $pass)==1)
{

header ('Location:login.php?login=fail');
} 


 $sql="SELECT * FROM users";
 $result=mysql_query($sql);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	if($user==$row["username"]&&$pass==$row["password"])
{$_SESSION["userid"]=$row["userid"];
$_SESSION["username"]=$row["username"];
$_SESSION["password"]=$row["password"];
header ('Location: books.php');

}
}

if ($_SESSION["userid"]=="") 
{
	header ('Location:login.php?login=fail');
}

?>
