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
select
	customer_emails.email_idx,
	customer_emails.customer_idx,
	emails.type,
	emails.email,
	emails.verified,
	emails.preferred,
	emails.creator as email_creator,
	emails.dtstamp as email_last_changed,
	customer_emails.creator as cust_email_link_creator,
	customer_emails.dtstamp as cust_email_link_created
from
	customer_emails
left join
	emails on customer_emails.email_idx = emails.idx
where
	customer_emails.customer_idx = ?
";
$dbname = "maintenance";
$params = array($customer_idx);
$results = sql_shell($dbname, $sql, $params);

/* Testing Module */
echo("<textarea style='width: 99%; height: 500px;'>");
print_r($results);
echo("</textarea>"); 
/* End Testing Module */

?>