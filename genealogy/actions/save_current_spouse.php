<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$process = $_REQUEST["process"];
$currentid = $_REQUEST["currentid"];
$individualid = $_REQUEST["individualid"];
$sql = "update people set spouseid = ? where id = ?";
$params = array();
$params[count($params)] = $individualid;
$params[count($params)] = $currentid;
include($path."../_common/database/exe_shell.php");
$params = array();
$params[count($params)] = $currentid;
$params[count($params)] = $individualid;
include($path."../_common/database/exe_shell.php");
echo("added~".$process);

?>