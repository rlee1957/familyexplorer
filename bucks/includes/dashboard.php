<?php      

if(isset($_SESSION["logged_in"]))
	{
	if(isset($_SESSION["id"]))
		{
		if($_SESSION["logged_in"] == "Yes")
			{
			if($_SESSION["id"] == "")
				{
				include("includes/start.php"); 
				}
			}
		else
			{
			include("includes/start.php"); 
			}
		}
	else
		{
		include("includes/start.php"); 
		}
	}
else
	{
	include("includes/start.php"); 
	} 
$_SESSION["logged_in"] = "Yes";
include("includes/dashboard_ini.php");
include("includes/dashboard_layout.php");
exit();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<link rel='stylesheet' type='text/css' href='css/dashboard.css' />
<link rel='stylesheet' type='text/css' href='css/menu.css' />
<link rel='stylesheet' type='text/css' href='css/instruction.css' />
<meta name="generator" content="PSPad editor, www.pspad.com">
<script language="javascript" type="text/javascript" 
        src="javascripts/dashboard.js"></script>
<script language="javascript" type="text/javascript" 
        src="javascripts/ajax.js"></script>         
<title>BUCKS Dashboard - <?php echo($full_name); ?> - <?php echo($id); ?></title>
</head>
<body>
<?php include("includes/BUCKS.php"); ?>
<div style="height: 60px;"> </div>
<?php include("includes/dashboard_hidden.php"); ?> 
<?php include("includes/dashboard_buttons.php"); ?> 

<div id="div_0" class="step_content information" style="padding: 10px;">
  <?php include("includes/statistics.php"); ?>
</div>

<div id="div_1" class="step_content information" style="padding: 10px;">
  <?php include("includes/dashboard_FAQ.php"); ?>
</div>

<div id="div_2" class="step_content information" style="padding: 10px;">
  <?php include("includes/my_profile.php"); ?>
</div>

<div id="div_3" class="step_content information" style="padding: 10px;">
  <?php include("includes/verify_payment.php"); ?>
</div>

<div id="div_4" class="step_content information" style="padding: 10px;">
  <?php include("includes/received_payment.php"); ?>
</div>

<div id="div_5" class="step_content information" style="padding: 10px;">
  <?php include("includes/mailers.php"); ?>
</div>

<div id="div_7" class="step_content information" style="padding: 10px; display: block;">
  <?php include("includes/messages.php"); ?>
</div>

<div id="div_6" class="step_content information" style="padding: 10px;">
  <?php include("includes/dashboard_instructions.php"); ?>
</div>
<div id="div_7" style="padding: 10px;">
  <?php /*include("includes/temp.php");*/ ?>
</div>
<?php include("includes/browsers.php"); ?>
<?php include("includes/donate.php"); ?>   
<iframe style="display: none" id="server_results"></iframe>      
<textarea id="t" style="width: 100%; height: 200px; display: none;"></textarea>
      
<script language="javascript" type="text/javascript" 
        src="javascripts/dashboard_init.js"></script>
</body>
</html> 
