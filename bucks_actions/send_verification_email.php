<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");

$email_address = $_POST["email"];
$to = $email_address;
$subject = 'Email Verification for contributions4u.com';
$message = '
<html>
<body>
<center><h3>Please do not reply to this email.</h3></center>
<table>
	<tr>
		<td>
			<img src="http://contributions4u.com/bucks/images/cash4u.png" alt="\$4U" />
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;Please verify your email address.
		</td>
	</tr>
</table>
	<br />
	<br />
	<a href="http://contributions4u.com/bucks_actions/verify_email.php?email_address='.$email_address.'&idx='.$_SESSION["id"].'">
		<span style="color: #00ff00; font-weight: bold; font-size: 18pt;">
			Click Here To Verify This Email Address
		</span>
	</a>
	<br />
	<br />
	Or if the link above does not work, copy the web address below and paste in your browser:<br /><br />
	<span style="color: #00ff00; font-weight: bold; font-size: 18pt;">
		http://contributions4u.com/bucks_actions/verify_email.php?email_address='.$email_address.'&idx='.$_SESSION["id"].'
	</span>
	<br /><br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for your cooperation.<br /><br />
	<b><i>The contributions4u.com administration and management team.</i></b>
</body>
</html>
';
$headers = "From: donotreply@contributions4u.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $message, $headers);
echo($message);
?>

<html>
<head><title></title></head>
<body>
</body>
</html>
<script language="javascript" type="text/javascript">
var w;
var msg = "Verification email sent to <?php echo($email_address); ?>!";
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
alert(msg);
w.location.assign("email_instructions.php?email=<?php echo($email_address); ?>");
</script>