<?php

function get_connection($is_error, $description, $conn)
{
	
$connection = array();
$connection["is_error"] = $is_error;
$connection["description"] = $description;
$connection["object"] = $conn;
return $connection;

}

function sql_shell($dbtype, $dbname, $sql, $params)
{
	
$res = array();
$message = "Success";
$res["sql"] = $sql;
$res["params"] = $params;
# $sql = "INSERT INTO xyz (x, y, z) VALUES (?, ?, ?)"
# $params = array($x, $y, $z)
# see - http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
$pdo = get_pdo($dbtype, $dbname);
$res["error"] = get_connection(0, $message, $pdo);
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$res["recordset"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
$res["rowcount"] = $stmt->rowCount();
return $res;

}

function exe_shell($dbtype, $dbname, $sql, $params)
{
	
$res = exe($dbtype, $dbname, $sql, $params);
return $res;	

}

function get_pdo($dbtype, $dbname)
{	
$inc = "includes/data/_database_credentials_".$dbtype.".php";
include($inc);
$pdo = new PDO($driver, $dbusername, $dbpassword);
	
return $pdo;

}

function exe($dbtype, $dbname, $sql, $params)
{
	
$res = array();
$message = "Success";
$res["sql"] = $sql;
$res["params"] = $params;
# $sql = "INSERT INTO xyz (x, y, z) VALUES (?, ?, ?)"
# $params = array($x, $y, $z)
# see - http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
$pdo = get_pdo($dbtype, $dbname);
$res["error"] = get_connection(0, $message, $pdo);
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$affected_rows = $stmt->rowCount();
$res["affected_rows"] = $affected_rows;
return $res;

}

function db_prepare_string($string)
{
	
$retval = ""; 
if($string === NULL)
	{
	$retval = "";	
	}
else
	{
	$retval = trim($string);	
	}
return $retval;

}

function db_prepare_number($number)
{
$retval = 0;
$string = trim(" ".$number." ");
if(is_numeric($string))
	{
	$retval = $number;	
	}
return $retval;	
}

function raw_phone($phone_number)
{
$retval = preg_replace('/[^0-9]/','',$phone_number); 
return $retval;	
}

?>