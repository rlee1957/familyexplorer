<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);
$path = "../";
$child = $_POST["child"];
$changerid = $_POST["proxyid"];
$lastchangedate = date("Y-m-d H:i:s");
$id = $_POST["individual_id"];
include($path."sql/update_people_child_sql.php");
include($path."params/update_people_child_params.php");
$results = exe_shell($sql, $params, $path);

?>