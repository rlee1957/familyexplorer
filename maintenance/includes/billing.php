<?php
/*echo("


");
print_r($order_info);
echo("


".$idx);
exit();*/
?>
<table>
	<tr>
		<td align=center><b>Prefix</b></td>
		<td align=center><b>First Name</b></td>
		<td align=center><b>Middle Name</b></td>
		<td align=center><b>Last Name</b></td>
	</tr>
	<tr>
		<td><?php 
			# Prefix
$ar = array();
$ar["Mr"] = "Mr";
$ar["Mrs"] = "Mrs";
$ar["Ms"] = "Ms";
$select_options = $ar;
$select_id = "";
$select_name = ""; 
$select_value = ""; 
$select_title = "";
$select_onchange = "";
$select_onclick = "";
$select_onfocus = "";
$select_ondblclick = "";
$select_onfocus = "";
$select_onblur = ""; 
$select_class = "";
$select_disabled = "";
$select_readonly = "";
$select_required = "";
$select_option_1_value = "";
$select_option_1_label = "Prefix";
$select_option_1_disabled = " disabled ";
$select_default = "";
include("includes/objects/drop_down_combo_box.php");
	  ?></td>
		<td><?php  
			# First Name
$input_type = "";
$input_id = "";
$input_name = ""; 
$input_value = $order_info["recordset"][0]["o_bfname"]; 
$input_placeholder = "";
$input_title = "";
$input_onchange = "";
$input_onclick = "";
$input_onfocus = "";
$input_onkeyup = "";
$input_onkeydown = "";
$input_ondblclick = "";
$input_onfocus = "";
$input_onblur = ""; 
$input_class = "";
$input_minlength = "";
$input_disabled = "";
$input_readonly = "";
$input_required = "";
include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Middle Name
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Last Name
			$input_value = $order_info["recordset"][0]["o_blname"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Company</b></td>
		<td colspan=2><?php 
			# Company
			$input_value = $order_info["recordset"][0]["o_bcompany"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Address</b></td>
		<td colspan=2><?php 
			# Address 
			$input_value = $order_info["recordset"][0]["o_baddr1"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Address2</b></td>
		<td colspan=2><?php 
			# Address 2
			$input_value = $order_info["recordset"][0]["o_baddr2"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>City</b></td>
		<td colspan=2><?php 
			# City 
			$input_value = $order_info["recordset"][0]["o_bcity"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>State</b></td>
		<td colspan=2><?php 
			# State 
			$input_value = $order_info["recordset"][0]["o_bstate"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Zip Code</b></td>
		<td colspan=2><?php 
			# Zip Code 
			$input_value = $order_info["recordset"][0]["o_bzip"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Country</b></td>
		<td colspan=2><?php 
			# Country 
			$input_value = $order_info["recordset"][0]["o_country"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Phone #</b></td>
		<td colspan=2><?php 
			# Phone Number 
			$input_value = $order_info["recordset"][0]["o_bphone"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
	<tr>
		<td colspan=2><b>Email</b></td>
		<td colspan=2><?php 
			# Email Address
			$input_value = $order_info["recordset"][0]["o_bemail"]; 
			include("includes/objects/input.php");
		?></td>
	</tr>
</table>