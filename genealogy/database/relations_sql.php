<?php

$sql = "
select 
	relationid,
	classid,
	gender, 
	text
from
	relations
where
	classid = ?
order by
	gender,
	text
";

?>