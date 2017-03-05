<?php
//echo("Starting<br />");

error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'connection.php';
include 'database_open_wah.php';

$id = $_REQUEST["id"];
$threshold = $_REQUEST["threshold"]*1;

//echo($id."<br />");
//echo($threshold."<br />");

$sql = "select * from members where sponsor1 = '".$id."' order by first_name, middle_name, last_name;";

//echo($sql."<br />");

$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);

//echo($row_count."<br />");


if($row_count != 0)
  {
  $ht = "<select id='members' style='width: 160px' size='10' onchange='members_click(this.value);'>";
  $ht .= "<option valu''></option>";
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    $name = "";
    $recommendation = "No coaching necessary";
    $style = "";
    $sponsors_paid = "true";
    if(($row["pay1_verify"] == 0)||($row["pay2_verify"] == 0)||($row["pay3_verify"] == 0)||($row["pay4_verify"] == 0))
      {$sponsors_paid = "false";}
    $email = $row["email"];
    $level = $row["level"];
    $level_date = $row["level_date"];
    if($row["first_name"] != ""){$name .= $row["first_name"]." ";}
    if($row["middle_name"] != ""){$name .= $row["middle_name"]." ";}
    if($row["last_name"] != ""){$name .= $row["last_name"];}
    $level1count = getLevel1count($row["id"]);
    if($sponsors_paid == "false")
      {
      $recommendation = "Coach ".$name." on paying all sponsors";
      $style = " style='color: red'";
      }
    else
      {
      if($level1count == 0)
        {
        $recommendation = "Coach ".$name." on inviting other to participate";
        $style = " style='color: red'";
        }
      else
        {
        if($level1count < $threshold)
          {
          $recommendation = "Coach ".$name." on inviting more individuals to participate";
          $style = " style='color: red'";
          }
        else
          {
          if($level == 0)
            {
            $recommendation = "Coach ".$name." on coaching level 1 members";
            $style = " style='color: red'";
            }
          }
        }
      }
    $value = $name.'|'.$email.'|'.$sponsors_paid.'|'.$level1count.'|'.$level.'|'.$level_date.'|'.$recommendation;
    $ht .= "<option value='".$value."'".$style.">".$name."</option>";
    }
  $ht .= "</select>";
  }

function getLevel1Count($id)
{
$retVal = "";
$sql = "select id from members where sponsor1 = '".$id."';";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
mysql_free_result($rs);
return($row_count);
}


?>
<html>
<head>
<title>Coaching Recommendations for <?php echo($name); ?></title>
</head>
<body>
<table>
  <tr>
    <td>
       <?php echo($ht); ?>
    </td>
    <td>
      <b>Coaching Recommendation</b>
      <ul>
        <li><b>Name:</b> <span id='sp_name'></span></li>
        <li><b>eMail:</b> <span id='sp_email'></span></li>
        <li><b>Sponsors Paid:</b> <span id='sp_sponsors_paid'></span></li>
        <li><b>Layer 1 Team Member Count:</b> <span id='sp_layer1count'></span></li>
        <li><b>Level:</b> <span id='sp_level'></span></li>
        <li><b>Date Reached Level <span id="drl"></span>:</b> <span id='sp_level_date'></span></li>
        <li><b>Recommendation:</b> <span id='sp_recommendation'<?php echo($style); ?>></span></li>
      </ul>
    </td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript" language="javascript">
//alert("start");

function members_click(v)
{
//alert(v);
var ar1 = v.split("|");
var ar2 = ["sp_name", "sp_email", "sp_sponsors_paid", "sp_layer1count", "sp_level", "sp_level_date", "sp_recommendation"];
var l = ar1.length;
//alert(l);
var x = 0;
for(;x<l;x++)
  {
  document.getElementById(ar2[x]).innerHTML = ar1[x];
  }
document.getElementById("drl").innerHTML = ar1[4];
}
</script>