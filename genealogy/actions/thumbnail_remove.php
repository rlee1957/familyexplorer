<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);
$path = "../";
$thumbnail_id = $_POST["thumbnail_id"];
include($path."sql/delete_thumbnail_sql.php");
include($path."params/delete_thumbnail_params.php");
$results = exe_shell($sql, $params, $path);

?>