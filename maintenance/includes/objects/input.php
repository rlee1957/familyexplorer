<?php
## The following are required or will throw an error ##
## Replace "" with actual values ##
/*
$input_type = "text or button or checkbox or color or date or datetime-local or email or file or hidden or image or month or number or password or radio or range or reset or search or submit or tel or time or url or week";
$input_id = "";
$input_name = ""; 
$input_value = ""; 
$input_placeholder = "";
$input_title = "";
$input_onchange = "";
$input_onclick = "";
$input_onfocus = "";
$input_onkeyup = "";
$input_onkeydown = "";
$input_ondblclick = "";
$input_onfocus = "";
$input_onblur = ""; 
$input_class = "";
$input_minlength = "";
$input_disabled = "";
$input_readonly = "";
$input_required = "";
include("includes/objects/input.php");
*/
?>

<input type=<?php echo($input_type); ?> 
	   id="<?php echo($input_id); ?>" 
	   name="<?php echo($input_name); ?>" 
	   value="<?php echo($input_value); ?>" 
	   placeholder="<?php echo($input_placeholder); ?>"
	   title="<?php echo($input_title); ?>"
	   onchange="<?php echo($input_onchange); ?>"
	   onclick="<?php echo($input_onclick); ?>"
	   onfocus="<?php echo($input_onfocus); ?>"
	   onkeyup="<?php echo($input_onkeyup); ?>"
	   onkeydown="<?php echo($input_onkeydown); ?>"
	   ondblclick="<?php echo($input_ondblclick); ?>"
	   onfocus="<?php echo($input_onfocus); ?>"
	   onblur="<?php echo($input_onblur); ?>" 
	   class="<?php echo($input_class); ?>"
	   maxlength="<?php echo($input_maxlength); ?>"
	   minlength="<?php echo($input_minlength); ?>"
	   <?php echo($input_disabled); ?>
	   <?php echo($input_readonly); ?>
	   <?php echo($input_required); ?>
	   />