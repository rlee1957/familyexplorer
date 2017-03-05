<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);
$path = "../";
$target_dir = "/home/rlee1957/public_html/genealogy/addons/thumbnails";
$upload_fil = trim($_FILES["upload_file"]["name"]);
$filename = $upload_fil;
include($path."includes/retrieve_suffix.php");
# returns $suffix
$source = $_POST["img_id"];
include($path."includes/clean_file_name.php");
# returns $clean_filename
$typ = $_POST["img_typ"];
$new_filename = $clean_filename;
$new_filetype = $typ;
include($path."includes/retrieve_new_filename.php");
# returns $new_file_name
include($path."includes/upload_file_process.php");
echo("<br />results: ".$results."<br />");
	
?>