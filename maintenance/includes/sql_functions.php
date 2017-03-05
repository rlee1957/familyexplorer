<?php

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

function sql_shell($dbname, $sql, $params)
{
	
$res = array();
$message = "Success";
$res["sql"] = $sql;
$res["params"] = $params;
# $sql = "INSERT INTO xyz (x, y, z) VALUES (?, ?, ?)"
# $params = array($x, $y, $z)
# see - http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
$pdo = get_pdo($dbname);
$res["error"] = get_connection(0, $message, $pdo);
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$res["recordset"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
$res["rowcount"] = $stmt->rowCount();
return $res;

}

function exe_shell($dbname, $sql, $params)
{
	
$res = exe($dbname, $sql, $params);
return $res;	

}

function get_pdo($dbname)
{	

include("../_common/configuration/global_settings.php");
$driver = "pgsql:host=".$dbhost.";dbname=".$dbname;
$dbpasswd = "bricks$$";
$pdo = new PDO($driver, $dbuser, $dbpasswd);	
return $pdo;

}

function exe($dbname, $sql, $params)
{
	
$res = array();
$message = "Success";
$res["sql"] = $sql;
$res["params"] = $params;
# $sql = "INSERT INTO xyz (x, y, z) VALUES (?, ?, ?)"
# $params = array($x, $y, $z)
# see - http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers
$pdo = get_pdo($dbname);
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