<?php
# Open Database
$err = "";
if(!mysqli_select_db($conn, $dbname))
	{
	$err = "Could not select database (".$dbname.") ".mysqli_error();
	}
?>