<h3>Verify Payments Received By <?php echo($full_name); ?></h3>

<fieldset>
  <legend>
    Please enter member ID
  </legend>    
  <table>
    <tr>
      <td>
      <b>Members</b><br />
      <?php echo($select_members); ?><br />
      </td>
      <td style="border-style: solid; border-width: 1; padding: 5px;">
        <table>    
          <tr class="information">
            <td><b>Member ID</b></td>
            <td>
                <input type="text" id="received_member_id" onchange="received_changed()" /></td>
            <td><span id="member_instructions">Enter Member ID or click on item in
            Members List  (Member ID from the payment coupon that you received 
            with payment)</span></td>
          </tr>
          <tr class="information">
            <td><b>Payment Received</b></td>
            <td><input type="checkbox" id="payment_received" /></td>
            <td><span id="checkbox_instructions">Click if payment received</span></td>
          </tr>
          <tr class="information" style="height: 71px">
            <td colspan=3>
              <span id="payment_member_address">&nbsp;</span>
            </td>
          </tr>
          <tr>
            <td colspan=3>
              <input type="button" id="bCheck_recieved_member" value="Check" onclick="checkReceipt()" />
              <input type="button" id="bSave_received_member" value="Save" onclick="save_recieved()" 
                     disabled=true style="display: none;" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</fieldset>
