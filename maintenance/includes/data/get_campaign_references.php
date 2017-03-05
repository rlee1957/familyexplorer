<?php

$dbname = "maintenance";
$sql = "
select 
	* 
from 
	campaign_references 
where 
	campaign_idx = ?
";
$params = array($campaign_idx);
$results = sql_shell($dbname, $sql, $params);

?>