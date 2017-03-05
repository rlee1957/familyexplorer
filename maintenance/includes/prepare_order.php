<center>
	<h3 id="order_information_head" 
		onclick="toggle('order_information');"
		style="display: block;">
		Order Information
	</h3>
</center>
<div id=order_information>
<?php 
$ship_to_addresses = array();
foreach($line_item_info["recordset"] as $key => $row)
	{
	$brick_index = $key;
	include("includes/brick_item_head.php");
	$p = get_paver($row, $key);
	echo($p["htm"]);	
	if(($row["li_rqty"] > 0)||($row["li_r2qty"] > 0))
		{
		$r = get_replicas($row, $key, 2, $p["index"]);
		echo($r["htm"]);
		}
	if(($row["li_dcqty"] > 0)||($row["li_dc2qty"] > 0))
		{
		$dc = get_display_cases($row, $key, $r["index"], $p["index"]);
		echo($dc["htm"]);
		}
	include("includes/get_ship_to_addresses.php");
	echo(get_gc_ins_ship($row, $key, $ship_to_addresses, $key));
	}

?>
</div>

<?php


function get_paver($row, $brick_index)
{
setlocale(LC_MONETARY, 'en_US');
$item_index = 1;
$bg = "item-paver";
$label = "Paver";
$year = substr($row["li_order_no"], 3, 4);
$month = substr($row["li_order_no"], 7, 2);
$day = substr($row["li_order_no"], 9, 2);
$date = $year."-".$month."-".$day;
$description = $row["li_bkdesc"];
$price = $row["li_bkpcost"];
$id = trim($row["li_order_no"]).".".$brick_index;
$edit = "";
$view = "";
include("includes/brick_item.php");
$ar = array();
$ar["index"] = $id;
$ar["htm"] = $htm;
return $ar;
}

function get_replicas($row, $brick_index, $item_index, $paver_index)
{
$count1 = $row["li_rqty"];
$cost1 = $row["li_bkrcost"];
$x = $item_index;
$htm = "";
if($count1 > 0)
	{
	for(;$x<($item_index+($count1+1));$x++)
		{
		$htm .= get_replica($row, $brick_index, $x, $paver_index, "");
		}
	$item_index = $x;
	}
$count2 = $row["li_r2qty"];
if($count2 > 0)
	{
	for(;$x<($item_index+($count2+1));$x++)
		{
		$htm .= get_replica($row, $brick_index, $x, $paver_index, "li_bkr2cost");
		}
	$item_index = $x;
	}
$ar = array();
$ar["index"] = $item_index;
$ar["htm"] = $htm;
return $ar;
}

function get_replica($row, $brick_index, $item_index, $paver_index, $field)
{
setlocale(LC_MONETARY, 'en_US');
$bg = "item-replica";
$label = "Replica";
$year = substr($row["li_order_no"], 3, 4);
$month = substr($row["li_order_no"], 7, 2);
$day = substr($row["li_order_no"], 9, 2);
$date = $year."-".$month."-".$day;

if($field == "")
	{
	$price = $row["li_bkrcost"];
	$description = "Replica";
	}
else
	{
	$price = $row["li_bkr2cost"];	
	$description = "Replica2";
	}
$id = $paver_index.".".($item_index - 1);
$edit = "";
$view = "";
include("includes/brick_item.php");
return $htm;
}

function get_display_cases($row, $brick_index, $item_index, $paver_index)
{
$count1 = $row["li_dcqty"];
$x = $item_index;
$htm = "";
if($count1 > 0)
	{
	for(;$x<($item_index+($count1+1));$x++)
		{
		$htm .= get_display_case($row, $brick_index, $x, $paver_index, "");
		}
	$item_index = $x;
	}
$count2 = $row["li_dc2qty"];
if($count2 > 0)
	{
	for(;$x<($item_index+($count2+1));$x++)
		{
		$htm .= get_display_case($row, $brick_index, $x, $paver_index, "li_dc2cost");
		}
	$item_index = $x;
	}
$ar = array();
$ar["index"] = $item_index;
$ar["htm"] = $htm;
return $ar;
}

function get_display_case($row, $brick_index, $item_index, $paver_index, $field)
{
setlocale(LC_MONETARY, 'en_US');
$bg = "item-dc";
$label = "Display Case";
$year = substr($row["li_order_no"], 3, 4);
$month = substr($row["li_order_no"], 7, 2);
$day = substr($row["li_order_no"], 9, 2);
$date = $year."-".$month."-".$day;

if($field == "")
	{
	$price = $row["li_dccost"];
	$description = "Display Case";
	}
else
	{
	$price = $row["li_dc2cost"];	
	$description = "Display Case 2";
	}
$id = $paver_index.".".($item_index - 1);
$edit = "";
$view = "";
include("includes/brick_item.php");
return $htm;
}

function get_gc_ins_ship($row, $brick_index, $ship_to_addresses, $idx)
{
$gc = "";
if($row["li_gc"] != 0){ $gc = " checked"; }
$insc_lines = $row["li_bklines"];
$insc_chars = $row["li_bkchar"];
include("includes/gc_ins_ship.php");
}

function split_name($name)
{
$name_parts = array();
$parts = explode(" ", trim($name));
$p = false;
$name_parts["last"] = $parts[count($parts) - 1];
if((strtolower($parts[0]) == "mr" )||
   (strtolower($parts[0]) == "mrs" )||
   (strtolower($parts[0]) == "ms" ))
	{
	$name_parts["prefix"] = $parts[0];
	$name_parts["first"] = $parts[1];
	$name_parts["last"] = $parts[count($parts)-1];
	$i = 2;;
	}
else
	{
	$name_parts["prefix"] = "";	
	$name_parts["first"] = $parts[0];
	$name_parts["last"] = $parts[count($parts)-1];
	$i = 1;
	}
$mn = "";
$del = "";
for($i;$i<count($name_parts) - 2;$i++)
	{
	$mn .= $del.$parts[$i];
	$del = " ";
	}
$name_parts["mi"] = $mn;
return $name_parts;
}

?>