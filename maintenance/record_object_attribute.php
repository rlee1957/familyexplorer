<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$object_idx = 1;
$data_type = "integer";
$object_type = "order_item";
$data_size = "";
$name = "Number of Inscription Lines";
$value = "4";
$creator = "Russell Lee";
$dtstamp = date("Y-m-d H:i:s");
/* End Testing Module */

$sql = "
insert into 
	object_attributes
	(
	object_idx,
	object_type,
	data_type,
	data_size,
	name,
	value,
	creator,
	dtstamp
	)
values
	(
	?, ?, ?, ?, ?, ?, ?, ?
	)
";
$dbname = "maintenance";
$params = array($object_idx, 
				db_prepare_string($data_type),
				db_prepare_string($object_type),
				db_prepare_string($data_size),
				db_prepare_string($name),
				db_prepare_string($value),
				db_prepare_string($creator),
				db_prepare_string($dtstamp)
			   );
$results = exe_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>