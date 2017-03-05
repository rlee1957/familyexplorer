<?php
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
?>
<html>
<head>
<title>Test Database</title>
</head>
<body>
<textarea style="width: 100%; height: 300px;">
<?php
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
	}

$sql = "select * from patrons;";
$res = sql_to_array($conn, $sql);
if($res["error"]["is_error"] == 1)
	{
	echo("ERROR: ".$res["error"]["description"]."
	");
	//exit();
	}
$rs = $res["recordset"];
print_r($res);
?>
</textarea>
<table cellpadding=5 border=1 cellspacing=0>
<?php
$start = true;
foreach($rs as $key => $row)
	{
	echo("    
	<tr>
");	
	if($start)
		{
		echo("        
		<td align=center style='font-weight: bold; background-color: #c0c0c0;'> 
			REC
		</td>
");
		foreach($row as $fn => $fv)
			{
			echo("        
		<td align=center style='font-weight: bold; background-color: #c0c0c0;'>
			".$fn."
		</td>
");
			}
		$start = false;
		}
	echo("    
	</tr>
");	
	echo("    
	<tr>
		<td>".$key."</td>
");	
	foreach($row as $fn => $fv)
		{
		echo("        
		<td>".$fv."</td>
");
		}
	echo("    
	</tr>
");
	}
?>
</table>
</body>
</html>