<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$address = $_REQUEST['address'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
echo("Address = ".$address."<br />");
echo("Subject = ".$subject."<br />");
echo("message = ".$message."<br />");
$results = "failed";

// Send
$headers = "From:<CA\$H4U>rlee.sn@gmail.com";
if(mail($address, $subject, $message, $headers))
   {
   $results = "success";
   }   
echo($results);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>PHP Mail Test</title>
</head>
<body>
</body>
</html>
