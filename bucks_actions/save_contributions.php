<?php

include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
include("../bucks/includes/patron_functions.php");

foreach($_SESSION["benefactors"] as $key => $idx)
	{
	$tier = $_SESSION["patron"]["level"] + 1;
	$relationship_idx = $_SESSION["relations"][$key];
	$benefactor_type = "patron";
	if(is_a_proxy($idx)){ $benefactor_type = "proxy"; }
	$description = "pos-".$key."-adv-to-tier-".$tier."-".$benefactor_type;
	echo($description."<br />");
	$sent_date = date("Y-m-d");
	$amount = $_SESSION["contributions"][$key];
	if(!contribution_already_exists($relationship_idx, $tier, $benefactor_type, $key))
		{
		echo("Contribution does not exist");
		add_contribution($relationship_idx, $description, $sent_date, $amount );	
		}
	else
		{
		echo("Contribution already exists");
		update_contribution($relationship_idx, $description, $sent_date, $amount );	
		}
	}

update_tier($_SESSION["patron"]["idx"], $tier);

function is_a_proxy($idx)
{
	
$retval = false;
foreach($_SESSION["proxies"] as $key => $proxy)
	{
	if($idx == $proxy){ $retval = true; }
	}
return $retval;
	
}

function contribution_already_exists($idx, $tier, $benefactor_type, $position)
{
	
$retval = false;
$sql = "
select 
	relationship_idx
from
	history
where
	relationship_idx = '".$idx."' and
	description = 'pos-".$position."-adv-to-tier-".$tier."-".$benefactor_type."'
";
echo($sql."<br />");
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
if($results["recordcount"] > 0){ $retval = true; }
return $retval;
	
}

?>

<html>
<head><title></title></head>
<script type="text/javascript" src="js/common.js"></script>
<body>
</body>
</html>
<script language="javascript" type="text/javascript">
var msg = "Contributions verified!";
Message_reload(msg)
</script>
