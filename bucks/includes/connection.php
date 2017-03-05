<?php
$host = "localhost";
$user = "webaccess";
$pwd = "Jaime1988";
$err = "Host: ".$host."<br>User: ".$user."<br>";
$db = mysql_connect($host, $user, $pwd) or die ($err.'<br>Error connecting to mysql: <br>'.mysql_error());
?>
