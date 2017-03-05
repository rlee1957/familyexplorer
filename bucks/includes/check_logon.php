<?php
session_start(); 

// show errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
// setup database access
include 'connection.php';
include 'database_open_wah.php';
// retrieve request data
$user_name = $_REQUEST["user_name"];
$password = $_REQUEST["password"];
//echo($user_name."<br />"); 
// declare local variables
$retVal = "Fail";
$sql = "select id from members where user_name = '".$user_name."' ";
$sql .= "and password COLLATE latin1_bin = '".$password."';";
//echo($sql."<br />");
// run query 
$rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
// get row count (not required for action queries)
$row_count = mysql_num_rows($rs);
//echo($row_count."<br />");
// check for records (not required for action queries)
if($row_count != 0)
  {
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    $retVal = $row["id"];
    $_SESSION["id"] = $retVal;
    $_SESSION["logged_in"] = "Yes";
    }
  }

echo($retVal);
?>
