<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'connection.php';
include 'database_open_wah.php';
$retVal = "Does not exist!";
$sponsor = $_REQUEST["sponsor"];
$sql = "select * from members where id = '".$sponsor."';";
//echo($sql."<br />");
$rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
//echo($row_count . " rows returned<br />");
if($row_count != 0)
   {
   while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
      {
      $first_name = $row["first_name"];
      //$retVal = $first_name;
      if(strlen($first_name) > 0){$first_name .= " ";}
      $middle_name = $row["middle_name"];
      if(strlen($middle_name) > 0){$middle_name .= " ";}
      $last_name = $row["last_name"];
      if(strlen($last_name) > 0){$last_name .= " ";}
      $name = $first_name.$middle_name.$last_name."<br />"; 
      $address1_number = $row["address1_number"];
      if(strlen($address1_number) > 0){$address1_number .= " ";}
      $address1_street_direction = $row["address1_street_direction"];
      if(strlen($address1_street_direction) > 0){$address1_street_direction .= " ";}
      $address1_street_name = $row["address1_street_name"];
      if(strlen($address1_street_name) > 0){$address1_street_name .= " ";}
      $address1_street_type = $row["address1_street_type"];
      if(strlen($address1_street_type) > 0){$address1_street_type .= " ";}
      $address1_space_type = $row["address1_space_type"];
      if(strlen($address1_space_type) > 0){$address1_space_type .= " ";}
      $address1_space_number = $row["address1_space_number"];
      if(strlen($address1_space_number) > 0){$address1_space_number .= " ";}
      $address1 = $address1_number.$address1_street_direction.$address1_street_name;
      $address1 .= $address1_street_type.$address1_space_type.$address1_space_number;
      if(strlen($address1) > 0){$address1 .= "<br />";}
      $address2 = $row["address2"];
      if(strlen($address2) > 0){$address2 .= "<br />";}
      $city = $row["city"].", ";
      $state = $row["state"]." ";
      $zip = $row["zip"];
      $city_state_zip = $city.$state.$zip;
      $retVal = $name.$address1.$address2.$city_state_zip;
      }
   }
echo($retVal);
?>
<html>
<head><title></title></head>
<body>
<input id="results" type="hidden" value="<?php echo($retVal); ?>" />
<input id="sponsor" type="hidden" value="<?php echo($sponsor); ?>" />
</body>
</html>
<script language="javascript" type="text/javascript">
var newContent = document.getElementById("results").value; 
var sponsor = document.getElementById("sponsor").value;
var msg = "Sponsor ID\n\n" + sponsor + "\n\n";
msg += "Is not a valid Sponsor ID!\n\n";
msg += "Please re-enter and try again.";
if(newContent.indexOf("Does not exist!") > -1)
  {
  window.parent.alert(msg);
  window.parent.sponsor1.value = "";
  window.parent.sponsor1.focus();
  window.parent.changeMade("Yes");
  window.parent.document.getElementById("sp_sponsor").innerHTML = "";
  }
else
  {
  msg = "<font color='blue' style='font-weight: bold;'>";
  msg += "Sponsor ID Found -------- " + sponsor + "</font>";
  window.parent.changeMade("No");
  window.parent.document.getElementById("sp_sponsor").innerHTML = msg;
  window.parent.document.getElementById("sponsor_address").innerHTML = newContent;
  window.parent.document.getElementById("bCheck").disabled = true;
  window.parent.document.getElementById("bCheck").style.display = "none";
  window.parent.document.getElementById("bSave").disabled = true;
  window.parent.document.getElementById("bSave").style.display = "none";
  window.parent.save();
  }
</script>