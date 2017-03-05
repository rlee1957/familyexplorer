<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$order_idx = 1;
$parent_idx = NULL;
$rank = 1;
$item_type = "paver";
$item_number = "9";
$description = "4X8 Paver";
$is_gift_certificate = 0;
$price = 60.00;
$taxable_price = 0.00;
$address_idx = 1;
$creator = "Russell Lee";
$dtstamp = date("Y-m-d H:i:s");
/* End Testing Module */
{
$sql = "
select
	*
from
	order_items
where
	order_idx = ? or
	parent_idx = ?
order by 
	parent_idx, rank
";
}
$dbname = "maintenance";
$params = array($order_idx, $order_idx);
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>