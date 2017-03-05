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
<div class=pu-title>Children</div>
<div class=pu-edit-container>
	<div class=pu-actions>
			<fieldset>
				<legend>Add Child</legend>
					<input type=text 
						   placeholder='Child Full Name' 
						   id=search_name 
						   class=search-input /><br />
					<input type=button 
						   value='Add'
						   onclick='search_results_add(\"cselected_gender\");' /><br />
				</fieldset><br />
			<input type=hidden 
				   id=after_search_method 
				   value='addChild' />
			<a href='javascript: remove_relationships();' disabled id=remove_child>
				Remove Selected Child
			</a><br /><br />
			<select onchange='update_child_relationship(this)'
					id=child_relationship 
					disabled>
				<option selected 
						disabled>
					-Change Relationship To-
				</option>
";
foreach($relations_options as $id => $option)
	{
	$htm .= $option;	
	}
$htm .= "
			</select><br /><br />
			<a href='javascript: hide_edit();'>Close</a>
			<input type=hidden id=selected_id />	
	</div>
	<div class=pu-list-no-edit>
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
	$method = " onclick=\"select_child(".$key.");\" ";
	$extra = "
<input type=hidden id=cgender_".$key." value=".$child["gender"]." />
<input type=hidden id=cid_".$key." value='".$child["id"]."' />
<input type=hidden id=child_type_".$key." value='".$type."' />
";
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
	</div>
</div>
<input type=hidden id=cselected_gender value='' />
<input type=hidden id=crelation value='' />
<input type=hidden id=crelation_id value='' />
<input type=hidden id=cthis_id value='".$id."' />
";
echo($htm);
?>