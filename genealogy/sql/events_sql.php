<?php

$sql = "
select 
	*,
	case month 
		when 'Jan' then 1
		when 'Feb' then 2
		when 'Mar' then 3
		when 'Apr' then 4
		when 'May' then 5
		when 'Jun' then 6
		when 'Jul' then 7
		when 'Aug' then 8
		when 'Sep' then 9
		when 'Oct' then 10
		when 'Nov' then 11
		when 'Dec' then 12
		else ''
	end as mo,
	concat(year, '-', month, '-', day) as date1
from 
	events
where
	id = ? and
	view = 1
order by
	year, mo, day, event
";

?>