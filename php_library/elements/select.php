<?php

include("input_text_define.php");
$htm = '<input type="text"';
foreach($text_input as $attrib => $val)
	{
	if($val != "")
		{
		$attval = $attrib.'="'.$val.'"';
		if(substr($val, 0, 1) == "-")
			{
			$attr = substr($val, 1);
			if($val == "true")
				{
				$attval = " ".$attr;	
				}
			else
				{
				$attval = "";	
				}
			}
		$htm .= $attval;
		} 	
	}
$htm .= " />";
echo("<textarea>".$htm."</textarea>"); 

?>