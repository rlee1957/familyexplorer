<?php

$patron_idx = $patron["idx"];
$relationships_exist = do_relationships_exist($patron_idx);
//echo("Do relationships exist? ".$relationships_exist."<br />");

if(!$relationships_exist)
	{
	//echo("Relationships do not exist!<br />");
	$team_code = $patron["team_code"];
	$team_captain_idx = get_team_captain_idx($patron["team_code"]);
	//echo("Team captain idx: ".$team_captain_idx."<br />");
	$benefactors = array();
	$ar = array();
	if($patron["position"] == 1){ $ar[0] = $team_captain_idx; }
	else{ $ar[0] = get_new_relation($team_code, $patron["position"]); }
	/*echo("<h4>Get new relationship</h4.<textarea style='width: 98%; height: 200px;'>");
	print_r($ar);
	echo("</textarea>");*/
	# 1
	$benefactor[1] = $ar;
	#2
	$b234 = get234($ar[0]);
	$ar = array();
	$ar[0] = $b234[2];
	/*echo("<h4>Get 2 OF 234</h4.<textarea style='width: 98%; height: 200px;'>");
	print_r($ar);
	echo("</textarea>");*/
	$benefactor[2] = $ar;
	#3
	$ar = array();
	$ar[0] = $b234[3];
	$benefactor[3] = $ar;
	#4
	$ar = array();
	$ar[0] = $b234[4];
	$benefactor[4] = $ar;
	/*echo("<textarea style='width: 98%; height: 200px;'>");
	print_r($benefactor);
	echo("</textarea>");*/

	foreach($benefactor as $key => $row)
		{
		create_relationship($patron_idx, $row[0], $key, "normal");	
		}
	}
else
	{
	//echo("Relationships exist!<br />");
	}

$verify_type = "relationships_created";
include("../bucks_actions/includes/verify.php");

?>