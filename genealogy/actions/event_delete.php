<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$event_id = $_REQUEST["event_id"];
$changedby = $_REQUEST["proxyid"];
$lastchangeddate = date("Y-m-d H:i:s");
include($path."sql/delete_event_sql.php");
include($path."params/delete_event_params.php");
$results = exe_shell($sql, $params, $path);

?>