<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$retVal = "Already exists!";
$user_name = $_REQUEST["user_name"];
$sql = "select username from patrons where username = '".$user_name."';";
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
if($res["recordcount"] == 0)
  {
  $retVal = "Does not exist.";
  }
echo $retVal;
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
var user_name = document.getElementById("user_name");
var msg = "User name\n\n" + user_name.value + "\n\nIs acceptable!";
if(newContent.indexOf("Already exists!") > -1)
  {
  msg = "User name\n\n" + user_name.value + "\n\nAlready exists!\n\nPlease try again.";
  window.parent.alert(msg);
  window.parent.user_name.value = "";
  window.parent.user_name.focus();
  window.parent.document.getElementById("sp_user_name").innerText = "";
  }
else
  {
  msg = "<font color='blue' style='font-weight: bold;'>";
  msg += "User Name Accepted ------ " + user_name.value + "</font>";
  window.parent.document.getElementById("sp_user_name").innerHTML = msg;
  }
</script>