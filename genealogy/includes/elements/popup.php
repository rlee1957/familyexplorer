<div class=popup-mask id=popup_mask></div>

<div class=popup-container id=popup_container>
	<div id=popup_table class=popup-table>
		<div class=popup-spacer1></div>
		<div id=popup_head class=popup-head></div>
		<div class=popup-spacer1></div>
		<div id=popup_msg class=popup-msg></div>
		<div class=popup-spacer1></div>
		<div>
			<input type=hidden id="button_method" />
			<a href="javascript: popup_method();">
				<span id=button_text style="font-size: 16pt;">
					Close
				</span> 
			</a>
		</div>
	</div>
</div>

<div id=popup_list class=popup-list>
<a href="javascript: hide_edit()">EXIT</a>
</div>

<div id=popup_search_add class=quick_search>
<table style='table-layout: fixed; width: 100%; height: 100%;'>
	<tr>
		<td rowspan=2>
			<fieldset>
				<legend><span id=enter_label></span></legend>
				<input type=text id=search_value 
					   onkeypress='do_search_add();' 
					   onchange='do_search_add();' />
			</fieldset>
		</td>
		<td>
			<span id=search_label style="display: none;"></span>
		</td>
	</tr>
	<tr>
		<td>
			<div id=search_results></div>
		</td>
	</tr>
</table>
</div>

<div class=popup-mask id=popup_mask2></div>

<div id=popup_search_results class=popup-list></div>