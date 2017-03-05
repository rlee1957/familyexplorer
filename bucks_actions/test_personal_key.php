<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$retVal = "Does not exist.";
$personal_key = $_POST["personal_key"];
$sql = "select personal_key from patrons where personal_key = '".$personal_key."';";
include("../_common/environment/database.php");
$results = sql_shell($dbname, $sql);
if($results["recordcount"] > 0)
	{
	$retVal = "Already exists!";
	}
?>
<html>
<head><title></title></head>
<body>
<input id="results" type="text" value="<?php echo($retVal); ?>" />
<input id="personal_key" type="text" value="<?php echo($personal_key); ?>" />
<textarea id="t" style="width: 100%; height: 200px; display: block;"><?php print_r($results); ?></textarea>
</body>
</html>
<script language="javascript" type="text/javascript">
var newContent = document.getElementById("results").value;
var personal_key = document.getElementById("personal_key");
var msg = "Personal Key\n\n" + personal_key.value + "\n\nIs acceptable!";
var w;
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
if(newContent.indexOf("Already exists!") > -1)
	{
	msg = "Personal Key\n\n" + personal_key.value + "\n\nAlready exists!\n\nPlease try again.";
	alert(msg);
	w.personal_key.value = "";
	w.personal_key.focus();
	w.document.getElementById("personal_key_check").src = "../_common/images/check_off.png";  
	w.document.getElementById("personal_key_check").title = ""; 
	w.document.getElementById("key_valid").value = "false"; 
	}
else
	{
	title = "Personal Key is valid. Your new Personal Key is [" + personal_key.value + "]!";
	alert(title);
	w.document.getElementById("personal_key_check").src = "../_common/images/check_on.png";  
	w.document.getElementById("personal_key_check").title = title; 
	w.document.getElementById("key_valid").value = "true"; 
	}
</script>