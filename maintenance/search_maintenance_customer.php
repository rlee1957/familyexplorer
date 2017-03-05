<?php

/* Testing Module */

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$prefix = "Mr";
$fname = "Russell";
$fname = "";
$mname = "B.";
$lname = "Lee";
$lname = "";
$company = "Fundraisers, LTD.";
$address1 = "1402 S. Oaklawn Dr.";
$address1 = "";
$address2 = "Corner of Sunnybrook and Oaklawn";
$city = "Boise";
$city = "";
$state = "ID";
$state = "";
$zip = "83709";
$zip = "";
$country = "US";
$phone = "2089959553";
$phone = "";
$email = "rlee.sn@gmail.com";
#$email = "";
$creator = "Russell Lee";

/* End Testing Module */

$where_clause = "";
$where = "
where
";
$del = "";
if($phone != "")
	{
	$where_clause .= $del."p.raw like '%".$phone."%'";
	$del = " and
	";
	}
if($email != "")
	{
	$where_clause .= $del."lower(e.email) like '%".strtolower($email)."%'";
	$del = " and
	";
	}
if($fname != "")
	{
	$where_clause .= $del."lower(a.fname) like '%".strtolower($fname)."%'";
	$del = " and
	";
	}
if($lname != "")
	{
	$where_clause .= $del."lower(a.lname) like '%".strtolower($lname)."%'";
	$del = " and
	";
	}
if($address1 != "")
	{
	$where_clause .= $del."lower(a.address1) like '%".strtolower($address1)."%'";
	$del = " and
	";
	}
if($city != "")
	{
	$where_clause .= $del."lower(a.city) like '%".strtolower($city)."%'";
	$del = " and
	";
	}
if($state != "")
	{
	$where_clause .= $del."lower(a.state) like '%".strtolower($state)."%'";
	$del = " and
	";
	}
if($zip != "")
	{
	$where_clause .= $del."lower(a.zip) like '%".strtolower($zip)."%'";
	$del = " and
	";
	}
if(strlen($where_clause) > 0)
	{
	$where_clause = $where.$where_clause;	
	}

$sql = "
select 
	c.idx customer_idx,
	a.*,
	p.phone,
	e.email
from 
	addresses a
left JOIN	
	customers c on a.idx = c.address_idx
left JOIN
	customer_phones cp on c.idx = cp.customer_idx
left join 
	phones p on p.idx = cp.phone_idx
left JOIN
	customer_emails ce on c.idx = ce.customer_idx
left join 
	emails e on e.idx = ce.email_idx
".$where_clause;

$dbname = "maintenance";
$params = array();
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>