<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
// retrieve request data
$user_name = $_REQUEST["logon_user_name"];
$password = $_REQUEST["logon_password"];
// declare local variables
$retVal = "Fail";
$sql = "
select 
	idx 
from 
	patrons 
where 
	username = '".$user_name."' and 
	password COLLATE latin1_bin = '".$password."';
";
include("../_common/environment/database.php");
$res = sql_shell($dbname, $sql);
if($res["recordcount"] > 0)
  {
  $retVal = "Success";
  $_SESSION["logged_in"] = true;
  $rs = $res["recordset"];
  $_SESSION["id"] = $rs[0]["idx"];
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
var results = document.getElementById("results").value;
var user_name = document.getElementById("user_name");
var msg = "Login Failed!";
var w;
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
if(results != "Success")
  {
  alert(msg);
  w.document.getElementById("login_user_name").value = "";
  w.document.getElementById("login_password").value = "";
  w.document.getElementById("login_user_name").focus();
  }
else
  {
  w.location.reload();
  }
</script>
