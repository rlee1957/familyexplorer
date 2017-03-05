
function popup_method()
{

hide_popup();
try
	{
	var method = document.getElementById("button_method").value;	
	eval(method);
	}
catch(err)
	{
	alert(err.message);
	}
	
}

function show_popup(head, message, button_text, button_method)
{
document.getElementById("popup_head").innerHTML = head;
document.getElementById("popup_msg").innerHTML = message;
document.getElementById("button_text").innerHTML = button_text;
document.getElementById("button_method").value = button_method;
document.getElementById("popup_mask").style.display = "block";
document.getElementById("popup_container").style.display = "block";
}

function hide_popup()
{
document.getElementById("popup_mask").style.display = "none";
document.getElementById("popup_container").style.display = "none";	
}

function do_nothing(result)
{
//alert(result);	
}

