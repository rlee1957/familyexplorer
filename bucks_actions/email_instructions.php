<?php
$idx = $_SESSION["id"];
$email = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<meta name="generator" content="PSPad editor, www.pspad.com">
<link rel='stylesheet' type='text/css' href='../bucks/css/new_member.css' />
<link rel='stylesheet' type='text/css' href='../bucks/css/menu.css' />
<link rel='stylesheet' type='text/css' href='../bucks/css/modal_popup.css' />
<link rel='stylesheet' type='text/css' href='../bucks/css/page.css' />
<title>CA$H-4-U</title>
<script language="javascript" type="text/javascript" 
        src="../bucks/javascripts/ajax.js"></script>
<script language="javascript" type="text/javascript" 
        src="../bucks/javascript/dashboard.js"></script>
</head>
<body>
<br />
<fieldset class="information">
	<legend>
		<table>
			<tr>
				<td>
					<img src="../bucks/images/cash4u.png" alt="CA$$$H" />
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;Email verification sent to <?php echo($email); ?>.
				</td>
			</tr>
		</table>
	</legend>
	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;An email has just been sent to <?php echo($email); ?>. It could take up to 15 minutes for you to receive the email. If you do not receive the email within 15 minutes, check your (spam / junk) folder.
	</p>
	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;When the email arrives, please do not reply. You will be given further instructions in the email.
	</p>
	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;If you forget your username or password, your email will be used to send you that information. Also important announcements, notifications and warnings will be sent to you via your email address.
	</p>
	<br />
	
	<form method="post" target="server_results" action="../bucks_actions/send_verification_email.php" id="email_form">
		<input type=hidden id="email" name="email" value="<?php echo($email); ?>" />
		<input type=hidden id="idx" name="idx" value="<?php echo($_SESSION["id"]); ?>" />
		<input type="submit" 
			   value="Send Again" 
		       class="btn btn-custom" />
	</form>
</fieldset>

<?php
include("../bucks/includes/work.php");
?>
</body>
</html>