<?php

include("includes/check_if_relationships_exist.php");

include("includes/determine_relationships.php");

include("includes/maintain_relationships.php");
	
function add_relationship($payer_id, $payee_id, $position, $type)
{
	
$sql = "
insert into relationships (payer_id, payee_id, position, relationship_type)
values(?, ?, ?, ?)
";
include("../_common/environment/database.php");
$params = array($payer_id, $payee_id, $position, $type);
$results = exe_shell($dbname, $sql, $params);
	
}

function maintain_relationship($bexist, $b, $pos)
{
	
	
	
}

function sql_parent($seed)
{
	
$sql = "
select 
	p1.idx as bf,
	p1.active as bfa
from 
	patrons p
join
	patrons p1 on p.team_code = p1.personal_key
where
	p.idx = '".$seed."'
";
return $sql;	
	
}

function sql_relationships($payee)
{
	
$sql = "
select 
	*
from	
	relationships
where
	payer_id = '".$payee."' and
	relationship_type = 'normal'
order by
	position
";
return $sql;
	
}

function actual_relationship($seed)
{
	
$sql = sql_parent($seed);
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$seed = $results["recordset"][0]["bf"];
$active = $results["recordset"][0]["bfa"];	
$ar = array($seed, $active);
return $ar;
	
}

function relationship_exists($payer, $payee, $position, $type)
{
	
$ret = false;
$sql = "
select 
	idx
from
	relationships
where
	payer_id = '".$payer."' and
	payee_id = '".$payee."' and
	position = ".$position." and
	relationship_type = ".$type."
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
if($results["recordcount"] > 0)
	{
	$ret = true;	
	}
return $ret;

}

function virtual_relationship($position, $patron)
{

$parent = get_virtual_parent($position, $patron)
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$seed = $results["recordset"][0]["pl"];
$active = 1;	
$ar = array($seed, $active);
return $ar;
}

function get_existing_relationships($contributer, $tier)
{
	
$sql = "
select 
	* 
from 
	relationships 
where 
	payee_id = '".$contributer."' and
	relationship_type = 'normal'
order by
	position
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$ret = false;
$exclude = "";
$del = "";
if($results["recordcount"] == 0)
	{
		
	}
else
	{
	$rs = $results("recordset");	
	$ret = array();
	foreach($rs as $key => $row)
		{
		$ret[$row["position"]] = $row;
		$proxy = false;
		if(!is_active($row["payee_id"]))
			{
			$proxy = true;	
			}
		else
			{
			if(!is_worthy($row["payee_id"], $tier))	
				{
				$proxy = true;	
				}
			}
		if($proxy)
			{
			$ret[$row["position"]]["payee_id"]	
				
			}
		}

	}

return $ret;
	
}


?>
