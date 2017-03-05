<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");

$personal_key = $_POST["personal_key"];
$existing_key = $_POST["existing_key"];
$uppk = array();
$uptc = array();
$veri = array();
if($existing_key == "")
	{
	include("includes/update_patron_personal_key.php");
	$uppk = $results; 
	}
else
	{
	if($personal_key == $existing_key)	
		{
		#  Don't do anything	
		}
	else
		{
		include("includes/update_patron_personal_key.php");
		$uppk = $results;
		include("includes/update_patrons_team_code.php");
		$uptc = $results;
		}
	}

$verify_type = "set_personal_key";
include("includes/verify.php");
$veri = $results;
?>
<html>
<head>
<title></title>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>
personal<input id="personal_key" type="text" value="<?php echo($personal_key); ?>" />
existing<input id="existing_key" type="text" value="<?php echo($existing_key); ?>" /><br />
Update Patron Personal Key
<textarea id="t" style="width: 100%; height: 100px; display: block;"><?php print_r($uppk); ?></textarea>
Update Patrons Team Code
<textarea id="t" style="width: 100%; height: 100px; display: block;"><?php print_r($uptc); ?></textarea>
Verify
<textarea id="t" style="width: 100%; height: 100px; display: block;"><?php print_r($results); ?></textarea>
</body>
</html>
<script language="javascript" type="text/javascript">
var msg = "Personal Key saved and verified!";
Message_reload(msg);
</script>