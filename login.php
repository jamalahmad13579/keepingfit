<?php
include ("dblogin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title> keeping fit </title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<head>

<body>
<form name="loginform" method="post" action="check-login.php" >
<p><strong>Enter your login details:</strong></p>
<p>Username:<br />
<input type="text" name="user" size="20" value=""></p>
<p>Password:<br />
<input type="password" name="password" size="20" value=""></p>
<p><input type="submit" name="Submit" value=" Login &gt;&gt; "></p>
</form>
<?php
if($_GET['login']=="fail")
{
echo '<script type="text/javascript">';
echo 'alert ("This password is invalid");';
echo '</script>';
echo '<p>Login unsuccessful, please try again!!!</p>';
}
?>
<br/><a href="createnewaccount.php"> Please Click Here If You Want To Create A New Account ANd If You Are Not An Existing User Of This Website!!! </a>
<br/><a href="index.php"> Return To Home Page!!!</a>
</body>
</head>
</html>
