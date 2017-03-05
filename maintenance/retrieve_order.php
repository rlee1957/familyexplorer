<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$campaign_idx = 410;
$customer_idx = 1;
$web_idx = "400201511036593";
$creator = "Russell Lee";
$dtstamp = date("Y-m-d H:i:s");
/* End Testing Module */

$sql = "
select
	*
from
	orders
where
	campaign_idx = ? and
	web_idx = ?
";
$dbname = "maintenance";
$params = array($campaign_idx, 
				db_prepare_string($web_idx)
			   );
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>