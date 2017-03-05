<h3>Sample Correspondence For <?php echo($full_name); ?></h3>

<a target="_blank"
href="includes/send_with_payment.php?id=<?php echo($id); ?>&level=<?php echo($level); ?>">
Coupons to send along with your payments</a><br />
<div style="display: <?php if($CanInvite == "Yes"){echo("block");}else{echo("none");}; ?>;">
<a target="_blank"
href="includes/invitations.php?id=<?php echo($id); ?>">
Sample Invitations</a><br />
<a target="_blank"
href="includes/email.php?id=<?php echo($id); ?>">
Sample email</a><br />
<a target="_blank"
href="includes/flyer.php?id=<?php echo($id); ?>">
Sample flyer</a><br />
</div>