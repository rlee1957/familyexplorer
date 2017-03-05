<?php

include($path."database/spouse_sql.php");
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
if($results["rowcount"] == 0){ $display["spouse"]["window"] = ""; }
else
	{
	$spouse = $results["recordset"][0];
	$event = $spouse["event"];
	$year = $spouse["year"];
	$month = $spouse["month"];
	$day = $spouse["day"];
	$period = $spouse["period"];
	$img = $spouse["individual"];
	$label = $spouse["label"];
	$type = "";
	$event = get_thumbnail_event($event, $year, $month, $day, $period);
	$method = " onclick=\"show_individual('".$spouse["id"]."');\" ";
	$extra = "";
	$display["spouse"]["window"] = get_thumbnail($img, $label, $type, $event, $spouse["id"], $method, $extra);
	}
?>