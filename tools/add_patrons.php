<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$sql = "select * from participants where idx > '1306624190149';";
include("../_common/environment/database.php");
$connection = connect($dbname);
if($connection["is_error"])
	{
	echo($connection["description"]);
	exit();
	}
else
	{
	$conn = $connection["object"];
	$res = sql_to_array($conn, $sql);
	if($res["error"]["is_error"] == 1)
		{
		echo("ERROR: ".$res["error"]["description"]."
");
		}
	}
$rs = $res["recordset"];
$htm = "";
$sq = "'";
$sqd = "', ";
$ct = 0;


if($res["recordcount"] != 0)
	{
	foreach($rs as $num => $row)
		{
		$htm = "insert into patrons values (".$sq.$row["idx"].$sqd;
		$htm .= $sq."GET$".$ct.$sqd;
		$htm .= $sq.$row["sponsor_key"].$sqd;
		$htm .= $sq.$row["username"].$sqd;
		$htm .= $sq.$row["password"].$sqd;
		$htm .= $sq.$row["email"].$sqd;
		$htm .= $sq.$row["first_name"].$sqd;
		$htm .= $sq.$row["middle_name"].$sqd;
		$htm .= $sq.$row["last_name"].$sqd;
		/*echo($res["recordcount"]);
		exit();*/
		$a1 = get_address($row["street_number"], $row["street"], $row["direction"], $row["street_type"],  $row["space_type"], $row["space_number"], $row["address"], 1);
		$a2 = get_address($row["street_number"], $row["street"], $row["direction"], $row["street_type"],  $row["space_type"], $row["space_number"], $row["address"], 1);
		$htm .= $sq.$a1.$sqd;
		$htm .= $sq.$a2.$sqd;
		$htm .= $sq.$row["city"].$sqd;
		$htm .= $sq.$row["state"].$sqd;
		$htm .= $sq.$row["zip"].$sqd;
		$htm .= $sq."Patron".$sqd;
		$htm .= $sq."-1".$sqd;
		$htm .= $sq.$row["date_created"].$sqd;
		$htm .= $sq.$row["date_last_changed"].$sq.");<br /><br />";
		echo($htm);
		$ct++;
		}
	}


function get_address($street_number, $street, $direction, $street_type,  $space_type, $space_number, $address, $_1or2)
{
	
$retVal = "";
$a1 = "";
$a2 = "";
$del = "";
if($street_number != ""){ $a1 .= $del.$street_number; $del = " "; }
if($street != ""){ $a1 .= $del.$street; $del = " "; }
if($direction != ""){ $a1 .= $del.$direction; $del = " "; }
if($street_type != ""){ $a1 .= $del.$street_type; $del = " "; }
if($space_type != ""){ $a1 .= $del.$space_type; $del = " "; }
if($space_number != ""){ $a1 .= $del.$space_number; $del = " "; }
if($a1 == ""){ $a1 = $address; }
else{ $a2 = $address; }
if($_1or2 == 1){ $retVal = $a1; }
if($_1or2 == 2){ $retVal = $a2; }
return $retVal;

}

?>