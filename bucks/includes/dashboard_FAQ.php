<h3>Frequently Asked Questions</h3>

<p>
<span style="font-size: 20; color: red;">Question</span> - Is it legal to send 
money through 
the mail?<br />
<span style="font-size: 20; color: red;">Answer</span> - Yes, BUCKS provides 
sample letters
to send that use verbiage that ensures the legality of sending cash.<br />
</p>
<p>
<span style="font-size: 20; color: red;">Question</span> - Who should I invite
to become a member?<br />
<span style="font-size: 20; color: red;">Answer</span> - This program is designed
to add to a members existing income and hopefully improve their lifestyle. That
being said, think of someone you know that may be unemployed, under-employed,
living on a fixed income or no income at all. These are the people who will
have the most to gain from the BUCKS system, it is however completely up to you to
invite whomever you wish.<br />
</p>
<p>
<span style="font-size: 20; color: red;">Question</span> - How many do I need to 
invite to 
reach level 1?<br />
<span style="font-size: 20; color: red;">Answer</span> - Advancement to level 1
is dependant on the number of team members that you sponsor. Each member has
four sponsors. If you are one of the four sponsors for a member then they are
on your team. When your team member count reaches 256 or more, then you will
automatically be advanced to level 1. To answer the question, it does not matter
how many individuals you invite. What does matter is the number of individuals
invited by you, who become members.</p>
<p>
<span style="font-size: 20; color: red;">Question</span> - How much can I expect
to make using BUCKS?<br />
<span style="font-size: 20; color: red;">Answer</span> - Use the calculator
tool below to forcast your cash flow. Enter a number to indicate the number
of members you think you can sponsor, then click the calculate button. You and 
your team members must sponsor at 
least 4 members, in order to reach the threshold of 256 total team members to 
advance to (level 1). In order to advance to (level 2), 256 of your total team members
must reach (level 1). In order to advance to (level 3), 256 of your total team members 
must reach (level 2). In order to advance to (level 4), 256 of your total team members
must reach (level 3). And so on infinitum...<br /> 
<i>This example assumes that each member of your team, sponsors 4(four) 
members</i> <br />
<ul>
<li>layer 1 - those you have invited who join and pay their sponsors</li>
<li>layer 2 - those invited by any member or your (layer 1) team members, who join and pay their sponsors</li>
<li>layer 3 - those invited by any member or your (layer 2) team members, who join and pay their sponsors</li>
<li>layer 4 - those invited by any member or your (layer 3) team members, who join and pay their sponsors</li>
</ul>
<input type="text" id="hyp" value="4">
<input type="button" value="Calculate" onclick="recalculate();">
<table border=1 cellspacing="0" cellpadding="3">
  <tr>
    <td>Layer</td>
    <td>Members Sponsored</td>
    <td>Level 0</td>
    <td>Level 1</td>
    <td>Level 2</td>
    <td>Level 3</td>
    <td>Level 4 and higher</td>
  </tr>
  <tr>
    <td align="center">1</td>
    <td align="center" id="l1_count">4</td>
    <td align="right" id="l1_lv0">$4.00</td>
    <td align="right" id="l1_lv1">$40.00</td>
    <td align="right" id="l1_lv2">$40.00</td>
    <td align="right" id="l1_lv3">$40.00</td>
    <td align="right" id="l1_lv4">$400.00</td>
  </tr>
  <tr>
    <td align="center">2</td>
    <td align="center" id="l2_count">16</td>
    <td align="right" id="l2_lv0">$16.00</td>
    <td align="right" id="l2_lv1">$160.00</td>
    <td align="right" id="l2_lv2">$160.00</td>
    <td align="right" id="l2_lv3">$1,600.00</td>
    <td align="right" id="l2_lv4">$1,600.00</td>
  </tr>
  <tr>
    <td align="center">3</td>
    <td align="center" id="l3_count">64</td>
    <td align="right" id="l3_lv0">$64.00</td>
    <td align="right" id="l3_lv1">$640.00</td>
    <td align="right" id="l3_lv2">$6,400.00</td>
    <td align="right" id="l3_lv3">$6,400.00</td>
    <td align="right" id="l3_lv4">$6,400.00</td>
  </tr>
  <tr>
    <td align="center">4</td>
    <td align="center" id="l4_count">256</td>
    <td align="right" id="l4_lv0">$2,560.00</td>
    <td align="right" id="l4_lv1">$25,600.00</td>
    <td align="right" id="l4_lv2">$25,600.00</td>
    <td align="right" id="l4_lv3">$25,600.00</td>
    <td align="right" id="l4_lv4">$25,600.00</td>
  </tr>
  <tr>
    <td align="center" colspan="2">Total</td>
    <td align="right" id="total_lv0">$2,644.00</td>
    <td align="right" id="total_lv1">$26,440.00</td>
    <td align="right" id="total_lv2">$32,200.00</td>
    <td align="right" id="total_lv3">$33,640.00</td>
    <td align="right" id="total_lv4">$34,000.00</td>
  </tr>
</table>
<script language="javascript" type="text/javascript">
         function recalculate()
{   
//alert("recalculate");
try{
var o = document.getElementById("hyp");
var n = o.value;
if((n == "")||(n.search(/^[0-9]*$/)))
  {
  alert("Value must be numeric!");
  o.value = "";
  o.focus();
  return;
  }   
var c = n;  
var ar = new Array();
var amounts = new Array();
ar[ar.length] = 0;
ar[ar.length] = 1;
ar[ar.length] = 1;
ar[ar.length] = 1;
ar[ar.length] = 10;
amounts[amounts.length] = ar;  
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 10;
ar[ar.length] = 10;
ar[ar.length] = 10;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 10;
ar[ar.length] = 10;
ar[ar.length] = 100;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 10;
ar[ar.length] = 100;
ar[ar.length] = 100;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 100;
ar[ar.length] = 100;
ar[ar.length] = 100;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var totals = new Array();
totals[0] = 0;
totals[1] = 0;
totals[2] = 0;
totals[3] = 0;
totals[4] = 0;

for(x=1;x<5;x++)
  {
  v = "l" + x + "_count";
  document.getElementById(v).innerHTML = n;
  for(y=0;y<5;y++)
    {
    v = "l" + x + "_lv" + y;
    amt = n * amounts[y][x];
    document.getElementById(v).innerHTML = currency(amt);
    totals[y] += amt; 
    }
  n = n * c;
  }
for(x=0;x<5;x++)
  {
  v = "total_lv" + x;
  document.getElementById(v).innerHTML = currency(totals[x]);
  } 
}catch(exc){alert(exc.message);}        
}

function currency(amt)
{
var t = amt + "";
var l = t.length;
var c = 0;
var ch = "";
var r = "";
var x = -1;
for(x=l-1;x>-1;x--)
  {
  c++;
  ch = t.substr(x, 1);
  r = ch + r;
  if(c == 3)
    {
    if(x != 0){r = "," + r;}
    c = 0;
    }
  }
r = "$" + r + ".00";
return r;
}
</script>
</p>