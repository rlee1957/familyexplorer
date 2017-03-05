<?php

include($path."database/children_sql.php");
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$children = $results["recordset"];
$htm = "
<table>
";
foreach($children as $key => $child)
	{
	$event = $child["event"];
	$year = $child["year"];
	$month = $child["month"];
	$day = $child["day"];
	$period = $child["period"];
	$img = $child["child"];
	$label = $child["label"];
	$type = $child["relationship"];
	$event = get_thumbnail_event($event, $year, $month, $day, $period);
	$method = " onclick=\"show_individual('".$child["id"]."');\" ";
	$extra = "";
	$htm .= "
	<tr>
		<td>
			".get_thumbnail($img, $label, $type, $event, $child["id"], $method, $extra)."
		</td>
	</tr>
";	
	}
$htm .= "
</table>
";
$display["children"]["window"] = $htm;
?>