<?php

# Open MYSQLI Connection
echo("<h3>conn_1_open.php</h3><br />
");
#$pwd = "goof";
$err = "";
#$conn = mysqli_connect($host, $user, $pwd, $dbname);
$conn = new mysqli($host, $user, $pwd, $dbname);
if (mysqli_connect_errno())
	{
	$err = "Failed to connect to MySQL: " . mysqli_connect_error();
	$connection = get_connection(1, $err, "");
	}
else
	{
	$connection = get_connection(0, "", $conn);	
	}


?>
