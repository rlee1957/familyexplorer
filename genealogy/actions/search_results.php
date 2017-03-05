<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$process = $_REQUEST["process"];
$proxyid = $_REQUEST["proxyid"];
$currentid = $_REQUEST["currentid"];
$search0 = $_REQUEST["search_value"];
$search = "%".preg_replace("/\s+/", "%", $search0)."%";
include($path."functions/thumbnail.php");
include($path."database/search_sql.php");
$params = array();
$results = sql_shell($sql, $params, $path);
$rs = $results["recordset"];
#echo("<textarea style='width: 99%; height: 200px;'>");
#print_r($results);
#echo("</textarea>");
$htm = "";
if($results["rowcount"] > 0)
	{
	$htm = "
<div class=popup-title>".$_REQUEST["search_title"]."</div>
<div class=popup-instruction>".$_REQUEST["search_description"]."</div>
<div class=search-list style='width: 900px; height: 320px; overflow: auto;'>
	<table>
		<tr>
";
	foreach($rs as $i => $ind)
		{
		$event = $ind["event"];
		$year = $ind["year"];
		$month = $ind["month"];
		$day = $ind["day"];
		$period = $ind["period"];
		$img = $ind["parent"];
		$label = $ind["label"];
		$type = "";
		$event = get_thumbnail_event($event, $year, $month, $day, $period);
		$method = " onclick=\"select_individual(".$i.");\" ";
		$extra = "<input type=hidden id=igender_".$i." value=".$ind["gender"]." /><input type=hidden id=iid_".$i." value='".$ind["id"]."' />";
		$htm .= "
			<td align=center valign=bottom 
				style='background-color: #c0c0c0; width: 500px;' width=300><div style='width: 250px; overflow: auto;'>
					".get_thumbnail($img, $label, $type, $event, $ind["id"], $method, $extra)."
				<input type=radio 
					   style='height: 40px; width: 45px'
					   name=select_individual 
					   id=iindividual_selector_".$i."
					   onclick='select_individual(".$i.");' />
			</div></td>
";	
		}
	$htm .= "
		</tr>
	</table>
</div>
<div>
	<a href='javascript: ".$_REQUEST["use_function"]."'>
		".$_REQUEST["use_label"]."
	</a>&nbsp;&nbsp;&nbsp;
	<a href='javascript: ".$_REQUEST["create_function"]."'>
		".$_REQUEST["create_label"]."
	</a>&nbsp;&nbsp;&nbsp;
	<a href='javascript: hide_search_results();'>
		EXIT
	</a>
	<textarea id=search_value0 style='display: none;'>".$search0."</textarea>
	<input type=hidden id=process value='".$process."' />
	<input type=hidden id=iselected_id value='' />
</div>
";
	}
else
	{
	$individualid = preg_replace("/\s+/", "_", $search0)."_".time();
	include($path."includes/create_individual_minimum.php");
	$sourceid = $individualid;
	$targetid = $currentid;
	if($process == "addChild"){ $relationid = 30; }
	if($process == "addParent"){ $relationid = 29; }
	if($process == "addSpouse"){ $relationid = 31; }
	include($path."includes/create_relationship.php");
	$sourceid = $currentid;
	$targetid = $individualid;
	if($process == "addChild"){ $relationid = 29; }
	if($process == "addParent"){ $relationid = 30; }
	if($process == "addSpouse"){ $relationid = 31; }
	include($path."includes/create_relationship.php");
	$htm = "added~".$process;
	}
echo($htm);

?>