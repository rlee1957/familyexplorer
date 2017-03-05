
function verify_email()
{
	
var email = document.getElementById("email");
if(email.value == "")
	{
	msg = "Please enter Your email address.";   
	alert(msg);
	email.focus();
	}     
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
if(email.value.search(emailRegEx) == -1) 
	{
	msg = "Not a valid email address.\n\nPlease re-enter Your email address.";   
	email.focus();
	email.value = "";
	}  
else 
	{ 
	document.getElementById("verify_email_form").submit();
	} 
	
}

function format_address_html(fnm, mnm, lnm, add1, add2, city, state, zip)
{
	
var postal = "";	
var del = "";
if(fnm != "")
	{ 
	postal = fnm;
	del = " ";
	}
if(mnm != "")
	{ 
	postal += del + mnm;
	del = " ";
	}
if(lnm != "")
	{ 
	postal += del + lnm;
	}
if(postal != "")
	{
	del = "<br />";
	}
if(add2 != "")
	{ 
	postal += del + add2;
	}
if(add1 != "")
	{ 
	postal += del + add1;
	}
if(city != "")
	{ 
	postal += del + city;
	del = ", ";
	}
if(state != "")
	{ 
	postal += del + state;
	del = " ";
	}
if(zip != "")
	{ 
	postal += del + zip;
	}
return postal;
	
}

function address_change()
{
var fnm = document.getElementById("first_name").value;
var mnm = document.getElementById("middle_name").value;
var lnm = document.getElementById("last_name").value;
var add1 = document.getElementById("address1").value;
var add2 = document.getElementById("address2").value;
var city = document.getElementById("city").value;
var state = document.getElementById("state").value;
var zip = document.getElementById("zip").value;
var fmt = format_address_html(fnm, mnm, lnm, add1, add2, city, state, zip);
document.getElementById("formatted_address").innerHTML =fmt;
}

function save_postal()
{
var pd = postal_array();
if(verify_postal(pd))
	{
	document.getElementById("db_first_name").value = pd["fnm"].value;
	document.getElementById("db_middle_name").value = pd["mnm"].value;
	document.getElementById("db_last_name").value = pd["lnm"].value;
	document.getElementById("db_address1").value = pd["add1"].value;
	document.getElementById("db_address2").value = pd["add2"].value;
	document.getElementById("db_city").value = pd["city"].value;
	document.getElementById("db_state").value = pd["state"].value;
	document.getElementById("db_zip").value = pd["zip"].value;
	document.getElementById("postage_form").submit();
	}

}

function verify_postal(pd)
{

var retVal = false;	
if(c4utrim(pd["fnm"].value) == "")
	{
	alert("Please enter your First Name (REQUIRED)!");
	pd["fnm"].value = "";
	pd["fnm"].focus();
	return retVal;
	}
if(c4utrim(pd["lnm"].value) == "")
	{
	alert("Please enter your Last Name (REQUIRED)!");
	pd["lnm"].value = "";
	pd["lnm"].focus();
	return retVal;
	}
if(c4utrim(pd["add1"].value) == "")
	{
	alert("Please enter your Address (REQUIRED)!");
	pd["add1"].value = "";
	pd["add1"].focus();
	return retVal;
	}
if(c4utrim(pd["city"].value) == "")
	{
	alert("Please enter your City (REQUIRED)!");
	pd["city"].value = "";
	pd["city"].focus();
	return retVal;
	}
if(pd["state"].value == "")
	{
	alert("Please select your State (REQUIRED)!");
	pd["state"].focus();
	return retVal;
	}
if(c4utrim(pd["zip"].value) == "")
	{
	alert("Please select your Zip Code (REQUIRED)!");
	pd["zip"].value = "";
	pd["zip"].focus();
	return retVal;
	}
if(!pd["pv"].checked)
	{
	alert("Please click the\n'Postal Information Is Correct' checkbox,\nto show that you verify your address\n(REQUIRED)!");
	pd["pv"].focus();
	return retVal;
	}
	
return true;
	
}

function postal_array()
{
	
var fnm = document.getElementById("first_name");
var mnm = document.getElementById("middle_name");
var lnm = document.getElementById("last_name");
var add1 = document.getElementById("address1");
var add2 = document.getElementById("address2");
var city = document.getElementById("city");
var state = document.getElementById("state");
var zip = document.getElementById("zip");	
var pv = document.getElementById("postal_verify");
var pd = {fnm: fnm, mnm: mnm, lnm: lnm, add1: add1, add2: add2, city: city, state: state, zip: zip, pv: pv};
return pd;		
	
}

function c4utrim(txt)
{
	
return txt.replace(/^\s+|\s+$/g, '');
	
}