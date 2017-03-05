			<table class="header_control" style="table-layout: fixed; width: 100%;">
				<tr style="background-color: white;">
					<td>
						<input type="text" 
							   style="width: 100%; 
									  height: 100%; 
									  padding: 0 0 0 5px;"
							   id="<?php echo($element_id); ?>" 
							   name="<?php echo($element_id); ?>" 
							   placeholder="<?php echo($element_placeholder); ?>"
							   onkeyup="do_search(this, false);"
							   disabled />
					</td>
					<td style="width: 12px;">
						<img src="images/search.jpg" 
							 title="Search" 
							 style="width: 10px; cursor: pointer;"
							 onclick="do_search(this, true);" />
					</td>
				</tr>
			</table>