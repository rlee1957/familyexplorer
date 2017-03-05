<?php

$sql = "
select 
	*
from 
	w_lineitem 
where
	li_order_no = ?
";
$params = array($oid);
$results = sql_shell($dbname, $sql, $params);

?>