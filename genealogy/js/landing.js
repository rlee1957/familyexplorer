
function check_login()
{
	
var user = document.getElementById("txtUserName");	
var pass = document.getElementById("txtPassword");
if(user.value.trim() == "")
	{
	var head = "Family Explorer<br />Login - Username";
	var msg = "Please enter your Family Explorer Username!";
	var button_text = "Exit";
	var button_method = "document.getElementById('txtUserName').focus();";
	show_popup(head, msg, button_text, button_method);
	return;
	}
if(pass.value.trim() == "")
	{
	var head = "Family Explorer<br />Login - Password";
	var msg = "Please enter your Family Explorer Password!";
	var button_text = "Exit";
	var button_method = "document.getElementById('txtPassword').focus();";
	show_popup(head, msg, button_text, button_method);
	return;
	}
var form_data = "username=" + user.value + "&password=" + pass.value;
var href = "logon/login.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ show_login_results(result); }
		}
	);	
}

function show_login_results(result)
{
var ar = result.split("|");
if(ar[0] == "failure")
	{
	var head = ar[1];
	var msg = ar[2];
	var button_text = "Exit";
	var button_method = ar[3];
	show_popup(head, msg, button_text, button_method);
	return;	
	}
else
	{
	href = "javascript: show_individual('" + ar[1] + "');";
	document.getElementById("home").href = href;
	show_individual(ar[1]);	
	document.getElementById("proxyid").value = ar[1];
	}
}

function show_individual(indid)
{	
var form_data = "indid=" + indid;
var href = "actions/show_family.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ fill_main(result); }
		}
	);
}

function fill_main(result)
{
document.getElementById("main").innerHTML = "";
document.getElementById("main").innerHTML = result;
}