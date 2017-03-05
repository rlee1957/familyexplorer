<?php
// show errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
// setup database access
include 'connection.php';
include 'database_open_wah.php';
// retrieve request data
$sponsor_id = $_REQUEST["sponsor_id"];
$id = $_REQUEST["id"];
$date_value = $_REQUEST["date_value"];
// declare local variables
$retVal = "Success";
$result = "";
$sql = "select * from members where id = '".$id."';";
echo($sql."<br />");      
$rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
$row_count = mysql_num_rows($rs);
echo($row_count."<br />"); 
if($row_count != 0)
  {
  while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
    {
    if($sponsor_id == $row['sponsor1'])
      {
      $result = "set receipt1_verify = 1, receipt1_date = '".$date_value."'";
      }
    else
      {
      if($sponsor_id == $row['sponsor2'])
        {
        $result = "set receipt2_verify = 1, receipt2_date = '".$date_value."'";
        }
      else
        {
        if($sponsor_id == $row['sponsor3'])
          {
          $result = "set receipt3_verify = 1, receipt3_date = '".$date_value."'";
          }
        else
          {
          if($sponsor_id == $row['sponsor4'])
            {
            $result = "set receipt4_verify = 1, receipt4_date = '".$date_value."'";
            }
          }
        }
      }
    }
  }
echo($result."<br />");
if($result != '')
  {
  $sql = "update members ".$result." where id = '".$id."';";
  echo($sql."<br />");
  $rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
  }
echo $retVal;              
?>

<html>
<head><title></title></head>
<body>
</body>
</html>
<script language="javascript" type="text/javascript">
window.parent.document.getElementById("server_results").src = "";
alert("All changes successfully saved.");
window.parent.location.reload();  
</script>
