<?php

$sql = "
select 
	*
from 
	w_order 
where
	o_order_no = ?
";
$params = array($oid);
$results = sql_shell($dbname, $sql, $params);

?>