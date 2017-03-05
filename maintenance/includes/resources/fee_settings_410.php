<?php

# /var/www/brickorder.com/accbricks/configuration/fee_settings.php
$_SESSION["convenience_fee"] = 5.00;
if((isset($_SESSION["user"]))&&($_SESSION["user"] == "STAFF"))
	{
	$_SESSION["convenience_fee"] = 0.00;
	}

?>