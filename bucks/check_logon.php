<?php
include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");

// retrieve request data
$user_name = $_REQUEST["user_name"];
$password = $_REQUEST["password"];

// declare local variables
$sql = "
select 
	idx 
from 
	patrons 
where 
	username = '".$user_name."' and 
	password COLLATE latin1_bin = '".$password."';
";
$dbname = "bucks";
$rs = array();
$retVal = "";
$_SESSION["id"] = "";
$_SESSION["logged_in"] = "No";
$res = sql_shell($dbname, $sql);
if($res["error"]["is_error"] == 1)
	{
	echo("ERROR: ".$res["error"]["description"]."<br />");
	}
if($res["recordcount"] != 0)
	{
	$rs = $res["recordset"];
	$retVal = $rs[0]["idx"];
	$_SESSION["id"] = $retVal;
	$_SESSION["logged_in"] = "Yes";
	}

?>
<html>
<head><title></title></head>
<body>
<textarea style="width: 100%; height: 300px;"><?php
print_r($res);
?></textarea>
<input id="results" type="text" value="<?php echo($retVal); ?>" />
<input id="user_name" type="text" value="<?php echo($user_name); ?>" />
<input id="password" type="text" value="<?php echo($password); ?>" />
<input id="idx" type="text" value="<?php echo($_SESSION["id"]); ?>" />
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
  window.parent.location.reload();
  }  
</script>