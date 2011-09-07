<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BORIS-SMS FRAMEWORK</title>
<link rel="stylesheet" type="text/css" href="modern.css" />
</head>
<body>
<div id ="wrapper">
<center>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("contacts", $con);

$sql="INSERT INTO phone (name, phoneno)
VALUES
('$_POST[name]','$_POST[phone]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1>Contact Added</h1>";

mysql_close($con)
?> 
</center>
</div>
<a href="index.html"><h2 ALIGN=left>Click here to go Back</h2></a>
</body>
</html>
