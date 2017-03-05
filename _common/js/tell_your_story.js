function inspect_file(obj)
{
var filename = obj.value;
var pattern = new RegExp("\.(gif|jpg|jpeg|png)$", 'i');
if(pattern.test(filename))
	{
	document.getElementById("submit_image").style.display = "block";
	var dot = filename.lastIndexOf(".");
	var len = filename.length;
	var sufstart = len - dot;
	var startat = len - sufstart;
	var suffix = filename.substr(startat, sufstart);
	document.getElementById("suffix").value = suffix;	
	document.getElementById("show_file_name").innerHTML = filename;
	}
else
	{
	document.getElementById("submit_image").style.display = "none";
	msg = "The specified file:\n" + filename + "\nis not a valid image file.\n\nValid file types:\n.gif\n.jpg\n.jpeg\n.png\n\nPlease try again.\n";
	alert(msg);
	obj.value = "";
	obj.click();
	}		
}

function type_change()
{
var chks = document.getElementsByTagName("INPUT");
var retVal = "";
var del = "";
var x = 0;
var len = chks.length;
for(x; x<len; x++)
	{
	var name = document.getElementsByTagName("INPUT")[x].name;
	var value = document.getElementsByTagName("INPUT")[x].value;
	var typ = document.getElementsByTagName("INPUT")[x].type;
	var checked = document.getElementsByTagName("INPUT")[x].checked;
	if(typ = "checkbox")	
		{
		if(checked)
			{
			retVal += del + value;	
			del = "|";
			}
		}
	}
document.getElementById("db_story_type").value = retVal;
}

function category_change()
{
document.getElementById("db_story_category").value = document.getElementById("dd_category").value;	
}

function story_change()
{
document.getElementById("db_story_text").value = document.getElementById("story_text").value;	
}

function submit_story()
{
if(validate_story())
	{
	document.getElementById("story_form").submit();	
	}
}

function validate_story()
{
var cate = document.getElementById("cate").value;
var catreq = document.getElementById("catreq").value;
var catmsg = document.getElementById("catmsg").value;
var typ = document.getElementById("typ").value;
var typreq = document.getElementById("typreq").value;
var typmsg = document.getElementById("typmsg").value;
var fil = document.getElementById("fil").value;
var filreq = document.getElementById("filreq").value;
var filmsg = document.getElementById("filmsg").value;
var storymsg = document.getElementById("storymsg").value;
var type_required = false;
var category_required = false;
var file_required = false;
var story_required = true;
if((cate == 1)&&(catreq == 1)){ category_required = true; }
if((typ == 1)&&(typreq == 1)){ type_required = true; }
if((fil == 1)&&(filreq == 1)){ file_required = true; }	
if(category_required)
	{
	if(document.getElementById("db_story_category").value == "")
		{
		alert(catmsg);
		document.getElementById("dd_category").focus();
		return false;
		}
	}
if(type_required)
	{
	if(document.getElementById("db_story_type").value == "")
		{
		alert(typmsg);
		document.getElementById("rdo_0").focus();
		return false;
		}
	}
if(file_required)
	{
	if(document.getElementById("db_story_file").value == "")
		{
		alert(filmsg);
		document.getElementById("btn_select_image").focus();
		return false;
		}
	}
if(story_required)
	{
	if(document.getElementById("db_story_text").value == "")
		{
		alert(storymsg);
		document.getElementById("story_text").focus();
		return false;
		}
	}
return true;
}