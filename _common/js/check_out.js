function show_result(obj)
{
var jcs = document.getElementById("javascript_cer_special").value;
var ar = jcs.split("|");
var special;
for(x=0;x<ar.length;x++)
	{
	eval("special = {" + ar[x] + "};");	
	if(obj.value.toLowerCase() == special["name"].toLowerCase())
		{
		document.getElementById(special["display_element_id"]).style.display = "block";
		document.getElementById(special["text_element_id"]).name = "b_volname";
		}
	else
		{
		document.getElementById(special["display_element_id"]).style.display = "none";
		document.getElementById(special["text_element_id"]).name = "do_nothing";		
		}
	}

}
