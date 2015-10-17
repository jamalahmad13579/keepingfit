<?php
include("dblogin.php");
if ($_SESSION['userid']=="")
{
header ('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> keeping fit </title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<h1> <strong> Books</strong> </h1>
<h2> <strong>The books available on keeping fit are as follows: </strong> </h2>

<strong> <ul>
<li>  The energy source: simple daily exercise for mind and body vitality
By West, Clare
Book. English.	
Published London : Prion 1997	</li>
<li> Keeping Fit  by Sylvia Goulding year published 2006</li>
<li> Keeping Fit with Sports by Dona Herweck Rice year publised2011 </li>
<li>Keeping Fit Body Systems by Carol Ballard year published 2008 </li>
<li> Keeping Fit for Work by Orison Swett Marden year published 2010</li>
</strong> </ul>

<br> <ul><strong>
<li><a href="index.php">Home Page</a>
</li>
<li><a href=" books.php">Books</a>
</li>
<li><a href="aboutus.php">About Us</a> 
</li>
<li><a href="contacts.php">Contacts Page</a>  
</li>
<li><a href="editdata.php">Edit Data</a>  
</li>
<li><a href="logout.php">Logout</a>  
</li>
</ul></strong></br>

</body>
</html>