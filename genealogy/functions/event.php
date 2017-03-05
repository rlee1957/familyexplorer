<?php

function get_event($idx, $event)
{
	
$show = "";
if($event["view"] == 1){ $show = " checked"; }
$life_event = "
<div onclick='event_click(".$idx.")' style='width: 250px;' class=thumbnail>
	<!-- Life Event -->
	<div class=event-fact title='Life Event'>&nbsp;".$event["event"]."</div>
	<!-- Event Details -->
	<div class=event-fact title='Event Details' style='height: 50px; width: 100%; overflow: auto;'>&nbsp;".$event["details"]."</div>
	<input type=hidden value='".$event["event"]."' id=event_".$idx." />
	<input type=hidden value='".$event["event_id"]."' id=event_id_".$idx." />
	<input type=hidden value='".$event["details"]."' id=details_".$idx." />
	<!-- Date of the Event -->
	<div class=event-fact title='Date of the Event'>&nbsp;".$event["date1"]."</div>
	<input type=hidden value='".$event["year"]."' id=year_".$idx." />
	<input type=hidden value='".$event["month"]."' id=month_".$idx." />
	<input type=hidden value='".$event["mo"]."' id=mo_".$idx." />
	<input type=hidden value='".$event["day"]."' id=day_".$idx." />
	<input type=hidden value='".$event["date1"]."' id=date1_".$idx." />
	<!-- Event Date Accuracy -->		
	<div class=event-fact title='Event Date Accuracy'>&nbsp;".$event["accuracy"]."</div>
	<input type=hidden value='".$event["accuracy"]."' id=accuracy_".$idx." />
	<!-- Event Time Period -->		
	<div class=event-fact title='Event Time Period'>&nbsp;".$event["period"]."</div>
	<input type=hidden value='".$event["period"]."' id=period_".$idx." />
	<!-- Event Calendar Type -->
	<div class=event-fact title='Event Calendar Type'>&nbsp;".$event["calendar"]."</div>
	<input type=hidden value='".$event["calendar"]."' id=calendar_".$idx." />
	<!-- Location Event Occurred -->
	<div class=event-fact style='height: 50px;' title='Location Event Occurred'>&nbsp;".$event["place"]."</div>
	<input type=hidden value='".$event["place"]."' id=place_".$idx." />
	<!-- Created By (User ID) -->
	<div class=event-fact title='Created By (User ID)'>&nbsp;".$event["proxyid"]."</div>
	<input type=hidden value='".$event["proxyid"]."' id=proxyid_".$idx." />
	<!-- Last Changed By (User ID) -->
	<div class=event-fact title='Last Changed By (User ID)'>&nbsp;".$event["changedby"]."</div>
	<input type=hidden value='".$event["changedby"]."' id=changedby_".$idx." />
	<!-- Last Changed By (User ID) -->
	<div class=event-fact title='Date Created'>&nbsp;".$event["dateCreated"]."</div>
	<input type=hidden value='".$event["dateCreated"]."' id=dateCreated_".$idx." />
	<!-- Date Last Changed -->
	<div class=event-fact title='Date Last Changed'>&nbsp;".$event["lastchangeddate"]."</div>
	<input type=hidden value='".$event["lastchangeddate"]."' id=lastchangeddate_".$idx." />
</div>
";
return $life_event;	
}
?>