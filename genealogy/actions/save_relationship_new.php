<?php

$path = "../";
include($path."../_common/includes/show_errors.php");
include($path."../_common/database/sql_functions.php");
$process = $_REQUEST["process"];
$search0 = $_REQUEST["search_value0"];
$individualid = preg_replace("/\s+/", "_", $search0)."_".time();
$currentid = $_REQUEST["currentid"];
$proxyid = $_REQUEST["proxyid"];
$datelastupdated = date("Y-m-d H:i:s");
include($path."includes/create_individual_minimum.php");
$sourceid = $individualid;
$targetid = $currentid;
if($process == "addChild"){ $relationid = 30; }
if($process == "addParent"){ $relationid = 29; }
if($process == "addSpouse"){ $relationid = 31; }
include($path."includes/create_relationship.php");
$sourceid = $currentid;
$targetid = $individualid;
if($process == "addChild"){ $relationid = 29; }
if($process == "addParent"){ $relationid = 30; }
if($process == "addSpouse"){ $relationid = 31; }
include($path."includes/create_relationship.php");
echo("added~".$process);

?>