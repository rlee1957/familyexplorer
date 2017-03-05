<?php
include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
?>
<html>
<head><title></title></head>
<body>
<?php
echo("bucks/add_member.php<br />");
echo("<textarea style='width: 98%; height: 200px;'>");
print_r($_POST);
echo("</textarea>");
echo("TESTING<br />");
$sql = "
select
	count(idx) as last_rank
from
	patrons
where
	team_code = '".$_REQUEST["db_team_code"]."'
";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
$team_rank = ((int) $results["recordset"][0]["last_rank"]) + 1;
$date_created = date("Y-m-d H:i:s");
$params = array($_REQUEST["db_idx"],
				  $_REQUEST["db_team_code"],
				  $_REQUEST["db_username"],
				  $_REQUEST["db_password"],
				  $_REQUEST["db_email"],
				  $_REQUEST["db_first_name"],
				  $_REQUEST["db_middle_name"],
				  $_REQUEST["db_last_name"],
				  $_REQUEST["db_address1"],
				  $_REQUEST["db_address2"],
				  $_REQUEST["db_city"],
				  $_REQUEST["db_state"],
				  $_REQUEST["db_zip"],
				  $team_rank);
$sql = "
insert into 
	patrons 
	(
	idx,
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
	date_last_changed,
	active  
	)
values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Patron', ?, '0', '".$date_created."', '".$date_created."', 1)
"; 
include("../_common/environment/database.php");
$results = exe_shell($dbname, $sql, $params);
echo("bucks/add_member.php<br />");
echo("<textarea style='width: 98%; height: 200px;'>");
print_r($results);
echo("</textarea>");
$_SESSION["id"] = $_REQUEST["db_idx"];
$_SESSION["logged_in"] = "Yes";
?>
<table>
	<tr>
		<td>
			<label for="records_affected">Records Affected</label>
		</td>
		<td>
			<input type=text 
				   id="records_affected" 
				   name="records_affected" 
				   value="<?php echo($results["affected_rows"]); ?>" />
		</td>
	</tr>
</table>
<script language="javascript" type="text/javascript">
alert("WELCOME!\nYou are the newest BUCKS member.");
url = "../bucks/index.php";
parent.location.reload();
</script>
</body>
</html>
