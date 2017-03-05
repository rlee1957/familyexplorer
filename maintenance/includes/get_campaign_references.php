<?php

$dbname = "maintenance";
$sql = "
select 
	* 
from 
	campaign_references 
where 
	? = ? 
";
$params = array($field, $value);
$results = sql_shell($dbname, $sql, $params);

?>