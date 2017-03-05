/* new member javascript */
var selectedIndex = 0;

function checkLogon()
{

/* Logon */
var user_name = document.getElementById("logon_user_name").value;
var password = document.getElementById("logon_password").value;
if(user_name.length > 0)
  {
  if(password.length > 0)
    {
    document.getElementById("login_form").submit();
    }
  else
    {
    alert("Please enter your password.");
    document.getElementById("logon_password").focus();
    }
  }
else
  {
  alert("Please enter your user name.");
  document.getElementById("logon_user_name").focus();
  }
  
}

function respondLogon()
{
var user_name = document.getElementById("logon_user_name");
var password = document.getElementById("logon_password");
var msg = "Failed\n\nPlease try again!";
if(newContent.indexOf("Fail") > -1)
  {
  alert(msg);
  user_name.value = "";
  user_name.focus();
  password.value = "";
  }
else
  {
  var url = "dashboard.php?uid=" + newContent;
  //alert(url);
  window.open(url,"_self","");
  }
}

/* User Name */
function userNameChange(userName)
{
//alert("userNameChange")
if(userName != "")
  {
  document.getElementById("username_form").submit();
  }
else
  {
  var msg = "Please enter an user name.";
  alert(msg);
  user_name.focus();
  }
}

function respondUserName()
{
var msg = "User name\n\n" + user_name.value + "\n\nIs acceptable!";
if(newContent.indexOf("Already exists!") > -1)
  {
  msg = "User name\n\n" + user_name.value + "\n\nAlready exists!\n\nPlease try again.";
  alert(msg);
  user_name.value = "";
  user_name.focus();
  document.getElementById("sp_user_name").innerText = "";
  }
else
  {
  msg = "<font color='blue' style='font-weight: bold;'>";
  msg += "User Name Accepted ------ " + user_name.value + "</font>";
  document.getElementById("sp_user_name").innerHTML = msg;
  }
newContent = null;
//ajax = null;
runNext = null;
}

/* Sponsor */
function addNewMember()
{
//alert("Add new member");
if(verify())
  {
  checkPromoCode();
  }
}

function verify()
{
reset_instructions();
document.getElementById("db_idx").value = new_member_id;
document.getElementById("db_middle_name").value = middle_name.value;
document.getElementById("db_address2").value = member_address2.value;
try
	{
	var retVal = true;  
	var msg = "";
	if(!I_Agree.checked)
		{
		setup_click(1); 
		msg = "You must agree with the Terms of Agreement\n\nin order to become a member.";
		alert(msg);
		document.getElementById("rNo").focus();
		return false;
		} 
	if(first_name.value == "")
		{
		setup_click(2); 
		msg = "Please enter your first name.";
		alert(msg);
		first_name_verify.style.color = "red";
		first_name.focus();
		return false;
		}  else { document.getElementById("db_first_name").value = first_name.value }
	if(last_name.value == "")
		{
		setup_click(2); 
		msg = "Please enter your last name.";
		alert(msg);
		last_name_verify.style.color = "red";
		last_name.focus();
		return false;
		}  else { document.getElementById("db_last_name").value = last_name.value }
	//alert(user_name.value);   
	if(user_name.value == "")
		{
		setup_click(2); 
		msg = "Please enter a user name.\n\nMake one up.";
		alert(msg);
		user_name_verify.style.color = "red";
		user_name.focus();
		return false;
		}  else { document.getElementById("db_username").value = user_name.value }     
	if(password.value == "")
		{
		setup_click(2); 
		msg = "Please enter a password.\n\nMake one up.";   
		alert(msg);
		password_verify.style.color = "red";
		password.focus();
		return false;
		}      
	if(password2.value == "") 
		{
		setup_click(2); 
		msg = "Please verify your new password.";   
		alert(msg);
		password2_verify.style.color = "red";
		password2.focus();
		return false;
		}      
	if(password.value != password2.value)      
		{
		setup_click(2); 
		msg = "Password and Verify must match.\n\n";
		msg += "They do not match.\n\nPlease re-enter Password and Verify.";   
		alert(msg);
		password_verify.style.color = "red";
		password2_verify.style.color = "red";
		password.value = "";
		password2.value = "";
		password.focus();
		return false;
		}  else { document.getElementById("db_password").value = password.value }  
	if(email.value == "")
		{
		setup_click(2); 
		msg = "Please enter Your email address.";   
		alert(msg);
		email_verify.style.color = "red";
		email.focus();
		return false;
		}     
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	if(email.value.search(emailRegEx) == -1) 
		{
		setup_click(2); 
		msg = "Not a valid email address.\n\nPlease re-enter Your email address.";   
		alert(msg);
		email_verify.style.color = "red";
		email.focus();
		email.value = "";
		return false;
		}  else { document.getElementById("db_email").value = email.value }    
	if(member_address.value == "")
		{
		setup_click(3); 
		msg = "Please enter your postal address.";   
		alert(msg);
		address_verify.style.color = "red";
		member_address.focus();
		return false;
		}  else { document.getElementById("db_address1").value = member_address.value }    
	if(city.value == "")
	  {
	  setup_click(3); 
	  msg = "Please enter your city.";   
	  alert(msg);
	  city_verify.style.color = "red";
	  city.focus();
	  return false;
	  }  else { document.getElementById("db_city").value = city.value }      
	if(state.value == "")
	  {
	  setup_click(3); 
	  msg = "Please select your state.";   
	  alert(msg);
	  state_verify.style.color = "red";
	  state.focus();
	  return false;
	  }  else { document.getElementById("db_state").value = state.value }
	if(zip.value == "")
	  {
	  setup_click(3); 
	  msg = "Please enter your zip code.";   
	  alert(msg);
	  zip_verify.style.color = "red";
	  zip.focus();
	  return false;
	  }  else { document.getElementById("db_zip").value = zip.value }     
	if(sponsor1.value == "")    
	  {      
	  setup_click(4);        
	  msg = "Please enter your team code.\n\n";
	  msg += "If you do not have a team code,\n\n";
	  msg += 'Click the "Get A team Code" button.';   
	  alert(msg);     
	  sponsor1_verify.style.color = "red";
	  sponsor1.focus();
	  return false;  
	  }
	if(document.getElementById('team_code_verified').value == 'false')
		{
		setup_click(4);        
		msg = "Please verify your team code by\n\nclicking the 'Submit Team Code' button.\n\n";  
		alert(msg);     
		sponsor1_verify.style.color = "red";
		sponsor1.focus();
		return false; 	
		} else { document.getElementById("db_team_code").value = sponsor1.value } 
	}  
catch(exc)
	{
	alert(exc.message);
	} 
return true;                  
}

function reset_instructions()
{
var splist = document.getElementsByClassName("instruction");
var len = splist.length;
for(x=0;x<len;x++)
	{
	splist[x].style.color = "#000000";		
	}
}

function checkPromoCode()
{ 
if(document.getElementById("team_code").value != "")
	{
	document.getElementById("promo_form").submit();	
	}
else
	{
	alert("Please enter a Team Code, and try again!");
	document.getElementById("team_code").focus();	
	}

}

function getPromoCode()
{ 
document.getElementById("get_promo_form").submit();
}

function respondSponsor()
{
alert("respondsponsor");
var sponsor = sponsor1.value;
var msg = "Sponsor ID\n\n" + sponsor + "\n\n";
msg += "Is not a valid Sponsor ID!\n\n";
msg += "Please re-enter and try again.";
if(newContent.indexOf("Does not exist!") > -1)
  {
  alert(msg);
  sponsor1.value = "";
  sponsor1.focus();
  changeMade("Yes");
  document.getElementById("sp_sponsor").innerHTML = "";
  }
else
  {
  msg = "<font color='blue' style='font-weight: bold;'>";
  msg += "Sponsor ID Found -------- " + sponsor1.value + "</font>";
  changeMade("No");
  document.getElementById("sp_sponsor").innerHTML = msg;
  document.getElementById("sponsor_address").innerHTML = newContent;
  }
newContent = null;
ajax = null;
runNext = null;
}

/* Save New Member */
function save()
{
if(verify())
	{
	document.getElementById("new_member").submit();
	}
}

function respondSave()
{
url = "/BUCKS/dashboard.php?uid=" + new_member_id;
window.open(url, "_self", "");
}

/* UI functionality */
function showAddress()
{
//changeMade("Yes");
var full_address = "";
var name = "";
var first_name = document.getElementById("first_name").value;
var middle_name = document.getElementById("middle_name").value;
var last_name = document.getElementById("last_name").value;
var postal_address = "";
var address = document.getElementById("member_address").value;
var address2 = document.getElementById("member_address2").value;
var city = document.getElementById("member_city").value;
var state = document.getElementById("member_state").value;
var zip = document.getElementById("member_zip").value;
var del = "";
try
	{
	if(first_name.length > 0)
		{
		name = first_name;
		del = " ";
		}
	if(middle_name.length > 0)
		{
		name = del + middle_name;
		del = " ";
		}
	if(last_name.length > 0)
		{
		name = del + last_name;
		}
	del = "";
	if(address.length > 0)
		{
		street_address = address;
		del	= "<br />";
		}
	if(address2.length > 0)
		{
		street_address += del + address2;
		}
	del = "";
	var csz = "";
	if(city.length > 0)
		{
		csz = city;
		del = ", ";
		}
	if(state.length > 0)
		{
		csz += del + state;
		del = " ";
		}
	if(zip.length > 0)
		{
		csz += del + zip;
		}
	if(name.length > 0)
		{
		full_address = name;	
		}
	if(postal_address.length > 0)
		{
		full_address = "<br />" + postal_address;	
		}
	if(csz.length > 0)
		{
		full_address = "<br />" + csz;	
		}
	document.getElementById("t").value = full_address;
	document.getElementById("address").innerHTML = full_address;
	}
catch(exc)
	{ 
	alert(exc.message); 
	}
}

function stepClick(idx)
{
var control;
var o = null;
for(x=0;x<7;x++)
	{
	if(x != 3)
		{
		control = "div_" + x;
		o = document.getElementById(control);
		o.style.display = "none";
		}
	}
control = "div_" + idx;
o = document.getElementById(control);
o.style.display = "block";
}

function changeMade(answer)
{
var check_display = "none";
var save_display = "block";
var check_disabled = true;
var save_disabled = false;
if(answer == "Yes")
  {
  check_display = "block";
  save_display = "none";
  check_disabled = false;
  save_disabled = true;
  }
/*button_check.style.display = check_display;
button_check.disabled = check_disabled;
button_save.style.display = save_display;
button_save.disabled = save_disabled;*/
}

function recalculate()
{   
try{
var o = document.getElementById("hyp");
var n = o.value;
if((n == "")||(n.search(/^[0-9]*$/)))
  {
  alert("Value must be numeric!");
  o.value = "";
  o.focus();
  return;
  }   
var c = n;  
var ar = new Array();
var amounts = new Array();
ar[ar.length] = 0;
ar[ar.length] = 1;
ar[ar.length] = 1;
ar[ar.length] = 1;
ar[ar.length] = 10;
amounts[amounts.length] = ar;  
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 10;
ar[ar.length] = 10;
ar[ar.length] = 10;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 10;
ar[ar.length] = 10;
ar[ar.length] = 100;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 10;
ar[ar.length] = 100;
ar[ar.length] = 100;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var ar = new Array();
ar[ar.length] = 0;
ar[ar.length] = 100;
ar[ar.length] = 100;
ar[ar.length] = 100;
ar[ar.length] = 100;
amounts[amounts.length] = ar;
var totals = new Array();
totals[0] = 0;
totals[1] = 0;
totals[2] = 0;
totals[3] = 0;
totals[4] = 0;

for(x=1;x<5;x++)
  {
  v = "l" + x + "_count";
  document.getElementById(v).innerHTML = n;
  for(y=0;y<5;y++)
    {
    v = "l" + x + "_lv" + y;
    amt = n * amounts[y][x];
    document.getElementById(v).innerHTML = currency(amt);
    totals[y] += amt; 
    }
  n = n * c;
  }
for(x=0;x<5;x++)
  {
  v = "total_lv" + x;
  document.getElementById(v).innerHTML = currency(totals[x]);
  } 
}catch(exc){alert(exc.message);}        
}

function currency(amt)
{
var t = amt + "";
var l = t.length;
var c = 0;
var ch = "";
var r = "";
var x = -1;
for(x=l-1;x>-1;x--)
  {
  c++;
  ch = t.substr(x, 1);
  r = ch + r;
  if(c == 3)
    {
    if(x != 0){r = "," + r;}
    c = 0;
    }
  }
r = "$" + r + ".00";
return r;
}

function clearAddress1()
{
document.getElementById("address1_number").value = "";
document.getElementById("address1_dir").selectedIndex = 0;
document.getElementById("address1_street").value = "";
document.getElementById("street_type").selectedIndex = 0;
document.getElementById("address1_space_type").selectedIndex = 0;
document.getElementById("address1_space_number").value = "";
document.getElementById("member_address2").value = "";
document.getElementById("member_city").value = "";
document.getElementById("member_state").selectedIndex = 0;
document.getElementById("member_zip").value = "";
document.getElementById("address").innerHTML = "";
}

function menu_over(obj, idx)
{
if(idx != selectedIndex)
	{
	obj.style.borderColor = "black";
	}
}

function menu_out(obj, idx)
{
if(idx != selectedIndex)
	{
	obj.style.borderColor = "#DFEBE0";
	}
}

function menu_click(obj, idx, count, div_count)
{
var x = -1;
if(idx != selectedIndex)
	{
	selectedIndex = idx;
	for(x=0;x<3;x++)
		{
		div_name = "div_" + x;
		d = document.getElementById(div_name);
		d.style.display = "none";
		obj_name = "menu_item_" + x;
		o = document.getElementById(obj_name);
		o.className = "menu_item";
		o.style.borderColor = "#DFEBE0";
		}
	document.getElementById("div_4").style.display = "none";
	document.getElementById("div_5").style.display = "none";
	document.getElementById("div_6").style.display = "none";
	div_name = "div_" + selectedIndex;
	d = document.getElementById(div_name);
	d.style.display = "block";
	obj.className = "menu_item_selected";
	obj.style.borderColor = "black";
	}
}

function exit_signup()
{
document.getElementById("blanket").style.display = "none";	
clear_setup();	
}

function clear_setup()
{
document.getElementById("sign_up1").style.display = "none";
document.getElementById("sign_up2").style.display = "none";
document.getElementById("sign_up3").style.display = "none";
document.getElementById("sign_up4").style.display = "none";	
document.getElementById("pane2_step1_buttons").style.display = "none";
document.getElementById("pane2_step2_buttons").style.display = "none";
document.getElementById("pane2_step3_buttons").style.display = "none";
document.getElementById("pane2_step4_buttons").style.display = "none";	
}

function setup_click(idx)
{
var dv = "sign_up" + idx;
var db = "pane2_step" + idx + "_buttons";
clear_setup();
document.getElementById(dv).style.display = "block";
document.getElementById(db).style.display = "block";	
}

function signup_click()
{
document.getElementById("blanket").style.display = "block";	
document.getElementById("div_2").style.display = "block";
}

function switch_pane(idx)
{

var idy = 1;
var name = "";
var button = "";	
for(x=0;x<5;x++)
	{
	name = "pane" + x;
	button = "pane" + x + "_buttons";
	document.getElementById(name).style.display = "none";
	if(x == 2)
		{
		for(y=1;y<5;y++)
			{
			name = "pane" + x + "_step" + y + "_buttons";	
			document.getElementById(name).style.display = "none";
			}
		}
	else
		{
		document.getElementById(button).style.display = "none";
		}
	}
name = "pane" + idx;
document.getElementById(name).style.display = "block";
if(idx == 2)
	{
	name = "pane" + idx + "_step" + idy + "_buttons";
	}
else
	{
	name = "pane" + idx + "_buttons";
	}
document.getElementById(name).style.display = "block";
}