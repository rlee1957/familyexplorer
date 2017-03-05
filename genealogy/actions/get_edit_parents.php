<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["indid"];
include($path."functions/thumbnail.php");
include($path."database/parents_sql.php");
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$parents = $results["recordset"];
//echo("get_edit_parents.php<br />");
//exit();
$class_id = 1;
include($path."includes/get_relations.php");
$htm = "
<div class=pu-title>Parents</div>
<div class=pu-edit-container>
	<div class=pu-actions>
			<fieldset>
				<legend>Add Parent</legend>
					<input type=text 
						   placeholder='Enter Parent Name' 
						   id=search_name 
						   class=search-input /><br />
					<input type=button 
						   value='Add A New Parent'
						   onclick='search_results_add(\"pselected_gender\");' /><br />
				</fieldset><br />
			<input type=hidden 
				   id=after_search_method 
				   value='addParent' />
			<a href='javascript: remove_relationships();' disabled id=remove_parent>
				Remove Selected Parent
			</a><br /><br />
			<select onchange='update_parent_relationship(this)'
					id=parent_relationship 
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
	$extra = "
<input type=hidden id=pgender_".$key." value=".$parent["gender"]." />
<input type=hidden id=pid_".$key." value='".$parent["id"]."' />
<input type=hidden id=parent_type_".$key." value='".$type."' />
";
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
		</div>
</div>
<input type=hidden id=pselected_gender value='' />
<input type=hidden id=prelation value='' />
<input type=hidden id=prelation_id value='' />
<input type=hidden id=pthis_id value='".$id."' />
";
echo($htm);
?>