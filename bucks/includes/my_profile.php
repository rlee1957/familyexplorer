<h3>My Profile - <?php echo($full_name); ?></h3>

<fieldset>
  <legend>
    Your identification / security information
    <input type="button" value="Save Changes" onclick="save_profile()" />
  </legend>
  <table>
    <tr>
      <td><b>Your Member ID</b></td>
      <td>
        <span id="profile_member_id" style="width: 250px; font-weight: bold;">
          <?php echo($id); ?>
        </span>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr class="information">
      <td colspan=2>
        <table>
          <tr>
            <td><b>First Name</b></td>
            <td><b>Middle Name</b></td>
            <td><b>Last Name</b></td>
          </tr>
          <tr>
            <td>
              <input type="text" id="first_name" 
                     onchange="this.value = cleanSQL(this.value); showAddress();changeMade('Yes')" 
                     onkeyup="this.value = cleanSQL(this.value); showAddress()"
                     value="<?php echo($first_name); ?>" />
            </td>
            <td>
              <input type="text" id="middle_name" onchange="this.value = cleanSQL(this.value); showAddress()" 
                     onkeyup="this.value = cleanSQL(this.value); showAddress();changeMade('Yes');" 
                     value="<?php echo($middle_name); ?>"/></td>
            <td>
              <input type="text" id="last_name" onchange="this.value = cleanSQL(this.value); showAddress()" 
                     onkeyup="this.value = cleanSQL(this.value); showAddress();changeMade('Yes');" 
                     value="<?php echo($last_name); ?>" /></td>
          </tr>
        </table>
      </td>
      <td valign="bottom" style="margin-bottom: 10px;">
        <span id="name_instructions">Enter your name</span>
      </td>
    </tr>
    <tr class="information">
      <td><b>User Name</b></td>
      <td>
        <span><?php echo($user_name); ?></span>
      </td>
      <td></td>
    </tr>
    <tr class="information">
      <td><b>New Password</b></td>
      <td><input type="password" id="member_password" 
        onchange="this.value = cleanSQL(this.value); changeMade('Yes');" 
        value="<?php echo($password); ?>" /></td>
      <td><span id="password_instructions">Enter password</span></td>
    </tr>
    <tr class="information">
      <td><b>Verify</b></td>
      <td><input type="password" id="member_password_verify" 
                 onchange="this.value = cleanSQL(this.value); changeMade('Yes');"
                 value="<?php echo($password); ?>" /></td>
      <td><span id="verify_instructions">Re-enter password</span></td>
    </tr>
    <tr class="information">
      <td><b>email Address</b></td>
      <td>
        <input type="text" id="email" onchange="this.value = cleanSQL(this.value); changeMade('Yes');" 
               value="<?php echo($email); ?>" />
      </td>
      <td><span id="email_instructions">Your email address</span></td>
    </tr>
  </table> 
</fieldset>
<fieldset>
  <legend>
    Please enter Your postal information
    <input type="button" value="Save Changes" onclick="save_profile()" />
  </legend>
  <table>    
    <tr class="information">
      <td colspan=3 align="center">
        <b>Address 1</b>
        <a href="javascript: clearAddress1();"> Clear</a>
      </td>
    </tr>
    <tr class="information">
      <td colspan=3 align="center">
        <table>
          <tr>
            <td align="center"><b>Number</b></td>
            <td align="center"><b>Dir</b></td>
            <td align="center"><b>Street</b></td>   
            <td align="center"><b>Type</b></td>
            <td align="center"><b>Space</b></td>
            <td align="center"><b>Number</b></td>
          </tr>
          <tr>
            <td>
              <input type="text" id="address1_number" onchange="this.value = cleanSQL(this.value); showAddress()" 
                     onkeyup="this.value = cleanSQL(this.value); showAddress()" 
                     value="<?php echo($address1_number); ?>" />
            </td>
            <td>
              <select id="address1_dir" onchange="showAddress()" 
                      value="<?php echo($address1_street_direction); ?>" />
                <option value="" selected></option>
                <option value="E">E</option>
                <option value="N">N</option>
                <option value="NE">NE</option>
                <option value="NW">NW</option>
                <option value="S">S</option>
                <option value="SE">SE</option>
                <option value="SW">SW</option>
                <option value="W">W</option>
              </select>
            </td>
            <td>
              <input type="text" id="address1_street" onchange="this.value = cleanSQL(this.value); showAddress()" 
                     onkeyup="this.value = cleanSQL(this.value); showAddress()" 
                     value="<?php echo($address1_street_name); ?>" />
            </td>
            
            <td>
               <select id="street_type" onchange="showAddress()" 
                       value="<?php echo($address1_street_type); ?>" />
                <option value="" selected></option>
                <option value="Aly.">Alley</option>
                <option value="Ave.">Avenue</option>
                <option value="Blvd.">Boulevard</option>
                <option value="Byp.">Bypass</option>
                <option value="Circ.">Circle</option>
                <option value="Ct.">Court</option>
                <option value="Cv.">Cove</option>
                <option value="Cres.">Crescent</option>
                <option value="Dr.">Drive</option>
                <option value="Gdns.">Gardens</option>
                <option value="Grn.">Green</option>
                <option value="Hwy.">Highway</option>
                <option value="Rd.">Road</option>
                <option value="Ln.">Lane</option>
                <option value="Loop">Loop</option>
                <option value="Mnr.">Manor</option>
                <option value="Oval">Oval</option>
                <option value="Park">Park</option>
                <option value="Pl.">Place</option>
                <option value="Plz.">Plaza</option>
                <option value="Psge.">Passage</option>
                <option value="Pthwy.">Pathway</option>
                <option value="Quadrant">Quadrant</option>
                <option value="Spur">Spur</option>
                <option value="Sq.">Square</option>
                <option value="St.">Street</option>
                <option value="Trce.">Trace</option>
                <option value="Trl.">Trail</option>
                <option value="Vw.">View</option>
                <option value="Way">Way</option>
              </select>
            </td>
            <td>
              <select id="address1_space_type" onchange="showAddress()" 
                      value="<?php echo($address1_space_type); ?>" />
                <option value="" selected></option>
                <option value="Apt.">Apartment</option>
                <option value="Cabin">Cabin</option>
                <option value="Flat">Flat</option>
                <option value="Rm.">Room</option>
                <option value="Ste.">Suite</option>
              </select>
            </td>
            <td>
              <input type="text" id="address1_space_number" 
                     onchange="this.value = cleanSQL(this.value); showAddress()" onkeyup="this.value = cleanSQL(this.value); showAddress()" 
                     value="<?php echo($address1_space_number); ?>" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr class="information">
      <td><b>Address 2</b></td>
      <td>
        <input type="text" id="member_address2" onchange="this.value = cleanSQL(this.value); showAddress()" 
               onkeyup="this.value = cleanSQL(this.value); showAddress()" 
               value="<?php echo($member_address2); ?>" />
      </td>
      <td><span id="address2_instructions">Enter your address above or to the left</span></td>
    </tr>
    <tr class="information">
      <td><b>City</b></td>
      <td>
        <input type="text" id="member_city" onchange="this.value = cleanSQL(this.value); showAddress()" 
               onkeyup="this.value = cleanSQL(this.value); showAddress()" 
               value="<?php echo($city); ?>" />
      </td>
      <td><span id="city_instructions">Enter city</span></td>
    </tr>
    <tr class="information">
      <td><b>State</b></td>
      <td>
      <select id="member_state" onchange="showAddress()" 
              value="<?php echo($state); ?>">
          <option value="" selected></option>
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
      <td><span id="state_instructions">Select state</span></td>
    </tr>
    <tr class="information">
      <td><b>Zip</b></td>
      <td>
        <input type="text" id="member_zip" onchange="this.value = cleanSQL(this.value); showAddress()" 
               onkeyup="this.value = cleanSQL(this.value); showAddress()" 
               value="<?php echo($zip); ?>" />
      </td>
      <td><span id="zip_instructions">Enter zip code</span></td>
    </tr>
    <tr class="information" style="height: 71px">
      <td colspan=3>
        <span id="sp_address">&nbsp;</span>
      </td>
    </tr>
 </table>
</fieldset>