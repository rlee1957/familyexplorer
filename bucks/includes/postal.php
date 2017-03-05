<fieldset class="information">
	<legend>
		Step 3 ~ POSTAL
	</legend>
	<table>    
		<tr class="information">
			<td colspan=3 align="center"><b>Postal Address</b></td>	
		</tr>
		<tr class="information">
			<td>
				<b>Enter your postal Address</b>
			</td>
			<td>
				<input type="text"  class="inpt"
					   id="member_address" 
					   name="member_address"
					   Placeholder="Postal Address Here"
					   onchange="showAddress()" 
					   onkeyup="showAddress()" />
			</td>
			<td>
				<span id="address_instructions" class="instruction">
					Enter postal address
				</span>
			</td>
		</tr>
		<tr class="information">
			<td><b>Additional Address Information</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="member_address2" 
					   name="member_address2"
					   placeholder="Additional Information Here"
					   onchange="showAddress()" 
					   onkeyup="showAddress()" />
			</td>
			<td>
				<span id="address2_instructions" class="instruction">
					Enter additional Address information
				</span>
			</td>
		</tr>
		<tr class="information">
			<td><b>City</b></td>
			<td>
				<input type="text" class="inpt" 
					   id="member_city" 
					   name="member_city"
					   placeholder="City Here"
					   onchange="showAddress()" 
					   onkeyup="showAddress()" />
			</td>
			<td><span id="city_instructions" class="instruction">Enter city</span></td>
		</tr>
		<tr class="information">
			<td><b>State</b></td>
			<td>
			<select id="member_state" 
					name="member_state" 
					onchange="showAddress()" 
				    class="inpt">
				<option value="" selected disabled>- Select State -</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option> 
				<option value="AS">American Samoa</option> 
				<option value="AZ">Arizona</option> 
				<option value="AR">Arkansas</option> 
				<option value="CA">California</option> 
				<option value="CO">Colorado</option> 
				<option value="CT">Connecticut</option> 
				<option value="DE">Delaware</option> 
				<option value="DC">District of Columbia</option> 
				<option value="FM">Federated States of Micronesia</option> 
				<option value="FL">Florida</option> 
				<option value="GA">Georgia</option> 
				<option value="GU">Guam</option> 
				<option value="HA">Hawaii</option> 
				<option value="ID">Idaho</option> 
				<option value="IL">Illinois</option> 
				<option value="IN">Indiana</option> 
				<option value="IA">Iowa</option> 
				<option value="KS">Kansas</option> 
				<option value="KY">Kentucky</option> 
				<option value="LA">Louisiana</option> 
				<option value="ME">Maine</option> 
				<option value="MH">Marshall Islands</option> 
				<option value="MD">Maryland</option> 
				<option value="MA">Massachusetts</option> 
				<option value="MI">Michigan</option> 
				<option value="MQ">Midway Islands</option> 
				<option value="MN">Minnesota</option> 
				<option value="MS">Mississippi</option> 
				<option value="MO">Missouri</option> 
				<option value="MT">Montana</option> 
				<option value="NE">Nebraska</option> 
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option> 
				<option value="NJ">New Jersey</option> 
				<option value="NM">New Mexico</option> 
				<option value="NY">New York</option> 
				<option value="NC">North Carolina</option> 
				<option value="ND">North Dakota</option> 
				<option value="NP">Northern Mariana Islands</option> 
				<option value="OH">Ohio</option> 
				<option value="OK">Oklahoma</option> 
				<option value="OR">Oregon</option> 
				<option value="Pw">Palau</option> 
				<option value="PA">Pennsylvania</option> 
				<option value="PR">Puerto Rico</option>
				<option value="RI">Rhode Island</option> 
				<option value="SC">South Carolina</option> 
				<option value="SD">South Dakota</option> 
				<option value="TN">Tennessee</option> 
				<option value="TX">Texas</option> 
				<option value="UT">Utah</option> 
				<option value="VT">Vermont</option> 
				<option value="VI">Virgin Islands</option> 
				<option value="VA">Virginia</option> 
				<option value="WA">Washington</option> 
				<option value="WV">West Virginia</option> 
				<option value="WI">Wisconsin</option> 
				<option value="WY">Wyoming</option>
			</select>
		</td>
		<td><span id="state_instructions" class="instruction">Select state</span></td>
    </tr>
    <tr class="information">
		<td><b>Postal Code</b></td>
		<td>
			<input type="text" class="inpt" 
				   id="member_zip" 
				   name="member_zip"
				   placeholder="Postal Code Here"
				   onchange="showAddress()" 
				   onkeyup="showAddress()" />
		</td>
		<td><span id="zip_instructions" class="instruction">Enter postal code</span></td>
    </tr>
    <tr class="information" style="height: 71px">
      <td colspan=3>
        <span id="address">&nbsp;</span>
      </td>
    </tr>
	<tr class="information">
      <td colspan=3 align=center>
        <a href="javascript: setup_click(2);">Previous</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="javascript: setup_click(4);">Next</a>
      </td>
    </tr>
 </table>
</fieldset>