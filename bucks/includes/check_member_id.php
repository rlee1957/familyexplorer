<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'connection.php';
include 'database_open_wah.php';

$sponsor_id = $_REQUEST["sponsor_id"];
$id = $_REQUEST["id"];
$retVal = get_address($id, $sponsor_id);
if($retVal == "")
  {
  $retVal = "Does not exist!"; 
  }
  
echo($retVal);

function get_address($id, $sponsor_id)
{
$retVal = "";
$sql = "select * from members where id = '".$id."' and (sponsor1 = '".$sponsor_id."' ";
$sql .= "or sponsor2 = '".$sponsor_id."' or sponsor3 = '".$sponsor_id."' ";
$sql .= "or sponsor4 = '".$sponsor_id."');";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
if($row_count != 0)
  {
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    $name = "";
    if($row["first_name"] != ""){$name .= $row["first_name"]." ";}
    if($row["middle_name"] != ""){$name .= $row["middle_name"]." ";}
    if($row["last_name"] != ""){$name .= $row["last_name"];}
    $name .= "<br />";
    $address1 = "";
    if($row["address1_number"] != ""){$address1 .= $row["address1_number"]." ";}
    if($row["address1_street_direction"] != ""){$address1 .= $row["address1_street_direction"]." ";}
    if($row["address1_street_name"] != ""){$address1 .= $row["address1_street_name"]." ";}
    if($row["address1_street_type"] != ""){$address1 .= $row["address1_street_type"]." ";}
    if($row["address1_space_type"] != ""){$address1 .= $row["address1_space_type"]." ";}
    if($row["address1_space_number"] != ""){$address1 .= $row["address1_space_number"]." ";}
    if($address1 != ""){$address1 .= "<br />";}
    $address2 = $row["address2"];
    if($address2 != ""){$address2 .= "<br />";}
    $csv = $row["city"].", ".$row["state"]." ".$row["zip"];
    $retVal = $name.$address1.$address2.$csv;
    $sponsor_idx = "";
    if($row["sponsor1"] == $sponsor_id){$sponsor_idx = "1";}
    if($row["sponsor2"] == $sponsor_id){$sponsor_idx = "2";}
    if($row["sponsor3"] == $sponsor_id){$sponsor_idx = "3";}
    if($row["sponsor4"] == $sponsor_id){$sponsor_idx = "4";}
    $retVal .= "<input type='hidden' id='paid_member_id' value='".$sponsor_idx."' />";
    }
  }
mysql_free_result($rs);
return($retVal);
}
?>
