<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$address_idx = 1;
$repeat = 0;
$creator = "Russell Lee";
$dtstamp = date("Y-m-d H:i:s");
/* End Testing Module */

$sql = "
select
	*
from
	customers
where
	address_idx = ?
";
$dbname = "maintenance";
$params = array($address_idx);
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>