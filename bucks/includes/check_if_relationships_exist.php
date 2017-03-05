<?php
# check if relationships exist
	{
	$relationships_exist = false;
	$bexists = array();
	$bexists[1] = array(false, -1, $_SESSION["id"], '', 1, 'normal');
	$bexists[2] = array(false, -1, $_SESSION["id"], '', 2, 'normal');
	$bexists[3] = array(false, -1, $_SESSION["id"], '', 3, 'normal');
	$bexists[4] = array(false, -1, $_SESSION["id"], '', 4, 'normal');
	include("sql/get_relationships.php");
	include("../_common/environment/database.php");
	$results = sql_shell($dbname, $sql);
	if($results["recordcount"] > 0)
		{
		$rs = $results["recordset"];
		foreach($rs as $key => $row)
			{
			$ar = array(true, $row["idx"], $row["payer_id"], $row["payee_id"], $row["position"], $row["relationship_type"]);
			if($row["payee_id"] != "")
				{
				$bexists[$row["position"]] = $ar;	
				}
			}
		$relationships_exist = true;
		}
	}
?>