<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
include($path."functions/image.php");
$id = $_REQUEST["indid"];
$sql = "select * from images where id=? and viewtype=1";
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$images = $results["recordset"];

# Actions
	{
	$htm = "
<div style='position: relative; overflow: hidden; top: 5px; left: 5px; right: 5px; height: 100%;'>
	<div class-pu-actions>
		<input type=hidden 
			   id=after_search_method 
			   value='addimage' />
		<div title='Selected image ID' id=menu_tid style='text-algn: center;'>No image Selected</div><br />
		<input type=button onclick='show_image_page();' disabled id=show_image style='width: 16%;'
			   value='Open Image In New Window' /><br /><br />
		<input type=button onclick='edit_image();' disabled id=edit_image style='width: 16%;'
			   value='Edit Selected Image' /><br /><br />
		<input type=button onclick='delete_image();' disabled id=remove_image style='width: 16%;'
			   value='Remove Selected Image' /><br /><br />
		<input type=button onclick='hide_edit();' value=Close />
		<input type=hidden id=selected_image />	
		<!--<textarea id=test style='width: 100%;height: 200px;'></textarea>-->
	</div>
";


	}
# Edit
	{
	$htm .= "
	<div class=pu-edit>
		<center>
		<span id=image_action>Add New Image</span>
		<div>&nbsp;</div>
			<input type=hidden 
			   id=image_id_edit
			   value='' />
			<input type=text 
			   placeholder='image Title'
			   id=description_edit
			   value=''
			   style='width: 90%;' />
		<div>&nbsp;</div>
			<input type=text 
			   placeholder='Image Filename'
			   id=filename_edit
			   value=''
			   style='width: 90%;' readOnly disabled />
		<div>&nbsp;</div>
			<img src='' class=image style='max-height: 125px; max-width: 125px; display: none;' id=image_edit />
";

	$form_id = "frm_upload";
	$form_target = "work";
	$form_action = "actions/upload_image.php";
	$file_change = "check_file('tn', 'upload_file');"; 
	$upload_click = "file_upload('frm_upload');";
	$img_typ = "tn";
	$img_id = $id;
	include($path."includes/elements/file_upload_html.php");

	$htm .= "
			<div>&nbsp;</div>
			<input type=button value=Save onclick='update_image();' id=btn_save style='display: none;' />
			<input type=button value=Clear onclick='clear_image()' id=btn_clear />
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
	foreach($images as $key => $image)
		{
		$htm .= "
				<td valign=bottom>
					<div style='width: 300px;'>
					".get_image($key, $image)."
					<center>
					<input type=radio 
						   style='height: 40px; width: 45px'
						   name=select_image 
						   id=image_selector_".$key."
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
	<div>&nbsp;</div>
	<input type=hidden id=selected_image value='' />
</div>
";
	}
echo($htm);

?>