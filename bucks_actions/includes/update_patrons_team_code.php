<?php

$sql = "
update
	patrons
set
	team_code = ?
where
	team_code = ?
";
$params = array($personal_key, $existing_key);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);

?>