<?php
// show errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
// setup database access
include 'connection.php';
include 'database_open_wah.php';
// retrieve request data
$set_value = $_REQUEST["set_value"];
$id = $_REQUEST["id"];
// declare local variables
$retVal = "Success";
$sql = "update members set ".$set_value." where id = '".$id."';";
echo $sql;
// run query 
$rs = mysql_query($sql) or die($sql."<br>".'Update Query failed: ' . mysql_error());
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