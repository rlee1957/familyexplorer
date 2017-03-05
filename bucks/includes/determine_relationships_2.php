<?php

# determine relationships
	{
	$b = array();
	# b[1]
		{
		$b[1] = -1;
		$ar = array($_SESSION["id"], 0);
		while($ar[1] == 0){ $ar = virtual_relationship(1, $patron); }
		$b[1] = $ar[0];
		}

	# b[2]		
		{
		$b[2] = -1;
		$ar = array($b[1], 0);
		while($ar[1] == 0){ $ar = actual_relationship($ar[0]); }
		$b[2] = $ar[0];
		}
	# b[3]		
		{
		$b[3] = -1;
		$ar = array($b[2], 0);
		while($ar[1] == 0){ $ar = actual_relationship($ar[0]); }
		$b[3] = $ar[0];
		}
	# b[4]		
		{
		$b[4] = -1;
		$ar = array($b[3], 0);
		while($ar[1] == 0){ $ar = actual_relationship($ar[0]); }
		$b[4] = $ar[0];
		}
	}

?>