<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
       
<title>BUCKS Administration</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'connection.php';
include 'database_open_wah.php';
?>
<table>
  <tr>
    <td>
      <?php
      $sql = "select first_name, middle_name, last_name, id from members order by id;";
      $rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
      $row_count = mysql_num_rows($rs);
      if($row_count != 0)
        {
        $ht = "<select size='25' style='height: 90%;' onchange='displayPage(this.value)'>";
        while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
          {
          $name = $row["first_name"]."&nbsp;".$row["middle_name"]."&nbsp;".$row["last_name"];
          $ht .= "<option value='".$row["id"]."'>".$name."</option>";
          }
        $ht .= "</select>";
        }
       echo($ht);
      ?>
    </td>
    <td>
      <iframe style='height: 480px; width: 640px;' id='show'></iframe>
    </td>
  </tr>
</table>
</body>
</html> 
<script language="javascript" type="text/javascript">
alert("start");        
var ifr = document.getElementById("show");

function displayPage(id)
{
alert(id);
ifr.src = "administrator_member_detail.php?id=" + id;
}   
</script>
