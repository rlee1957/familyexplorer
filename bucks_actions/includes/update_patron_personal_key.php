<?php

$sql = "
update
	patrons
set
	personal_key = ?
where
	idx = ?
";
$params = array($personal_key, $_SESSION["id"]);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);

?>