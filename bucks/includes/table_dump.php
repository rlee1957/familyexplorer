<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'connection.php';
include 'database_open_wah.php';

$retVal = "<table border=1>";

$retVal .= "   <tr>";
$retVal .= "      <td><b>id</b></td>";
$retVal .= "      <td><b>sponsor1</b></td>";
$retVal .= "      <td><b>sponsor2</b></td>";
$retVal .= "      <td><b>sponsor3</b></td>";
$retVal .= "      <td><b>sponsor4</b></td>";
$retVal .= "      <td><b>pay1_verify</b></td>";
$retVal .= "      <td><b>pay2_verify</b></td>";
$retVal .= "      <td><b>pay3_verify</b></td>";
$retVal .= "      <td><b>pay4_verify</b></td>";
$retVal .= "      <td><b>receipt1_verify</b></td>";
$retVal .= "      <td><b>receipt2_verify</b></td>";
$retVal .= "      <td><b>receipt3_verify</b></td>";
$retVal .= "      <td><b>receipt4_verify</b></td>";
$retVal .= "      <td><b>pay1_date</b></td>";
$retVal .= "      <td><b>pay2_date</b></td>";
$retVal .= "      <td><b>pay3_date</b></td>";
$retVal .= "      <td><b>pay4_date</b></td>";
$retVal .= "      <td><b>receipt1_date</b></td>";
$retVal .= "      <td><b>receipt2_date</b></td>";
$retVal .= "      <td><b>receipt3_date</b></td>";
$retVal .= "      <td><b>receipt4_date</b></td>";
$retVal .= "      <td><b>user_name</b></td>";
$retVal .= "      <td><b>email</b></td>";
$retVal .= "      <td><b>first_name</b></td>";
$retVal .= "      <td><b>middle_name</b></td>";
$retVal .= "      <td><b>last_name</b></td>";
$retVal .= "      <td><b>address1_number</b></td>";
$retVal .= "      <td><b>address1_street_direction</b></td>";
$retVal .= "      <td><b>address1_street_name</b></td>";
$retVal .= "      <td><b>address1_street_type</b></td>";
$retVal .= "      <td><b>address1_space_type</b></td>";
$retVal .= "      <td><b>address1_space_number</b></td>";
$retVal .= "      <td><b>address2</b></td>";
$retVal .= "      <td><b>city</b></td>";
$retVal .= "      <td><b>state</b></td>";
$retVal .= "      <td><b>zip</b></td>";
$retVal .= "      <td><b>password</b></td>";
$retVal .= "      <td><b>verified</b></td>";
$retVal .= "      <td><b>level</b></td>";
$retVal .= "      <td><b>created</b></td>";
$retVal .= "      <td><b>level_date</b></td>";
$retVal .= "   </tr>";

//$retVal .= "</table>";

$sql = "select * from members order by id;";
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());

$row_count = mysql_num_rows($rs);

if($row_count != 0)
  {
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {      
    $retVal .= "   <tr>";
    $retVal .= "      <td>".$row["id"]."</td>";
    $retVal .= "      <td>".$row["sponsor1"]."</td>";
    $retVal .= "      <td>".$row["sponsor2"]."</td>";
    $retVal .= "      <td>".$row["sponsor3"]."</td>";
    $retVal .= "      <td>".$row["sponsor4"]."</td>";
    $retVal .= "      <td>".$row["pay1_verify"]."</td>";
    $retVal .= "      <td>".$row["pay2_verify"]."</td>";
    $retVal .= "      <td>".$row["pay3_verify"]."</td>";
    $retVal .= "      <td>".$row["pay4_verify"]."</td>";
    $retVal .= "      <td>".$row["receipt1_verify"]."</td>";
    $retVal .= "      <td>".$row["receipt2_verify"]."</td>";
    $retVal .= "      <td>".$row["receipt3_verify"]."</td>";
    $retVal .= "      <td>".$row["receipt4_verify"]."</td>";
    $retVal .= "      <td>".$row["pay1_date"]."</td>";
    $retVal .= "      <td>".$row["pay2_date"]."</td>";
    $retVal .= "      <td>".$row["pay3_date"]."</td>";
    $retVal .= "      <td>".$row["pay4_date"]."</td>";
    $retVal .= "      <td>".$row["receipt1_date"]."</td>";
    $retVal .= "      <td>".$row["receipt2_date"]."</td>";
    $retVal .= "      <td>".$row["receipt3_date"]."</td>";
    $retVal .= "      <td>".$row["receipt4_date"]."</td>";
    $retVal .= "      <td>".$row["user_name"]."</td>";
    $retVal .= "      <td>".$row["email"]."</td>";
    $retVal .= "      <td>".$row["first_name"]."</td>";
    $retVal .= "      <td>".$row["middle_name"]."</td>";
    $retVal .= "      <td>".$row["last_name"]."</td>";
    $retVal .= "      <td>".$row["address1_number"]."</td>";
    $retVal .= "      <td>".$row["address1_street_direction"]."</td>";
    $retVal .= "      <td>".$row["address1_street_name"]."</td>";
    $retVal .= "      <td>".$row["address1_street_type"]."</td>";
    $retVal .= "      <td>".$row["address1_space_type"]."</td>";
    $retVal .= "      <td>".$row["address1_space_number"]."</td>";
    $retVal .= "      <td>".$row["address2"]."</td>";
    $retVal .= "      <td>".$row["city"]."</td>";
    $retVal .= "      <td>".$row["state"]."</td>";
    $retVal .= "      <td>".$row["zip"]."</td>";
    $retVal .= "      <td>".$row["password"]."</td>";
    $retVal .= "      <td>".$row["verified"]."</td>";
    $retVal .= "      <td>".$row["level"]."</td>";
    $retVal .= "      <td>".$row["created"]."</td>";
    $retVal .= "      <td>".$row["level_date"]."</td>";
    $retVal .= "   </tr>";     
    }
  }   
$retVal .= "</table>";  
mysql_free_result($rs);   
          
?>
<html>
<head><title>All BUCKS Members</title></head>
<body>
<?php echo($retVal);  ?>
</body>
</html>
