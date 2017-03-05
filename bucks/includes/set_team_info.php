<?php
	$sql = "
	select count(idx) as mc from patrons where team_code = '".$patron["personal_key"]."';
	";
	include("../_common/environment/database.php");
	$results = sql_shell($dbname, $sql);
/*echo("<textarea style='width: 98%; height: 400px;'>");
print_r($results);
echo("</textarea>");
echo("ending");
exit();*/
	if($results["recordcount"] == 0)
		{
		$team_member_count = 0;	
		}
	else
		{
		$team_member_count = $results["recordset"][0]["mc"];	
		}
	
	$sql = "
	select 
		team_rank,
		case substring(team_rank, -1, 1) 
			when '1' then '1'
			when '2' then '2'
			when '3' then '3'
			when '4' then '4'
			when '5' then '2'
			when '6' then '3'
			when '7' then '4'
			when '8' then '3'
			when '9' then '4'
			when '0' then '4'
		end as position
	from 
		patrons 
	where 
		team_code = '".$patron["personal_key"]."';
	";
	include("../_common/environment/database.php");
	$results = sql_shell($dbname, $sql);

	if($results["recordcount"] == 0)
		{
		$position1 = 0;
		$position2 = 0;
		$position3 = 0;
		$position4 = 0;	
		}
	else
		{
		$team_member_positions = $results["recordset"];
		$position1 = 0;
		$position2 = 0;
		$position3 = 0;
		$position4 = 0;
		$x = 0;
		for($x=0;$x<$results["recordcount"];$x++)
			{
			switch($team_member_positions[$x]["position"])	
				{
				case 1:
					{
					$position1++;
					break;			
					}
				case 2:
					{
					$position2++;
					break;			
					}
				case 3:
					{
					$position3++;
					break;			
					}
				case 4:
					{
					$position4++;
					break;			
					}
				}
			}	
		}
	$sql = "
select	
	sum(amount) as total_received
from
	history
where
	relationship_idx in (select idx from relationships where payee_id = '".$patron["idx"]."')	
";
	include("../_common/environment/database.php");
	$results = sql_shell($dbname, $sql);
	if($results["recordcount"] == 0)
		{
		$total_received = 0.00;	
		}
	else
		{
		$total_received = $results["recordset"][0]["total_received"];	
		}
	
?>