

<div id="inst_new_member_0"><center><h3>Pay Your Sponsors</h3></center>
<ul>
	<li>You must first pay your sponsors, this gives you full access to this page.</li>
	<li><b>Required Items - </b> 4 envelopes, 4 stamps, payment coupons, 4 
  greeting cards, 3 $1.00 bills and a $10.00 bill or money order</li>
	<li>Access your <a target="_blank" title="Click here to access your payment coupons"
href="includes/send_with_payment.php?id=<?php echo($id); ?>&level=<?php echo($level); ?>">
Payment Coupons</a></li>
	<li>From your browser, click the print button or</li>
	<li>From your browser menu select print</li>
	<li>Pay each sponsor (below) then click the sponsor's Verify button</li>
</ul>
</div>

<table class="pay_out_table" cellpadding="5" cellspacing="0" border="1">
		<tr>
			<td valign="top" style="width: 80px;"><b>Sponsor1</b></td>
			<td valign="top" style="width: 300px;">
				1)&nbsp;&nbsp;&nbsp;<a href="http://www.nhcs.k12.nc.us/parsley/curriculum/postal/envelope.html#address"
						   target="_blank" title="Click here to see how to properly address an envelope">
						Prepare envelope</a> with address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/BD21300_.GIF" /><br />
					
				2)&nbsp;&nbsp;&nbsp;Insert greeting card<br />
				3)&nbsp;&nbsp;&nbsp;Insert Sponsor1 payment coupon<br />   
				<center><font color="blue"><b>
        <?php echo($sponsor1); ?>
        </b></font></center>
				4)&nbsp;&nbsp;&nbsp;Insert $1.00 into envelope and seal<br />
				5)&nbsp;&nbsp;&nbsp;Send envelope in the mail
        
			</td>
			<td valign="top" style="width: 200px; background-color: white;">
				<div style="height: 100%; overflow: auto;">
				<?php echo($sponsor1_address); ?>
				</div>
			</td>
			<td valign="top" style="width: 60px; background-color: white;">
				<input type="button" value="Verify" id="btn_pay1_done" onclick="pay_done(1);"
					   title="Click here to verify that you have sent payment to your sponsor1" 
             <?php 
             if($c1 == "true")
              {
              echo("style='display: none;'");
              }
             else
              {
              echo("style='display: block;'");
              } ?>/>
				<img src="images/done.gif" width="50px" id="pay1_done" <?php 
             if($c1 == "true")
              {
              echo("style='display: block;'");
              }
             else
              {
              echo("style='display: none;'");
              } ?> />
			</td>
		</tr>
		<tr>
			<td valign="top" style="width: 80px;"><b>Sponsor2</b></td>
			<td valign="top" style="width: 300px;">
				1)&nbsp;&nbsp;&nbsp;<a href="http://www.nhcs.k12.nc.us/parsley/curriculum/postal/envelope.html#address"
						   target="_blank" title="Click here to see how to properly address an envelope">
						Prepare envelope</a> with address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/BD21300_.GIF" /><br />
				2)&nbsp;&nbsp;&nbsp;Insert greeting card<br />
				3)&nbsp;&nbsp;&nbsp;Insert Sponsor2 payment coupon<br /> 
				<center><font color="blue"><b>
        <?php echo($sponsor2); ?>
        </b></font></center>
				4)&nbsp;&nbsp;&nbsp;Insert $1.00 into envelope and seal<br />
				5)&nbsp;&nbsp;&nbsp;Send envelope in the mail
			</td>
			<td valign="top" style="width: 200px; background-color: white;">
				<div style="height: 100%; overflow: auto;">
				<?php echo($sponsor2_address); ?>
				</div>
			</td>
			<td valign="top" style="width: 60px; background-color: white;">
			
				<input type="button" value="Verify" id="btn_pay2_done" onclick="pay_done(2);"
					   title="Click here to verify that you have sent payment to your sponsor2" 
             <?php 
             if($c2 == "true")
              {
              echo("style='display: none;'");
              }
             else
              {
              echo("style='display: block;'");
              } ?>/>
				<img src="images/done.gif" width="50px" id="pay2_done" <?php 
             if($c2 == "true")
              {
              echo("style='display: block;'");
              }
             else
              {
              echo("style='display: none;'");
              } ?> />
			</td>
		</tr>
		<tr>
			<td valign="top" style="width: 80px;"><b>Sponsor3</b></td>
			<td valign="top" style="width: 300px;">
				1)&nbsp;&nbsp;&nbsp;<a href="http://www.nhcs.k12.nc.us/parsley/curriculum/postal/envelope.html#address"
						   target="_blank" title="Click here to see how to properly address an envelope">
						Prepare envelope</a> with address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/BD21300_.GIF" /><br />
				2)&nbsp;&nbsp;&nbsp;Insert greeting card<br />
				3)&nbsp;&nbsp;&nbsp;Insert Sponsor3 payment coupon<br /> 
				<center><font color="blue"><b>
        <?php echo($sponsor3); ?>
        </b></font></center>
				4)&nbsp;&nbsp;&nbsp;Insert $1.00 into envelope and seal<br />
				5)&nbsp;&nbsp;&nbsp;Send envelope in the mail
			</td>
			<td valign="top" style="width: 200px; background-color: white;">
				<div style="height: 100%; overflow: auto;">
				<?php echo($sponsor3_address); ?>
				</div>
			</td>
			<td valign="top" style="width: 60px; background-color: white;">
				<input type="button" value="Verify" id="btn_pay3_done" onclick="pay_done(3);"
					   title="Click here to verify that you have sent payment to your sponsor3" <?php 
             if($c3 == "true")
              {
              echo("style='display: none;'");
              }
             else
              {
              echo("style='display: block;'");
              } ?>/>
				<img src="images/done.gif" width="50px" id="pay3_done" <?php 
             if($c3 == "true")
              {
              echo("style='display: block;'");
              }
             else
              {
              echo("style='display: none;'");
              } ?> />
			</td>
		</tr>
		<tr>
			<td valign="top" style="width: 80px;"><b>Sponsor4</b></td>
			<td valign="top" style="width: 300px;">
				1)&nbsp;&nbsp;&nbsp;<a href="http://www.nhcs.k12.nc.us/parsley/curriculum/postal/envelope.html#address"
						   target="_blank" title="Click here to see how to properly address an envelope">
						Prepare envelope</a> with address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/BD21300_.GIF" /><br />
				2)&nbsp;&nbsp;&nbsp;Insert greeting card<br />
				3)&nbsp;&nbsp;&nbsp;Insert Sponsor4 payment coupon<br />
				<center><font color="blue"><b>
        <?php echo($sponsor4); ?>
        </b></font></center>
				4)&nbsp;&nbsp;&nbsp;Insert $10.00 into envelope and seal<br />
				5)&nbsp;&nbsp;&nbsp;Send envelope in the mail
			</td>
			<td valign="top" style="width: 200px; background-color: white;">
				<div style="height: 100%; overflow: auto;">
				<?php echo($sponsor4_address); ?>
				</div>
			</td>
			<td valign="top" style="width: 60px; background-color: white;">
				<input type="button" value="Verify" id="btn_pay4_done" onclick="pay_done(4);"
					   title="Click here to verify that you have sent payment to your sponsor4" <?php 
             if($c4 == "true")
              {
              echo("style='display: none;'");
              }
             else
              {
              echo("style='display: block;'");
              } ?>/>
				<img src="images/done.gif" width="50px" id="pay4_done" <?php 
             if($c4 == "true")
              {
              echo("style='display: block;'");
              }
             else
              {
              echo("style='display: none;'");
              } ?> />
			</td>
		</tr>
	</table>