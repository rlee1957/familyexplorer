<?php
echo("tools/test_sql_shell.php<br />");
include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
echo("TESTING<br />");

# Test
	{
	$_SESSION["id"] = "1306624822403";
	echo("ID: ".$_SESSION["id"]."<br />");
	#exit();
	}
# execute
	{
	$sql = "
select * from patrons where personal_key = 'get\$0';
";
	echo("sql: ".$sql."<br />");
	include("../_common/environment/database.php");
	$results = sql_shell($dbname, $sql);
	echo("<textarea style='width: 95%; height: 400px;'>");	
	print_r($results);
	echo("</textarea>");
	}

?>
