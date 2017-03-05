<?php
session_start(); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");

// retrieve request data
$user_name = $_REQUEST["user_name"];
$password = $_REQUEST["password"];

// declare local variables
$retVal = "Fail";
$sql = "select idx from participants where username = '".$user_name."' ";
$sql .= "and password COLLATE latin1_bin = '".$password."';";
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
$rs = $res["recordset"];

if($res["recordcount"] != 0)
  {
  $retVal = $res[0]["id"];
  $_SESSION["id"] = $retVal;
  $_SESSION["logged_in"] = "Yes";
  }

echo($retVal);

?>
<html>
<head><title></title></head>
<body>
<input id="results" type="hidden" value="<?php echo($retVal); ?>" />
<input id="user_name" type="hidden" value="<?php echo($user_name); ?>" />
</body>
</html>
<script language="javascript" type="text/javascript">
var newContent = document.getElementById("results").value;
var password = document.getElementById("logon_password");
var msg = "Failed\n\nPlease try again!";
if(newContent.indexOf("Fail") > -1)
  {
  window.parent.alert(msg);
  window.parent.user_name.value = "";
  window.parent.user_name.focus();
  password.value = "";
  }
else
  {
  var url = "dashboard.php?uid=" + newContent;
  //alert(url);
  window.parent.window.open(url,"_self","");
  }  
</script>