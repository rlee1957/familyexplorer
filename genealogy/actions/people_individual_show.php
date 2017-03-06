<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);
$path = "../";
include($path."../_common/database/sql_functions.php");
$individual = $_POST["individual"];
$changerid = $_POST["proxyid"];
$lastchangedate = date("Y-m-d H:i:s");
$id = $_REQUEST["individual_id"];
include($path."sql/update_people_individual_sql.php");
include($path."params/update_people_individual_params.php");
$results = exe_shell($sql, $params, $path);
print_r($results);

?>