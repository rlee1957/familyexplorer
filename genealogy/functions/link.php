<?php

function get_link($id, $link)
{
$title = "Image Id: ".$link["link_id"]." | URL: ".$link["filename"]." | Title: ".$link["title"]." | Added By: ".$link["proxy"];
$title .= " | Date Added: ".$link["dateadded"];
$htm = "
<a href='".$link["filename"]."' title='".$title."' target='_blank'>".$link["title"]."</a>
<input type=hidden id=link_id_".$id." value='".$link["link_id"]."' />
<input type=hidden id=filename_".$id." value='".$link["filename"]."' />
<input type=hidden id=title_".$id." value='".$link["title"]."' />
<input type=hidden id=proxy_".$id." value='".$link["proxy"]."' />
<input type=hidden id=dateadded_".$id." value='".$link["dateadded"]."' />
";
return $htm;	
}

?>