<?php

$htm = "
<table>
";
foreach($individual as $name => $value)
	{
	$value_control = $value;
	if(($name == "name")||($name == "label")||($name == "name"))
		{
		$value_control = "<input type=text id=ind_".$name." value='".$value."' style='width: 300px;' onchange=\"save_change(this);\" />";	
		}
	if($name == "description")
		{
		$value_control = "<textarea id=ind_".$name." style='width: 300px; height: 50px;' onchange=\"save_change(this);\">".$value."</textarea>";	
		}
	if(($name == "event")||
		($name == "accuracy")||
		($name == "period")||
		($name == "calendar")||
		($name == "year")||
		($name == "month")||
		($name == "day")||
		($name == "place"))
		{
		$value_control = "<a href=\"javascript: document.getElementById('ind_details_list').value = 'event';\">".$name." of this life event</a>";
		if(($name == "event")&&($value == ""))
			{
			$value_control = "<a href=\"javascript: document.getElementById('ind_details_list').value = 'event';\">life event</a>";	
			}
		if(($name == "calendar")&&($value == ""))
			{
			$value_control = "<a href=\"javascript: document.getElementById('ind_details_list').value = 'event';\">calendar used for this life event</a>";	
			}
		if($value != "")
			{
			$value_control = "<a href=\"javascript: document.getElementById('ind_details_list').value = 'event';\">".$value."</a>";	
			}
		}
	if(($name == "individual")||($name == "child")||($name == "parent"))
		{
		$value_control = "<a href=\"javascript: document.getElementById('ind_details_list').value = 'thumbnails';\">".$value."</a>";		
		}
	if($name == "gender")
		{
		$checked = "";
		if($value == 0){ $checked = " checked "; }
		$value_control = "<input type=radio id=ind_female name=ind_gender value=0 ".$checked."  onchange=\"save_change(this);\" />&nbsp;&nbsp;&nbsp;Female";
		$checked = "";
		if($value == 1){ $checked = " checked "; }
		$value_control .= "
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type=radio id=ind_male name=ind_gender value=1 ".$checked."  onchange=\"save_change(this);\" />&nbsp;&nbsp;&nbsp;Male";
		$checked = "";
		if(($value != 1)&&($value != 0)){ $checked = " checked "; }
		$value_control .= "
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type=radio id=ind_unknown name=ind_gender value=2 ".$checked."  onchange=\"save_change(this);\" />&nbsp;&nbsp;&nbsp;Unknown";
		}
	if($name == "deceased")
		{
		$checked = "";
		$yn = "No";
		if($value == 1)
			{
			$checked = " checked ";
			$yn = "Yes";	
			}
		$value_control = "
		<input type=checkbox id=ind_".$name.$checked." onchange=\"if(this.checked){document.getElementById('is_deceased').innerHTML = 'Yes'; this.value = 1}else{document.getElementById('is_deceased').innerHTML = 'no'; this.value = 0}; save_change(this);\" />&nbsp;&nbsp;&nbsp;<span id=is_deceased>".$yn."</span>
		";	
		}
	$htm .= "
	<tr>
		<td align=right><b>".$name."</b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>".$value_control."</td>
	</tr>
";	
	}
$htm .= "
</table>
";
$display["details"]["window"] = $htm;
$htm = "
Details&nbsp;&nbsp;&nbsp;&nbsp;
<select id=ind_details_list onchange=\"show_details(this);\">
	<option value='' selected disabled>~ Select Option ~</option>
	<option value='details'>Individual Details</option>
	<option value='spouse'>Spouse Details</option>
	<option value='parents'>Parents Details</option>
	<option value='children'>Children Details</option>
	<option value='event'>Life Events</option>
	<option value='images'>Images</option>
	<option value='thumbnails'>Thumbnails</option>
	<option value='links'>Links</option>
	<option value='messages'>Messages</option>
	<option value='bookmarks'>My Bookmarks</option>
	<option value='bookmarks'>Security</option>
</select>
";
$display["details"]["label"] = $htm;

?>