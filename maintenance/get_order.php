<?php

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");
include("includes/get_data.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<body>
<input type=text id=oid value="<?php echo($oid); ?>" />
<textarea style="width: 99%; height: 200px;"><?php
$field = "campaign_idx";
$value = $_POST["cid"];
include("includes/include_campaign_references.php");
print_r($results);
?></textarea>
<h1>Order Information</h1>
<textarea id=order_info style="width: 99%; height: 200px;"><?php
include("includes/prepare_order.php");
include("includes/prepare_customer.php");
include("includes/prepare_payment.php");
?></textarea>
<h1>Ship To Information</h1>
<textarea style="width: 99%; height: 200px;"><?php print_r($ship_to_info); ?></textarea>
<h1>Line Item Information</h1>
<textarea style="width: 99%; height: 200px;"><?php print_r($line_item_info); ?></textarea>
</body>
</html>
<script type="text/javascript" language="javascript">
if(window.parent){ w = window.parent; }
if(w.opener){ w = window.opener; }
target = w.document.getElementById("sec_order");
source = document.getElementById("order_info");
target.innerHTML = source.value;
</script>