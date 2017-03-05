<?php

switch($patron["position"])
	{
	case '1':
		{
		include("includes/determine_relationships_1.php");
		break;	
		}
	case '2':
		{
		include("includes/determine_relationships_2.php");
		break;	
		}
	case '3':
		{
		include("includes/determine_relationships_3.php");
		break;	
		}
	case '4':
		{
		include("includes/determine_relationships_4.php");
		break;	
		}
	}

?>