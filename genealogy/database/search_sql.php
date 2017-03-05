<?php

$sql = "
select 
	* 
from 
	people
where 
	name like '".$search."' or 
	label like '".$search."'
";

?>