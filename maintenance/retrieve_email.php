<?php

/* Testing Module
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$type = "Work Email";
$email = "russl@fundraisersltd.com";
$verified = 1;
$preferred = 1;
$creator = "Russell Lee";
 End Testing Module */

$sql = "
select 
	*
from
	emails
where
	lower(email) = ?
";
$dbname = "maintenance";
$params = array(strtolower(db_prepare_string($email))
			   );
$results = sql_shell($dbname, $sql, $params);

/* Testing Module
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
End Testing Module */

?>