<?php

$dbname = $_POST["cdb"];
$campaign_idx = $_POST["cid"];
$oid = $_POST["oid"];

include("includes/data/get_order_info.php");
$order_info = $results;

include("includes/data/get_line_item_info.php");
$line_item_info = $results;

include("includes/data/get_ship_to_info.php");
$ship_to_info = $results;
?>