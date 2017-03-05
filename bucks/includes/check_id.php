<?php
include '../includes/connection.inc';
include '../includes/database_open_wah.inc';
$retVal = "Already exists!"
$user_name = $_REQUEST["user_name"];
$sql = "select * from members where id = '".$user_name."';";
$rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
if($row_count == 0)
   {
   $retVal = "Does not exist.";
   }
echo $retVal;
?>
