<?php
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
echo("<h1>Test SQL</h1><br />");
$dbname = "maintenance";
$sql = "insert into campaigns (idx, label, db, image_file, enabled) values (?,?,?,?,?)";
$idx = $_POST["idx"];
$label = $_POST["label"];
$db = $_POST["db"];
$image_file = $_POST["image_file"];
$enabled = 0;
if(isset($_POST["enabled"])){ $enabled = 1; }
$params = array($idx, $label, $db, $image_file, $enabled);
$results = exe_shell($dbname, $sql, $params);
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>");
?>