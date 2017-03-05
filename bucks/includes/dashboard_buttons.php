<div id="menu" class="menu">
<?php  /*
echo('sponsor 1 paid: '.$pay1_verify.'<br />'); 
echo('sponsor 2 paid: '.$pay2_verify.'<br />'); 
echo('sponsor 3 paid: '.$pay3_verify.'<br />'); 
echo('sponsor 4 paid: '.$pay4_verify.'<br />'); 
echo('level: '.$level.'<br />'); */
?>
  <center>
   <div style="display: <?php 
   if((($pay1_verify == 0)||($pay2_verify == 0)||($pay3_verify == 0)||($pay4_verify == 0))&&($level == 0))
    {echo("none");}
   else{echo("block");}; ?>;">
    <span class="menu_item" onmouseover="menu_over(this, 0);" onmouseout="menu_out(this, 0);" 
    	  onclick="menu_click(this, 0);" id="menu_item_0" title="Statistics">Statistics</span>
    <span class="menu_item" onmouseover="menu_over(this, 1);" onmouseout="menu_out(this, 1);" 
    	  onclick="menu_click(this, 1);" id="menu_item_1" title="Frequently Asked Questions">
        Frequently&nbsp;Asked&nbsp;Questions</span>	
    <span class="menu_item" onmouseover="menu_over(this, 2);" onmouseout="menu_out(this, 2);" 
    	  onclick="menu_click(this, 2);" id="menu_item_2" title="My Profile">My&nbsp;Profile</span>	
    <span class="menu_item" onmouseover="menu_over(this, 3);" onmouseout="menu_out(this, 3);" 
    	  onclick="menu_click(this, 3);" id="menu_item_3" title="Verify that you have sent payments">Verify&nbsp;Payments&nbsp;Sent</span>
    <span class="menu_item" onmouseover="menu_over(this, 4);" onmouseout="menu_out(this, 4);" 
    	  onclick="menu_click(this, 4);" id="menu_item_4" title="Verify that you have received payments">Verify&nbsp;Received&nbsp;Payments</span>
    <span class="menu_item" onmouseover="menu_over(this, 5);" onmouseout="menu_out(this, 5);" 
    	  onclick="menu_click(this, 5);" id="menu_item_5" title="Sample Correspondence">Correspondence</span>
    <span class="menu_item" onmouseover="menu_over(this, 6);" onmouseout="menu_out(this, 6);" 
    	  onclick="menu_click(this, 6);" id="menu_item_6" title="Instructions">Instructions</span>
    	  
    </div>
    	  
    <span class="menu_item_selected" onmouseover="menu_over(this, 7);" onmouseout="menu_out(this, 7);"
        <?php if(($pay1_verify == 1)||($pay2_verify == 1)||($pay3_verify == 1)||($pay4_verify == 1))
                {
                echo("onclick='menu_click(this, 7);'");
                }?> 
    	  id="menu_item_7"
        title="Messages">Messages</span> 	  
    
    <span class="menu_item" onmouseover="menu_over(this, 8);" onmouseout="menu_out(this, 8);" 
    	  onclick="window.open('logoff.php', '_self', '');" id="menu_item_8" title="Log Off">Log&nbsp;Off</span>                            	  
  </center>	  
</div>