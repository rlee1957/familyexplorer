<?php
include 'connection.php';
include 'database_open_wah.php';
$retVal = "Already exists!";
$user_name = $_REQUEST["user_name"];
$sql = "select * from members where user_name = '".$user_name."';";
//echo($sql."<br />");
$rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
if($row_count == 0)
   {
   $retVal = "Does not exist.";
   }
echo $retVal;
?>
