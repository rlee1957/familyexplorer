<?php
session_start(); 

error_reporting(E_ALL);
ini_set('display_errors', '1');
//echo("This is a test<br />");

include 'connection.php';
include 'database_open_wah.php';

$id = $_REQUEST["id"];
//echo($id); 
$sponsor1 = $_REQUEST["sponsor1"];
//echo("sponsor1 = ".$sponsor1."<br />"); 
$sponsor2 = get_sponsor(1, $sponsor1);
//echo("sponsor2 = ".$sponsor2."<br />"); 
$sponsor3 = get_sponsor(2, $sponsor1);
//echo("sponsor3 = ".$sponsor3."<br />"); 
$sponsor4 = get_sponsor(3, $sponsor1);
//echo("sponsor4 = ".$sponsor4."<br />"); 
$pay1_verify = 0;
$pay2_verify = 0;
$pay3_verify = 0;
$pay4_verify = 0;
$pay1_date = "";
$pay2_date = "";
$pay3_date = "";
$pay4_date = "";
$receipt1_verify = 0;
$receipt2_verify = 0;
$receipt3_verify = 0;
$receipt4_verify = 0;
$receipt1_date = "";
$receipt2_date = "";
$receipt3_date = "";
$receipt4_date = "";
$user_name = $_REQUEST["user_name"];
$email = $_REQUEST["email"];
$first_name = $_REQUEST["first_name"];
$middle_name = $_REQUEST["middle_name"];
$last_name = $_REQUEST["last_name"];
$address1_number = $_REQUEST["address1_number"];
$address1_street_name = $_REQUEST["address1_street_name"];
$address1_street_direction = $_REQUEST["address1_street_direction"];
$address1_street_type = $_REQUEST["address1_street_type"];
$address1_space_type = $_REQUEST["address1_space_type"];
$address1_space_number = $_REQUEST["address1_space_number"];
$address2 = $_REQUEST["address2"];
$city = $_REQUEST["city"];
$state = $_REQUEST["state"];
$zip = $_REQUEST["zip"];
$password = $_REQUEST["password"];
$verified = 0;
$level = 0;
$created = $_REQUEST["created"];
$level_date = $_REQUEST["level_date"];  
$sql = "replace into members "; 
$sql .= "values (";
$sql .= "'".$id."', ";
$sql .= "'".$sponsor1."', ";
$sql .= "'".$sponsor2."', ";
$sql .= "'".$sponsor3."', ";
$sql .= "'".$sponsor4."', ";
$sql .= $pay1_verify.", ";
$sql .= $pay2_verify.", ";
$sql .= $pay3_verify.", ";
$sql .= $pay4_verify.", ";
$sql .= $receipt1_verify.", ";
$sql .= $receipt2_verify.", ";
$sql .= $receipt3_verify.", ";
$sql .= $receipt4_verify.", ";
$sql .= "'".$pay1_date."', ";
$sql .= "'".$pay2_date."', ";
$sql .= "'".$pay3_date."', ";
$sql .= "'".$pay4_date."', "; 
$sql .= "'".$receipt1_date."', ";
$sql .= "'".$receipt2_date."', ";
$sql .= "'".$receipt3_date."', ";
$sql .= "'".$receipt4_date."', ";   
$sql .= "'".$user_name."', ";
$sql .= "'".$email."', ";
$sql .= "'".$first_name."', ";
$sql .= "'".$middle_name."', ";
$sql .= "'".$last_name."', ";
$sql .= "'".$address1_number."', ";
$sql .= "'".$address1_street_name."', ";
$sql .= "'".$address1_street_direction."', ";
$sql .= "'".$address1_street_type."', ";
$sql .= "'".$address1_space_type."', ";
$sql .= "'".$address1_space_number."', ";
$sql .= "'".$address2."', ";
$sql .= "'".$city."', ";
$sql .= "'".$state."', ";
$sql .= "'".$zip."', ";
$sql .= "'".$password."', ";
$sql .= $verified.", ";
$sql .= $level.", ";
$sql .= "'".$created."', ";
$sql .= "'".$level_date."'";
$sql .= ");"; 
//echo($sql."<br />");

$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
mysql_free_result($rs);
$_SESSION["id"] = $id;
$_SESSION["logged_in"] = "Yes";
echo("Success");

function get_sponsor($idx, $id)
{
$retVal = "";
$field = "sponsor".$idx;
$sql = "select ".$field." from members where id = '".$id."';";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
echo($row_count." ".$field." "."<br />");
if($row_count != 0)
  {
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    $retVal =  $row[$field];
    }
  }
mysql_free_result($rs);
return($retVal);
}

?>
