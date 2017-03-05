<?php
include("../../_common/includes/session_start.php"); 
include("../../_common/includes/show_errors.php");
include("../../_common/includes/sql_functions.php");
$sql = "insert into patrons";
$fields = "";
$values = "";
$delim = "";
foreach($_REQUEST as $fn => $val)
	{
	$fields .= $delim.$fn;
	$values .= $delim."'".$val."'";
	$delim = ", ";
	}
$sql .= "(".$fields.") values (".$values.");";
$dbname = "bucks";
$connection = connect($dbname);
if($connection["is_error"])
	{
	echo($connection["description"]);
	exit();
	}
else
	{
	$conn = $connection["object"];
	$res = sql_execute($conn, $sql);
	if($res["error"]["is_error"] == 1)
		{
		echo("ERROR: ".$res["error"]["description"]."
");
		}
	}
print_r($res);
?>