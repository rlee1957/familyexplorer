<?php
$sql = "
select 
	*
from	
	relationships
where
	payer_id = '".$_SESSION["id"]."' and
	relationship_type = 'normal'
order by
	position
";
?>