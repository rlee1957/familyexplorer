<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
include($path."functions/thumbnail_image.php");
$id = $_REQUEST["indid"];
$sql = "select * from thumbnails where id=? and viewvalue = 1 order by CAST(ordinalposition AS UNSIGNED)";
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$thumbnails = $results["recordset"];

# Actions
	{
	$htm = "
<div class=pu-title>Thumbnails</div>
<div class=pu-edit-container>
	<div class=pu-actions>
		<input type=hidden 
			   id=after_search_method 
			   value='addThumbnail' />
		<input type=button onclick='show_people_child();' disabled id=show_child class=pu-action-button
			   value='Use as Child Image' /><br /><br />
		<input type=button onclick='show_people_individual();' disabled id=show_individual class=pu-action-button
			   value='Use as Individual Image' /><br /><br />
		<input type=button onclick='show_people_parent();' disabled id=show_parent class=pu-action-button
			   value='Use as Parent Image' /><br /><br />
		<input type=button onclick='edit_thumbnail();' disabled id=edit_thumbnail class=pu-action-button
			   value='Edit This Thumbnail' /><br /><br />
		<input type=button onclick='delete_thumbnail();' disabled id=remove_thumbnail class=pu-action-button
			   value='Remove This Thumbnail' /><br /><br />
		<input type=button onclick='hide_edit();' value=Close class=pu-action-button />
		<input type=hidden id=selected_thumbnail />	
		<!--<textarea id=test style='width: 100%;height: 200px;'></textarea>-->
	</div>
";


	}
# Edit
	{
	$htm .= "
	<div class=pu-edit>
		<center>
		<span id=thumbnail_action>Add New Thumbnail</span>
			<br />
			<input type=hidden 
			   id=thumbnail_id_edit
			   value='' />
			<div>&nbsp;</div>
			<input type=text 
			   placeholder='Thumbnail Title'
			   id=title_edit
			   value=''
			   style='width: 90%;' />
			<div>&nbsp;</div>
			<input type=hidden 
			   placeholder='Thumbnail Filename'
			   id=filename_edit
			   value='' />
			<input type=text 
			   placeholder='Ordinal Position'
			   id=ordinalposition_edit
			   value=''
			   style='width: 90%;' />
			<div>&nbsp;</div>
			<img src='' class=thumbnail-image style='max-width: 125px; max-height: 125px; display: none;' id=image_edit />
";

	$form_id = "frm_upload";
	$form_target = "work";
	$form_action = "actions/upload_thumbnail.php";
	$file_change = "check_file('tn', 'upload_file');"; 
	$upload_click = "file_upload('frm_upload');";
	$img_typ = "tn";
	$img_id = $id;
	include($path."includes/elements/file_upload_html.php");

	$htm .= "
			<div>&nbsp;</div>
			<input type=button value=Save onclick='update_thumbnail()' id=btn_save class=pu-action-button style='display: none;' />
			<input type=button value=Clear onclick='clear_thumbnail()' class=pu-action-button id=btn_clear />
		</center>
	</div>
";
	}

# List
	{
	$htm .= "
	<div class=pu-list>
		<table>
			<tr>
";
	$x = 0;
	foreach($thumbnails as $key => $thumbnail)
		{
		$htm .= "
				<td valign=bottom>
					<div style='width: 300px;'>
					".get_thumbnail_image($key, $thumbnail)."
					<center>
					<input type=radio 
						   style='height: 40px; width: 45px'
						   name=select_thumbnail 
						   id=thumbnail_selector_".$key."
						   onclick='select_event(".$key.");' />
					</center>
					</div>
				</td>
";	
		$x++;
		}
	$htm .= "
			</tr>
		</table>
	</div>
	<input type=hidden id=selected_thumbnail value='' />
</div>
";
	}
echo($htm);

?>