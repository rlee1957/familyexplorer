<?php

$sql = "
select 
	* 
from 
	people 
where
	id = ?
";
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$individual = $results["recordset"][0];
$event = $individual["event"];
$year = $individual["year"];
$month = $individual["month"];
$day = $individual["day"];
$period = $individual["period"];
$img = $individual["individual"];
$label = $individual["label"];
$type = "";
$event = get_thumbnail_event($event, $year, $month, $day, $period);
$method = " onclick=\"show_individual('".$individual["id"]."');\" ";
$extra = "";
$display["individual"]["window"] = get_thumbnail($img, $label, $type, $event, $id, $method, $extra);

?>