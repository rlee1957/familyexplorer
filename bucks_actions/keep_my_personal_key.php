<?php

include("../_common/includes/session_start.php"); 
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");

$verify_type = "set_personal_key";
include("includes/verify.php");

?>
<html>
<head>
<title></title>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>

</body>
</html>
<script language="javascript" type="text/javascript">
var msg = "Personal Key saved and verified!";
Message_reload(msg);
</script>