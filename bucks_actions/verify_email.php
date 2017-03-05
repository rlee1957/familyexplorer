<?php

include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");

$_SESSION["logged_in"] = "Yes";
$_SESSION["id"] = $_REQUEST["idx"];

$sql = "
update
	patrons
set 
	email = ?
where
	idx = ?
";
$params = array($_REQUEST["email_address"],
					 $_REQUEST["idx"]);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);

$verify_type = "email_address_verified";
include("includes/verify.php");

header("Location: http://contributions4u.com");

?>