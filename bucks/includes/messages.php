<h3>Messages for <?php echo($full_name); ?></h3>

<table cellspacing=10 cellpadding=0>
  <tr>
    <td align="left" valign="top">
      <?php 
      //echo("<br />".$c1."<br />");
      //echo($c2."<br />");
      //echo($c3."<br />");
      //echo($c4."<br />");
      //echo((($c1 == "true") && ($c2 == "true") && ($c3 == "true") && ($c4 == "true"))."<br />");
      if((($c1 == "true") && ($c2 == "true") && ($c3 == "true") && ($c4 == "true")) == 1)
        {
        if($member_level_count > 0)
          {
          include("received_payment_instructions.php");
          }
        else
          {
          if($level == 0)
            {
            include("paid_new_member_instructions.php"); 
            }
          else
            {
            include("paid_new_level_instructions.php"); 
            }  
          }
        }
      else
        {
        if($level == 0)
          {
          include("new_member_instructions.php"); 
          $CanInvite = "No";
          }
        else
          {
          include("new_level_instructions.php"); 
          } 
        }     
      ?>
    </td>
  </tr>
</table>