<?php

$err = "Host: ".$host."<br>User: ".$user."<br>";
$conn = mysqli_connect($host, $user, $pwd) or die ($err.'<br>Error connecting to mysql: <br>'.mysql_error());
?>
