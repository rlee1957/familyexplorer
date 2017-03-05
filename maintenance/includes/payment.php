<?php
/*
Item
Count
Item Price
Taxable Price
Amount
Taxable Amount
Tax Rate
Tax
Total
*/
$detail = array();
foreach($line_item_info["recordset"] as $key => $row)
	{
	$ar = array();
	$ar["item"] = $row["li_bkdesc"];
	$ar["count"] = $row["li_pqty"];
	$ar["price"] = $row["li_bkpcost"];	
	$ar["txbl_price"] = $row["li_bkpcost"];
	$ar["taxrate"] = $order_info["recordset"][0]["o_taxrate"];
	if(!isset($detail[$ar["item"]]))
		{
		$detail[$ar["item"]] = $ar;
		}
	else
		{
		$detail[$ar["item"]]["count"] += $ar["count"];	
		}
	}
?>
<table>
	<tr>
		<td align=center colspan=9><b>Details</b></td>
	</tr>
	<tr>
		<td align=center><b>Item</b></td>
		<td align=center><b>Count</b></td>
		<td align=center><b>Item<br />Price</b></td>
		<td align=center><b>Amount</td>
		<td align=center><b>Taxable<br />Amount</b></td>
		<td align=center><b>Tax<br />Rate</b></td>
		<td align=center><b>Tax</td>
		<td align=center><b>Total</td>
	</tr>
	<tr>
		<td><?php  
			# Item Description
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
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
		<td><?php 
			# Item Count
			$input_value = ""; 
			include("includes/objects/input.php");
		?></td>
	</tr>
</table>