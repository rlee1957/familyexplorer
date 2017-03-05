<?php
// show errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
// setup database access
include 'connection.php';
include 'database_open_wah.php';
// retrieve request data
$set_value = $_REQUEST["set_value"];
$id = $_REQUEST["id"];
// declare local variables
$retVal = "Success";
$sql = "update members set ".$set_value." where id = '".$id."';";
// run query 
$rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
// get row count (not required for action queries)
/*$row_count = mysql_num_rows($rs);*/
// check for records (not required for action queries)
/*if($row_count == 0)
   {
   $retVal = "Does not exist.";
   }*/
echo $retVal;
?>
