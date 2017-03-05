<h3>record_address.php</h3>
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
$datetime = date("Y-m-d H:i:s");

/* End Testing Module */

$sql = "
insert into 
	addresses
	(
	prefix,
	fname,
	mname,
	lname,
	company,
	address1,
	address2,
	city,
	state,
	zip,
	country,
	creator,
	dtstamp
	)
values
	(
	?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
	)
";
$dbname = "maintenance";
$params = array(db_prepare_string($prefix), 
				db_prepare_string($fname), 
				db_prepare_string($mname), 
				db_prepare_string($lname), 
				db_prepare_string($company),
				db_prepare_string($address1),
				db_prepare_string($address2),
				db_prepare_string($city),
				db_prepare_string($state),
				db_prepare_string($zip),
				db_prepare_string($country),
				db_prepare_string($creator),
				$datetime
			   );
$results = exe_shell(0, $dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>