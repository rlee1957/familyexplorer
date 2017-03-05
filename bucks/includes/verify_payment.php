<h3>Verify payments sent to the sponsors of <?php echo($full_name); ?></h3>

<input type="button" value="Submit" style="visibility: hidden;" 
             disabled="true" id="bSubmit" onclick="savePayments()"><br />
<table>
  <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>             
<table cellspacing=0 border=1 cellpadding=5>
  <tr>
    <td class="table_header">&nbsp;</td>
    <td class="table_header">ID</td>
    <td class="table_header">Postal</td>
    <td class="table_header">Status</td>
    <td class="table_header">Payment Sent</td>
  </tr>
  <tr>
    <td><b>Sponsor 1</b></td>
    <td id="id1"><?php echo($sponsor1); ?></td>
    <td id="post1"><?php echo($sponsor1_address); ?></td>
    <td id="status1"><?php echo($status1); ?></td>
    <td><input type="checkbox" id="verify1" onclick="verify_click()" 
               disabled=<?php echo($d1); ?> 
               checked=<?php echo($c1); ?> /></td>
  </tr>
  <tr>
    <td><b>Sponsor 2</b></td>
    <td id="id2"><?php echo($sponsor2); ?></td>
    <td id="post2"><?php echo($sponsor2_address); ?></td>
    <td id="status2"><?php echo($status2); ?></td>
    <td><input type="checkbox" id="verify2" onclick="verify_click()" 
               disabled="<?php echo($d2); ?>" 
               checked="<?php echo($c2); ?>" /></td>
  </tr>
  <tr>
    <td><b>Sponsor 3</b></td>
    <td id="id3"><?php echo($sponsor3); ?></td>
    <td id="post3"><?php echo($sponsor3_address); ?></td>
    <td id="status3"><?php echo($status3); ?></td>
    <td><input type="checkbox" id="verify3" onclick="verify_click()" 
               disabled='<?php echo($d3); ?>' 
               checked='<?php echo($c3); ?>' /></td>
  </tr>
  <tr>
    <td><b>Sponsor 4</b></td>
    <td id="id4"><?php echo($sponsor4); ?></td>
    <td id="post4"><?php echo($sponsor4_address); ?></td>
    <td id="status4"><?php echo($status4); ?></td>
    <td><input type="checkbox" id="verify4" onclick="verify_click()" 
               disabled='<?php echo($d3); ?>' 
               checked='<?php echo($c3); ?>' /></td>
  </tr>
</table>
<input type="hidden" value="<?php echo($verify_action); ?>" id="verify_action">