<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
include($path."functions/link.php");
$id = $_REQUEST["indid"];
$sql = "select * from links where id = ? and viewvalue = '1'";
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$links = $results["recordset"];

# Actions
	{
	$htm = "
<div style='position: relative; overflow: hidden; top: 5px; left: 5px; right: 5px; height: 100%;'>
	<div class-pu-actions>
		<input type=hidden 
			   id=after_search_method 
			   value='addlink' />
		<div title='Selected Link ID' id=menu_tid style='text-algn: center;'>No Link Selected</div><br />
		<input type=button onclick='show_link_page();' disabled id=show_link style='width: 16%;'
			   value='Open Link In New Window' /><br /><br />
		<input type=button onclick='edit_link();' disabled id=edit_link style='width: 16%;'
			   value='Edit Selected Link' /><br /><br />
		<input type=button onclick='delete_link();' disabled id=remove_link style='width: 16%;'
			   value='Remove Selected Link' /><br /><br />
		<input type=button onclick='hide_edit();' value=Close />
		<input type=hidden id=selected_link />	
		<!--<textarea id=test style='width: 100%;height: 200px;'></textarea>-->
	</div>
";


	}
# Edit
	{
	$htm .= "
	<div class=pu-edit>
		<center>
		<span id=link_action>Add New Link</span>
		<div>&nbsp;</div>
			<input type=hidden 
			   id=link_id_edit
			   value='' />
			<input type=text 
			   placeholder='Link Title'
			   id=description_edit
			   value=''
			   style='width: 90%;' />
		<div>&nbsp;</div>
			<input type=text 
			   placeholder='Link URL'
			   id=filename_edit
			   value=''
			   style='width: 90%;' readOnly disabled />
		<div>&nbsp;</div>
			<img src='' class=link style='max-height: 125px; max-width: 125px; display: none;' id=link_edit />
";

	$form_id = "frm_upload";
	$form_target = "work";
	$form_action = "actions/upload_link.php";
	$file_change = "check_file('tn', 'upload_file');"; 
	$upload_click = "file_upload('frm_upload');";
	$img_typ = "tn";
	$img_id = $id;
	include($path."includes/elements/file_upload_html.php");

	$htm .= "
			<div>&nbsp;</div>
			<input type=button value=Save onclick='update_link();' id=btn_save style='display: none;' />
			<input type=button value=Clear onclick='clear_link()' id=btn_clear />
		</center>
	</div>
";
	}

# List
	{
	$htm .= "
	<div class=pu-list>
";
	$x = 0;
	foreach($links as $key => $link)
		{
		$htm .= "
		<div style='display: inline-block; padding: 5px 20px 5px 20px;'>
			<table>
				<tr>
					<td>
						<center>
							<input type=radio 
								   style='height: 25px; width: 25px'
								   name=select_link 
								   id=link_selector_".$key."
								   onclick='select_event(".$key.");' />
						</center>
					</td>
					<td>".get_link($key, $link)."</td>
				</tr>
			</table>
		</div>
";	
		$x++;
		}
	$htm .= "
	</div>
	<div>&nbsp;</div>
	<input type=hidden id=selected_link value='' />
</div>
";
	}
echo($htm);

?>