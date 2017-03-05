<?php

/* Testing Module */

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$prefix = "Mr";
$fname = "Russell";
$fname = "testing";
$mname = "B.";
$lname = "Lee";
$lname = "test";
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
$cdb = "vikings";

/* End Testing Module */

$where_clause1 = "";
$where_clause2 = "";
$where = "
where
";
$del = "";
if($phone != "")
	{
	$where_clause1 .= $del."s_phone like '%".$phone."%'";
	$where_clause2 .= $del."o_bphone like '%".$phone."%'";
	$del = " and
	";
	}
if($email != "")
	{
	$where_clause1 .= $del."lower(s_email) like '%".strtolower($email)."%'";
	$where_clause2 .= $del."lower(o_bemail) like '%".strtolower($email)."%'";
	$del = " and
	";
	}
if($fname != "")
	{
	$where_clause1 .= $del."lower(s_name) like '%".strtolower($fname)."%'";
	$where_clause2 .= $del."lower(o_bfname) like '%".strtolower($fname)."%'";
	$del = " and
	";
	}
if($lname != "")
	{
	$where_clause1 .= $del."lower(s_name) like '%".strtolower($lname)."%'";
	$where_clause2 .= $del."lower(o_blname) like '%".strtolower($lname)."%'";
	$del = " and
	";
	}
if($address1 != "")
	{
	$where_clause1 .= $del."lower(s_addr1) like '%".strtolower($address1)."%'";
	$where_clause2 .= $del."lower(o_baddr1) like '%".strtolower($address1)."%'";
	$del = " and
	";
	}
if($city != "")
	{
	$where_clause1 .= $del."lower(s_city) like '%".strtolower($city)."%'";
	$where_clause2 .= $del."lower(o_bcity) like '%".strtolower($city)."%'";
	$del = " and
	";
	}
if($state != "")
	{
	$where_clause1 .= $del."lower(s_state) like '%".strtolower($state)."%'";
	$where_clause2 .= $del."lower(o_bstate) like '%".strtolower($state)."%'";
	$del = " and
	";
	}
if($zip != "")
	{
	$where_clause1 .= $del."lower(s_zip) like '%".strtolower($zip)."%'";
	$where_clause2 .= $del."lower(o_bzip) like '%".strtolower($zip)."%'";
	$del = " and
	";
	}
if(strlen($where_clause1) > 0)
	{
	$where_clause1 = $where.$where_clause1;	
	$where_clause2 = $where.$where_clause2;	
	}

$sql = "
select 
	'bill' as type,
	o_order_no as idx,
	o_bfname as fname,
	o_blname as lname,
	o_bcompany as company,
	o_baddr1 as address1,
	o_baddr2 as address2,
	o_bcity as city,
	o_bstate as state,
	o_bzip as zip,
	o_country as country,
	o_bphone as phone,
	o_bemail as email
from 
	w_order
".$where_clause2."

UNION

select	
	'ship' as type,
	s_order_no as idx,
	s_name as fname,
	s_name as lname,
	s_company as company,
	s_addr1 as address1,
	s_addr2 as address2,
	s_city as city,
	s_state as state,
	s_zip as zip,
	s_country as country,
	s_phone as phone,
	s_email as email
from
	w_shipto
".$where_clause1;

$dbname = $cdb;
$params = array();
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>