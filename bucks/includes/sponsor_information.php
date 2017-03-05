<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
//echo("This is a test<br />");

include 'connection.php';
include 'database_open_wah.php';

$retVal = "";
$id = $_REQUEST["id"];
echo($id."<br />");  
$sql = "select * from members where id = '".$id."';";
echo($sql."<br />"); 
$rs = mysql_query($sql) or die($sql."<br>".'Select Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
echo($row_count."<br />");  
if($row_count != 0)
  {
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    $sponsor1 = $row["sponsor1"]; 
    $sponsor2 = $row["sponsor2"];
    $sponsor3 = $row["sponsor3"];
    $sponsor4 = $row["sponsor4"];  
    $address1 = get_address($sponsor1); 
    echo($address1."<br />");
    $address2 = get_address($sponsor2);
    $address3 = get_address($sponsor3);
    $address4 = get_address($sponsor4);
    $level = $row["level"];
    if($level == 0)
      {
      $status1 = "1 dollar";
      $status2 = "1 dollar";
      $status3 = "1 dollar";
      $status4 = "10 dollars";
      }
    if($level == 1)
      {
      $status1 = "10 dollars";
      $status2 = "10 dollars";
      $status3 = "10 dollars";
      $status4 = "100 dollars";
      } 
    if($level == 2)
      {
      $status1 = "10 dollars";
      $status2 = "10 dollars";
      $status3 = "100 dollars";
      $status4 = "100 dollars";
      }   
    if($level == 3)
      {
      $status1 = "10 dollars";
      $status2 = "100 dollars";
      $status3 = "100 dollars";
      $status4 = "100 dollars";
      }
    if($level > 3)
      {
      $status1 = "100 dollars";
      $status2 = "100 dollars";
      $status3 = "100 dollars";
      $status4 = "100 dollars";
      }             
    if($row["pay1_verify"] == 1){$status1 .= "<br />Sent";$d1 = "true";$c1 = "true";}  
    else{$status1 .= "<br />Owed";$d1 = "false";$c1 = "false";}    
    if($row["receipt1_verify"] == 1){$status1 .= "<br />Received";}
    else{$status1 .= "<br />Not received";}
    
    if($row["pay2_verify"] == 1){$status2 .= "<br />Paid";$d2 = "true";$c2 = "true";}
    else{$status2 .= "<br />Owed";$d2 = "false";$c2 = "false";}
    if($row["receipt2_verify"] == 1){$status2 .= "<br />Received";}
    else{$status2 .= "<br />Not received";}
    
    if($row["pay3_verify"] == 1){$status3 .= "<br />Paid";$d3 = "true";$c3 = "true";}
    else{$status3 .= "<br />Owed";$d3 = "false";$c3 = "false";}
    if($row["receipt3_verify"] == 1){$status3 .= "<br />Received";}
    else{$status3 .= "<br />Not received";}
    
    if($row["pay4_verify"] == 1){$status4 .= "<br />Paid";$d4 = "true";$c4 = "true";}
    else{$status4 .= "<br />Owed";$d4 = "false";$c4 = "false";}
    if($row["receipt4_verify"] == 1){$status4 .= "<br />Received";}
    else{$status4 .= "<br />Not received";}
                            
    $retVal .= "document.getElementById('id1').innerHTML = '".$sponsor1."';";  
    $retVal .= "document.getElementById('post1').innerHTML = '".$address1."';";
    $retVal .= "document.getElementById('status1').innerHTML = '".$status1."';";
    $retVal .= "document.getElementById('verify1').checked = '".$c1."';";
    $retVal .= "document.getElementById('verify1').disabled = '".$d1."';";
    
    $retVal .= "document.getElementById('id2').innerHTML = '".$sponsor2."';";
    $retVal .= "document.getElementById('post2').innerHTML = '".$address2."';";
    $retVal .= "document.getElementById('status2').innerHTML = '".$status2."';";
    $retVal .= "document.getElementById('verify2').checked = '".$c2."';";
    $retVal .= "document.getElementById('verify2').disabled = '".$d2."';";
    
    $retVal .= "document.getElementById('id3').innerHTML = '".$sponsor3."';";
    $retVal .= "document.getElementById('post3').innerHTML = '".$address3."';";
    $retVal .= "document.getElementById('status3').innerHTML = '".$status3."';";
    $retVal .= "document.getElementById('verify3').checked = '".$c3."';";
    $retVal .= "document.getElementById('verify3').disabled = '".$d3."';";
    
    $retVal .= "document.getElementById('id4').innerHTML = '".$sponsor4."';";
    $retVal .= "document.getElementById('post4').innerHTML = '".$address4."';";
    $retVal .= "document.getElementById('status4').innerHTML = '".$status4."';";
    $retVal .= "document.getElementById('verify4').checked = '".$c4."';";
    $retVal .= "document.getElementById('verify4').disabled = '".$d4."';";  
    }
  }
mysql_free_result($rs);
echo($retVal);


function get_address($id)
{
$retVal = "";
$sql = "select * from members where id = '".$id."';";
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
    }
  }
mysql_free_result($rs);
return($retVal);
}

?>
