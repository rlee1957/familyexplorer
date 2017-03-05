<?php

/* Testing Module */

include("../_common/includes/show_errors.php");
include("includes/sql_functions2.php");
$prefix = "Mr";
$fname = "Russell";
$mname = "B.";
$lname = "Lee";
$company = "Fundraisers, LTD.";
$address1 = "1402 S. Oaklawn Dr.";
$address2 = "Corner of Sunnybrook and Oaklawn";
$city = "Boise";
$state = "ID";
$zip = "83709";
$country = "US";
$phone = "2089959553";
$email = "rlee.sn@gmail.com";
$creator = "Russell Lee";

/* End Testing Module */

$sql = "
select
	*
from
	addresses
where
	lower(fname) = ? and 
	lower(lname) = ? and 
	lower(address1) = ? and 
	lower(city) = ? and 
	lower(state) = ? and 
	lower(zip) = ? and 
	lower(country) = ?
";
$dbname = "maintenance";
$params = array(strtolower(db_prepare_string($fname)), 
				strtolower(db_prepare_string($lname)), 
				strtolower(db_prepare_string($address1)),
				strtolower(db_prepare_string($city)),
				strtolower(db_prepare_string($state)),
				strtolower(db_prepare_string($zip)),
				strtolower(db_prepare_string($country))
			   );
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>