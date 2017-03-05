<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$individualid = $_REQUEST["individualid"];
$relationid = $_REQUEST["relationid"];
$relatedid = $_REQUEST["relatedid"];
$datelastupdated = date("Y-m-d H:i:s");
include($path."database/update_related_sql.php");
$params = array();
$params[count($params)] = $relationid;
$params[count($params)] = $datelastupdated;
$params[count($params)] = $individualid;
$params[count($params)] = $relatedid;
$results = exe_shell($sql, $params, $path);

?>