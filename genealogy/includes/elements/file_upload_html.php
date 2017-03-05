
<?php

$htm .= "
<!-- uploader Elements (START) -->
<form action='".$form_action."' 
	  method='post' 
	  enctype='multipart/form-data' 
	  target='".$form_target."' 
	  id='".$form_id."' 
	  name='".$form_id."'>
	<input type='file' 
		   name='upload_file' 
		   id='upload_file' 
		   accept='.gif, .jpg, .jpeg, .png' 
		   onchange=\"".$file_change."\" 
		   class=pu-action-button />
	<input type=button 
		   id=btn_file 
		   name=btn_file 
		   onclick=\"".$upload_click."\" 
		   disabled 
		   value='Upload This File' 
		   class=pu-action-button />
	<input type=hidden 
		   id=img_typ 
		   name=img_typ 
		   value='".$img_typ."' />
	<input type=hidden 
		   id=file_title 
		   name=file_title 
		   value='".$img_typ."' />
	<input type=hidden 
		   id=img_id 
		   name=img_id 
		   value='".$img_id."' />
	<input type=hidden 
		   id=individual_id 
		   name=individual_id 
		   value='".$id."' />
</form>

<iframe id='".$form_target."' 
		name='".$form_target."' 
		style='width: 200px; height: 100px; display: none;'></iframe>
<!-- uploader Elements (END) -->
";
