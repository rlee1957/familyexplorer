<h3>Verify Payments Received By <?php echo($full_name); ?></h3>

<fieldset>
  <legend>
    Please enter member ID
  </legend>    
  <table>
    <tr>
      <td>
      <b>Members</b><br />
      <?php echo($select_members_inst); ?><br />
      </td>
      <td style="border-style: solid; border-width: 1; padding: 5px;">
        <table>    
          <tr class="information">
            <td><b>Member ID</b></td>
            <td>
                <input type="text" id="received_member_id_inst" onchange="received_changed_inst()" /></td>
            <td><span>Enter Member ID or click on item in
            Members List  (Member ID from the payment coupon that you received 
            with payment)</span></td>
          </tr>
          <tr class="information">
            <td><b>Payment Received</b></td>
            <td><input type="checkbox" id="payment_received_inst" /></td>
            <td><span>Click if payment received</span></td>
          </tr>
          <tr class="information" style="height: 71px">
            <td colspan=3>
              <span id="payment_member_address_inst"
                    style="font-weight: bold; color: blue;">&nbsp;</span>
            </td>
          </tr>
          <tr>
            <td colspan=3>
              <input type="button" id="bCheck_recieved_member_inst" value="Check" 
                     onclick="checkReceipt_inst();" />
              <input type="button" id="bSave_received_member_inst" value="Save" 
                     onclick="save_recieved_inst()" 
                     disabled=true style="display: none;" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</fieldset>
<ul>
  <li>You have <b><?php echo($total_team_member_count); ?></b> total team 
      members</li>  
  <li>You have received payments from <b>
      <?php echo($total_receipt_member_count); ?></b>
      of your team members</li>
</ul>
