<fieldset>
  <legend>
    Your sponsor number - click Check button
  </legend>
  <table>    
    <tr class="information">
      <td><b>Sponsor Id</b></td>
      <td>
        <span style="font-weight: bold; font-size: 25px;"><?php echo($sponsor_id); ?></font>
        <input type="hidden" id="sponsor_id" value="<?php echo($sponsor_id); ?>" /></td>
      <td><span id="sponsor_instructions"></span></td>
    </tr>
    <tr class="information" style="height: 71px">
      <td colspan=3>
        <span id="sponsor_address">&nbsp;</span>
      </td>
    </tr>
    <tr class="information" style="height: 71px">
      <td colspan=3>
        
        <span id="sp_user_name">&nbsp;</span><br />
        <span id="sp_sponsor">&nbsp;</span>
      </td>
    </tr>
    <tr>
      <td colspan=3>
        <input type="button" id="bCheck" value="Check" onclick="addNewMember()" />
        <form id="form_next" action="dashboard.php" method="post" target="_self">
          <input type="hidden" id="uid" />
        </form>
        <input type="button" value="Prev" onclick="stepClick(3);" />
        <input type="submit" id="bSave" value="Finish" onclick="save()" 
               disabled=true style="display: none;" />
      </td>
    </tr>
  </table>
</fieldset>
