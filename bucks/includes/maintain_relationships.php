<?php

# maintain relationships
	{
	for($x=1;$x<5;$x++)
		{
		if($bexists[$x][0])
			{
			if($b[$x] != $bexists[$x][3])
				{
				if(!relationship_exists($_SESSION["id"], $b[$x], $x, "proxy"))
					{
					add_relationship($_SESSION["id"], $b[$x], $x, "proxy");	
					}	
				}
			}
		else
			{
			add_relationship($_SESSION["id"], $b[$x], $x, "normal");
			}
		}
	}

?>