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
 $msg = @$_GET['msg'];
 $no = @$_GET['phoneno'] ;
$output = shell_exec("echo  $msg  | gnokii --sendsms $no");
echo "<pre>$output</pre>";

echo "<p>Your Message is  Sent</p>";

?>
<br/>
<a href="index.html"><h1>Click here to go back</h1></a>
</div>
</body>
</html>
