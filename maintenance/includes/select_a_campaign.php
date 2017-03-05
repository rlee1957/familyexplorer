<?php
$dbname = "maintenance";
$sql = "select * from campaigns where enabled > ? order by label";
$params = array(0);
$results = sql_shell($dbname, $sql, $params);
if($results["rowcount"] > 0)
	{
	if($results["rowcount"] == 1)
		{
		$current_campaign = $results["recordset"][0];
		echo("
			<b>".$current_campaign["label"]."</b>
			<input type=hidden id=cid name=cid 
				   value='".$current_campaign["idx"]."' />
			<input type=hidden id=clabel name=clabel 
				   value='".$current_campaign["label"]."' />
			<input type=hidden id=cdb name=cdb 
				   value='".$current_campaign["db"]."' />
			<input type=hidden id=cimage name=cimage 
				   value='".$current_campaign["image_file"]."' />
");
		}
	else
		{
		echo("
			<input type=hidden id=cid name=cid value='' />
			<input type=hidden id=clabel name=clabel value='' />
			<input type=hidden id=cdb name=cdb value='' />
			<input type=hidden id=cimage name=cimage value='' />
			<input type=hidden id=oid name=oid value='' />
			<select id='campaign_selector' 
					name='campaign_selector'
					class='header_control' 
					onchange='campaign_change();'>
				<option value='' selected disabled>- Select a Campaign -</option>
");
			foreach($results["recordset"] as $key => $row)
			{
				$opt_id = $row["idx"]."|";
				$opt_id .= $row["label"]."|";
				$opt_id .= $row["db"]."|";
				$opt_id .= $row["image_file"]."|";
				$opt_id .= $row["enabled"];
			echo("
				<option value='".$opt_id."'>".$row["label"]."</option>
");
			}
		echo("
			</select>
");
		}
	}
else
	{
	$current_campaign = array(0,'','','',0);
	echo("
			<b>No Campaigns</b>
			<input type=hidden id=cid name=cid value='' />
			<input type=hidden id=clabel name=clabel value='' />
			<input type=hidden id=cdb name=cdb value='' />
			<input type=hidden id=cimage name=cimage value='' />
");	
	}
?>