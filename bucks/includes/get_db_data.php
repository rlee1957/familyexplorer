<?php
include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
# get patron data
	{
	$retVal = "Fail";
	$sql = "select * from patrons where idx = '".$$_SESSION["id"]."'";
	# retrieve data
		{
		include("../_common/environment/database.php");
		$connection = connect($dbname);
		if($connection["is_error"])
			{
			echo($connection["description"]);
			exit();
			}
		else
			{
			$conn = $connection["object"];
			$res = sql_to_array($conn, $sql);
			if($res["error"]["is_error"] == 1)
				{
				echo("ERROR: ".$res["error"]["description"]."
				");
				}
			}
		$rs = $res["recordset"];
		if($res["recordcount"] != 0)
			{
			$retVal = $rs[0]["idx"];
			$_SESSION["id"] = $retVal;
			$_SESSION["logged_in"] = "Yes";
			}
		}

	$patron = $rs[0];
	/* *** fields ***
	idx, personal_key, team_code, username, password, email, first_name
	middle_name, last_name, address1, address2, city, state, zip, role
	team_rank, level, date_created, date_last_changed 
	*/
	}

# check for relationship data
	{
	$retVal = "Fail";
	$sql = "select r.payer_id from relationships r where r.payer_id = '". $_SESSION["id"]."' and r.relationship_type = 'normal'";
	# retrieve data
		{
		include("../_common/environment/database.php");
		$connection = connect($dbname);
		if($connection["is_error"])
			{
			echo($connection["description"]);
			exit();
			}
		else
			{
			$conn = $connection["object"];
			$res = sql_to_array($conn, $sql);
			if($res["error"]["is_error"] == 1)
				{
				echo("ERROR: ".$res["error"]["description"]."
				");
				}
			}
		if($res["recordcount"] == 0)
			{
			include("includes/record_relationships.php");
			}
		}


	}
?>