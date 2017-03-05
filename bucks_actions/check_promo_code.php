<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$promocode = $_REQUEST["team_code"];
$retVal = $promocode." does not exist.";
$sql = "select * from patrons where personal_key = '".$promocode."';";
include("../_common/environment/database.php");
$res = sql_shell($dbname, $sql);
$rs = $res["recordset"];
if($res["recordcount"] > 0)
  {
  $retVal = "You entered promo code: ".$promocode.". ".$rs[0]["first_name"]." ".$rs[0]["last_name"]." invited to Join BUCK$.";
  }
//echo $retVal;
?>
<html>
<head>
<title>checkTeamCode</title>
</head>
<body>
<input id="results" type="text" value="<?php echo($retVal); ?>" />
<input id="sponsor" type="text" value="<?php echo($promocode); ?>" />
</body>
</html>
<script language="javascript" type="text/javascript" src="js/check_promo_code.js"></script>