<?php

include("../../../_common/includes/show_errors.php");
$dbhost='127.0.0.1';
$dbuser='postgres';
$dbpasswd='wCkgErYi';
$dbname = 'template1';
$driver = "pgsql:host=127.0.0.1;port=5432;dbname=vikings;user=postgres;password=wCkgErYi";
$driver = "pgsql:dbname=vikings;user=postgres;password=wCkgErYi";
$pdo = new PDO($driver);	
$sql = 'select datname from pg_database';
echo("
<table cellpadding=5 cellspacing=0 border=1>
");
#	<textarea style='width: 99%; height: 400px;'>");
$head = false;
foreach ($pdo->query($sql) as $row) 
	{
	if(!$head)
		{
		echo("
	<tr>
");
		foreach($row as $nme => $val)
			{
			if(!is_numeric($nme))
				{
				echo("
		<td class='tablehead'>".$nme."</td>
");
				}
			}
		echo("
	</tr>
");
		$head = true;
		}
	echo("
	<tr>
");
	foreach($row as $nme => $val)
		{
		if(!is_numeric($nme))
			{
			echo("
		<td class='value'>".$val."</td>
");
			}
		}
	echo("
	</tr>
");
	}
echo("
</table>
");

?>