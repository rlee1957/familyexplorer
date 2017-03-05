<?php
## The following are required or will throw an error ##
## Replace "" with actual values ##
/*
$select_id = "";
$select_name = ""; 
$select_value = ""; 
$select_title = "";
$select_onchange = "";
$select_onclick = "";
$select_onfocus = "";
$select_ondblclick = "";
$select_onfocus = "";
$select_onblur = ""; 
$select_class = "";
$select_disabled = "";
$select_readonly = "";
$select_required = "";
$select_option_1_value = "";
$select_option_1_label; = "";
$select_option_1_disabled = "";
$select_default = "";
include("includes/objects/input.php");
*/
?>

<select id="<?php echo($select_id); ?>" 
		name="<?php echo($select_name); ?>" 
		onclick="<?php echo($select_onclick); ?>" 
		onfocus="<?php echo($select_onfocus); ?>"
		ondblclick="<?php echo($select_ondblclick); ?>"
		onchange="<?php echo($select_onchange); ?>" 
		ondblclick="<?php echo($select_ondblclick); ?>" 
		onblur="<?php echo($select_onblur); ?>" 
		class="<?php echo($select_class); ?>" 
		value="<?php echo($select_value); ?>" 
		title="<?php echo($select_title); ?>" 
		"<?php echo($select_disabled); ?>"
		"<?php echo($select_readonly); ?>"
		"<?php echo($select_required); ?>"
	<option value="<?php echo($select_option_1); ?>"><?php echo($select_label); ?></option>
<?php
foreach($select_options as $key => $val)
	{
	$selected = "";
	if($select_default == $key){ $selected = "selected"; }
	echo("
	<option value=".$val.">".$key."</option>
");
	}
?>
</select>