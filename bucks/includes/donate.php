<center>
<table>
  <tr>
    <td style="font-weight: bold; color: blue">
      <i>Please donate to help maintain this website</i>
    </td>
    <td>
<form action='https://www.paypal.com/cgi-bin/webscr' method='post' id='frmAdmin' name='frmAdmin' target='_blank'>
<input type='hidden' name='cmd' value='_xclick' />
<input type='hidden' name='business' value='MyFamilyExplorer@cableone.net' />
<input type='hidden' name='item_name' value='Donation to BUCKS website' />
<input type='hidden' name='item_number' value='Donation to BUCKS website' />
<input type='hidden' name='no_shipping' value='1' />
<input type='text' name='amount' value='' title="Enter the amount you wish to donate here" />
<input type='hidden' name='return' value='' />
<input type='hidden' name='cancel_return' value='' />
<input type='hidden' name='no_note' value='1' />
<input type='hidden' name='currency_code' value='USD' />
<input type='hidden' name='lc' value='US' />
<input type='hidden' name='rm' value='2' />
</form>
    </td>
    <td>
<input type='button' value='Donate' onclick='checkValue()' />

<script language='JavaScript'>

function checkValue()
{
var f = document.getElementById("frmAdmin");
var n = f.amount.value;
if((n == "")||(isNaN(n))||(n.search(/^[0-9]*$/)))
   {
   alert("Please enter a numeric value,\n\nExample( 1 or 5 or 10 or 100).");
   f.amount.focus();
   }
else
   {
   f.submit();
   }
}
</script>
    </td>
  </tr>
</table>
</center>