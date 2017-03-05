<?php

include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");

$sql = "
update
	patrons
set 
	first_name = ?,
	middle_name = ?,
	last_name = ?,
	address1 = ?,
	address2 = ?,
	city = ?,
	state = ?,
	zip = ?
where
	idx = ?
";
$params = array($_POST["db_first_name"],
					 $_POST["db_middle_name"],
					 $_POST["db_last_name"],
					 $_POST["db_address1"],
					 $_POST["db_address2"],
					 $_POST["db_city"],
					 $_POST["db_state"],
					 $_POST["db_zip"],
					 $_SESSION["id"]);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);
$verify_type = "postal_address_verified";
include("includes/verify.php");

?>

<html>
<head><title></title></head>
<body>
</body>
</html>
<script language="javascript" type="text/javascript">
var w;
var msg = "Postal address saved and verified!";
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
alert(msg);
w.location.reload();
</script>