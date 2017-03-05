<div class=family-container>
	<!-- Top Row Labels -->
	<div class="ind-lbl label" 
		 id=individual_label 
		 onclick="individual_click();">
		<?php echo($display["individual"]["label"]); ?>
	</div>
	<div class="sps-lbl label" 
		 id=spouse_label 
		 onclick="show_edit(this);">
		<?php echo($display["spouse"]["label"]); ?>
	</div>
	<div class="pnt-lbl label" 
		 id=parents_label 
		 onclick="show_edit(this);">
		<?php echo($display["parents"]["label"]); ?>
	</div>
	<!-- Top Row Content -->
	<div class="ind-cnt window">
		<?php echo($display["individual"]["window"]); ?>
	</div>
	<div class="sps-cnt window">
		<?php echo($display["spouse"]["window"]); ?>
	</div>
	<div class="pnt-cnt window">
		<?php echo($display["parents"]["window"]); ?>
	</div>
	<!-- Bottom Row Labels -->
	<div class="cld-lbl label" 
		 id=children_label 
		 onclick="show_edit(this);">
		<?php echo($display["children"]["label"]); ?>
	</div>
	<div class="dtl-lbl label" 
		 id=details_label>
		<?php echo($display["details"]["label"]); ?>
	</div>
	<!-- Bottom Row Content -->
	<div class="cld-cnt window">
		<?php echo($display["children"]["window"]); ?>
	</div>
	<div class="dtl-cnt window">
		<?php echo($display["details"]["window"]); ?>
	</div>
	<input type=hidden 
		   id=current_individual 
		   value="<?php echo($id); ?>" />
</div>
