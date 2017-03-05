<?php

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");

$dbname = $_POST["cdb"];
$del = "";
$sql = "
select 
	o_blname, 
	o_bfname, 
	o_order_no 
from 
	w_order 
where
";
$params = array();
if(trim($_POST["ln_search"]) != "")
	{
	$sql .= "
	(lower(o_blname) like ? or lower(o_blname) like ? or lower(o_blname) like ?)";
	$del = " and 
";
	$params[count($params)] = "%".strtolower(trim($_POST["ln_search"]))."%";
	$params[count($params)] = strtolower(trim($_POST["ln_search"]))."%";
	$params[count($params)] = "%".strtolower(trim($_POST["ln_search"]));
	}

if(trim($_POST["fn_search"]) != "")
	{
	$sql .= $del."
	(lower(o_bfname) like ? or lower(o_bfname) like ? or lower(o_bfname) like ?)";
	$del = " and 
";
	$params[count($params)] = "%".strtolower(trim($_POST["fn_search"]))."%";
	$params[count($params)] = strtolower(trim($_POST["fn_search"]))."%";
	$params[count($params)] = "%".strtolower(trim($_POST["fn_search"]));
	}
if(trim($_POST["id_search"]) != "")
	{
	$sql .= $del."
	(lower(o_order_no) like ? or lower(o_order_no) like ? or lower(o_order_no) like ?)";
	$params[count($params)] = "%".strtolower(trim($_POST["id_search"]))."%";
	$params[count($params)] = strtolower(trim($_POST["id_search"]))."%";
	$params[count($params)] = "%".strtolower(trim($_POST["id_search"]));
	}
$sql .= "
order by
	o_blname,
	o_bfname,
	o_order_no";

$results = sql_shell($dbname, $sql, $params);
$list = "";
$oid = "";
if($results["rowcount"] == 0)
	{
	$next = "do nothing";	
	}
else
	{
	if($results["rowcount"] == 1)
		{
		$next = "show selection";	
		$oid = $results["recordset"][0]["o_order_no"];
		}
	else
		{
		$next = "show results";	
		foreach($results["recordset"] as $key => $row)
			{
			$list .= "
<div class='results_list' onclick=\"show_order('".$row["o_order_no"]."');\">".$row["o_order_no"]." - ".$row["o_bfname"]."  ".$row["o_blname"]."</div>
";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<body>
<input type=text id=oid value="<?php echo($oid); ?>" />
<input type=text id=next value="<?php echo($next); ?>" />
<textarea id=list style="width: 99%; height: 200px;"><?php echo($list); ?></textarea>
<textarea style="width: 99%; height: 200px;"><?php print_r($results); ?></textarea>
</body>
</html>
<script type="text/javascript" language="javascript">
if(window.parent){ w = window.parent; }
if(w.opener){ w = window.opener; }
if(document.getElementById("next").value == "show selection")
	{ 
	w.show_order(document.getElementById("oid").value);
	}
if(document.getElementById("next").value == "show results")
	{ 
	htm = document.getElementById("list").value;
	w.show_search_results(htm); 
	}
if(document.getElementById("next").value == "do nothing")
	{ 
	alert("No Matches Found"); 
	}
</script>