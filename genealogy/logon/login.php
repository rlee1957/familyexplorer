<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$sql = "
select * from members where username = ?
";
$params = array();
$params[count($params)] = $username;
$results = sql_shell($sql, $params, $path);
$msg = "failure";
if($results["error"]["is_error"])
	{
	$msg .= "|Code Error";
	$msg .= "|".$results["error"]["description"];
	$msg .= "|do_nothing;";
	}
else
	{
	if($results["rowcount"] == 0)
		{
		$msg .= "|Family Explorer<br />Login - Username";
		$msg .= "|Username not valid. Please try again.";
		$msg .= "|document.getElementById('txtUserName').focus();";		
		}
	else
		{
		if	($password != $results["recordset"][0]["password"])
			{
			$msg .= "|Family Explorer<br />Login - Password";
			$msg .= "|Password is incorrect. Please try again.";
			$msg .= "|document.getElementById('txtPassword').value = '';";
			$msg .= " document.getElementById('txtPassword').focus();";		
			}
		else
			{
			$msg = "success";
			$msg .= "|".$results["recordset"][0]["individualid"];
			}	
		}
	}
echo($msg);

?>