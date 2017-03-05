function toggle_menu(idx)
{
var el = "";
for(x=0;x<11;x++)
	{
	el = "content" + x;
	document.getElementById(el).style.display = "none";
	}
el = "content" + idx;
document.getElementById(el).style.display = "block";
}
   
function select_item(idx)
{
var gc = "no";
if(document.getElementById("pagc"))
	{
	if(document.getElementById("pagc").value == "true")	
		{
		gc = "yes";	
		}
	}
var href = "actions/add_item.php?idx=" + idx + "&gift_certificate=" + gc;
$.ajax
	(
		{
		url: href, 
		success: function(result){ show_options(result); }
		}
	);
		
}

function show_options(result)
{
document.getElementById("content6").innerHTML = result;
toggle_menu(6);
}

function iterate_object(obj, level)
{
	
var msg = "";
var lev = "";
for(x=1;x<level+1;x++){ lev += "-"; }
for (var key in obj) 
	{
	if (obj.hasOwnProperty(key)) 
		{
		if(typeof(obj[key]) == "object")
			{
			msg += lev + key + " -> " + "\n" + iterate_object(obj[key], level + 1);	
			}
		else
			{
			msg += lev + key + " -> " + obj[key] + "\n";
			}
		}
	}	
return msg;	
}

function increment(o_n)
{
var obj = document.getElementById(o_n);	
var val = new Number(obj.value);
if(val < 10)
	{
	val++;	
	}
obj.value = val;
}

function decrement(o_n)
{
var obj = document.getElementById(o_n);	
var val = new Number(obj.value);
if(val > 0)
	{
	val--;	
	}
obj.value = val;	
}

function save_options()
{
var del = "?";
var specs = "";
var lines = document.getElementById("max_lines").value;
if(document.getElementById("r1_qty")){ specs += del + "r1=" + document.getElementById("r1_qty").value; del = "&"; }
if(document.getElementById("dc1_qty")){ specs += del + "&dc1=" + document.getElementById("dc1_qty").value; del = "&"; }
if(document.getElementById("r2_qty")){ specs += del + "&r2=" + document.getElementById("r2_qty").value; del = "&"; }
if(document.getElementById("dc2_qty")){ specs += del + "&dc2=" + document.getElementById("dc2_qty").value; del = "&"; }
for(x=1;x<=lines;x++)
	{
	var line = "";	
	if(document.getElementById("line" + x))
		{
		line = document.getElementById("line" + x).value;
		}	
	specs += del + "line" + x + "=" + line;
	del = "&";
	}
var href = "actions/add_option.php" + specs;
$.ajax
	(
		{
		url: href, 
		success: function(result){ show_order_info(result); }
		}
	);
		
}

function show_order_info(result)
{
document.getElementById("content6").innerHTML = result;
toggle_menu(6);
}

function select_gift_certificate(gc_yes, gc_no)
{
var pagc = document.getElementById("pagc");	
var is_gc = document.getElementById("is_gc");
if(pagc.value == "true")	
	{
	pagc.value = "false";
	is_gc.src = "images/" + gc_no;
	}
else
	{
	pagc.value = "true";
	is_gc.src = "images/" + gc_yes;	
	}
}

function start_over()
{
window.location.assign("start_over.php");
}

function show_checkout()
{
var href = "actions/show_checkout.php";
$.ajax
	(
		{
		url: href, 
		success: function(result){ show_checkout_page(result); }
		}
	);
		
}

function show_checkout_page(result)
{
document.getElementById("content6").innerHTML = result;
toggle_menu(6);
}

function country_change(add_typ, add_idx)
{
var obj_name = add_typ + "_country";
var obj = document.getElementById(obj_name);
var state, zip, phone;
if(obj.value != "")
	{
	if(obj.value == "US")
		{
		state = document.getElementById(add_typ + "_us_states").value;
		zip = document.getElementById(add_typ + "_us_zip").value;	
		phone = document.getElementById(add_typ + "_us_phone").value;
		}
	else
		{
		if(obj.value == "CA")
			{
			state = document.getElementById(add_typ + "_canada_provinces").value;
			zip = document.getElementById(add_typ + "_canada_postal_code").value;
			if(add_typ == "bill"){ phone = document.getElementById(add_typ + "_us_phone").value; }
			}
		else
			{
			state = document.getElementById(add_typ + "_other_divisions").value;
			zip = document.getElementById(add_typ + "_other_postal_code").value;
			if(add_typ == "bill"){ phone = document.getElementById(add_typ + "_other_phone").value; }			
			}	
		}
	document.getElementById(add_typ + "_state_container").innerHTML = state;
	document.getElementById(add_typ + "_postal_code_container").innerHTML = zip;
	document.getElementById(add_typ + "_phone_container").innerHTML = phone;
	}
	
	
}

function process_order()
{
var form_data = process_verify();
if(form_data == 0){ return; }
show_processing_splash();
var href = "actions/process_order.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ save_order(result); }
		}
	);
		
}
/*
function save_order()
{
var form_data = process_verify();
show_processing_splash();
if(form_data == 0){ return; }
var href = "actions/save_order.php";
$.ajax
	(
		{
		url: href, 
		success: function(result){ display_confirmation(result); }
		}
	);
		
}

function display_confirmation()
{
	
}
*/
function show_checkout_page(result)
{
document.getElementById("content6").innerHTML = result;
toggle_menu(6);
}

function process_verify()
{
var ele, msg_label, msg, foc, form_data, del;
var required = ["_fn", "_ln", "_country", "_address1", "_city", "_state_prov", "_postal_code", "_phone", "_email", "_cc_name", "_cc_type", "_cc_number", "_cc_month", "_cc_year"];
var special = [{element: "_postal_code", dependant: "_country", type: "postal_code"}, {element: "_email", dependant: "_country", type: "email"}, {element: "_cc_number", dependant: "_cc_type", type: "credit_card"}, {element: "_phone", dependant: "_country", type: "phone"}];
var shipto = ["_fn", "_ln", "_country", "_address1", "_city", "_state_prov", "_postal_code"];
var shipto_special = [{element: "_postal_code", dependant: "_country", type: "postal_code"}];
var all_data = ["_fn", "_mn", "_ln", "_country", "_cimpany", "_address1", "_address2", "_city", "_state_prov", "_postal_code", "_phone", "_email", "_cc_name", "_cc_type", "_cc_number", "_cc_month", "_cc_year"];
var all_data_ship = ["_fn", "_mn", "_ln", "_country", "_company", "_address1", "_address2", "_city", "_state_prov", "_postal_code"];

form_data = "";
del = "";
msg_label = document.getElementById("validate_head").value;

var pre = "bill";
for(r=0;r<required.length;r++)
	{
	foc = required[r];	
	ele = document.getElementById(pre+foc);
	msg = document.getElementById(foc + "_validate").value;
	val = ele.value.trim();
	if(val == "")
		{ 
		show_message(msg_label, msg, ele); 
		return false; 
		}
	}

pre = "ship";	
var shipto_count = new Number(document.getElementById("shipto_count").value);
for(s=0; s<shipto.length; s++)
	{
	for(i=0;i<shipto_count;i++)
		{
		foc = shipto[s];	
		ele = document.getElementById(pre+foc+i);
		msg = document.getElementById(foc + "_validate").value;
		if(ele.value.trim() == "")
			{ 
			show_message(msg_label, msg, ele); 
			return false; 
			}
		}
	}

pre = "bill";	
for(s=0;s<special.length;s++)
	{
	foc = special[s];	
	ele = document.getElementById(pre+foc);
	msg = document.getElementById(foc + "_validate2").value;
	if(!test_element(foc, pre+foc, msg_label, msg)){ return false; }
	}

pre = "ship";	
for(s=0;s<shipto_special.length;s++)
	{
	for(i=0;i<shipto_count;i++)
		{
		foc = shipto_special[s];	
		ele = document.getElementById(pre+foc+i);
		msg = document.getElementById(foc + "_validate").value;
		if(!test_element(foc, pre+foc+i, msg_label, msg)){ return false; }
		}
	}

del = "";
pre = "bill";
for(s=0;s<all_data.length;s++)
	{
	foc = all_data[s];	
	ele = document.getElementById(pre+foc);
	form_data += del + pre + foc + "=" + ele.value;
	del = "&";
	}

pre = "ship";	
for(s=0;s<shipto_special.length;s++)
	{
	for(i=0;i<shipto_count;i++)
		{
		foc = shipto_special[s];	
		ele = document.getElementById(pre+foc+i);
		form_data += del + pre + foc + i + "=" + ele.value;
		del = "&";
		}
	}
return form_data;
	
}

function show_message(label, msg, elem)
{
alert(label + "\n" + msg);
elem.focus();
}

function ship_billing(obj)
{
var billing_address_values = check_billing_address();
if(billing_address_values)
	{
	var href = "actions/ship_to_bill.php";	
	$.ajax
		(
			{
			url: href, 
			type: "POST",
			data: billing_address_values,
			success: function(result){ show_shipto_page(result); }
			}
		);	
	}
else
	{
	obj.checked = false;	
	}
}

function ship_other(obj)
{
	var billing_address_values = check_billing_address();
if(billing_address_values)
	{
	var href = "actions/ship_to_other.php";
	$.ajax
		(
			{
			url: href, 
			type: "POST",
			data: billing_address_values,
			success: function(result){ show_shipto_page(result); }
			}
		);
	}
else
	{
	obj.checked = false;	
	}
}

function ship_to_different()
{
var href = "actions/show_checkout.php";
$.ajax
	(
		{
		url: href, 
		success: function(result){ show_shipto_page(result); }
		}
	);	
}

function show_shipto_page(result)
{
document.getElementById("shipto").innerHTML = result;
document.getElementById("shipto").style.display = "block";	
}

function hide_shipto_page()
{
document.getElementById("shipto").style.display = "none";	
document.getElementById("shipto").innerHTML = "";	
}

function check_billing_address()
{
var ele, msg_label, msg, foc, form_data, del;
var required = ["_fn", "_ln", "_country", "_address1", "_city", "_state_prov", "_postal_code", "_phone", "_email"];
var special = [{element: "_postal_code", dependant: "_country", type: "postal_code"}, {element: "_email", dependant: "_country", type: "email"}, {element: "_phone", dependant: "_country", type: "phone"}];
var all_data = ["_fn", "_mn", "_ln", "_country", "_company", "_address1", "_address2", "_city", "_state_prov", "_postal_code", "_phone", "_email"];
var pre = "bill";

form_data = "";
del = "";
msg_label = document.getElementById("validate_billing_head").value;

// Billing Address Required
for(r=0;r<required.length;r++)
	{
	foc = required[r];	
	ele = document.getElementById(pre+foc);
	msg = document.getElementById(foc + "_validate").value;
	val = ele.value.trim();
	if(val == "")
		{ 
		show_message(msg_label, msg, ele); 
		return false; 
		}
	}

// Billing Address Validated
for(s=0;s<special.length;s++)
	{
	foc = special[s].element;	
	ele = document.getElementById(pre+foc);
	msg = document.getElementById(foc + "_validate2").value;
	dep = pre + special[s].dependant;
	other = document.getElementById(dep).value;
	if(!test_element(special[s].type, other, msg_label, msg, ele)){ return false; }
	}

// Billing Address Values
del = "";
for(s=0;s<all_data.length;s++)
	{
	foc = all_data[s];	
	ele = document.getElementById(pre+foc);
	form_data += del + pre + foc + "=" + ele.value;
	del = "&";
	}
	
return form_data;	
}

function test_element(test_type, other, msg_label, msg, obj)
{
	
rx = get_test(test_type, other);
if(!rx.test(obj.value))
	{ 
	show_message(msg_label, msg, obj); 
	return false;
	}
return true;

}

function get_test(test_type, other)
{
	
if(test_type == "email")
	{
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;	
	}
if(test_type == "postal_code")
	{
	return get_postal_code_test(other);	
	}
if(test_type == "phone")
	{
	return get_phone_test(other);	
	}
if(test_type == "credit_card")
	{
	return get_credit_card_test(other);	
	}
return;

}

function get_postal_code_test(country)
{
if(country == "US")	
	{
	return /\d{5}([ \-]\d{4})?/;	
	}
else
	{
	if(country == "CA")	
		{
		return /[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ ]?\d[ABCEGHJ-NPRSTV-Z]\d/;	
		}	
	else
		{
		return /.*/;	
		}
	}
}

function get_phone_test(country)
{
return /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;	
}

function get_credit_card_code_test(type)
{
if(type.toLowerCase() == "visa"){ return /4[0-9]{12}(?:[0-9]{3})/; }
if(type.toLowerCase() == "mastercard"){ return /5[1-5][0-9]{14}/; }
if(type.toLowerCase() == "discover"){ return /6(?:011|5[0-9]{2})[0-9]{12}/; }
if(type.toLowerCase() == "amex"){ return /3[47][0-9]{13}/; }
return;
}

function hide_shipto_other()
{
document.getElementById("shipto").style.display = "none";	
document.getElementById("shipto_other").checked = false;		
}

function save_shipto_other()
{
	
}

function hide_shipto_different()
{
document.getElementById("shipto").style.display = "none";	
document.getElementById("shipto_different").checked = false;		
}

function save_shipto_different()
{
	
}

