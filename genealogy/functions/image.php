<?php

function get_image($id, $image)
{
$htm = "
<div onclick='image_select(".$id.");' class=image>
	<center>
		<div style='text-align: center; height: 125px; width: 125px;'>
			<img src='addons/".$image["filename"]."' class=image style='max-height: 125px; max-width: 125px;' />
		</div>
		<div>&nbsp;</div>
		<input type=hidden id=image_id_".$id." value='".$image["image_id"]."' />
		<div title='image Description'>&nbsp;".$image["description"]."</div>
		<div>&nbsp;</div>
		<input type=hidden id=filename_".$id." value='".$image["filename"]."' />
		<div title='File Name'>&nbsp;".$image["filename"]."</div>
		<div>&nbsp;</div>
		<input type=hidden id=filename".$id." value='".$image["filename"]."' />
		<div title='Image ID'>&nbsp;".$image["image_id"]."</div>
		<div>&nbsp;</div>
	</center>
</div>
";
return $htm;	
}

?>