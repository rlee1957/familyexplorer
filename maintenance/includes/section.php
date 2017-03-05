<?php

?>
<div id="sec_order" style="display: block;"></div>
<div id="sec_new_order" style="display: none;"></div>
<div id="sec_resources" style="display: none;"></div>
<button onclick="show_popup();">go</button>
<div>
<div>
<table>
	<tr>
		<td align=center><b>Prefix</b></td>
		<td align=center><b>First Name</b></td>
		<td align=center><b>Middle Name</b></td>
		<td align=center><b>Last Name</b></td>
	</tr>
	<tr>
		<td>
			<select id=prefix name=prefix>
				<option value="" selected></option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
			</select>
		</td>
		<td><input type=text placeholder="First Name" id=fname name=fname /></td>
		<td><input type=text placeholder="Middle Name" id=mname name=mname /></td>
		<td><input type=text placeholder="Last Name" id=lname name=lname /></td>
	</tr>
</table>
</div>
<div>
<table>
	<tr>
		<td align=right><b>Company&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="Company" id=company name=company /></td>
	</tr>
	<tr>
		<td align=right><b>Address&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="Address" id=address1 name=address1 /></td>
	</tr>
	<tr>
		<td align=right><b>Address 2&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="Address 2" id=address2 name=address2 /></td>
	</tr>
	<tr>
		<td align=right><b>City&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="City" id=city name=city /></td>
	</tr>
	<tr>
		<td align=right><b>State&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="State" id=state name=state /></td>
	</tr>
	<tr>
		<td align=right><b>Zip Code&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="Zip Code" id=zip name=zip /></td>
	</tr>
	<tr>
		<td align=right><b>Country&nbsp;&nbsp;</b></td>
		<td><input type=text placeholder="Country" id=country name=country value="US" /></td>
	</tr>
	<tr>
		<td align=right><b>Phone&nbsp;&nbsp;</b></td>
		<td><input type=phone placeholder="Phone Number" id=phone name=phone /></td>
	</tr>
	<tr>
		<td align=right><b>Email&nbsp;&nbsp;</b></td>
		<td><input type=email placeholder="Email Address" id=email name=email /></td>
	</tr>
	<tr>
		<td align=right>&nbsp;</td>
		<td><input type=submit value="Submit" /></td> 
	</tr>
</table>
</div>
</div>
