<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$id = $_REQUEST["indid"];
include($path."functions/thumbnail.php");
include($path."includes/initialize_display.php");
$id = $_REQUEST["indid"];
include($path."includes/get_individual.php");
include($path."includes/get_spouse.php");
include($path."includes/get_parents.php");
include($path."includes/get_children.php");
include($path."includes/get_details.php");
include($path."includes/elements/family.php");
?>