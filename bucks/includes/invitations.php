<?php  

include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
<center>
<br />
<div style="width: 430px; height: 215px; text-align: center; 
            padding: 0;">
  <img src="../images/send_with_payment.jpg" />
  <div style='position: relative; top: -195px;'><br />
<span>You are personally invited to join!<br />Please visit http://contributions4u.com to find out more<br />and use the Team Code below if you decide to join.</span><br />
<span style='font-size: 60; color: #0000FF;'><?php echo($_REQUEST["team_code"]); ?></span><br />
<span>Come join, and good luck</span></div>";
</div>
<br />
<?php
/*echo("<textarea style='width: 98%; height: 400px;'>");
print_r($_SESSION);
echo("</textarea>");*/
?>
  </body>
</html>  