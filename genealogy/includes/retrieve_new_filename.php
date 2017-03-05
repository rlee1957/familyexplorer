<?php

$new_filename = $clean_filename;
$new_filetype = $_POST["img_typ"];
$new_file_number = "000";
for($increment=0;$increment<1000;$increment++)
	{
	$temporary = $new_file_number.$increment;
	$test_number = substr($temporary, -3);
	$new_file_name = $new_filename."_".$new_filetype.$test_number.$suffix;
	if(!file_exists($target_dir.$new_file_name)){ break; }
	}

?>