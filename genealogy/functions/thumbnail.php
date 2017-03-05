<?php

function get_thumbnail_event($event, $year, $month, $day, $period)
{ 
$thumbnail_event = "";
if($event != "")
	{
	$thumbnail_event = $event.":&nbsp;";
	$thumbnail_event .= $year;
	if($month != ""){ $thumbnail_event .= "-".$month; }
	if($day != ""){ $thumbnail_event .= "-".$day; }
	if($period != ""){ $thumbnail_event .= "&nbsp;".$period; }
	}
return $thumbnail_event;
}

function get_thumbnail($img, $label, $type, $event, $id, $method, $extra)
{
$htm = "
<div ".$method." class=thumbnail>
<table class=thumbnail-table>
	<tr>
		<td align=center valign=bottom style='height: 150px; width: 250px;'>
			<img src='addons/".$img."' class=thumbnail-image />
		</td>
	</tr>
	<tr>
		<td align=center class=thumbnail-label>
			".$label."
		</td>
	</tr>
";
if($type != "")
	{
	$htm .= "
	<tr>
		<td align=center class=thumbnail-type>
			".$type."
		</td>
	</tr>
";	
	}
if($event != "")
	{
	$htm .= "
	<tr>
		<td align=center class=thumbnail-event>
			".$event."
		</td>
	</tr>
";	
	}
$htm .= "
</table>
".$extra."
</div>
";
return $htm;	
}
?>