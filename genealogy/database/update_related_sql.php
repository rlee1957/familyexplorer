<?php

$sql = "
update 
	related
set
	relationid = ?,
	datelastmodified = ?
where
	individualid = ? and
	relativeid = ?
";

?>