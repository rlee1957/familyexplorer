<?php

# possible values
/*
$postal_address_verified
$email_address_verified
$set_personal_key
$relationships_created
$contributions_level_1
$invited_others
*/
$sql = "
select 
	*
from 
	verification 
where 
	patron_idx = '".$_SESSION["id"]."';
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$postal_address_verified = false;
$email_address_verified = false;
$set_personal_key = false;
$relationships_created = false;
$contributions_level_1 = false;
$invited_others = false;
if($results["recordcount"] > 0)
	{
	$rs = $results["recordset"];
	foreach($rs as $key => $row)
		{
		$$row["item"] = true;
		// put check for date to ensure data is not stale in the future
		}
	}
	
?>