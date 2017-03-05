<?php

include("../_common/includes/show_errors.php");
include("includes/sql_functions.php");

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
$promo = 0;
include("includes/include_campaign_references.php");
print_r($results);
?></textarea>
<h1>Brick Selector</h1>
<textarea id=brick_selector style="width: 99%; height: 200px;"><?php
$htm = "
<div id='available_pavers'>
	<center><h3>Please select a Paver Option</h3></center>
";
$content = "";
for($i=$brick["g_bkstartat"];$i<($brick["g_bkendat"]+1);$i++)
	{
	$content .= "
	<div onclick='paver_select(".$i.");'>
		<div class='paver_description1'>".$brick["g_bkdesc"][i]."</div>
		<div class='paver_description2'>".$brick["g_bkdesc_addl"][i]."</div>
		<div class='paver_bkno'>".$brick["g_bkno"][i]."</div>
		<div class='paver_insc_lines'>".$brick["g_bklines"][i]."</div>
		<div class='paver_insc_chars'>".$brick["g_bkchar"][i]."</div>
		<div class='paver_price'>".$brick["g_bkchar"][i]."</div>
		<div class='paver_taxable_amount'>".$brick["g_bkchar"][i]."</div>
	</div>
";
	
	}
?></textarea>
<h1>Ship To Information</h1>
<textarea style="width: 99%; height: 200px;"><?php ?></textarea>
<h1>Line Item Information</h1>
<textarea style="width: 99%; height: 200px;"><?php ?></textarea>
</body>
</html>
<script type="text/javascript" language="javascript">
if(window.parent){ w = window.parent; }
if(w.opener){ w = window.opener; }
source = document.getElementById("popup_title");
w.document.getElementById("popup_title").innerHTML = "Select a Paver";
w.document.getElementById("popup_content").innerHTML = "Select a Paver";
target.innerHTML = source.value;
</script>