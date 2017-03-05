<?php

/* Testing Module 
include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$type = "Personal Cell";
$phone = "(208) 995-9553";
$raw = "2089959553";
$verified = 1;
$preferred = 1;
$creator = "Russell Lee";
 End Testing Module */

$sql = "
select 
	*
from
	phones
where
	raw = ?
";
$dbname = "maintenance";
$params = array(db_prepare_string($raw)
			   );
$results = sql_shell($dbname, $sql, $params);

/* Testing Module 
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
 End Testing Module */

?>