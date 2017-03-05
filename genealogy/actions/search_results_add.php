<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$search0 = $_REQUEST["search"];
$search = "%".preg_replace("/\s+/", "%", $search0)."%";
include($path."functions/thumbnail.php");
include($path."database/search_sql.php");
$params = array();
$results = sql_shell($sql, $params, $path);

$rs = $results["recordset"];
echo("<textarea style='width: 99%; height: 200px;'>");
print_r($results);
echo("</textarea>");
$htm = "
<div style='width: 99%; overflow: auto;'>
	<table>
		<tr>
";
if($results["rowcount"] > 0)
	{
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
		$method = " onclick=\"select_parent(".$i.");\" ";
		$extra = "<input type=hidden id=gender_".$i." value=".$ind["gender"]." /><input type=hidden id=id_".$i." value='".$ind["id"]."' />".get_details($ind["id"]);
		$htm .= "
		<td align=center valign=bottom style='width: 350px;'>
			".get_thumbnail($img, $label, $type, $event, $ind["id"], $method, $extra)."
			
			<input type=radio 
				   style='height: 40px; width: 45px'
				   name=select_parent 
				   id=parent_selector_".$i."
				   onclick='select_parent(".$i.");' />
		
		</td>
";	
		}
	$htm .= "
		</tr>
	</table>
</div>
";
	}
else
	{
	$htm = "<br />No records match (".$search0.").<br />";
	}
/*
$htm = "
<table>
	<tr>
		<td style='width: 100px;'>
			<div class='disabled-button' onclick='add_new_parent()'>
				Add New
			</div>
			<div class='disabled-button' onclick='remove_parent()'>
				Remove
			</div>
			<div class='disabled-button'>
				<a href='javascript: hide_edit();'>Close</a>
			</div>
			<select onchange='update_parent_relationship(this)'
					id=parent_relationship disabled>
				<option selected disabled>-Please select relationship-</option>
";
foreach($relations_options as $id => $option)
	{
	$htm .= $option;	
	}
$htm .= "
			</select>
			<input type=hidden id=selected_parent />
			
		</td>
		<td>
<table>
	<tr>
";
$x = 0;
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
	$method = " onclick=\"select_parent(".$key.");\" ";
	$extra = "<input type=hidden id=gender_".$key." value=".$parent["gender"]." /><input type=hidden id=id_".$key." value='".$parent["id"]."' />";
	$htm .= "
		<td>
			".get_thumbnail($img, $label, $type, $event, $parent["id"], $method, $extra)."
			<center>
			<input type=radio 
				   style='height: 40px; width: 45px'
				   name=select_parent 
				   id=parent_selector_".$key."
				   onclick='select_parent(".$key.");' />
			</center>
		</td>
";	
	$x++;
	}
$htm .= "
	</tr>
</table>
		</td>
	</tr>
</table>
<input type=hidden id=selected_gender value='' />
<input type=hidden id=selected_id value='' />
<input type=hidden id=relation_id value='' />
<input type=hidden id=this_id value='".$id."' />
";
*/

echo($htm);

function get_details($id)
{

$retval = "
<textarea style='width: 100%; height: 50px;'>";
$retval .= get_spouse_info($id);
$retval .= get_parent_info($id);
$retval .= get_children_info($id);
$retval .= "</textarea>";
return $retval;
}

function get_spouse_info($path, $id)
{ 
return "No Spouse Information.\r\n"; 
}

function get_parent_info($path, $id)
{ 
return "No Parents Information.\r\n"; 
}

function get_children_info($path, $id)
{ 
return "No Children Information.\r\n"; 
}

?>