<?php

$sql = "
select
	date_verified
from 
	verification
where
	patron_idx = ? and
	item = ?
";
$params = array($_SESSION["id"], $verify_type);
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql, $params);
$date_verified = date("Y-m-d H:i:s");
if($results["recordcount"] > 0)
	{
	$sql = "
update
	verification
set	
	date_verified = ?
where
	patron_idx = ? and
	item = ?
";	
	$params = array($date_verified, $_SESSION["id"], $verify_type);
	}
else
	{
	$sql = "
insert into
	verification
	(
	patron_idx,
	item,
	date_verified
	)
values
	(
	?,
	?,
	?
	)
";	 
	$params = array($_SESSION["id"], $verify_type, $date_verified);
	}
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);

?>