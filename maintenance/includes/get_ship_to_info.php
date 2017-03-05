<?php

$line_item_info = $results;
$sql = "
select 
	*
from 
	w_shipto 
where
	s_order_no = ?
";
$params = array($oid);
$results = sql_shell($dbname, $sql, $params);

?>