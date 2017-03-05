<?php

function is_active($idx)
{
	
$sql = "
select
	active
from
	patrons
where
	idx = '".$idx."'
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = false;
if($results["recordset"][0]["active"] == 1)
	{
	$retval = true;
	}
return $retval;

}

function is_worthy($idx, $tier)
{

$sql = "
select
	level
from
	patrons
where
	idx = '".$idx."' and
	level >= '".$tier."'
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = false;
if($results["recordcount"] > 0)
	{
	$retval = true;
	}
return $retval;

}

function is_related($contributer_idx, $benefactor_idx)
{

$sql = "
select
	idx
from
	relationships
where
	payer_id = '".$contributer_idx."' and
	payee_id = '".$benefactor_idx."'
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = 0;
if($results["recordcount"] > 0)
	{
	$retval = $results["recordset"][0]["idx"];
	}
return $retval;

}

function proxy_with_least_hits($not_in)
{
	
$where = "";
$clause = "";
$del = "";
if(count($not_in) > 0)
	{
	foreach($not_in as $key => $proxy)	
		{
		$clause .= $del."'".$proxy."'";
		$del = ", ";		
		}
	$where = "
where 
	p.idx not in(".$clause.")
";
	}

$sql = "
select 
	p.idx,
	count(h.sent_date) as rcvd
from
	patrons p
left join
	relationships r on p.idx = r.payee_id
left join 
	history h on r.idx = h.relationship_idx
where
	p.role = 'proxy' ".$where."
group by 
	p.idx
order by 
	rcvd, p.idx
limit 1
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = $results["recordset"][0]["idx"];
return $retval;

}

function create_relationship($contributer_idx, $benefactor_idx, $position, $type)
{

$sql = "
insert into
	relationships
	(
	payer_id,
	payee_id,
	position,
	relationship_type
	)
values
	(
	?,
	?,
	?,
	?
	)
";
$params = array($contributer_idx,
					 $benefactor_idx,
					 $position,
					 $type);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);
return is_related($contributer_idx, $benefactor_idx);

}

function update_relationship($relationship_idx, $position, $type)
{
	
$sql = "
update
	relationships
set
	position = ?,
	type = ?
where	
	idx = ?
";
$params = array($position,
					 $type,
					 $relationship_idx);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);
return;
	
}

function add_contribution($relationship_idx, $description, $sent_date, $amount )
{

$sql = "
insert into
	history
	(
	relationship_idx,
	description,
	sent_date,
	amount
	)
values
	(
	?,
	?,
	?,
	?
	)
";
$params = array($relationship_idx, $description, $sent_date, $amount);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);

}

function update_contribution($relationship_idx, $description, $sent_date, $amount )
{

$sql = "
update
	history
set
	sent_date = ?,
	amount = ?
	)
where
	idx = ? and
	description = ?
";
$params = array($sent_date, $amount, $relationship_idx,  $description);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);

}

function verify_receipt($relationship_idx, $description, $received_date)
{
	
$sql = "
update
	history
set
	received_date = ?
where
	relationship_idx = ? and
	description = ?
";
$params = array($received_date, $relationship_idx, $description);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);
	
}

function get_new_relation($team_code, $position)
{

$position--;
$sql = "
select
	r0.payer_id as idx,
	count(r1.payer_id) as contributers
from
	patrons c
join
	relationships r0 on c.idx = r0.payee_id 
left join
	relationships r1 on r0.payer_id = r1.payee_id
join
	patrons m on r0.payer_id = m.idx
where
	c.personal_key = '".$team_code."' and
	m.team_code = '".$team_code."' and
	r0.position = ".$position."
group by 
	c.idx, r0.position, r0.payer_id
order by
	contributers asc
limit 1
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = $results["recordset"][0]["idx"];
return $retval;

}

function get_team_captain_idx($team_code)
{
	
$sql = "
select 
	idx 
from 
	patrons
where
	personal_key = '".$team_code."'
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = $results["recordset"][0]["idx"];
return $retval;	
	
}

function get234($idx)
{

$sql = "
select 
	payee_id as idx,
	position	
from 
	relationships
where
	payer_id = '".$idx."'
order by
	position asc
limit 3
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$ar = array();
$rs = $results["recordset"];
foreach($rs as $key => $row)
	{
	$ar[$row["position"] + 1] = $row["idx"];
	}
return $ar;

}

function do_relationships_exist($idx)
{
	
$sql = "
select 
	payee_id as idx,
	position	
from 
	relationships
where
	payer_id = '".$idx."'
order by
	position asc
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$retval = false;
$benefactors = array();
if($results["recordcount"] >= 4)
	{ 
	foreach($results["recordset"] as $key => $row)
		{
		$benefactors[$row["position"]] = $row["idx"];	
		}
	$retval = $benefactors;
	}
return $retval;
	
}

function get_address($idx)
{
	
$sql = "
select 
	first_name,
	middle_name,
	last_name,
	address1,
	address2,
	city,
	state,
	zip
from 
	patrons
where
	idx = '".$idx."'
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$ar = array();
$rs = $results["recordset"][0];
$del = " ";
$cr = "<br />";
$postal_address = trim($rs["first_name"]).$del.trim($rs["middle_name"]).$del.trim($rs["last_name"]).$cr;
if(strlen(trim($rs["address2"])) > 0){ $postal_address .= trim($rs["address2"]).$cr; }
$postal_address .= trim($rs["address1"]).$cr;
$postal_address .= trim($rs["city"]).", ".trim($rs["state"])." ".trim($rs["zip"]);
$htm = "
<div style='border-width: 1px; border-color: #000000; padding: 20px'>".$postal_address."</div>
";
return $htm;
	
}

function get_contributions($tier)
{

$contributions = array();	
switch($tier)
	{
	case 1:
		{
		$contributions[1] =	1.00;
		$contributions[2] =	1.00;
		$contributions[3] =	1.00;
		$contributions[4] =	10.00;
		break;	
		}
	case 2:
		{
		$contributions[1] =	1.00;
		$contributions[2] =	1.00;
		$contributions[3] =	10.00;
		$contributions[4] =	10.00;
		break;	
		}
	case 3:
		{
		$contributions[1] =	1.00;
		$contributions[2] =	10.00;
		$contributions[3] =	10.00;
		$contributions[4] =	10.00;
		break;	
		}
	case 4:
		{
		$contributions[1] =	10.00;
		$contributions[2] =	10.00;
		$contributions[3] =	10.00;
		$contributions[4] =	10.00;
		break;	
		}
	case 5:
		{
		$contributions[1] =	10.00;
		$contributions[2] =	10.00;
		$contributions[3] =	10.00;
		$contributions[4] =	100.00;
		break;	
		}
	case 6:
		{
		$contributions[1] =	10.00;
		$contributions[2] =	10.00;
		$contributions[3] =	100.00;
		$contributions[4] =	100.00;
		break;	
		}
	case 7:
		{
		$contributions[1] =	10.00;
		$contributions[2] =	100.00;
		$contributions[3] =	100.00;
		$contributions[4] =	100.00;
		break;	
		}
	default:
		{
		$contributions[1] =	100.00;
		$contributions[2] =	100.00;
		$contributions[3] =	100.00;
		$contributions[4] =	100.00;
		break;	
		}
	}
return $contributions;
	
}

function get_addresses($benefactors, $tier)
{

$contributions = get_contributions($tier);	
$htm = "
<table cellspacing=0 cellpadding=25>
";
for($x=1;$x<5;$x++)
	{
	$htm += "
	<tr>
		<td>
			Tier&nbsp;".$tier."&nbsp;contribution&nbsp;$".$contributions[$x]."
		</td>
		<td>
			".get_address($benefactors[$x])."
		</td>
	</tr>
";
	}
$htm = "
</table>
";	
return $htm;

}

function update_tier($idx, $tier)
{
	
$sql = "
update
	patrons
set
	level = ?
where	
	idx = ?
";
$params = array($tier, $idx);
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);
return $results;
	
}

?>