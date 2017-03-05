<p>Please enter your username and password here</p>
<?php include("../_common/environment/target.php"); ?>
<form id="login_form" 
	  name="login_form" 
	  action="../bucks_actions/check_logon.php" 
	  method="post" 
	  target="<?php echo($target); ?>">
<table>
	<tr>
		<td><label for="logon_user_name">User Name</label></td>
		<td>
			<input type="text" 
				   id="logon_user_name"
				   name="logon_user_name"
				   placeholder="User Name"
				   class=inpt />
		</td>
	</tr>
	<tr>
		<td><label for="logon_password">Password</label></td>
		<td>
			<input type="password" 
				   id="logon_password"
				   name="logon_password"
				   placeholder="password"
				   class="inpt"/>
		</td>
	</tr>
	<tr>
		<td colspan=2>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=2 align="right">
			<a href="javascript: checkLogon();">Log Me In</a>
		</td>
	</tr>
		<tr>
		<td colspan=2 align="right">
			<a href="javascript: checkLogon();">
				<span style="font-size; 8pt; font-style: italic;">
					Email me my login
				</span>
			</a>
			&nbsp;&nbsp;&nbsp;
			<a href="javascript: checkLogon();">
				<span style="font-size; 6pt; font-style: italic;">
					Reset My Login
				</span>
			</a>
		</td>
	</tr>
</table>
</form>