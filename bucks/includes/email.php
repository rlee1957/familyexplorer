<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body style="background-color: yellow;">
<p style="font-weight: bold; font-size: 22; color: bule;">
The link provided here allows the individual you invited to access the 
website and sign-up as a member without having to enter your sponsor id (it is
automatically filled in for them).</p>

<p style="font-weight: bold; font-size: 22; color: blue;">
Cut and paste the information below into all invitation emails you send out. </p>
<textarea style="width: 100%; height: 300px;">
Click the link below. If that does not work, copy and paste the link below into your browser:

http://www.boiseservices.com/BUCKS/new_member_pre.php?sponsor_id=<?php echo($_REQUEST["id"]); ?>


If that does not work then copy and past "http://www.boiseservices.com" into your
browser and use the sponsor ID below:

********Sponsor ID********

<?php echo($_REQUEST["id"]); ?>


**************************
</textarea>
  </body>
</html>                       
