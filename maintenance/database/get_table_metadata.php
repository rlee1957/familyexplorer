<?php

include("../../../_common/includes/show_errors.php");
echo("Start<br />");
$dbhost='127.0.0.1';
$dbuser='postgres';
$dbpasswd='wCkgErYi';
$dbname = 'vikings';
$driver = "pgsql:host=127.0.0.1;port=5432;dbname=vikings;user=postgres;password=wCkgErYi";
$driver = "pgsql:dbname=vikings;user=postgres;password=wCkgErYi";
$pdo = new PDO($driver);
echo("PDO set<br />");	
$connect = "dbname=".$dbname." user=".$dbuser." password=".$dbpasswd;
$conn = pg_connect($connect);
$table = "w_order";
$schema = pg_meta_data( $conn , $table);
echo("<textarea style='width: 99%; height: 400px;'>");
print_r($schema);
echo("</textarea>");

?>