<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$cd = date("Y-m-d H:i:s");
$id = $_REQUEST["id"];
$accuracy = $_REQUEST["accuracy"];
$period = $_REQUEST["period"];
$calendar = $_REQUEST["calendar"];
$year = $_REQUEST["year"];
$month = $_REQUEST["month"];
$day = $_REQUEST["day"];
$event = $_REQUEST["event"];
$details = $_REQUEST["details"];
$place = $_REQUEST["place"];
$proxyid = $_REQUEST["proxyid"];
$changedby = $_REQUEST["proxyid"];
$datecreated = $cd;
$lastchangeddate = $cd;
include($path."sql/insert_event_sql.php");
include($path."params/insert_event_params.php");
$results = exe_shell($sql, $params, $path);

echo("<textarea style='width: 90%; height: 300px;'>");
print_r($results);
echo("</textarea>");
	
?>