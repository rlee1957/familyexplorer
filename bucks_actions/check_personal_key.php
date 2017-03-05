<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$retVal = "Already exists!";
$personal_key = $_REQUEST["personal_key"];
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
<input id="results" type="text" value="<?php echo($retVal); ?>" />
<input id="user_name" type="text" value="<?php echo($user_name); ?>" />
</body>
</html>
<script language="javascript" type="text/javascript">
var newContent = document.getElementById("results").value;
var user_name = document.getElementById("user_name");
var msg = "User name\n\n" + user_name.value + "\n\nIs acceptable!";
var w;
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
if(newContent.indexOf("Already exists!") > -1)
  {
  msg = "User name\n\n" + user_name.value + "\n\nAlready exists!\n\nPlease try again.";
  alert(msg);
  w.user_name.value = "";
  w.user_name.focus();
  w.document.getElementById("sp_user_name").innerText = "";
  w.document.getElementById("username_check").src = "../_common/images/check_off.png";  
  w.document.getElementById("username_check").title = ""; 
  }
else
  {
  msg = "<font color='blue' style='font-weight: bold;'>";
  msg += "User Name Accepted ------ " + user_name.value + "</font>";
  title = "User name is valid. Your new user name is [" + user_name.value + "]!";
  w.document.getElementById("sp_user_name").innerHTML = msg;
  w.document.getElementById("username_check").src = "../_common/images/check_on.png";  
  w.document.getElementById("username_check").title = title; 
  }
</script>