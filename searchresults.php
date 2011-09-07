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

  // Get the search variable from URL
  $msg = @$_GET['msg'];
  $name = @$_GET['q'] ;
  $trimmed = trim($name); //trim whitespace from the stored variable



// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<p>Please enter a search...</p>";
  exit;
  }

// check for a search parameter
if (!isset($name))
  {
  echo "<p>Specify a Contact Name!</p>";
  exit;
  }

//connect to your database ** EDIT REQUIRED HERE **
mysql_connect("localhost","root",""); //(host, username, password)

//specify database ** EDIT REQUIRED HERE **
mysql_select_db("contacts") or die("Unable to select database"); //select which database we're using

// Build SQL Query  
$query = "select * from phone where name like \"%$trimmed%\"  
  order by name"; // EDIT HERE and specify your table and field names for the SQL query

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative

if ($numrows == 0)
  {
  echo "<h4>Results</h4>";
  echo "<p>Sorry, your search: &quot;" . $trimmed . "&quot; returned zero results</p>";
  }
$s=0;
  
// get results
  
  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for
echo "<p>You searched for : &quot;" . $name . "&quot;</p>";

// begin to show results set
echo "Results";
echo "<br/>";
$count = 1 + $s ;

// now you can display the results returned
  while ($row= mysql_fetch_array($result)) {
  echo "<br/>";
  $title = $row["name"];
  $phone= $row["phoneno"];
  echo "<br/>";
  echo "$count.)&nbsp;$title" ;

  echo "<br/>";
  echo "Phone:";
  echo "&nbsp;$phone" ;
   echo "<br/>";
  echo "Message:";
  echo $msg;?>
<br/>
  <a href="gnok.php?msg=<?=$msg?>&phoneno=<?=$phone?>">Send message</a>
<?
  $count++ ;
  }

  echo "<p>Showing results $b to $a of $numrows</p>";
  
?>

       
</center>

</div>
</body>
</html>
