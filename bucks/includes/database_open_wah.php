<?
$dbname = "wah";
$err .= "Database: ".$dbname."<br>";
mysql_select_db($dbname) or die($err.'Could not select database - '.mysql_error());
?>
