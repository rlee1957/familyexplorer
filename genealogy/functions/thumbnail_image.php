<?php

function get_thumbnail_image($id, $thumbnail)
{
$htm = "
<div onclick='thumbnail_select(".$id.");' class=thumbnail>
	<center>
	<div style='text-align: center; height: 250px; width: 250px;'>
		<img src='addons/".$thumbnail["filename"]."' class=thumbnail-image style='max-height: 250px; max-width: 250px;' />
	</div>
	</center>
	<input type=hidden id=thumbnail_id_".$id." value='".$thumbnail["thumbnail_id"]."' />
	<div title='Thumbnail Title'>&nbsp;".$thumbnail["title"]."&nbsp;</div>
	<input type=hidden id=title_".$id." value='".$thumbnail["title"]."' />
	<input type=hidden id=filename_".$id." value='".$thumbnail["filename"]."' />
	<div title='Ordinal Position'>&nbsp;".$thumbnail["ordinalposition"]."&nbsp;</div>
	<input type=hidden id=ordinalposition_".$id." value='".$thumbnail["ordinalposition"]."' />
</div>
";
return $htm;	
}

?>