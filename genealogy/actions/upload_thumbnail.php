<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);
$path = "../";
$re = realpath(dirname(__FILE__));
$re_ar = explode("/", $re);
$home = "";
$del = "";
for($x=0;$x<count($re_ar)-2;$x++){ $home .= $del.$re_ar[$x]; $del = "/"; }
$target_dir = $home."/genealogy/addons/thumbnails/";
include($path."../_common/database/sql_functions.php");
//$target_dir = "/home/rlee1957/public_html/genealogy/addons/thumbnails/";
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
$filename = "thumbnails/".$new_file_name;
$id = $_POST["individual_id"];
$ordinalposition = "0";
$title = $_POST["file_title"];
$viewvalue = "1";
include($path."database/thumbnail_insert.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Family Explorer</title>
</head>
<body>
<table>
	<tr>
		<td><label for=fn>Filename: </label></td>
		<td><input type=text id=fn value="<?php echo($filename); ?>" /></td>
	</tr>
	<tr>
		<td><label for=fn>Target Directory: </label></td>
		<td><input type=text id=fn value="<?php echo($target_dir); ?>" /></td>
	</tr>
	<tr>
		<td><label for=fid>ID: </label></td>
		<td><input type=text id=fid value="<?php echo($id); ?>" /></td>
	</tr>
	<tr>
		<td><label for=op>Ordinal Position: </label></td>
		<td><input type=text id=op value="<?php echo($ordinalposition); ?>" /></td>
	</tr>
	<tr>
		<td><label for=file_title>File Title: </label></td>
		<td><input type=text id=file_title value="<?php echo($title); ?>" /></td>
	</tr>
	<tr>
		<td><label for=vv>View Value: </label></td>
		<td><input type=text id=vv value="<?php echo($viewvalue); ?>" /></td>
	</tr>
	<tr>
		<td><label for=ur>Upload Results: </label></td>
		<td><input type=text id=ur value="<?php echo($results); ?>" /></td>
	</tr>
	<tr>
		<td><label for=sr>Save Results: </label></td>
		<td><textarea id=sr style="width: 95% height: 75px;"><?php print_r($save_results); ?></textarea>
	</tr>
	<tr>
		<td><label for=ct>Call Type: </label></td>
		<td><input type=text id=ct value="" /></td>
	</tr>
</table>
<script type="text/javascript">
fid = document.getElementById("fid").value;
if(window.parent.document.getElementById("after_search_method"))
	{
	document.getElementById("ct").value = "parent";
	window.parent.show_individual(fid);
	//window.parent.show_details("thumbnails");
	}
else
	{
	if(window.opener.document.getElementById("after_search_method"))
		{
		document.getElementById("ct").value = "opener";
		window.opener.refresh_edit();
		//window.opener.show_details("thumbnails");	
		}	
	}
</script>
</body>
</html>

