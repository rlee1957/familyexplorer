<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["indid"];
include($path."functions/thumbnail.php");
include($path."database/children_sql.php");
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$children = $results["recordset"];
$class_id = 2;
include($path."includes/get_relations.php");
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
			<select onchange='update_child_relationship(this)'
					id=child_relationship disabled>
				<option selected disabled>-Select Relationship-</option>
";
foreach($relations_options as $id => $option)
	{
	$htm .= $option;	
	}
$htm .= "
			</select>
			<input type=hidden id=selected_child />
			
		</td>
		<td>
<table>
	<tr>
";
$x = 0;
foreach($children as $key => $child)
	{
	$event = $child["event"];
	$year = $child["year"];
	$month = $child["month"];
	$day = $child["day"];
	$period = $child["period"];
	$img = $child["parent"];
	$label = $child["label"];
	$type = $child["relationship"];
	$event = get_thumbnail_event($event, $year, $month, $day, $period);
	$method = " onclick='select_child(".$key.");' ";
	$extra = "<input type=hidden id=gender_".$key." value=".$child["gender"]." /><input type=hidden id=id_".$key." value='".$child["id"]."' />";
	$htm .= "
		<td>
			".get_thumbnail($img, $label, $type, $event, $child["id"], $method, $extra)."
			<center>
			<input type=radio 
				   style='height: 40px; width: 45px'
				   name=select_child 
				   id=child_selector_".$key."
				   onclick='select_child(".$key.");' />
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
echo($htm);
?>