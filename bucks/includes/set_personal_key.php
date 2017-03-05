<?php

include("../_common/environment/target.php");
$check = "../_common/images/check_off.png";
$title = "";
$validated = "false";
if(strlen($patron["personal_key"]) > 0)
	{
	$check = "../_common/images/check_on.png";	
	$title = "Personal Key is valid. Your Personal Key is [".$patron["personal_key"]."]!";
	$validated = "true";
	}

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<meta name="generator" content="PSPad editor, www.pspad.com">
<link rel='stylesheet' type='text/css' href='css/new_member.css' />
<link rel='stylesheet' type='text/css' href='css/menu.css' />
<link rel='stylesheet' type='text/css' href='css/modal_popup.css' />
<link rel='stylesheet' type='text/css' href='css/page.css' />
<title>CA$H-4-U</title>
<script language="javascript" type="text/javascript" 
        src="javascripts/personal_key.js"></script>
</head>
<body>
<br />
<fieldset class="information">
	<legend>
		<table>
			<tr>
				<td>
					<img src="images/cash4u.png" alt="CA$$$H" />
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;Please thoughtfully choose a personal key.
				</td>
			</tr>
		</table>
	</legend>
	<input type=hidden id="id" name="id" value="<?php echo($_SESSION["id"]); ?>" />
	<div style="font-weight: bold; float: left; padding: 5px;">Your personal key</div>
	<div style="float: left; padding: 5px;">
		<form id="personal_key_form"
			  name="personal_key_form"
			  target="<?php echo($target); ?>"
			  action="../bucks_actions/test_personal_key.php"
			  method="post">
			<input type=hidden id="patron_id" name="patron_id" value="<?php echo($_SESSION["id"]); ?>" />
			<input type=hidden id="existing_key" name="existing_key" value="<?php echo($patron["personal_key"]); ?>" />
			<input type=hidden id="key_valid" name="key_valid" value="<?php echo($validated); ?>" />
			<input type="text" class="inpt"
				   id="personal_key" 
				   name="personal_key"
				   placeholder="Personal Key Here"
				   onkeyup="personal_key_change();"
				   onchange="personal_key_change();"
				   value="<?php echo($patron["personal_key"]); ?>" />
		</form>
	</div>
	<div style="float: left; padding: 5px;">
		<img id="personal_key_check" src="<?PHP echo($check); ?>" />
	</div>
	<div style="float: left; padding: 5px;">
		<a href="javascript: test_personal_key();" style="float: left;">Test Personal Key</a>
	</div>
	<!--
	<div style="float: left; padding: 5px;">
		<a href="javascript: get_a_personal_key();" style="float: left;">Get A Personal Key</a>
	</div>
	-->
<?php
if(strlen($patron["personal_key"]) > 0)
	{
?>
	<div style="float: left; padding: 5px;">
		<a href="javascript: keep_my_personal_key();" style="float: left;">Keep My Personal Key</a>
	</div>
<?php
	}
?>
	<div style="clear: both; padding: 5px;">
	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your <span style="color: #000099; font-weight: bold;">Personal Key</span> is what others, whom you invite to join, will enter as their <u>Team Code</u> when signing up. This makes them part of your team and determines who their <span style="font-weight: bold; cursor:  pointer'" title="Those who will receive their contributions" >benefactors</span> are.
	</p>
	<p>
		<ol>
<?php
if(strlen($patron["personal_key"]) > 0)
	{
?>
			<li><b>You already have a <span style="color: #0000ff; font-weight: bold;">Personal Key</span></b>, so if you wish, you can change it now. You will not be allowed to change your <span style="color: #0000ff; font-weight: bold;">Personal Key</span> again, after you click the "Save" button. So be thoughtful and selective.</li>
			<li>Click the "Keep My Personal Key" link to save the existing <span style="color: #0000ff; font-weight: bold;">Personal Key</span> and continue.</li>
		
<?php
	}
else
	{
?>
			<li><b>You will not be allowed to change your <span style="color: #0000ff; font-weight: bold;">Personal Key</span> again</b>, after you click the "Save" button. So be thoughtful and selective.</li>
<?php		
	}
?>
			<li>Enter a <span style="color: #000099; font-weight: bold;">Personal Key</span> that is easy to spell and to remember.</li>
			<li>Click the "Test Personal Key" link. This is a unique key, so your entry will be compared with the database to ensure no one else is using that <span style="color: #0000ff; font-weight: bold;">Personal Key</span>.</li>
			<!--
			<li>You can click the [Get A Personal Key] link to have a <span style="color: #000099; font-weight: bold;">Personal Key</span> generated for you.</li>-->
			<li>When finished please click the "Save" button to proceed.</li>

		</ol>
		</p>
	</div>
	<div style="float: left; padding: 5px;">			
		<input type=button value="Save" onclick="save_personal_key();"  class="btn btn-custom" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	<div style="float: left; padding: 5px;">
		<input type="button" value="Log Off" class="btn btn-custom" />
	</div>
     
<textarea id="t" style="width: 100%; height: 200px; display: none;"></textarea>
</fieldset>
<iframe style="position: absolute; top: 0: left: 0; height: 100px; width: 95%; display: none; background-color: white;" 
		id="server_results" 
		name="server_results"></iframe>   
</body>
</html>
<?php

exit();

?>
