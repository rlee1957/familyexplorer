<?php

$dbname = "maintenance";
$sql = "
select 
	* 
from 
	campaigns 
where 
	? = ? 
order by 
	label
";
$params = array($field, $value);
$results = sql_shell($dbname, $sql, $params);

?>