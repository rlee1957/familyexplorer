<?php
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
echo("<h1>Test SQL</h1><br />");
$dbname = "maintenance";
$sql = "
insert into campaign_references 
	(campaign_idx, reference_name, reference_file) 
values 
	(?,?,?)
";
$campaign_idx = $_POST["campaign_idx"];
$reference_name = $_POST["reference_name"];
$reference_file = $_POST["reference_file"];
$params = array($campaign_idx, $reference_name, $reference_file);
$results = exe_shell($dbname, $sql, $params);
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>");
?>