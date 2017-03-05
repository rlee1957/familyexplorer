<?php

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
echo("<h1>Test SQL</h1><br />");
$dbname = "maintenance";
$sql = "select * from campaigns where enabled > ? order by label";
$params = array(0);
$results = sql_shell($dbname, $sql, $params);
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>");

?>