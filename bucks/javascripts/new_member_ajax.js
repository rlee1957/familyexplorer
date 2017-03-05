// Ajax for new member
var ajax = null;
var newContent = null;
var runNext = null;

function userNameChange(userName)
{
var url = "includes/check_user_name.php?=" + userName;
ajax = initializeAJAX();
newContent = "";
runNext = "respondUserName();";
ajax.onreadystatechange = stateChange;
ajax.open("GET", url, true);
ajax.send(null);
}

function initializeAJAX()
{
var ax = null;
var type = "Not AJAX capable";
try
	{
	// for browser with built in HTTP Request Object
	ax=new XMLHttpRequest();
	type = "XMLHttpRequest()";
	// HTTP Request object successfully assigned
	}
catch(exc)
	{
	try
		{
		ax=new ActiveXObject("Msxml2.XMLHTTP");
		type = "ActiveXObject('Msxml2.XMLHTTP')";
		}
	catch(exc)
		{
		try
			{
			ax=new ActiveXObject("Microsoft.XMLHTTP");
			type = "XMLHttpRequest(ActiveXObject('Microsoft.XMLHTTP'))"
			}
		catch(exc){}
		}
	}
//alert(type);
return ax;
}

function stateChange()
{
var readyState = ajax.readyState;
if(readyState == 4)
	{
	newContent = ajax.responseText;
	executeProcedure();
	}
}

function executeProcedure()
{
eval(runNext);
}
