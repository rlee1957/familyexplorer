<?php 

include($path."database/relations_sql.php");
$params = array();
$params[count($params)] = $class_id;
$results = sql_shell($sql, $params, $path);
$relations = $results["recordset"];
$relations_options = array();
foreach($relations as $idx => $row)
	{
	$value = $row["gender"]."|".$row["relationid"];
	$label = $row["text"];
	$relations_options[count($relations_options)] = "
	<option value=\"".$value."\">".$label."</option>
";
	}

?>