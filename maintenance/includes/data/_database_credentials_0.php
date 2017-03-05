<?php

$dbsource = "dblib";
$server = "tcp:tha9ihzafs.database.windows.net,1433";
$server = "tha9ihzafs.database.windows.net:1433";
#$server = "tha9ihzafs.database.windows.net";
$dbusername = "developer@tha9ihzafs";
#$dbusername = "developer";
$dbname = "fr";
$dbpassword = "Kenoransage13";
$connectionInfo = array("Database"=>$dbname, "UID"=>$dbusername, "PWD"=>$dbpassword, "MultipleActiveResultSets"=>true);
#mssql_configure('WarningsReturnAsErrors', 0);
$conn = mssql_connect( $server, $dbusername, $dbpassword);
	
echo mssql_get_last_message();
if($conn === false)
   {
     FatalError("Failed to connect...");
   }
exit();
$driver = $dbsource.":Server=".$server.";Database=".$dbname;
echo("<br />DBSOURCE: ".$dbsource."<br />");
echo("<br />DBSERVER: ".$server."<br />");
echo("<br />PASSWORD: ".$dbpassword."<br />");
echo("<br />USERNAME: ".$dbusername."<br />");
echo("<br />DRIVER: ".$driver."<br />");

//$server = 'KALLESPC\SQLEXPRESS';

// Connect to MSSQL
$link = mssql_connect($server, $dbusername, $dbpassword);

if (!$link) 
{
    die('Something went wrong while connecting to MSSQL');
}
exit();

?>