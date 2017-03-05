<?php

function connect($creds)
{
	
$result = array();
include("../_common/includes/_credentials_".$creds.".php");
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
return $connection;

}

function get_error_array($error_occurred, $action, $description)
{
	
$er = array();
$er["error_occurred"] = $error_occured;
$er["action"] = $action;
$er["description"] = $description;	
return $er;

}

function sql_to_array($con, $sql)
{
	
$ar = array();
$error = array();
$ar["sql"] = $sql;
if($rs = $con->query($sql))
	{
	$rc = $rs->num_rows;
	$ar["recordcount"] = $rc;
	$recordset = array();
	while($row = mysqli_fetch_assoc($rs)) 
		{
		$recordset[count($recordset)] = $row;
		} 
	$message = "Success";
	$ar["error"] = get_connection(0, $message, $con);
	$ar["recordset"] = $recordset;
	}
else
	{
	$message = "Error running query";
	$ar["error"] = get_connection(1, $message, "");
	$ar["recordcount"] = 0;
	$ar["recordset"] = "";
	}
return $ar;

}

function get_connection($is_error, $description, $conn)
{
	
$connection = array();
$connection["is_error"] = $is_error;
$connection["description"] = $description;
$connection["object"] = $conn;
return $connection;

}

function sql_shell($creds, $sql)
{
	
$res = array();
$message = "Something went wrong";
$res["error"] = get_connection(1, $message, "");
$connection = connect($creds);
if($connection["is_error"])
	{
	$message = $connection["description"];
	$res["error"] = get_connection(1, $message, "");
	}
else
	{
	$conn = $connection["object"];
	$res = sql_to_array($conn, $sql);
	}
return $res;	

}

function exe_shell($creds, $sql, $params)
{
	
$res = exe($creds, $sql, $params);
return $res;	

}

function get_pdo($creds)
{	

include("../_common/includes/_credentials_".$creds.".php");
$driver = "mysql:host=".$host.";dbname=".$dbname;
$pdo = new PDO($driver,$user,$pwd);	
return $pdo;

}

function exe($creds, $sql, $params)
{
	
$res = array();
$message = "Success";
$res["sql"] = $sql;
$res["params"] = $params;
# $sql = "INSERT INTO xyz (x, y, z) VALUES (?, ?, ?)"
# $params = array($x, $y, $z)
# see - http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
$pdo = get_pdo($creds);
$res["error"] = get_connection(0, $message, $pdo);
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$affected_rows = $stmt->rowCount();
$res["affected_rows"] = $affected_rows;
return $res;

}

?>