<?php
$sql = "
select 
	*,
	case substring(team_rank, -1, 1) 
			when '1' then '1'
			when '2' then '2'
			when '3' then '3'
			when '4' then '4'
			when '5' then '2'
			when '6' then '3'
			when '7' then '4'
			when '8' then '3'
			when '9' then '4'
			when '0' then '4'
		end as position
from 
	patrons 
where 
	idx = '".$_SESSION["id"]."';
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
?>