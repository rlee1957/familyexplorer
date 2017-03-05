<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$order_item_idx = 1;
$position = 1;
$inscription = "HHH";
$has_greek = 0;
$creator = "Russell Lee";
$dtstamp = date("Y-m-d H:i:s");
/* End Testing Module */

$sql = "
insert into 
	inscriptions
	(
	order_item_idx,
	position,
	inscription,
	has_greek,
	creator,
	dtstamp
	)
values
	(
	?, ?, ?, ?, ?, ?
	)
";
$dbname = "maintenance";
$params = array($order_item_idx, 
				$position,
				db_prepare_string($inscription), 
				$has_greek,
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