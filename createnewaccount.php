<?php
include ("dblogin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title> keeping fit </title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<head>
<script type="text/javascript">
 function myregex() 
{

  var reg = new RegExp(loginform.password1.value);
  if ( reg.test(loginform.password2.value) ) {
	
	return true;
   
  } else {
   	
	alert('The two passwords don\'t match');
	return false;
  }
 }
</script> 
</head>
<body>


<form name="loginform" method="post" action="add-user.php">
<p><strong>Please Enter Your Details If You Are A New User And If You Are Not Already An Existing User!':</strong></p>
<p>Username:<br />
<input type="text" name="user" size="20" value=""></p>
<p>Firstname:<br />
<input type="text" name="firstname" size="20" value=""></p>
<p>Surname:<br />
<input type="text" name="surname" size="20" value=""></p>
<p>Password:<br />
<input type="password" name="password1" size="20" value=""></p>
<p>Confirm Password:<br />
<input type="password" name="password2"  size="20" value=""></p>
<p><input type="submit" name="Submit"  value=" Login &gt;&gt; " onclick="return myregex();"></p>
</form>
<?php
if($_GET['login']=="fail")
{
echo '<p>Login unsuccessful, please try again!!!</p>';
}
?>
<br/><a href="books.php"> Please Continue To Products Page</a> 
<span onclick="alert('my alert box');"><u>click here</u></span>



</body>
</html>
