<?php

$campaign_idx;
include("includes/data/get_campaign_references.php");
foreach($results["recordset"] as $key => $row)
	{
	echo("
## ".$row["reference_name"]." - ".$row["reference_file"]." ##
");
	include($row["reference_file"]);	
	}

?>