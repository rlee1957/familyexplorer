<?php
echo("tools/test_sql_shell.php<br />");
include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
echo("TESTING<br />");

# Test
	{
	$_SESSION["id"] = "1306624822403";
	echo("ID: ".$_SESSION["id"]."<br />");
	#exit();
	}
# execute
	{
	# Insert Module
		{/*
		$sql = "select count(p.idx) + 1 as team_rank from patrons p where p.team_code = 'get$0'";
		include("../_common/environment/database.php");
		$results = sql_shell($dbname, $sql);
		$team_rank = $results["recordset"][0]["team_rank"];
		$sql = "
insert into patrons
	(
	idx, 
	personal_key, 
	team_code, 
	username, 
	password, 
	email,
	first_name,
	middle_name,
	last_name,
	address1,
	address2,
	city,
	state,
	zip,
	role,
	team_rank,
	level,
	date_created,
	date_last_changed
	)
values
	(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
";
		$params = array('-3',
							'get some money',
							'get$0',
							'username',
							'password',
							'rlee.sn@gmail.com',
							'first_name',
							'middle_name',
							'last_name',
							'address1',
							'address2',
							'city',
							'ID',
							'83709-1841',
							'Patron',
							$team_rank,
							0,
							'2015-07-30',
							'2015-07-30');
		include("../_common/environment/database.php");
		$results = exe_shell($dbname, $sql, $params);*/
		}
	# Update Module
		{/*
		include("../_common/environment/database.php");
		$sql = "
update patrons
set 
	username = ?, 
	password = ?
where
	personal_key = ?
";
		$params = array('user',
							'pwd',
							'get some money');
		include("../_common/environment/database.php");
		$results = exe_shell($dbname, $sql, $params);*/
		}
	# Delete Module
		{
		include("../_common/environment/database.php");
		$sql = "
delete from 
	patrons
where 
	idx = ?
";
		$params = array('-1');
		include("../_common/environment/database.php");
		$results = exe_shell($dbname, $sql, $params);
		}
	}
echo("<textarea style='width: 95%; height: 400px;'>");	
print_r($results);
echo("</textarea>");

?>
