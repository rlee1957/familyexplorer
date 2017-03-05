<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["id"];
$accuracy = $_REQUEST["accuracy"];
$period = $_REQUEST["period"];
$calendar = $_REQUEST["calendar"];
$year = $_REQUEST["year"];
$month = $_REQUEST["month"];
$day = $_REQUEST["day"];
$event = $_REQUEST["event"];
$place = $_REQUEST["place"];
$changerid = $_REQUEST["proxyid"];
$lastchangedate = date("Y-m-d H:i:s");;
include($path."sql/show_event_sql.php");
include($path."params/show_event_params.php");
$results = exe_shell($sql, $params, $path);

?>