<?php

$htm = "
<div id=\"brick_item_container_".$brick_index."_".$item_index."\">
<table id=\"brick_item_".$brick_index."_".$item_index."\" 
	   class=\"brick-table\" border=0 cellspacing=0 cellpadding=0>
	<tr class=\"".$bg."\">
		<td class=\"brick-label item-all center\" 
			id=\"brick_label_".$brick_index."_".$item_index."\">
			<div id=\"v_".$brick_index."_".$item_index."_0\">
				".$label."
			</div>	
		</td>
		<td class=\"brick-date item-all center\" 
			id=\"brick_date_".$brick_index."_".$item_index."\">
			<div id=\"v_".$brick_index."_".$item_index."_1\">
				".$date."
			</div>
			<div id=\"e_".$brick_index."_".$item_index."_1\" class=\"hide\">
				".$date."
			</div>
		</td>
		<td class=\"brick-description item-all left\" 
			id=\"brick_description_".$brick_index."_".$item_index."\">
			<div id=\"v_".$brick_index."_".$item_index."_2\"
				 class=\"show\">
				".$description."
			</div>
			<div id=\"e_".$brick_index."_".$item_index."_2\" 
				 class=\"hide\">
				<select id=\"description_".$brick_index."_".$item_index."\">
					<option value='4x8 PAVER' selected>4X8 PAVER</option>
					<option value='8x8 PAVER'>8X8 PAVER</option>
					<option value='8x8 LOGO PAVER'>8X8 LOGO PAVER</option>
				</select>
			</div>
		</td>
		<td class=\"brick-id item-all center\" 
			id=\"brick_id_".$brick_index."_".$item_index."\">
			<span id=\"v_".$brick_index."_".$item_index."_3\">".$id."</span>
		</td>
		<td class=\"brick-price item-all right\" 
			id=\"brick_price_".$brick_index."_".$item_index."\">
			<span id=\"v_".$brick_index."_".$item_index."_4\">
				".money_format('%i', $price)."
			</span>
		</td>
		<td class=\"brick-view item-all center\" 
			id=\"brick_view_".$brick_index."_".$item_index."\">
			<span id=\"v_".$brick_index."_".$item_index."_7\">".$view."</span>
		</td>
		<td class=\"brick-edit item-all center\" 
			id=\"brick_edit_".$brick_index."_".$item_index."\">
			<span id=\"v_".$brick_index."_".$item_index."_8\">".$edit."</span>
		</td>
		<td class=\"brick-inscribed item-all center\" 
			id=\"brick_remove_".$brick_index."_".$item_index."\">
			<span id=\"v_".$brick_index."_".$item_index."_9\">".$edit."</span>
		</td>
	</tr>
</table>
</div>
";

?>