<?php

include($path."database/parents_sql.php");
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$parents = $results["recordset"];
$htm = "
<table>
	<tr>
";
foreach($parents as $key => $parent)
	{
	$event = $parent["event"];
	$year = $parent["year"];
	$month = $parent["month"];
	$day = $parent["day"];
	$period = $parent["period"];
	$img = $parent["parent"];
	$label = $parent["label"];
	$type = $parent["relationship"];
	$event = get_thumbnail_event($event, $year, $month, $day, $period);
	$method = " onclick=\"show_individual('".$parent["id"]."');\" ";
	$extra = "";
	$htm .= "
		<td>
			".get_thumbnail($img, $label, $type, $event, $parent["id"], $method, $extra)."
		</td>
";	
	}
$htm .= "
	</tr>
</table>
";
$display["parents"]["window"] = $htm;
?>