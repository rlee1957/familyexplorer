<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$event_id = $_REQUEST["event_id"];
$details = $_REQUEST["details"];
$proxyid = $_REQUEST["proxyid"];
$accuracy = $_REQUEST["accuracy"];
$period = $_REQUEST["period"];
$calendar = $_REQUEST["calendar"];
$year = $_REQUEST["year"];
$month = $_REQUEST["month"];
$day = $_REQUEST["day"];
$event = $_REQUEST["event"];
$place = $_REQUEST["place"];
include($path."sql/update_event_sql.php");
include($path."params/update_event_params.php");
$results = exe_shell($sql, $params, $path);

?>