<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$type = "Personal Email";
$email = "rlee.sn@gmail.com";
$verified = 1;
$preferred = 0;
$creator = "Russell Lee";
$datetime = date("Y-m-d H:i:s");
/* End Testing Module */

$sql = "
insert into
	emails
	(
	type,
	email,
	verified,
	preferred, 
	creator,
	dtstamp
	)
values
	(?, ?, ?, ?, ?, ?)
";
$dbname = "maintenance";
$params = array(db_prepare_string($type), 
				db_prepare_string($email), 
				db_prepare_number($verified),
				db_prepare_number($preferred),
				db_prepare_string($creator),
				$datetime
			   );
$results = exe_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>