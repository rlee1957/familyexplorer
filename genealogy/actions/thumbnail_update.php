<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);
$path = "../";
$filename = $_POST["filename"];
$title = $_POST["title"];
$ordinalposition = $_POST["ordinalposition"];
$thumbnail_id = $_POST["thumbnail_id"];
include($path."sql/update_people_parent_sql.php");
include($path."params/update_people_parent_params.php");
$results = sql_shell($sql, $params, $path);

?>