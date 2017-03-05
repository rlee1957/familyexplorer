

function validate_zip(obj, message)
{
var tmp = obj.value;
var len = obj.value.length;
if(len < 5)
	{ 
	obj.value = "";
	document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
	document.getElementById("error_content").innerHTML = message;
	document.getElementById("show_modal").click();
	return false;
	}
var chr = "";
var asc = 0;
var x = 0;
for(x;x<len;x++)
	{
	asc = tmp.charCodeAt(x);
	chr = String.fromCharCode(asc);
	if(!((asc > 47)&&(asc < 58)))
		{
		obj.value = "";
		document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
		document.getElementById("error_content").innerHTML = message;
		document.getElementById("show_modal").click();
		return false;
		}	
	}
return true;
}

function validate_ca_postal_code(obj, message)
{
var re = /^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$/i;
var tmp = only_printable(obj);
var len = tmp.length;
if((len < 6)||(len == 0)||(!re.test(tmp)))
	{
	obj.value = "";
	document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
	document.getElementById("error_content").innerHTML = message;
	document.getElementById("show_modal").click();
	return false;	
	}
return true;
}

function validate_us_phone(obj, message)
{
var tmp = obj.value;
var len = obj.value.length;
if(len < 10)
	{
	obj.value = "";
	document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
	document.getElementById("error_content").innerHTML = message;
	document.getElementById("show_modal").click();
	return false;
	}
var chr = "";
var asc = 0;
var x = 0;
for(x;x<len;x++)
	{
	asc = tmp.charCodeAt(x);
	chr = String.fromCharCode(asc);
	if(!((asc > 47)&&(asc < 58)))
		{
		obj.value = "";
		document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
		document.getElementById("error_content").innerHTML = message;
		document.getElementById("show_modal").click();
		return false;
		}	
	}
return true;
}

function validate_email(obj, message)
{
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var tmp = only_printable(obj);
var len = tmp.length;
if((len < 6)||(len == 0)||(!re.test(tmp)))
	{
	obj.value = "";
	document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
	document.getElementById("error_content").innerHTML = message;
	document.getElementById("show_modal").click();
	return false;
	}
return true;
}

function validate_required(obj, message)
{
var tmp = only_printable(obj);
var len = tmp.length;
if(len == 0)
	{
	obj.value = "";
	document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
	document.getElementById("error_content").innerHTML = message;
	document.getElementById("show_modal").click();
	return false;	
	}
return true;
}

function validate_state(obj, message)
{
if(obj.selectedIndex < 1)
	{
	document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
	document.getElementById("error_content").innerHTML = message;
	document.getElementById("show_modal").click();
	return false;	
	}
return true;	
}

function validate_postal(obj, message, country)
{
if(country == "US")
	{
	if(!validate_zip(obj, message))
		{
		document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
		document.getElementById("error_content").innerHTML = message;
		document.getElementById("show_modal").click();
		return false;
		}	
	}
else
	{
	if(country == "CA")
		{	
		if(!validate_ca_postal_code(obj, message))
			{
			document.getElementById("error_title").innerHTML = document.getElementById("validate_shipto_title").innerHTML;
			document.getElementById("error_content").innerHTML = message;
			document.getElementById("show_modal").click();
			return false;	
			}
		}
	}
return true;	
}