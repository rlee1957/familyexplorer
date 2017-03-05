<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>File Upload</title>
</head>

<body>
<input type=file id=file_upload />
</body>
<script type="text/javascript">
$('#file_upload').bind('change', function() 
	{
	var sz = this.files[0].size;
	var nm = this.files[0].name;
	if(sz > 5000){ /* display error message */ }

	});
	
function is_image(flname)
{

var retval = false;
flname.toLowerCase();
var regex = new RegExp("(.*?)\.(png|jpg|jpeg|gif)$");
if((regex.test(val))){ retval = true; }
return retval;

}

function upload_file()
{    

var data = new FormData();
data.append('input_file_name', $('file_upload').prop('files')[0]);
// append other variables to data if you want: data.append('field_name_x', field_value_x);

$.ajax(
	{
	type: 'POST',               
	processData: false, // important
	contentType: false, // important
	data: data,
	url: your_ajax_path,
	dataType : 'json',  
	// in PHP you can call and process file in the same way as if it was submitted from a form:
	// $_FILES['input_file_name']
	success: function(jsonData)
		{
        // ...
        }
    // ...
    }
	  ); 
}
</script>
</html>