function show_content(idx)
{
	
hide_all();
var div_name = "content_" + idx;
document.getElementById(div_name).style.display = "block";
	
}

function hide_all()
{
	
var dc = document.getElementById("show_content_count").value;
for(x=0;x<dc;x++)
	{
	var div_name = "content_" + x;
	document.getElementById(div_name).style.display = "none";	
	}
	
}