<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> keeping fit </title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<?php
echo "<p>".$_SESSION['username']."</p>";
echo '<p>'.$_SESSION["password"].'</p>';
echo '<p>'.$_SESSION["userid"].'</p>';
?>
<form action="update.php" method="post">
username:<input type="text" name="username"><br/>
password: <input type="password" name="password"><br/>
confirm password: <input type="password" name="cfp"><br/>
firstname: <input type="text" name="fn"> <br/>
surname: <input type="text" name="sn"><br/>
Edit <input type="submit" name="edit">
</form>

</body>
</html>