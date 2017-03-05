<div id="print_instructions" style="display: none;">
<div class="noprint">
	<a href="javascript: show_div('advance_to_tier');">BACK</a>&nbsp;
	<a href="javascript: window.print();">
		<img src="../_common/images/click-here-to-print.png" alt="Click here to print this page" />
	</a><br /><br />
	<center><h3>Instructions for those with printer</h3></center>
	<p>
		<ul>
			<li>Print this page by clicking the "Click here to Print this page!" image above. 4 pages should print.</li>
			<li>Begin by ensuring you have the necessary materials.
				<ul>
					<li>4 envelopes</li>
					<li>4 stamps</li>
					<li>4 Thank you cards (Optional).</li>
					<li>$<?php echo($total); ?> cash.</li>
				</ul>
			</li>
			<li>For each printed page, do the following:
				<ol>
					<li>Note the Name, Address and Amount on the page.</li>
					<li>Cut out the red coupon.</li>
					<li>Address an envelope as per the Send to box.</li>
					<li>Place a stamp on the envelope.</li>
					<li>Place contribution amount, as shown on coupon, in the envelope.</li>
					<li>Place coupon in the envelope.</li>
					<li>Place a Thank You card in the envelope (optional).</li>
					<li>Seal the envelope and send.</li>
				</ol>
			</li>
			<li>After you have completed these instructions, you should have mailed off 4 letters, containing coupon, contribution and Thank You card (optional).</li>
			<li>Next you need to verify your contributions by clicking the <a href="javascript: show_div('advance_to_tier');">BACK</a> link at the top of this page, and then click the <a href="javascript: show_div('verify_contributions');" target="_blank">Verify Contributions</a> link.</li>
		</ul>
	</p>
	<br /><br /><br />
</div>
<div  class="yesprint" style="background-color: #FFFFFF;">

<?php
foreach($benefactors as $key => $idx)
	{
	echo('
<br />
<div id="contribution_1" style="padding: 0; page-break-after: always;">
	<table cellpadding=25 cellspacing=0>
		<tr>
			<td valign=middle align=center>
				<b>Coupon</b>
			</td>
			<td>
				<div style="width: 430px; height: 215px; text-align: center; 
							padding: 0;">	
					<img src="../bucks/images/send_with_payment.jpg" />
					<div style="position: relative; top: -185px;">
						<span>'.$statement.'</span><br />  <br />
						<span style="font-size: 60">'.$patron["personal_key"].'</span><br /> <br />
						<span>Contribution of $'.$contributions[$key].'</span> 
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign=middle align=center><b>Send to box</b></td>
			<td valign=left align=top style="border-style: solid; border-width: 1px; padding: 25px;">
				'.$addresses[$key].'
			</td>
		</tr>
	</table>
</div>
<footer></footer>
');
	}
?>
</div>
</div>