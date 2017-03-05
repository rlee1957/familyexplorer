<?php

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
$field = "";
$value = "";
include("includes/data/get_campaign_info.php");
$campaigns = $results["recordset"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/template.css">
<body>
<h1>Add A Campaign Reference</h1>
<form id=frmNew 
	  name=frmNew 
	  action="insert_campaign_reference.php" 
	  method="post" 
	  target="_self">
<table>
	<tr>
		<td>Campaign</td>
		<td><?php
if($results["rowcount"] > 0)
	{
	echo("
			<select id='campaign_idx' 
					name='campaign_idx'
					class='header_control' 
					onchange='campaign_change();'>
				<option value='' selected disabled>- Select a Campaign -</option>
");
	foreach($results["recordset"] as $key => $row)
		{
		echo("
				<option value='".$row["idx"]."'>".$row["label"]."</option>
");
		}
		echo("
			</select>
");
	}	
		?></td>
	</tr>
	<tr>
		<td>Reference Name</td>
		<td><input type=text id=reference_name name=reference_name placeholder="Reference Name" /></td>
	</tr>
	<tr>
		<td>Reference File</td>
		<td><input type=text id=reference_file name=reference_file placeholder="Reference File" /></td>
	</tr>
	<tr>
		<td colspan=2><input type=submit value="Submit" /></td>
	</tr>
</table>
</form>
</body>
</html>