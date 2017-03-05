<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["indid"];
include($path."functions/event.php");
include($path."sql/events_sql.php");
$params = array();
$params[count($params)] = $id;
$results = sql_shell($sql, $params, $path);
$events = $results["recordset"];
$htm = "
<div class=pu-title>Life Events</div>
<div class=pu-edit-container>
	<div class=pu-actions>
		<input type=hidden 
			   id=after_search_method 
			   value='addEvent' />
		<a href='javascript: event_show();' disabled id=Show_event>
			Show Selected Event
		</a><br /><br />
		<a href='javascript: edit_event();' disabled id=edit_event>
			Edit Selected Event
		</a><br /><br />
		<a href='javascript: remove_event();' disabled id=remove_event>
			Remove Selected Event
		</a><br /><br />
		<a href='javascript: hide_edit();'>Close</a>
		<input type=hidden id=selected_event />	
		<textarea id=test style='width: 100%;height: 200px;'></textarea>
</div>
<div class=pu-edit>
	<fieldset>
		<legend><span id=event_action>Add New Event</span></legend>
		<br />
		<input type=hidden 
		   id=event_id_edit
		   value=''
		   style='width: 100%;' />
		<input type=text 
		   placeholder='Event Name'
		   id=event_edit
		   value=''
		   style='width: 100%;' />
		<textarea placeholder='Details about the Event'
				  id='details_edit'
				  style='width: 100%; height: 50px;'></textarea>
		<br /><input type=date 
						   id=date_edit 
						   value='' 
						   placeholder=Date onchange=\"date_change();\" style='width: 100%;' /><br />
		<div id=ds title='Date of the Event' class=event-fact>&nbsp;</div>
		<input type=hidden 
			   value='' 
			   id=year_edit />
		<input type=hidden 
			   value='' id=mo_edit />
		<input type=hidden 
			   value='' id=month_edit />
		<input type=hidden 
			   value='' 
			   id=day_edit />
		<input type=hidden 
			   value='' 
			   id=date1_edit />
		<input type=hidden 
			   value='' 
			   id=event_date_edit />
		<br />
		<select id=accuracy_edit style='width: 100%;' >
			<option disabled
					selected
					value=''>
				- Select Accuracy -
			</option>
			<option value='Approximately'>
				Approximately
			</option>
			<option value='Precisely'>
				Precisely
			</option>
		</select>
		<br />
		<select id=period_edit style='width: 100%;' >
			<option disabled
					value=''>
				- Select Period -
			</option>
			<option value='BC'>
				(BC) Before Christ 
			</option>
			<option value='AD' selected>
				(AD) In The Year Of Our Lord 
			</option>
		</select>
	<br />
		<select id=calendar_edit style='width: 100%;' >
			<option disabled
					value=''>
				- Select Calendar -
			</option>
			<option value='Gregorian' selected>
				Gregorian (Most Common)
			</option>
			<option value='Julian'>
				Julian 
			</option>
		</select>
		<br />
		<textarea id=place_edit
				  placeholder='Place Event Occurred'
				  style='width: 100%; height: 50px;'></textarea>
		<br />
	<br />
		<input type=button value=Save onclick='save_event()' />
		<input type=button value=Clear onclick='clear_event()' />
		</fieldset>
</div>
<div class=pu-list>
			<table>
				<tr>
";
$x = 0;
foreach($events as $key => $event)
	{
	$htm .= "
		<td>
			".get_event($key, $event)."
			<center>
			<input type=radio 
				   style='height: 40px; width: 45px'
				   name=select_event 
				   id=event_selector_".$key."
				   onclick='select_event(".$key.");' />
			</center>
		</td>
";	
	$x++;
	}
$htm .= "
				</tr>
			</table>
	</div>
	<input type=hidden id=selected_id value='' />
</div>
";
echo($htm);
?>