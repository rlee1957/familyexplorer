<?php

# Uploader Server Code (START)
$results = "";
$step = "";
try
	{
	$upload_succeeded = false;
	$upload_fil = $_FILES["upload_file"]["name"];
	$upload_tmp = $_FILES["upload_file"]["tmp_name"];
	$target_file = $target_dir . basename($upload_fil);
	$uploadOk = 1;
	$step = "Getting file extension";
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$step = "Getting file size";
	$check = getimagesize($upload_tmp);
	if($check != false) 
		{
		$step = "Checking file size";
		$size = filesize($_FILES["upload_file"]["tmp_name"]);
		$uploadOk = 1;
		$tmp_name = $_FILES["upload_file"]["tmp_name"];
		$name = $target_dir.$new_file_name;
		$step = "Moving uploaded file";
		if(!move_uploaded_file($tmp_name, $name))
			{
			$upload_succeeded = false;
			}
		else
			{
			$upload_succeeded = true;
			}
		}
	if($upload_succeeded){ $results = $typ."|upload successful"; }
	else{ $results = $typ."|upload failed"; }
	}
catch(Exception $e)
	{
	$results = $typ."|error while (".$step."): ".$e->getMessage();
	}
# Uploader Server Code (END)

?>