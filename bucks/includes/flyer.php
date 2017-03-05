<?php  

error_reporting(E_ALL);
ini_set('display_errors', '1');
    
$id = $_REQUEST["id"];

$content = "<div style='position: relative; top: -195px;'>";
$content .= "<span>You are personally invited to join<br />the Best Ultra Cash "; 
$content .= "Kickback System (BUCKS).<br />Please visit http://www.boiseservices.com ";
$content .= "and<br />use the number below for Sponsor ID.</span><br />";
$content .= "<span style='font-size: 60'>".$id."</span><br />";
$content .= "<span>Welcome, and good luck</span></div>";
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
<div style="border-style: solid; border-color: black; border-width: 1px; 
            width: 5.5in; height:  4in; padding: 5px; background-color: yellow;">
<font color="blue" style="font-weight: bold; font-size: 22;">
Suppliment your income without having to work for someone else. Work as hard or
as little as you wish.</font><br />           
<br />
<div style="width: 430px; height: 215px; text-align: center; 
            padding: 0;">
  <img src="../images/send_with_payment.jpg" />
  <?php echo($content); ?>
</div>
<br />
<font color="red" style="font-weight: bold; font-size: 22;">
Share your new income secret with your friends, family,
church members, or anyone who you think could use extra money.</font>
</div>
</center>
  </body>
</html>
