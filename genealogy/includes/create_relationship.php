<?php

include($path."sql/insert_related_sql.php");
$params = array();
$params[count($params)] = $sourceid;
$params[count($params)] = $relationid;
$params[count($params)] = $targetid;
$params[count($params)] = date("Y-n-d H:i:s");
$params[count($params)] = $proxyid;
include($path."../_common/database/exe_shell.php");

?>