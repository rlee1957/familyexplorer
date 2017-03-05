// JavaScript Document
var selectedIndex = 7;
var pay_index = 0;
var sp1_paid = false;
var sp2_paid = false;
var sp3_paid = false;
var sp4_paid = false;

function markPaid()
{
var x = 0;
var btn = null;
var o_btn = null;
var ev = null;
for(x=1;x<5;x++)
  {
  var btn = "btn_pay" + x + "_done";
  var o_btn = document.getElementById(btn);
  if(o_btn.style.display == "none")
    {
    ev = "sp" + x + "_paid = true;";
    eval(ev);
    }
  }
}

function pay_done(n)
{
//alert(n);
markPaid();
var dat = new Date();
var y = dat.getFullYear();
var m = "0" + (dat.getMonth() + 1);
var d = "0" + (dat.getDate());
m = m.substr(m.length - 2, 2);
d = d.substr(d.length - 2, 2);
var dte = y + "-" + m + "-" + d;
var action = "pay" + n + "_verify = 1, pay" + n +"_date = '" + dte + "'";
var btn = "btn_pay" + n + "_done";
var o_btn = document.getElementById(btn);
o_btn.style.display = "none";

var url = "includes/iframe_update_member.php?id=" + id.value;
url += "&set_value=" + action;   
document.getElementById("server_results").src = url;

var spn = "pay" + n + "_done";
var o_spn = document.getElementById(spn);
o_spn.style.display = "block";

var vari = "sp" + n + "_paid = true;";
eval(vari);
} 

function savePayments()
{
var action = "";
var delim = "";
var dat = new Date();
var y = dat.getFullYear();
var m = "0" + (dat.getMonth() + 1);
var d = "0" + (dat.getDate());
m = m.substr(m.length - 2, 2);
d = d.substr(d.length - 2, 2);
var dte = y + "-" + m + "-" + d;
var selection = false;
if((verify1.checked)&&(!verify1.disabled))
  {
  verify1.disabled = true;
  action += "pay1_verify = 1, pay1_date = '" + dte + "'";
  delim = ", ";
  selection = true;
  //alert(action);
  }
if((verify2.checked)&&(!verify2.disabled))
  {
  verify2.disabled = true;
  action += delim + "pay2_verify = 1, pay2_date = '" + dte + "'";
  delim = ", ";
  selection = true;
  }
if((verify3.checked)&&(!verify3.disabled))
  {
  verify3.disabled = true;
  action += delim + "pay3_verify = 1, pay3_date = '" + dte + "'";
  delim = ", ";
  selection = true;
  }  
if((verify4.checked)&&(!verify4.disabled))
  {
  verify4.disabled = true;
  action += delim + "pay4_verify = 1, pay4_date = '" + dte + "'";
  selection = true;
  }
if(selection)
  { 
  var url = "includes/iframe_update_member.php?id=" + id.value;
  url += "&set_value=" + action;   /*
  ajax = initializeAJAX();
  newContent = "";
  runNext = "reload();";
  ajax.onreadystatechange = stateChange;
  ajax.open("GET", url, true);
  ajax.send(null); */
  document.getElementById("server_results").src = url;
  }
}

function checkReceipt()
{
if(received_member_id.value.length == 0)
  {
  alert("please enter the member ID you received from");
  }
else
  {
  var url = "includes/iframe_check_member_id.php?id=" + received_member_id.value;
  url += "&sponsor_id=" +  member_id.value;
  /*ajax = initializeAJAX();
  newContent = "";
  runNext = "respond_received_member();";
  ajax.onreadystatechange = stateChange;
  ajax.open("GET", url, false);
  ajax.send(null); */
  document.getElementById("server_results").src = url;
  }
}

function checkReceipt_inst()
{
if(received_member_id_inst.value.length == 0)
  {
  alert("please enter the member ID you received from");
  }
else
  {
  checkType = "inst";
  var url = "includes/iframe_check_member_id.php?id=" + received_member_id_inst.value;
  url += "&sponsor_id=" +  member_id.value;
  document.getElementById("server_results").src = url;
  }
}

function respond_received_member()
{
var mid = received_member_id.value;
var msg = "Member ID\n\n" + mid + "\n\n";
msg += "Is not a valid Member ID!\n\n";
msg += "Please re-enter and try again.";
if(newContent.indexOf("Does not exist!") > -1)
  {
  alert(msg);
  received_member_id.value = "";
  received_member_id.focus();
  payor_address.innerHTML = "";
  }
else
  {
  payor_address.innerHTML = newContent;
  bCheck_recieved_member.disabled = true;
  bCheck_recieved_member.style.display = "none";
  bSave_received_member.style.display = "block";
  bSave_received_member.disabled = false;
  }
newContent = null;
ajax = null;
runNext = null;
}

function respond_receipt_save()
{
var url = "dashboard.php?uid=" + id.value;
//alert(url);
window.open(url, "_self", "");
}

function save_recieved()
{
if(document.getElementById("payment_received").checked)
  {
  var dat = new Date();
  var y = dat.getFullYear();
  var m = "0" + (dat.getMonth() + 1);
  var d = "0" + (dat.getDate());
  m = m.substr(m.length - 2, 2);
  d = d.substr(d.length - 2, 2);
  var dte = y + "-" + m + "-" + d;
  var field = document.getElementById("member_id").value;
  var mid = received_member_id.value;
  var url = "includes/iframe_save_payment_receipt.php?id=" + mid;
  url += "&sponsor_id=" + field;   
  url += "&date_value=" + dte;
  //alert(url);
  document.getElementById("server_results").src = url;
  }
else
  {
  alert("If you want to verify that\nyou received from this member,\nplease click checkbox.");
  document.getElementById("payment_received").focus();
  }
}

function save_recieved_inst()
{
if(document.getElementById("payment_received_inst").checked)
  {
  var dat = new Date();
  var y = dat.getFullYear();
  var m = "0" + (dat.getMonth() + 1);
  var d = "0" + (dat.getDate());
  m = m.substr(m.length - 2, 2);
  d = d.substr(d.length - 2, 2);
  var dte = y + "-" + m + "-" + d;
  var field = document.getElementById("member_id").value;
  var mid = received_member_id_inst.value;
  var url = "includes/iframe_save_payment_receipt.php?id=" + mid;
  url += "&sponsor_id=" + field;   
  url += "&date_value=" + dte;
  //alert(url);
  document.getElementById("server_results").src = url;
  }
else
  {
  alert("If you want to verify that\nyou received from this member,\nplease click checkbox.");
  document.getElementById("payment_received_inst").focus();
  }
}

function verify_click()
{
var item_checked = false;
var cb = null;
for(x=1;x<5;x++)
  {
  if(document.getElementById("verify" + x).checked){item_checked = true;}
  }
if(item_checked)
  {
  document.getElementById("bSubmit").disabled = false;
  document.getElementById("bSubmit").style.visibility = "visible";
  }
else
  {
  document.getElementById("bSubmit").disabled = true;
  document.getElementById("bSubmit").style.visibility = "hidden";  
  }
}

function reload()
{
location.reload();
}

function button_click(idx)
{
//alert(idx);
var control;
var o = null;
for(x=0;x<8;x++)
  {
  control = "div" + x;
  o = document.getElementById(control);
  o.style.display = "none";
  }
control = "div" + idx;
//alert(control);
o = document.getElementById(control);
o.style.display = "block";
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

function showAddress()
{
var address = "";
var del = "";
try{
var name = first_name.value + " ";
name += middle_name.value + " ";
name += last_name.value;
var ad_num = document.getElementById("address1_number").value;
if(ad_num.length > 0){ad_num += " ";}
var ad_st = document.getElementById("address1_street").value;
if(ad_st.length > 0){ad_st += " ";}
var ad_dr = document.getElementById("address1_dir").value;
if(ad_dr.length > 0){ad_dr += " ";}
var ad_ty = document.getElementById("street_type").value;
if(ad_ty.length > 0){ad_ty += " ";}
var ad_sp = document.getElementById("address1_space_type").value;
if(ad_sp.length > 0){ad_sp += " ";}
var ad_sn = document.getElementById("address1_space_number").value;
var scity = document.getElementById("member_city").value;
if(scity.length > 0){scity += ", ";}
var sstate = document.getElementById("member_state").value;
if(sstate.length > 0){sstate += " ";}

var address1 = ad_num + ad_dr + ad_st + ad_ty + ad_sp + ad_sn;
var saddress2 = document.getElementById("member_address2").value;
var city_state_zip = scity + sstate + document.getElementById("member_zip").value;
if(name.length > 0){address = name + "<br />";}
if(address1.length > 0){address += address1 + "<br />";}
if(saddress2.length > 0){address += saddress2 + "<br />";}
if(city_state_zip.length > 0){address += city_state_zip;}
if(address == ""){address = "&nbsp;";}
document.getElementById("t").value = address;
document.getElementById("sp_address").innerHTML = address;
}catch(exc){alert(exc.message);}
changeMade("Yes")
}

function my_profile()
{
var state = document.getElementById("h_state").value;
var st = document.getElementById("member_state");
var l = st.options.length;
for(x=0;x<l;x++)
  {
  if((state == st.options[x].value)||(state == st.options[x].innerText))
    {
    st.options[x].selected = true;
    break;
    }
  }
var h_ast = document.getElementById("h_address1_space_type").value;
var ast = document.getElementById("address1_space_type");
var l = ast.options.length;
for(x=0;x<l;x++)
  {
  if((h_ast == ast.options[x].value)||(h_ast == ast.options[x].innerText))
    {
    ast.options[x].selected = true;
    break;
    }
  }
var h_sty = document.getElementById("h_address1_street_type").value;
var sty = document.getElementById("street_type");
var l = sty.options.length;
for(x=0;x<l;x++)
  {
  if((h_sty == sty.options[x].value)||(h_sty == sty.options[x].innerText))
    {
    sty.options[x].selected = true;
    break;
    }
  }
var h_asd = document.getElementById("h_address1_street_direction").value;
var asd = document.getElementById("address1_dir");
var l = asd.options.length;
for(x=0;x<l;x++)
  {
  if((h_asd == asd.options[x].value)||(h_asd == asd.options[x].innerText))
    {
    asd.options[x].selected = true;
    break;
    }
  }
showAddress(); 
hasProfileChanged = false;
}

function changeMade(answer)
{
if(answer == "Yes")
  {
  hasProfileChanged = true;
  }
}

function verifyChanges()
{
alert(hasProfileChanged);
if(hasProfileChanged)
  {
  if(verify())
    {
    saveChanges();
    }
  }
else
  {
  alert("You have made no changes to save.");
  }    
}

function verify()
{
try{
var retVal = true;  
var msg = ""; 
if((document.getElementById("first_name").value == "")&&
   (document.getElementById("middle_name").value == "")&&
   (document.getElementById("last_name").value == ""))
  { 
  msg = "Please enter Your name.";
  alert(msg);
  document.getElementById("first_name").focus();
  return false;
  }    
if(document.getElementById("member_password").value == "")
  {
  msg = "Please enter a password.\n\nMake one up.";   
  alert(msg);
  document.getElementById("member_password").focus();
  return false;
  }      
if(document.getElementById("member_password_verify").value == "") 
  {
  stepClick(2); 
  msg = "Please verify your new password.";   
  alert(msg);
  document.getElementById("member_password_verify").focus();
  return false;
  }      
if(document.getElementById("member_password").value != document.getElementById("member_password_verify").value)      
  {
  msg = "Password and Verify should match.\n\n";
  msg += "They do not match.\n\nPlease re-enter Password and Verify.";   
  alert(msg);
  document.getElementById("member_password").value = "";
  document.getElementById("member_password_verify").value = "";
  document.getElementById("member_password").focus();
  return false;
  }     
if(document.getElementById("email").value == "")
  {
  msg = "Please enter Your email address.";   
  alert(msg);
  document.getElementById("email").focus();
  return false;
  }     
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
if(document.getElementById("email").value.search(emailRegEx) == -1) 
  {
  msg = "Not a valid email address.\n\nPlease re-enter Your email address.";   
  alert(msg);
  document.getElementById("email").value = "";
  document.getElementById("email").focus();
  return false;
  }    
if((document.getElementById("address1_number").value == "")&&
   (document.getElementById("address1_street_name").value == "")&&
   (document.getElementById("address1_street_direction").value == "")&&
   (document.getElementById("address1_street_type").value == "")&&
   (document.getElementById("address1_space_type").value == "")&&
   (document.getElementById("address1_space_number").value == "")&&
   (document.getElementById("address2").value == ""))
  {
  msg = "Please Your mail address.";   
  alert(msg);
  document.getElementById("address1_number").focus();
  return false;
  }     
if(document.getElementById("member_city").value == "")
  {
  msg = "Please enter Your city.";   
  alert(msg);
  document.getElementById("member_city").focus();
  return false;
  }       
if(document.getElementById("member_state").value == "")
  {
  msg = "Please select Your state.";   
  alert(msg);
  document.getElementById("member_state").focus();
  return false;
  } 
if(document.getElementById("member_zip").value == "")
  {
  msg = "Please enter your zip code.";   
  alert(msg);
  document.getElementById("member_zip").focus();
  return false;
  } 
}catch(exc){alert(exc.message);}
return true;                  
}

function save_profile()
{
var changed = false;
var action = "";
var id = document.getElementById("member_id");
var fn = document.getElementById("first_name");
var mn = document.getElementById("middle_name");
var ln = document.getElementById("last_name");
var p = document.getElementById("member_password");
var pv = document.getElementById("member_password_verify");
var e = document.getElementById("email");
var an = document.getElementById("address1_number");
var asd = document.getElementById("address1_dir");
var asn = document.getElementById("address1_street");
var ast = document.getElementById("street_type");
var aspt = document.getElementById("address1_space_type");
var aspn = document.getElementById("address1_space_number");
var a2 = document.getElementById("member_address2");
var c = document.getElementById("member_city"); 
var s = document.getElementById("member_state"); 
var z = document.getElementById("member_zip"); 

var hn = document.getElementById("h_name");
var hfn = document.getElementById("h_first_name");
var hmn = document.getElementById("h_middle_name");
var hln = document.getElementById("h_last_name");
var han = document.getElementById("h_address1_number");
var hasd = document.getElementById("h_address1_street_direction");
var hasn = document.getElementById("h_address1_street_name");
var hast = document.getElementById("h_address1_street_type");
var haspt = document.getElementById("h_address1_space_type");
var haspn = document.getElementById("h_address1_space_number");
var ha2 = document.getElementById("h_address2");
var hcsz = document.getElementById("h_csv");
var hc = document.getElementById("h_city");
var hs = document.getElementById("h_state");
var hz = document.getElementById("h_zip");
var hun = document.getElementById("h_user_name");
var hp = document.getElementById("h_password");
var he = document.getElementById("h_email");
var del = "";
if(hfn.value != fn.value)
  {
  changed = true; 
  action += del + "first_name = '" + fn.value + "'";
  del = ", ";
  }
if(hmn.value != mn.value)
  {
  changed = true; 
  action += del + "middle_name = '" + mn.value + "'";
  del = ", ";
  }
if(hln.value != ln.value)
  {
  changed = true; 
  action += del + "last_name = '" + ln.value + "'";
  del = ", ";
  } 
if((fn.value == "")&&(mn.value == "")&&(ln.value == ""))
  {
  alert("Name cannot be blank.\nPlease enter your name.");
  fn.focus();
  return;
  }
if(hp.value != p.value)
  {
  changed = true; 
  action += del + "password = '" + p.value + "'";
  del = ", ";
  } 
if(p.value != pv.value) 
  {
  alert("Password and Verify Password must be the same!\nPlease re-enter.");
  p.value = "";
  pv.value = "";
  p.focus();
  return;
  }   
if(he.value != e.value)
  {
  changed = true; 
  action += del + "email = '" + e.value + "'";
  del = ", ";
  }
if(han.value != an.value)
  {
  changed = true; 
  action += del + "address1_number = '" + escape(an.value) + "'";
  del = ", ";
  } 
if(hasd.value != asd.value)
  {
  changed = true; 
  action += del + "address1_street_direction = '" + asd.value + "'";
  del = ", ";
  } 
if(hasn.value != asn.value)
  {
  changed = true; 
  action += del + "address1_street_name = '" + escape(asn.value) + "'";
  del = ", ";
  } 
if(hast.value != ast.value)
  {
  changed = true; 
  action += del + "address1_street_type = '" + ast.value + "'";
  del = ", ";
  } 
if(haspt.value != aspt.value)
  {
  changed = true; 
  action += del + "address1_space_type = '" + aspt.value + "'";
  del = ", ";
  } 
if(haspn.value != aspn.value)
  {
  changed = true; 
  action += del + "address1_space_number = '" + escape(aspn.value) + "'";
  del = ", ";
  } 
if(ha2.value != a2.value)
  {
  changed = true; 
  action += del + "address2 = '" + escape(a2.value) + "'";
  del = ", ";
  }   
if((an.value == "")&&(asn.value == "")&&(a2.value == ""))
  {
  alert("You must have a value in Number, Street or Address2.\nPlease complete address.");
  an.focus();
  return;
  } 
if(hc.value != c.value)
  {
  changed = true; 
  action += del + "city = '" + escape(c.value + "'");
  del = ", ";
  } 
if(c.value == "") 
  {
  alert("You must include the city for your mailing address.\nPlease enter your city.");
  c.focus();
  return;
  } 
if(hs.value != s.value)
  {
  changed = true; 
  action += del + "state = '" + escape(s.value) + "'";
  del = ", ";
  } 
if(s.value == "") 
  {
  alert("You must include the state for your mailing address.\nPlease enter your state.");
  s.focus();
  return;
  } 
if(hz.value != z.value)
  {
  changed = true; 
  action += del + "zip = '" + z.value + "'";
  } 
if(z.value == "") 
  {
  alert("You must include the zip code for your mailing address.\nPlease enter your zip code.");
  z.focus();
  return;
  }
if(changed)
  {
  var mid = id.value;
  var url = "includes/iframe_update_member.php?id=" + mid;
  url += "&set_value=" + action;
  document.getElementById("server_results").src = url;
  }
}

function cleanSQL(value)
{
var no = "\"'\\<>&#?";
var retVal = "";
var ch = "";
for(x=0;x<value.length;x++)
  {
  ch = value.substr(x, 1);
  if((no.indexOf(ch) > 0)||(value.charCodeAt(x) == 34)){ch = "";}
  retVal += ch;
  }
return retVal;
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
	for(x=0;x<9;x++)
		{
		if(x != 8)
		  {
  		div_name = "div_" + x;
  		d = document.getElementById(div_name);
  		d.style.display = "none";
  		}
		obj_name = "menu_item_" + x;
		o = document.getElementById(obj_name);
		o.className = "menu_item";
		o.style.borderColor = "#DFEBE0";
		}
	if(idx != 8)
	  {
    div_name = "div_" + selectedIndex;
  	d = document.getElementById(div_name);
  	d.style.display = "block";
	  }
	obj.className = "menu_item_selected";
	obj.style.borderColor = "black";
	}
}

function select_member(v)
{
var o_txt = received_member_id;
o_txt.value = v;
received_changed();
}

function select_member_inst(v)
{
var o_txt = received_member_id_inst;
o_txt.value = v;
received_changed_inst();
}

function received_changed()
{
document.getElementById("bCheck_recieved_member").style.display = "block";
document.getElementById("bCheck_recieved_member").disabled = false;
document.getElementById("bSave_received_member").style.display = "none";
}

function received_changed_inst()
{
document.getElementById("bCheck_recieved_member_inst").style.display = "block";
document.getElementById("bCheck_recieved_member_inst").disabled = false;
document.getElementById("bSave_received_member_inst").style.display = "none";
document.getElementById("bSave_received_member_inst").disabled = true;
}

function format_address_html(fnm, mnm, lnm add1, add2 city, state, zip)
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



