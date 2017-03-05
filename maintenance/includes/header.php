<form id="frmHead" name="frmHead" method="post" target="work">
<table class="header-table" border=0 cellspacing=0 cellpadding=0>
	<tr>
		<td class="header-field"><?php include("includes/select_a_campaign.php"); ?></td>
		<td class="header-field">
<?php
$element_id = "ln_search";
$element_placeholder = "Search by Last Name";
include("includes/search_box.php");
?>
		</td>
		<td class="header-field">
<?php
$element_id = "fn_search";
$element_placeholder = "Search by First Name";
include("includes/search_box.php");
?>
		</td>
		<td class="header-field">
<?php
$element_id = "id_search";
$element_placeholder = "Search by Order ID";
include("includes/search_box.php");
?>
		</td>
		<td class="header-field">
<?php
include("includes/new_order_button.php");
?>		
		</td>
		<td class="header-field">
		
		</td>
	</tr>
	<tr style="height: 35px;">
		<td colspan=6>
<?php include("includes/campaign_identification.php"); ?>
		</td>
	</tr>
	<tr>
		<td class="header-field">
			ORDER
		</td>
		<td class="header-field">
			CUSTOMER
		</td>
		<td class="header-field">
			PAYMENT
		</td>
		<td class="header-field">
			TAXES
		</td>
		<td class="header-field">
			RESOURCES
		</td>
		<td class="header-field">
			OTHER
		</td>
	</tr>
</table>
</form>