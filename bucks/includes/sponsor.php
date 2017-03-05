<fieldset class="information">
	<legend>
		Step 4 ~ TEAM
	</legend>
	<table>    
		<tr class="information">
			<td><b>Team code</b></td>
			<td>
				<form id="promo_form" 
					  name="promo_form" 
					  action="../bucks_actions/check_promo_code.php" 
					  method="post" 
					  target="<?php echo($target); ?>">
					<input type="text" id="team_code" 
					       name="team_code"
						   onchange="document.getElementById('team_code_verified').value = 'false';changeMade('Yes');" 
						   placeholder="Enter Team Code Here" 
						   class="inpt" />
				</form>
			</td>
			<td>
				<img id="team_check" src="../_common/images/check_off.png" />
				<input type=hidden id="team_code_verified" name="team_code_verified" value="false" />
				<form id="get_promo_form" 
					  name="get_promo_form" 
					  action="../bucks_actions/get_promo_code.php" 
					  method="post" 
					  target="<?php echo($target); ?>">
				</form>
			</td>
			<td>
				<span id="sponsor_instructions" class="instruction">
					Enter your team code
				</span>
			</td>
		</tr>
		<tr class="information">
			<td>&nbsp;</td>
			<td align=center colspan=2>
				<a href="javascript: checkPromoCode();">Check Team Code</a>
			</td>
			<td>
				<span id="sponsor_instructions" class="instruction">
					Click "Check Team Code" link to verify your team code
				</span>
			</td>
		</tr>
		<tr class="information" align=center>
			<td>&nbsp;</td>
			<td colspan=2>
				<a href="javascript: getPromoCode();">Get A Team Code</a>
			</td>
			<td>
				<span id="sponsor_instructions" class="instruction">
					If you do not have a team code, then click "Get A Team Code" ling
				</span>
			</td>
		</tr>
		<tr class="information" style="height: 71px">
			<td colspan=4>
				<span id="sponsor_address">&nbsp;</span>
			</td>
		</tr>
		<tr class="information" style="height: 71px">
			<td colspan=4>
				<span id="sp_user_name">&nbsp;</span><br />
				<span id="sp_sponsor">&nbsp;</span>
			</td>
		</tr>
		<tr>
			<td colspan=4 align=center>
				<a href="javascript: setup_click(3);">Previous</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="javascript: save();">Finish</a>
			</td>
		</tr>
		<tr>
			<td colspan=4>
				<form id="form_next" action="dashboard.php" method="post" target="_self">
					<input type="hidden" id="uid" />
				</form>
			</td>
		</tr>
	</table>
</fieldset>
<form id="new_member"
	  name="new_member"
	  method="post"
	  action="../bucks_actions/add_member.php"
	  target="<?php echo($target); ?>">
	<input type=hidden id="db_idx" name="db_idx" value="" />
	<input type=hidden id="db_team_code" name="db_team_code" value="" />
	<input type=hidden id="db_username" name="db_username" value="" />
	<input type=hidden id="db_password" name="db_password" value="" />
	<input type=hidden id="db_email" name="db_email" value="" />
	<input type=hidden id="db_first_name" name="db_first_name" value="" />
	<input type=hidden id="db_middle_name" name="db_middle_name" value="" />
	<input type=hidden id="db_last_name" name="db_last_name" value="" />
	<input type=hidden id="db_address1" name="db_address1" value="" />
	<input type=hidden id="db_address2" name="db_address2" value="" />
	<input type=hidden id="db_city" name="db_city" value="" />
	<input type=hidden id="db_state" name="db_state" value="" />
	<input type=hidden id="db_zip" name="db_zip" value="" />
	<input type=hidden id="db_role" name="db_role" value="patron" />
</form>