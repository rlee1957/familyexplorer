<?php

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/template.css">
<body>
<form id=frmNew 
	  name=frmNew 
	  action="insert_new_campaign.php" 
	  method="post" 
	  target="_self">
<table>
	<tr>
		<td>New Campaign Index</td>
		<td><input type=text id=idx name=idx placeholder="Campaign Index" /></td>
	</tr>
	<tr>
		<td>New Campaign Name</td>
		<td><input type=text id=label name=label placeholder="Campaign Name" /></td>
	</tr>
	<tr>
		<td>Database Name</td>
		<td><input type=text id=db name=db placeholder="Database Name" /></td>
	</tr>
	<tr>
		<td>Image File</td>
		<td><input type=text id=image_file name=image_file placeholder="Image File" /></td>
	</tr>
	<tr>
		<td><label for=enabled>Enabled</label></td>
		<td><input type=checkbox id=enabled name=enabled /></td>
	</tr>
	<tr>
		<td colspan=2><input type=submit value="Submit" /></td>
	</tr>
</table>
</form>
</body>
</html>