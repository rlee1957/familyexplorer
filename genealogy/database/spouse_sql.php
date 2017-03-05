<?php

$sql = "
select
	*
from
	people
where
	id in (select spouseid from people where id = ?);
";

?>