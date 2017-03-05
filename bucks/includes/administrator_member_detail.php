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

      $sql = "select * from members where id = '".$_REQUEST["id"]."';";
      $rs = mysql_query($sql) or die($sql."<br>".'Insert Query failed: ' . mysql_error());
      $row_count = mysql_num_rows($rs);
      if($row_count != 0)
        {
        $ht = "<table cellspacing=0 border=1 cellpadding=5>";
        while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
          {
          $ht .= "<tr><td><b>id</b></td><td>".$row["id"]."</td></tr>";
          $name = $row["first_name"]."&nbsp;".$row["middle_name"]."&nbsp;".$row["last_name"];
          $ht .= "<tr><td><b>name</b></td><td>".$name."</td></tr>";
          $ht .= "<tr><td><b>user name</b></td><td>".$row["user_name"]."</td></tr>";
          $ht .= "<tr><td><b>password</b></td><td>".$row["password"]."</td></tr>";
          $ht .= "<tr><td><b>user name</b></td><td>".$row["user_name"]."</td></tr>";
          $ht .= "<tr><td><b>email</b></td><td>".$row["email"]."</td></tr>";
          $temp = "false";
          if($row["verified"] == 1){$temp = "true";}
          $ht .= "<tr><td><b>email has been verified</b></td><td>".$temp."</td></tr>";
          }
        $ht .= "</table>";
        }
       echo($ht);
      ?>
</body>
</html> 
