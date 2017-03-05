<?php

include("includes/patron_functions.php");
include("includes/get_patron_information.php");
$patron = $results["recordset"][0];
include("includes/get_verification_information.php");
# Check Postal Address
	{
	if(!$postal_address_verified)
		{
		include("includes/verify_postal_address.php");	
		}
	}
	
# Check Email Address
	{
	if(!$email_address_verified)
		{
		include("includes/verify_email_address.php");	
		}
	}

# Check Personal Key
	{
	if(!$set_personal_key)
		{
		include("includes/set_personal_key.php");
		}
	}

if(!$relationships_created)
	{
	include("includes/create_relationships.php");	
	}

include("includes/initialize_patron.php");
if($patron["level"] == 0)
	{
	include("includes/advance_to_tier.php");
	#include("includes/send_with_payment.php");
	}
/*
echo("<textarea style='width: 98%; height: 400px;'>");
print_r($_SESSION);
echo("</textarea>");
echo("ending");
exit();

if($invited_others > 0)
	{*/
	include("includes/set_team_info.php");
	/*}
else
	{
	include("includes/set_team_info_empty.php");
	}
#include("includes/show_team_info.php");
//include("includes/record_relationships.php");
//exit();

$r_pay1 = "<li><b>Pay your sponsors</b></li>";
$r_pay1 .= "<li>Click the 'Correspondence' menu at the top of the dashboard screen</li>";
$r_pay1 .= "<li>Click the 'Letters to send along with your payments' link</li>";
$r_pay1 .= "<li>Print</li>";
$r_pay1 .= "<li>It is recommended you purchase some thank you cards. Place your ";
$r_pay1 .= "payment and letter (printed in previous step) in a card. Send ";
$r_pay1 .= "single bills $1.00, $10.00 or $100.00. You may send a money order ";
$r_pay1 .= "if you feel uncomfortable sending cash. Please do not send ";
$r_pay1 .= "multibple bills or personal checks.";
$r_pay1 .= "<li>Your 4 sponsors' addresses can be found by clicking the ";
$r_pay1 .= "'Statistics' menu at the top of the dashboard screen or by ";
$r_pay1 .= "clicking the 'Verify Payments Sent' menu at the top of the ";
$r_pay1 .= "dashboard screen.</li>";
$r_pay1 .= "<li>Ensure you place the appropriate amount and letter in the ";
$r_pay1 .= "proper corresponding addressed envlope</li>";
$r_pay1 .= "<li>Mail your payments</li>";
$r_pay1 .= "<li>Click the 'Verify Payments Sent' menu at the top of the ";
$r_pay1 .= "dashboard screen</li>";
$r_pay1 .= "<li>Check the appropriate check boxes for the payments sent</li>";
$r_pay1 .= "<li>Click the 'Submit' button</li>";
$r_invite = "<li><b>Invite individuals to join</b></li>";
$r_invite .= "<li>Click the 'Correspondence' menu at the top of the dashboard ";
$r_invite .= "screen</li>";
$r_invite .= "<li>Click each Correspondence link to see what is available</li>";
$r_invite .= "<li>Using the Sample Correspondence invite others to join</li>";
$r_receive = "<li><b>Verify reciept of payments</b></li>";
$r_receive .= "<li>Click the 'Verify Received Payments' menu at the top of the dashboard ";
$r_receive .= "screen</li>";
$r_receive .= "<li>Enter the member ID received with the payment</li>";
$r_receive .= "<li>Click the 'Check' button</li>";
$r_receive .= "<li>Click the 'Payment Received' checkbox</li>";
$r_receive .= "<li>Click the 'Save' button</li>";
$message = "";
$recommendation = "";
$name = "";
$first_name = "";
$middle_name = "";
$last_name = "";
$address1 = "";
$address1_number = "";
$address1_street_direction = "";
$address1_street_name = "";
$address1_street_type = "";
$address1_space_type = "";
$address1_space_number = "";
$address2 = "";
$csv = "";
$city = "";
$state = "";
$zip = "";
$sponsor1 = "";
$sponsor2 = "";
$sponsor3 = "";
$sponsor4 = "";
$pay1_verify = "";
$pay2_verify = "";
$pay3_verify = "";
$pay4_verify = "";
$receipt1_verify = "";
$receipt2_verify = "";
$receipt3_verify = "";
$receipt4_verify = "";
$pay1_date = "";
$pay2_date = "";
$pay3_date = "";
$pay4_date = "";
$receipt1_date = "";
$receipt2_date = "";
$receipt3_date = "";
$receipt4_date = "";
$user_name = "";
$password = "";
$email = "";
$verified = "";
$level = "";
$created = "";
$level_date = "";
$CanInvite = "Yes";
$id = $_REQUEST["uid"];
$sql = "select * from participants where idx = '".$_SESSION["id"]."';";


include("../_common/environment/database.php");
$connection = connect($dbname);
if($connection["is_error"])
	{
	echo($connection["description"]);
	exit();
	}
else
	{
	$conn = $connection["object"];
	$res = sql_to_array($conn, $sql);
	if($res["error"]["is_error"] == 1)
		{
		echo("ERROR: ".$res["error"]["description"]."
		");
		}
	}
if($res["recordcount"] == 0)
  {
  echo("<h1>No participant records returned</h1><br />");
  exit();
  }
$participant = $res["recordset"][0];
$participant["name"] = "";
if($participant["first_name"] != "")
	{ 
	$participant["name"] .= $participant["first_name"]." ";
	}
if($participant["middle_name"] != "")
	{ 
	$participant["name"] .= $participant["middle_name"]." ";
	}
if($participant["last_name"] != "")
	{ 
	$participant["name"] .= $participant["last_name"]." ";
	}

$participant["full_name"] = $participant["name"];
$participant["name"] .= "<br />";
$participant["address1"] = "";
if($participant["street_number"] != "")
	{ 
	$participant["address1"] .= $participant["street_number"]." ";
	}
if($participant["direction"] != "")
	{ 
	$participant["address1"] .= $participant["direction"]." ";
	}
if($participant["street"] != "")
	{ 
	$participant["address1"] .= $participant["street"]." ";
	}
if($participant["street_type"] != "")
	{ 
	$participant["address1"] .= $participant["street_type"]." ";
	}
if($participant["space_type"] != "")
	{ 
	$participant["address1"] .= $participant["space_type"]." ";
	}
if($participant["space_number"] != "")
	{ 
	$participant["address1"] .= $participant["space_number"]." ";
	}
if($participant["address1"] != ""){ $participant["address1"] .= "<br />"; }
$participant["address2"] = $participant["address"]
$participant["member_address2"] = $participant["address"]
$participant["csv"] = $participant["city"].", ";
$participant["csv"] .= $participant["state"]." ";
$participant["csv"] .= $participant["zip"];
$participant["mail_address"] = $participant["name"];
$participant["mail_address"] .= $participant["address1"];
$participant["mail_address"] .= $participant["address2"];
$participant["mail_address"] .= $participant["csv"];
	}
    $sponsor1 = $row["sponsor1"];
    $sponsor2 = $row["sponsor2"];
    $sponsor3 = $row["sponsor3"];
    $sponsor4 = $row["sponsor4"];
    $pay1_verify = $row["pay1_verify"];
    $pay2_verify = $row["pay2_verify"];
    $pay3_verify = $row["pay3_verify"];
    $pay4_verify = $row["pay4_verify"];
    $receipt1_verify = $row["receipt1_verify"];
    $receipt2_verify = $row["receipt2_verify"];
    $receipt3_verify = $row["receipt3_verify"];
    $receipt4_verify = $row["receipt4_verify"];
    $pay1_date = $row["pay1_date"];
    $pay2_date = $row["pay2_date"];
    $pay3_date = $row["pay3_date"];
    $pay4_date = $row["pay4_date"];
    $receipt1_date = $row["receipt1_date"];
    $receipt2_date = $row["receipt2_date"];
    $receipt3_date = $row["receipt3_date"];
    $receipt4_date = $row["receipt4_date"];
    $user_name = $row["user_name"];
    $email = $row["email"];
    $password = $row["password"];
    $verified = $row["verified"];
    $level = $row["level"];
    $created = $row["created"];
    $level_date = $row["level_date"];
    }
  }
mysql_free_result($rs);

$temp = "You are logged on as ".$full_name." (".$id.")";
$message = add_message($message, $temp);

$total_team_member_count = 0;
$total_verified_member_count = 0;
$total_receipt_member_count = 0;

$sql = "select id from members where sponsor1 = '".$id."' ;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level1_member_count = mysql_num_rows($rs);
$total_team_member_count = $total_team_member_count + $level1_member_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor1 = '".$id."' and pay1_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level1_verify_count = mysql_num_rows($rs);
$total_verified_member_count = $total_verified_member_count + $level1_verify_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor1 = '".$id."' and receipt1_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$layer1_receipt_count = mysql_num_rows($rs);
$total_receipt_member_count = $total_receipt_member_count + $layer1_receipt_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor2 = '".$id."' ;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level2_member_count = mysql_num_rows($rs);
$total_team_member_count = $total_team_member_count + $level2_member_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor2 = '".$id."' and pay2_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level2_verify_count = mysql_num_rows($rs);
$total_verified_member_count = $total_verified_member_count + $level2_verify_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor2 = '".$id."' and receipt2_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$layer2_receipt_count = mysql_num_rows($rs);
$total_receipt_member_count = $total_receipt_member_count + $layer2_receipt_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor3 = '".$id."' ;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level3_member_count = mysql_num_rows($rs);
$total_team_member_count = $total_team_member_count + $level3_member_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor3 = '".$id."' and pay3_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level3_verify_count = mysql_num_rows($rs);
$total_verified_member_count = $total_verified_member_count + $level3_verify_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor3 = '".$id."' and receipt3_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$layer3_receipt_count = mysql_num_rows($rs);
$total_receipt_member_count = $total_receipt_member_count + $layer3_receipt_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor4 = '".$id."' ;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level4_member_count = mysql_num_rows($rs);
$total_team_member_count = $total_team_member_count + $level4_member_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor4 = '".$id."' and pay4_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$level4_verify_count = mysql_num_rows($rs);
$total_verified_member_count = $total_verified_member_count + $level4_verify_count;
mysql_free_result($rs);

$sql = "select id from members where sponsor4 = '".$id."' and receipt4_verify > 0;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$layer4_receipt_count = mysql_num_rows($rs);
$total_receipt_member_count = $total_receipt_member_count + $layer4_receipt_count;
mysql_free_result($rs);

$sql = "select id from members where (sponsor1 = '".$id."' or ";
$sql .= "sponsor2 = '".$id."' or ";
$sql .= "sponsor3 = '".$id."' or ";
$sql .= "sponsor4 = '".$id."') ";
$sql .= "and level >= ".$level.";";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$member_level_count = mysql_num_rows($rs);
mysql_free_result($rs);

if(($member_level_count >= 256)&&
   (
    ($pay1_verify > 0)||
    ($pay2_verify > 0)||
    ($pay3_verify > 0)||
    ($pay4_verify > 0)
   )
  )
  {
  $level = $level + 1;
  $sql = "update members set level = ".$level.", ";
  $sql .= "pay1_verify = 0, ";
  $sql .= "pay2_verify = 0, ";
  $sql .= "pay3_verify = 0, ";
  $sql .= "pay4_verify = 0, ";
  $sql .= "pay1_date = '', ";
  $sql .= "pay2_date = '', ";
  $sql .= "pay3_date = '', ";
  $sql .= "pay4_date = '', ";
  $sql .= "receipt1_verify = 0, ";
  $sql .= "receipt2_verify = 0, ";
  $sql .= "receipt3_verify = 0, ";
  $sql .= "receipt4_verify = 0, ";
  $sql .= "receipt1_date = '', ";
  $sql .= "receipt2_date = '', ";
  $sql .= "receipt3_date = '', ";
  $sql .= "receipt4_date = '' ";
  $sql .= "where id = '".$id."';";
  $rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
  mysql_free_result($rs);
  $temp = "CONGRATULATIONS for advancing to level ".$level;
  $member_level_count = 0;
  $message = add_message($message, $temp);
  $recommendation = add_recommendation($recommendation, $r_pay1);
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
  }
else
  {
  if(($member_level_count == 0)&&($level == 0))
    {
    $temp = "CONGRATULATIONS for becoming a new BUCKS member!";
    $message = add_message($message, $temp);
    if(($pay1_verify == 0)&&($pay2_verify == 0)&&($pay3_verify == 0)&&($pay4_verify == 0))
      {
      $CanInvite = "No";
      $temp = "Payment needs to be sent to sponsors";
      $message = add_message($message, $temp);
      $recommendation = add_recommendation($recommendation, $r_pay1);
      }
    else
      {
      if(($pay1_verify == 0)||($pay2_verify == 0)||($pay3_verify == 0)||($pay4_verify == 0))
        {
        $CanInvite = "No";
        }
      }
    $recommendation = add_recommendation($recommendation, $r_invite);
    $temp = "You need to invite individuals to join";
    $message = add_message($message, $temp);
    }
  else
    {
    $temp = "Verify payments when you receive them";
    $message = add_message($message, $temp);
    $recommendation = add_recommendation($recommendation, $r_receive);
    }    
  }

if($level == 0)
  {
  $status1 = "$1.00";
  $status2 = "$1.00";
  $status3 = "$1.00";
  $status4 = "$10.00";
  $level_count_msg = "Total new team members";
  }
else
  {
  $level_count_msg = "Total level ".$level." team members";
  }
if($level == 1)
  {
  $status1 = "$10.00";
  $status2 = "$10.00";
  $status3 = "$10.00";
  $status4 = "$100.00";
  } 
if($level == 2)
  {
  $status1 = "$10.00";
  $status2 = "$10.00";
  $status3 = "$100.00";
  $status4 = "$100.00";
  }   
if($level == 3)
  {
  $status1 = "$10.00";
  $status2 = "$100.00";
  $status3 = "$100.00";
  $status4 = "$100.00";
  }
if($level > 3)
  {
  $status1 = "$100.00";
  $status2 = "$100.00";
  $status3 = "$100.00";
  $status4 = "$100.00";
  }  
$verify_action = "";           
if($pay1_verify == 1)
  {
  $st1 = $status1." Sent";
  $stat1 = $status1." Sent ".$pay1_date;
  $status1 .= "<br />Sent";
  $d1 = "true";
  $c1 = "true";
  }  
else
  {
  $st1 = $status1." Owed";
  $stat1 = $st1;
  $status1 .= "<br />Owed"; 
  $d1 = "false";
  $c1 = "false";
  }    
if($receipt1_verify == 1)
  {
  $status1 .= "<br />Received";
  $stat1 .= " Received ".$receipt1_date;
  }
else
  {
  $status1 .= "<br />Not received";
  }
$verify_action .= "verify1.disabled = ".$d1."; verify1.checked = ".$c1.";";
if($pay2_verify == 1)
  {
  $st2 = $status2." Sent";
  $stat2 = $status2." Sent ".$pay2_date;
  $status2 .= "<br />Sent";
  $d2 = "true";
  $c2 = "true";
  }
else
  {
  $st2 = $status2." Owed";
  $stat2 = $st2;
  $status2 .= "<br />Owed";
  $d2 = "false";
  $c2 = "false";
  }
if($receipt2_verify == 1)
  {
  $status2 .= "<br />Received";
  $stat2 .= " Received ".$receipt2_date;
  }
else
  {
  $status2 .= "<br />Not received";
  }
$verify_action .= "verify2.disabled = ".$d2."; verify2.checked = ".$c2.";";
if($pay3_verify == 1)
  {
  $st3 = $status3." Sent";
  $stat3 = $status3." Sent ".$pay3_date;
  $st3 = $status3." Sent";$status3 .= "<br />Sent";$d3 = "true";$c3 = "true";}
else
  {
  $st3 = $status3." Owed";
  $stat3 = $st3;
  $status3 .= "<br />Owed";
  $d3 = "false";
  $c3 = "false";
  }
if($receipt3_verify == 1)
  {
  $stat3 .= " Received ".$receipt3_date;
  $status3 .= "<br />Received";
  }
else
  {
  $status3 .= "<br />Not received";
  }
$verify_action .= "verify3.disabled = ".$d3."; verify3.checked = ".$c3.";";
if($pay4_verify == 1)
  {
  $st4 = $status4." Sent";
  $stat4 = $status4." Sent ".$pay3_date;
  $status4 .= "<br />Sent";
  $d4 = "true";
  $c4 = "true";
  }
else
  {
  $st4 = $status4." Owed";
  $stat4 = $st4;
  $status4 .= "<br />Owed";
  $d4 = "false";
  $c4 = "false";
  }
if($receipt4_verify == 1)
  {
  $stat4 .= " Received ".$receipt4_date;
  $status4 .= "<br />Received";
  }
else
  {
  $status4 .= "<br />Not received";
  }
$verify_action .= "verify4.disabled = ".$d4."; verify4.checked = ".$c4.";";
$sponsor1_address = get_address($sponsor1); 
$sponsor2_address = get_address($sponsor2);
$sponsor3_address = get_address($sponsor3);
$sponsor4_address = get_address($sponsor4);

$message = $message."</ul>";
if($recommendation != ""){$recommendation = $recommendation."</ol>";}

$sql = "select distinct id from members where sponsor1 ='".$id."' or sponsor2 = ";
$sql .= "'".$id."' or sponsor3 = '".$id."' or sponsor4 = '".$id."';";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
$select_members = "";
$select_members_inst = "";
if($row_count != 0)
  {
  $select_members = "<select id='select_members' onclick='select_member(this.value)' size='8'>";
  $select_members .= "<option value=''></option>";
  $select_members_inst = "<select id='select_members_inst' onclick='select_member_inst(this.value)' size='8'>";
  $select_members_inst .= "<option value=''></option>";
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    $select_members .= "<option value='".$row["id"]."'>".$row["id"]."</option>";
    $select_members_inst .= "<option value='".$row["id"]."'>".$row["id"]."</option>";
    }
  $select_members .= "</select>";
  $select_members_inst .= "</select>";
  }

function add_message($message, $str)
{
$retVal = "";
if($message == "")
  {
  $retVal = "<ul><li>".$str."</li>";
  }
else
  {
  $retVal = $message."<li>".$str."</li>";
  }
return($retVal);
}

function add_recommendation($recommendation, $str)
{
$retVal = "";
if($recommendation == "")
  {
  $retVal = "<u>RECOMMENDATIONS</u><br /><ol>".$str;
  }
else
  {
  $retVal = $recommendation.$str;
  }
return($retVal);
}

function get_address($id)
{
$retVal = "";
$sql = "select * from members where id = '".$id."';";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
//echo($row_count);
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
*/

?>
