<div id="verify_contributions" style="display: none;">
<div class="noprint"><a href="javascript: show_div('advance_to_tier');">BACK</a></div>
<fieldset class="information">
	<legend>
		<table>
			<tr>
				<td>
					<img src="images/cash4u.png" alt="CA$$$H" />
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;Verify your contributions
				</td>
			</tr>
		</table>
	</legend>
	<div style="font-weight: bold; padding: 5px;">
		By checking (clicking) these checkboxes, it is as if you are saying:<br /> 
		<span style="color: #006600; font-weight: bold; font-style: italic;">"I have prepared a postal envelope with:
		<br />the appropriate contribution amount,
		<br />a coupon or a short note that requests the benefactor (recipient) to verify receipt using code <span style="color: #0c0cff; font-style: italic;"><?php echo($patron["personal_key"]); ?></span>,
		<br />and a thank you card (optional).
		<br />Then I applied postage and mailed the postage envelope."</span><br /><br />
		<span style="font-weight: normal;">Click each of the checkboxes and then click the Submit button to continue.</span>
	</div>
<?php
foreach($benefactors as $key => $idx)
	{
	echo('
<br />
<div id="verify_'.$key.'" style="padding: 0;">
	<table cellpadding=10 cellspacing=0>
		<tr>
			<td valign=middle align=center>
				<label for="contribution_verify_'.$key.'" style="cursor:  pointer;">
					<table>
						<tr>
							<td>
								$'.$contributions[$key].' SENT TO:
							</td>
							<td>
								'.$addresses[$key].'
							</td>
						</tr>
					</table>
				</label>
			</td>
			<td valign=middle align=center>
				<input type=checkbox 
					   id="contribution_verify_'.$key.'" 
					   name="contribution_verify_'.$key.'"
					   style="background-color: #000000; 
							  color: #ffffff; 
							  -ms-transform: scale(2); /* IE */
							  -moz-transform: scale(2); /* FF */
							  -webkit-transform: scale(2); /* Safari and Chrome */
							  -o-transform: scale(2); /* Opera */
							  padding: 10px;
							  cursor: pointer;" />
			</td>
		</tr>
	</table>
</div>
<footer></footer>
');
	}
?>
	<div style="font-weight: bold; padding: 5px;">
		<input type="button" value="Submit" class="btn btn-custom action" onclick="verify_contributions();" />
		<a href="destroy_session.php" target="_self"><input type="button" value="Log Off" class="btn btn-custom action" /></a>
	</div>
	<form id="vc" name="vc" action="../bucks_actions/save_contributions.php" target="<?php echo($target); ?>" method="post"></form>
</fieldset>
</div>