/* Ajax for new member */
var ajax = null;
var newContent = null;
var runNext = null;


function initializeAJAX(ajax)
{
var ax = ajax;
if(ajax == null)
  {
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
  alert(type);
  }
return ax;
}

function stateChange()
{
var readyState = ajax.readyState;
alert(readyState);
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
