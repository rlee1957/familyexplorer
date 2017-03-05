<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$process = $_REQUEST["process"];
$currentid = $_REQUEST["currentid"];
$individualid = $_REQUEST["individualid"];
$proxyid = $_REQUEST["proxyid"];
include($path."sql/delete_related_sql.php");
include($path."params/delete_related_params.php");
include($path."../_common/database/exe_shell.php");
echo("added~".$process);

?>