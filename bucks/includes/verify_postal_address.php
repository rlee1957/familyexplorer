<?php
$del = "";
$postal = "";
if(trim($patron["first_name"]) != "")
	{ 
	$postal = $patron["first_name"];
	$del = " ";
	}
if(trim($patron["middle_name"]) != "")
	{ 
	$postal .= $del.$patron["middle_name"];
	$del = " ";
	}
if(trim($patron["middle_name"]) != "")
	{ 
	$postal .= $del.$patron["last_name"];
	}
if(trim($postal) != "")
	{
	$del .= "<br />";
	}
if(trim($patron["address2"]) != "")
	{ 
	$postal .= $del.$patron["address2"];
	}
if(trim($patron["address1"]) != "")
	{ 
	$postal .= $del.$patron["address1"];
	}
if(trim($patron["city"]) != "")
	{ 
	$postal .= $del.$patron["city"];
	$del = ", ";
	}
if(trim($patron["state"]) != "")
	{ 
	$postal .= $del.$patron["state"];
	$del = " ";
	}
if(trim($patron["zip"]) != "")
	{ 
	$postal .= $del.$patron["zip"];
	}
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
<title>CA$H-4-U</title>
<script language="javascript" type="text/javascript" 
        src="javascripts/ajax.js"></script>
<script language="javascript" type="text/javascript" 
        src="js/dashboard.js"></script>
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
					&nbsp;&nbsp;&nbsp;Please verify your postal information.
				</td>
			</tr>
		</table>
	</legend>
	<input type=hidden id="id" name="id" value="<?php echo($_SESSION["id"]); ?>" />
	<table cellspacing=0 cellpadding=5>
		<tr>
			<td><b>Your First Name</b></td>
			<td>
				<input type="text" class="inpt"
					   id="first_name" 
					   name="first_name"
					   onchange="address_change();" 
					   onkeyup="address_change();"
					   placeholder="First Name Here"
					   value="<?php echo($patron["first_name"]); ?>" />
			</td>
			<td rowspan=9>
				<div id="formatted_address" 
					 style="border-style: solid; border-width: 1px;padding: 5px; color:#0000ff;" >
				<?php echo($postal); ?>
				</div>
				<br />
				<br />
				<table>
					<tr>
						<td>
							<label for="postal_verify" style="cursor: pointer;">
								Postal Information Is Correct&nbsp;&nbsp;
							</label>
						</td>
						<td>
							<input type=checkbox id="postal_verify" name="postal_verify"
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
			</td>
		</tr>
		<tr>
			<td><b>Middle Name</b></td>
			<td>
				<input type="text"  class="inpt"
					   id="middle_name" 
					   name="middle_name"
					   placeholder="Middle Name Here"
					   onchange="address_change();" 
					   onkeyup="address_change();" 
					   value="<?php echo($patron["middle_name"]); ?>" />
			</td>
		</tr>
		<tr>				
			<td><b>Last Name</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="last_name" 
					   name="last_name"
					   placeholder="Last Name Here"
					   onchange="address_change();" 
					   onkeyup="address_change();" 
					   value="<?php echo($patron["last_name"]); ?>" />
			</td>
		</tr>
		<tr class="information">
			<td>
				<b>Enter your postal Address</b>
			</td>
			<td>
				<input type="text"  class="inpt"
					   id="address1" 
					   name="address1"
					   Placeholder="Postal Address Here"
					   onchange="address_change();" 
					   onkeyup="address_change();" 
					   value="<?php echo($patron["address1"]); ?>" />
			</td>
		</tr>
		<tr class="information">
			<td><b>Additional Address Information</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="address2" 
					   name="address2"
					   placeholder="Additional Information Here"
					   onchange="address_change();" 
					   onkeyup="address_change();" 
					   value="<?php echo($patron["address2"]); ?>" />
			</td>
		</tr>
		<tr class="information">
			<td><b>City</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="city" 
					   name="city"
					   placeholder="City Here"
					   onchange="address_change();" 
					   onkeyup="address_change();" 
					   value="<?php echo($patron["city"]); ?>" />
			</td>
		</tr>
		<tr class="information">
			<td><b>State</b></td>
			<td>
				<select id="state" 
						name="state" 
						onchange="address_change();" 
						class="sele">
					<option value="" disabled>- Select State -</option>
<?php
include("includes/states.php");
$states;
foreach($states as $ab => $full)
	{
	$selected = "";
	if($patron["state"] == $ab){ $selected = " selected"; }	
	echo("
					<option value='".$ab."'".$selected.">".$full."</option>
");
	}
?>					
				</select>
			</td>
		</tr>
		<tr class="information">
			<td><b>Postal Code</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="zip" 
					   name="zip"
					   placeholder="Postal Code Here"
					   onchange="address_change();" 
					   onkeyup="address_change();" 
					   value="<?php echo($patron["zip"]); ?>" />
			</td>
		</tr>
		<tr class="information">
			<td colspan=2 align=center>
				<input type="button" value="Save" onclick="save_postal()" class="btn btn-custom" />
				<?php 
				include("../bucks/includes/logout_button.php");
				?>
			</td>
		</tr>
	 </table>
</fieldset>
<form method="post" target="server_results" action="../bucks_actions/save_postal.php" id="postage_form">
<input type=hidden id="db_first_name" name="db_first_name" />
<input type=hidden id="db_middle_name" name="db_middle_name" />
<input type=hidden id="db_last_name" name="db_last_name" />
<input type=hidden id="db_address1" name="db_address1" />
<input type=hidden id="db_address2" name="db_address2" />
<input type=hidden id="db_city" name="db_city" />
<input type=hidden id="db_state" name="db_state" />
<input type=hidden id="db_zip" name="db_zip" />
</form>
<?php
include("includes/work.php");
?>
</body>
</html>
<?php
exit();
?>