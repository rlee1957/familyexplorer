<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["indid"];
include($path."functions/thumbnail.php");
include($path."sql/spouses_sql.php");
include($path."params/spouse_params.php");
$results = sql_shell($sql, $params, $path);
$spouses = $results["recordset"];
$class_id = 3;
include($path."includes/get_relations.php");
$htm = "
<div class=pu-title>Spouses</div>
<div class=pu-edit-container>
	<div class=pu-actions>
			<fieldset>
				<legend>Add Spouse</legend>
					<input type=text 
						   placeholder='Spouse Full Name' 
						   id=search_name 
						   class=search-input /><br />
					<input type=button 
						   value='Add'
						   onclick='search_results_add(\"sselected_gender\");' /><br />
				</fieldset><br />
			<input type=hidden 
				   id=after_search_method 
				   value='addSpouse' />
			<a href='javascript: spouse_is_current();' disabled id=show_spouse>
				Display As Current Spouse
			</a><br /><br />
			<a href='javascript: single();' disabled id=show_spouse>
				Display Single ~ No Spouse
			</a><br /><br />
			<a href='javascript: remove_relationships();' disabled id=remove_spouse>
				Remove Selected Spouse
			</a><br /><br />
			<select onchange='update_spouse_relationship(this)'
					id=spouse_relationship 
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
foreach($spouses as $key => $spouse)
	{
	$event = $spouse["event"];
	$year = $spouse["year"];
	$month = $spouse["month"];
	$day = $spouse["day"];
	$period = $spouse["period"];
	$img = $spouse["parent"];
	$label = $spouse["label"];
	$type = $spouse["relationship"];
	$event = get_thumbnail_event($event, $year, $month, $day, $period);
	$method = " onclick=\"select_spouse(".$key.");\" ";
	$extra = "
<input type=hidden id=sgender_".$key." value=".$spouse["gender"]." />
<input type=hidden id=sid_".$key." value='".$spouse["id"]."' />
<input type=hidden id=spouse_type_".$key." value='".$type."' />
";
	$htm .= "
		<td>
			".get_thumbnail($img, $label, $type, $event, $spouse["id"], $method, $extra)."
			<center>
			<input type=radio 
				   style='height: 40px; width: 45px'
				   name=select_spouse 
				   id=spouse_selector_".$key."
				   onclick='select_spouse(".$key.");' />
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
<input type=hidden id=sselected_gender value='' />
<input type=hidden id=srelation value='' />
<input type=hidden id=srelation_id value='' />
<input type=hidden id=sthis_id value='".$id."' />
";
echo($htm);
?>