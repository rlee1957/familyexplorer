<?php

?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo($patron["first_name"]); ?>'s Dashboard</title>
<link rel='stylesheet' type='text/css' href='css/dashboard_layout.css' />
<script src='javascripts/dashboard_layout.js' type='text/javascript'></script>
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
					&nbsp;&nbsp;&nbsp;(<?php echo($patron["first_name"]." ".$patron["last_name"]); ?>)'s Dashboard.
				</td>
			</tr>
		</table>
	</legend>


	<section class="options">
		<a href="javascript: show_content(0)" class="option">Instructions</a>
		<a href="javascript: show_content(1)" class="option">Postage Information</a>
		<a href="javascript: show_content(2)" class="option">My Promo Code</a>
		<a href="javascript: show_content(3)" class="option">Verify Email</a>
		<a href="javascript: show_content(4)" class="option">Advance to Level 1</a>
		<a href="javascript: show_content(5)" class="option">Invite Others</a>
		<a href="javascript: show_content(6)" class="option">Acknowledge Receipt</a>
		<input type="hidden" id="show_content_count" value=7 />
	</section>

<?php 
exit();
include("includes/db_content_instructions.php");
include("includes/db_content_postage_information.php");
include("includes/db_content_promo_code.php");
include("includes/db_content_verify_email.php");
include("includes/db_content_advance_to_level.php");
include("includes/db_content_invite_others.php");
include("includes/db_content_acknowledge_receipt.php"); 

?>

</fieldset>
</body>
</html>
<?php

?>