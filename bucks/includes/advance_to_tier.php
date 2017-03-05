<?php

include("../_common/environment/target.php");

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
<link rel='stylesheet' type='text/css' href='css/media.css' />
<title>CA$H-4-U</title>
<script language="javascript" type="text/javascript" 
        src="javascripts/advance_to_tier.js"></script>
</head>
<body class="noprint">
<br />
<div id="advance_to_tier" class="noprint">
<fieldset class="information">
	<legend>
		<table>
			<tr>
				<td>
					<img src="images/cash4u.png" alt="CA$$$H" />
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;Advance to Tier <?php echo($patron["level"] + 1); ?>
				</td>
			</tr>
		</table>
	</legend>
	<input type=hidden id="id" name="id" value="<?php echo($_SESSION["id"]); ?>" />
	<div style="font-weight: bold; padding: 5px;">Instructions:</div>
	<div style="padding: 5px;">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order for you to be eligible to receive tier <?php echo($patron["level"] + 1); ?> contributions, you must be a teir <?php echo($patron["level"] + 1); ?> contributer. You will need $<?php echo($total); ?> dollars, 4 envelopes, 4 stamps and 4 thank you cards (optional). 
	</p>
	<p>
	If you have a printer then click here &#8594; <a href="javascript: show_div('print_instructions');" target="_blank">Print Instructions</a> to go to a printable instructions page. Follow the instructions.
	</p>
	
	</p>
	<p>
	If you do NOT have a printer, that's OK, just click here &#8594; <a href="javascript: show_div('show_instructions');" target="_blank">Detailed Instructions</a> to go to a detailed instructions page. Follow the instructions.
	</p>
	<p>
	If you have mailed your contributions then click here &#8594; <a href="javascript: show_div('verify_contributions');" target="_blank">Verify Contributions</a> to finish.
	</p>
	</div>
	<?php
	include("includes/logout_button.php");
	?>
</fieldset>
</div>
<?php 
include("includes/send_with_contributions.php");
include("includes/show_contribution_instructions.php");
include("includes/verify_contributions.php");
?>
<iframe style="position: absolute; top: 0: left: 0; height: 100px; width: 95%; display: none; background-color: white;" 
		id="server_results" 
		name="server_results"></iframe>   
</body>
</html>
<?php

exit();

?>
