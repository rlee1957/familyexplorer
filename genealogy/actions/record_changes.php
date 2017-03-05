<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["id"];
$field_name = $_REQUEST["field_name"];
$field_value = $_REQUEST["field_value"];
$sql = "
update people set ".$field_name." = ?
where id = ?
";
$params = array();
$params[count($params)] = $field_value;
$params[count($params)] = $id;
$results = exe_shell($sql, $params, $path);

?>