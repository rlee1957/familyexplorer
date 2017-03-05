<?php

include($path."sql/insert_thumbnail_sql.php");
include($path."params/insert_thumbnail_params.php");
$save_results = exe_shell($sql, $params, $path);

?>