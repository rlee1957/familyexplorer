<fieldset class="information">
	<legend>
		Step 2 ~ IDENTITY
	</legend>
	<input type=hidden id="id" name="id" />
	<table cellspacing=0 cellpadding=5>
		<tr>
			<td><b>First Name</b></td>
			<td>
				<input type="text" class="inpt"
					   id="first_name" 
					   name="first_name"
					   onchange="showAddress();changeMade('Yes');" 
					   onkeyup="showAddress()"
					   placeholder="First Name Here" />
			</td>
			<td><img id="firstname_check" src="../_common/images/check_off.png" /></td>
			<td valign="bottom" style="margin-bottom: 10px;">
				<span id="first_name_instructions" class="instruction">Enter your first name</span>
			</td>
		</tr>
		<tr>
			<td><b>Middle Name</b></td>
			<td>
				<input type="text"  class="inpt"
					   id="middle_name" 
					   name="middle_name"
					   placeholder="Middle Name Here"
					   onchange="showAddress()" 
					   onkeyup="showAddress();changeMade('Yes');" />
			</td>
			<td><img id="middlename_check" src="../_common/images/check_off.png" /></td>
			<td valign="bottom" style="margin-bottom: 10px;">
				<span id="middle_name_instructions" class="instruction">Enter your middle name</span>
			</td>
		</tr>
		<tr>				
			<td><b>Last Name</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="last_name" 
					   name="last_name"
					   placeholder="Last Name Here"
					   onchange="showAddress()" 
					   onkeyup="showAddress();changeMade('Yes');" />
			</td>
			<td><img id="lastname_check" src="../_common/images/check_off.png" /></td>
			<td valign="bottom" style="margin-bottom: 10px;">
				<span id="last_name_instructions" class="instruction">Enter your last name</span>
			</td>
		</tr>
		</tr>
		<tr class="information">
			<td><b>User Name</b></td>
			<td>
				<?php include("../_common/environment/target.php"); ?>
				<form id="username_form" 
					  name="username_form" 
					  action="../bucks_actions/check_user_name.php" 
					  method="post" 
					  target="<?php echo($target); ?>">
					<input type="text" class="inpt" 
						   id="user_name" 
						   name="user_name"
						   placeholder="Make Up A User Name" 
						   onchange="userNameChange(this.value);changeMade('Yes');" />
				</form>
			</td>
			<td><img id="username_check" src="../_common/images/check_off.png" /></td>
			<td><span id="user_name_instructions" class="instruction">Enter a user name</span></td>
		</tr>
		<tr class="information">
			<td><b>Password</b></td>
			<td>
				<input type="password" class="inpt" 
					   id="member_password" 
					   name="member_password"
					   placeholder="Make Up A Password"
					   onchange="changeMade('Yes');" />
			</td>
			<td><img id="password_check" src="../_common/images/check_off.png" /></td>
			<td><span id="password_instructions" class="instruction">Enter password</span></td>
		</tr>
		<tr class="information">
			<td><b>Verify</b></td>
			<td>
				<input type="password" class="inpt" 
					   id="member_password_verify" 
					   placeholder="Verify Password"
					   onchange="changeMade('Yes');" />
			</td>
			<td><img id="vpassword_check" src="../_common/images/check_off.png" /></td>
			<td><span id="verify_instructions" class="instruction">Re-enter password</span></td>
		</tr>
		<tr class="information">
			<td><b>email Address</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="email" 
					   name="email"
					   placeholder="Email Address"
					   onchange="changeMade('Yes');" />
			</td>
			<td><img id="email_check" src="../_common/images/check_off.png" /></td>
			<td><span id="email_instructions" class="instruction">Enter your email address</span></td>
		</tr>
		<tr>
			<td colspan=4 align=center>
				<a href="javascript: setup_click(1);">Previous</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="javascript: setup_click(3);">Next</a>
			
			</td>
		</tr>
	</table>
</fieldset>