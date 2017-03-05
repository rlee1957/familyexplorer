<?php

/* Testing Module */
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$customer_idx = 1;
$email_idx = 1;
$creator = "Russell Lee";
$dtstamp = date("Y-m-d H:i:s");
/* End Testing Module */

$sql = "
insert into 
	customer_emails
	(
	customer_idx,
	email_idx,
	creator,
	dtstamp
	)
values
	(
	?, ?, ?, ?
	)
";
$dbname = "maintenance";
$params = array($customer_idx, 
				$email_idx,
				db_prepare_string($creator),
				db_prepare_string($dtstamp)
			   );
$results = exe_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>