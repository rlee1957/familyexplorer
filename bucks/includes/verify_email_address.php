<?php

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
        src="javascripts/ajax.js"></script>
<script language="javascript" type="text/javascript" 
        src="js/dashboard.js"></script>
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
					&nbsp;&nbsp;&nbsp;Please verify your email address.
				</td>
			</tr>
		</table>
	</legend>
	<input type=hidden id="id" name="id" value="<?php echo($_SESSION["id"]); ?>" />
	<table cellspacing=0 cellpadding=5>
		<tr>
			<td><b>Your Email Address</b></td>
			<td>
				<form id="verify_email_form"
					  name="verify_email_form"
					  target="server_results"
					  action="../bucks_actions/send_verification_email.php"
					  method="post">
				<input type=hidden id="email_patron_id" name="email_patron_id" value="<?php echo($_SESSION["id"]); ?>" />
				<input type="text" class="inpt"
					   id="email" 
					   name="email"
					   placeholder="Email Address Here"
					   value="<?php echo($patron["email"]); ?>" />
				</form>
			</td>
			<td valign="bottom" style="margin-bottom: 10px;">
				<input type=button value="Verify Email" onclick="verify_email();"  class="btn btn-custom" />
			</td>
			<td valign="bottom" style="margin-bottom: 10px;">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan=4>
				This email address has not been verified. Ensure that the email address is correct and click the "Verify Email" button. Doing so will send an automated email to the email address above. If you do not receive an email within 15 minutes, check your spam or junk email folder.
			</td>
		</tr>
		<tr>
			<td colspan=4 align=center>
				<?php 
				include("../bucks/includes/logout_button.php");
				?>	
			</td>
		</tr>	
	</table>
</fieldset>
<form method="post" target="server_results" action="../bucks_actions/verify_email.php" id="email_form">
<input type=text id="db_email" name="db_email" />
</form>
<?php 
include("includes/work.php");
?>
</body>
</html>
<?php 
exit(); 
?>
