<?php
include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
$logged_in = "No";
$logged_id = "";
if((isset($_SESSION["logged_in"]))&&(isset($_SESSION["id"])))
	{
	include("includes/dashboard.php");
	}
else
	{
	include("includes/new_member_menu.php");
	}

?>

