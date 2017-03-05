<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$retVal = "";
$sql = "
Select 
	p.idx,
	p.first_name,
	p.personal_key, 
	count(p2.team_code) as member_count
from
	patrons p
left outer join
	patrons p2 on p.personal_key = p2.team_code
where
	p.active = 1 and
	p.level >= 1 and
	p.role = 'patron'
group by
	p.idx,
	p.first_name,
	p.personal_key
order by
	member_count,
	p.idx
limit 1;
";
include("../_common/environment/database.php");
$res = sql_shell($dbname, $sql);
$rs = $res["recordset"];
if($res["recordcount"] > 0)
  {
  $retVal = $rs[0]["personal_key"];
  }
?>
<html>
<head><title></title></head>
<body>
<input id="results" type="text" value="<?php echo($retVal); ?>" />
</body>
</html>
<script language="javascript" type="text/javascript" src="js/get_promo_code.js"></script>