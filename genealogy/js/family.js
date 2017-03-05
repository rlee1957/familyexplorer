function show_edit(list_type)
{
var ar = list_type.id.split("_");
var typ = ar[0];
var indid = document.getElementById("current_individual").value;
var form_data = "indid=" + indid;
var href = "actions/get_edit_" + typ + ".php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ fill_list(result); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function edit_parent_click(params)
{
var par = params.split("}");
var radid = "parent_selector_" + par[0];
var pid = par[1];
document.getElementById(radid).click();
}

function hide_edit()
{
document.getElementById("popup_mask").style.display = "none";
document.getElementById("popup_list").style.display = "none";
}

function fill_list(results)
{
document.getElementById("popup_list").innerHTML = results;
document.getElementById("popup_list").style.display = "block";	
}

function select_parent(idx)
{
var rid = document.getElementById("pid_" + idx).value;
var rsx = document.getElementById("pgender_" + idx).value;
var typ = document.getElementById("parent_type_" + idx).value;
var prl = document.getElementById("parent_relationship");
var len = prl.options.length;
document.getElementById("selected_id").value = rid;
document.getElementById("pselected_gender").value = rsx;
document.getElementById("prelation_id").value = "";
document.getElementById("prelation").value = typ;
document.getElementById("parent_selector_" + idx).checked = true;
prl.selectedIndex = 0;
for(opt in prl.options)
	{
	if(opt != 0)
		{
		var op = prl.options[opt];
		if(op.value)
			{
			var ova = op.value;
			var ovi = ova.indexOf(rsx);
			if(ovi == 0)
				{
				prl.options[opt].style.display = "block";	
				}
			else
				{
				prl.options[opt].style.display = "none";	
				}
			}
		}
	}
prl.disabled = "";
document.getElementById("remove_parent").disabled = "";

}

function select_individual(idx)
{
var rid = document.getElementById("iid_" + idx).value;
var rsx = document.getElementById("igender_" + idx).value;
document.getElementById("iselected_id").value = rid;
document.getElementById("iindividual_selector_" + idx).checked = true;
}

function select_spouse(idx)
{
var sid = document.getElementById("sid_" + idx).value;
var ssx = document.getElementById("sgender_" + idx).value;
var srl = document.getElementById("spouse_relationship");
var len = srl.options.length;
document.getElementById("selected_id").value = sid;
document.getElementById("sselected_gender").value = ssx;
document.getElementById("srelation_id").value = "";
document.getElementById("spouse_selector_" + idx).checked = true;
srl.selectedIndex = 0;
for(opt in srl.options)
	{
	if(opt != 0)
		{
		var op = srl.options[opt];
		if(op.value)
			{
			var ova = op.value;
			var ovi = ova.indexOf(ssx);
			if(ovi == 0)
				{
				srl.options[opt].style.display = "block";	
				}
			else
				{
				srl.options[opt].style.display = "none";	
				}
			}
		}
	}
srl.disabled = "";
}

function select_child(idx)
{
var cid = document.getElementById("cid_" + idx).value;
var csx = document.getElementById("cgender_" + idx).value;
var crl = document.getElementById("child_relationship");
var len = crl.options.length;
document.getElementById("selected_id").value = cid;
document.getElementById("cselected_gender").value = csx;
document.getElementById("crelation_id").value = "";
document.getElementById("child_selector_" + idx).checked = true;
crl.selectedIndex = 0;
for(opt in crl.options)
	{
	if(opt != 0)
		{
		var op = crl.options[opt];
		if(op.value)
			{
			var ova = op.value;
			var ovi = ova.indexOf(csx);
			if(ovi == 0)
				{
				crl.options[opt].style.display = "block";	
				}
			else
				{
				crl.options[opt].style.display = "none";	
				}
			}
		}
	}
crl.disabled = "";
}

function save_change(elem)
{
	
var field_name = "";
var field_value = "";
var uid = elem.id;
if(elem.name != ""){ uid = elem.name; }	
var fnar = uid.split("_");
var fn = fnar[1];
field_name = fn;
field_value = document.getElementById(elem.id).value;
data = "field_name=" + field_name;
data += "&field_value=" + field_value;
record_change(data);
 
}

function record_change(data)
{
var id = document.getElementById("current_individual").value;
var form_data = data + "&id=" + id;
var href = "actions/record_changes.php";	
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ do_nothing(result); }
		}
	);
}

function do_nothing(result)
{
// nothing gets done	
}

function update_parent_relationship(obj)
{
if(obj.selectedIndex != 0)
	{
	var ar = obj.value.split("|");
	
	var rid = ar[1];
	document.getElementById("prelation_id").value = rid;
	save_relationship_parent();
	}
else
	{
	document.getElementById("prelation_id").value = "";	
	}	
}

function update_child_relationship(obj)
{
if(obj.selectedIndex != 0)
	{
	var ar = obj.value.split("|");
	var rid = ar[1];
	document.getElementById("crelation_id").value = rid;
	save_relationship_child();
	}
else
	{
	document.getElementById("crelation_id").value = "";	
	}	
}

function update_spouse_relationship(obj)
{
if(obj.selectedIndex != 0)
	{
	var ar = obj.value.split("|");
	var rid = ar[1];
	document.getElementById("srelation_id").value = rid;
	save_relationship_spouse();
	}
else
	{
	document.getElementById("srelation_id").value = "";	
	}	
}

function save_relationship_parent()
{
	
var individualid = document.getElementById("selected_id").value;
var relationid = document.getElementById("prelation_id").value;
var relatedid = document.getElementById("current_individual").value;
var form_data = "individualid=" + individualid;
form_data += "&relationid=" + relationid;
form_data += "&relatedid=" + relatedid;	
var href = "actions/save_relationship.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ parent_edit_finished(); }
		}
	);
}

function save_relationship_child()
{
	
var individualid = document.getElementById("selected_id").value;
var relationid = document.getElementById("crelation_id").value;
var relatedid = document.getElementById("current_individual").value;
var form_data = "individualid=" + individualid;
form_data += "&relationid=" + relationid;
form_data += "&relatedid=" + relatedid;	
var href = "actions/save_relationship.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ child_edit_finished(); }
		}
	);
}

function save_relationship_spouse()
{
	
var individualid = document.getElementById("selected_id").value;
var relationid = document.getElementById("srelation_id").value;
var relatedid = document.getElementById("current_individual").value;
var form_data = "individualid=" + individualid;
form_data += "&relationid=" + relationid;
form_data += "&relatedid=" + relatedid;	
var href = "actions/save_relationship.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ spouse_edit_finished(); }
		}
	);
}

function parent_edit_finished()
{
	
refresh_edit();
show_edit(document.getElementById('parents_label'));
	
}

function spouse_edit_finished()
{
	
refresh_edit();
show_edit(document.getElementById('spouse_label'));
	
}

function child_edit_finished()
{
	
refresh_edit();
show_edit(document.getElementById('children_label'));
	
}

function refresh_edit()
{
	
hide_search_results();
hide_edit();
var indid = document.getElementById("current_individual").value;
show_individual(indid);
	
}

function do_search_add()
{

var obn = "after_search_method";
var search_value = document.getElementById("search_value").value;
if(search_value.length > 3)
	{	
	var after_search_method = document.getElementById(obn).value;
	var form_data = "after_search_method=" + after_search_method;
	form_data += "search_value=" + search_value;
	var href = "actions/search_results.php";
	$.ajax
		(
			{
			url: href, 
			type: "POST",
			data: form_data,
			success: function(result){ child_edit_finished(); }
			}
		);
	}
}

function fill_search(results)
{
document.getElementById("popup_list").innerHTML = results;
document.getElementById("popup_list").style.display = "block";	
}

function search_results_add(cg)
{

var search_name = document.getElementById("search_name").value;
var proxyid = document.getElementById("proxyid").value;
var currentid = document.getElementById("current_individual").value;
var currentgender = document.getElementById(cg).value;
//var currentgender = document.getElementById("pselected_gender").value;
if(search_name.trim() == "")
	{
	alert("Please enter name to add.");
	document.getElementById("search_name").focus();
	}
else
	{
	var obn = "after_search_method";
	var del = "&";
	var form_data = "search_title=Individual Search";
	var after_search_method = document.getElementById(obn).value;
	search_label = "Search Results";
	switch(after_search_method)
		{
		case "addChild":
			{
			form_data += "&search_description=If the child you wish to add is in the list below, select the individual then click the USE SELECTED INDIVIDUAL link. Otherwise click the CREATE NEW INDIVIDUAL AS CHILD link.";
			form_data += "&use_function=add_relationship_existing()";
			form_data += "&use_label=USE SELECTED INDIVIDUAL";
			form_data += "&create_function=add_relationship_new()";
			form_data += "&create_label=CREATE NEW INDIVIDUAL AS CHILD";
			form_data += "&enter_label=Enter Child Name";
			break;	
			}
		case "addParent":
			{
			form_data += "&search_description=If the parent you wish to add is in the list below, select the individual then click the USE SELECTED INDIVIDUAL link. Otherwise click the CREATE NEW INDIVIDUAL AS PARENT link.";
			form_data += "&use_function=add_relationship_existing()";
			form_data += "&use_label=USE SELECTED INDIVIDUAL";
			form_data += "&create_function=add_relationship_new()";
			form_data += "&create_label=CREATE NEW INDIVIDUAL AS PARENT";
			form_data += "&enter_label=Enter Parent Name";
			break;	
			}
		case "addSpouse":
			{
			form_data += "&search_description=If the spouse you wish to add is in the list below, select the individual then click the USE SELECTED INDIVIDUAL link. Otherwise click the CREATE NEW INDIVIDUAL AS SPOUSE link.";
			form_data += "&use_function=add_relationship_existing()";
			form_data += "&use_label=USE SELECTED INDIVIDUAL";
			form_data += "&create_function=add_relationship_new()";
			form_data += "&create_label=CREATE NEW INDIVIDUAL AS SPOUSE";
			form_data += "&enter_label=Enter Spouse Name";
			break;	
			}
		}
	form_data += "&search_value=" + search_name;
	form_data += "&process=" + after_search_method;
	form_data += "&proxyid=" + proxyid;
	form_data += "&currentid=" + currentid;
	form_data += "&currentgender=" + currentgender;
	var href = "actions/search_results.php";
	$.ajax
		(
			{
			url: href, 
			type: "POST",
			data: form_data,
			success: function(result){ show_search_results(result); }
			}
		);
	}
}

function show_search_results(result)
{

if(result.indexOf("added") == 0)
	{
	var ar = result.split("~");
	var typ = ar[1];
	if(typ == "addChild"){ child_edit_finished(); }
	if(typ == "addParent"){ parent_edit_finished(); }
	if(typ == "addSpouse"){ spouse_edit_finished(); }
	}
else
	{
	document.getElementById("popup_mask2").style.display = "block";	
	document.getElementById("popup_search_results").innerHTML = result;
	document.getElementById("popup_search_results").style.display = "block";
	}
	
}

function hide_search_results()
{
	
document.getElementById("popup_mask2").style.display = "none";	
document.getElementById("popup_search_results").innerHTML = "";
document.getElementById("popup_search_results").style.display = "none";
	
}

function remove_relationships()
{
	
var obn = "after_search_method";
var cid = document.getElementById("current_individual").value;
var iid = document.getElementById("selected_id").value;
var pid = document.getElementById("proxyid").value;
var after_search_method = document.getElementById(obn).value;
var form_data = "process=" + after_search_method;
form_data += "&currentid=" + cid;
form_data += "&individualid=" + iid;
form_data += "&proxyid=" + pid;
var href = "actions/remove_relationship.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ show_search_results(result); }
		}
	);
	
}

function add_relationship_new()
{
	
var cid = document.getElementById("current_individual").value;
var sev = document.getElementById("search_value0").value;
var pid = document.getElementById("proxyid").value;
var process = document.getElementById("process").value;
var form_data = "process=" + process;
form_data += "&currentid=" + cid;
form_data += "&search_value0=" + sev;
form_data += "&proxyid=" + pid;
var href = "actions/save_relationship_new.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ show_search_results(result); }
		}
	);
	
}

function add_relationship_existing()
{
	
var cid = document.getElementById("current_individual").value;
var iid = document.getElementById("iselected_id").value;
var pid = document.getElementById("proxyid").value;
var process = document.getElementById("process").value;
var form_data = "process=" + process;
form_data += "&currentid=" + cid;
form_data += "&individualid=" + iid;
form_data += "&proxyid=" + pid;
var href = "actions/save_relationship_existing.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ show_search_results(result); }
		}
	);
	
}

function spouse_is_current()
{
	
var cid = document.getElementById("current_individual").value;
var iid = document.getElementById("selected_id").value;
var process = "addSpouse";
var form_data = "process=" + process;
form_data += "&currentid=" + cid;
form_data += "&individualid=" + iid;
var href = "actions/save_current_spouse.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ show_search_results(result); }
		}
	);
	
}

function single()
{
	
var cid = document.getElementById("current_individual").value;
var process = "addSpouse";
var form_data = "process=" + process;
form_data += "&currentid=" + cid;
var href = "actions/set_single.php"; 
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ show_search_results(result); }
		}
	);
	
}

function show_details(obj)
{

var dt = obj.value;
switch(dt)
	{
	case "detail":
		{
		show_details();
		obj.selectedIndex = 0;
		break;	
		}
	case "spouse":
		{
		show_edit(document.getElementById('spouse_label'));
		obj.selectedIndex = 0;
		break;	
		}
	case "parents":
		{
		show_edit(document.getElementById('parents_label'));
		obj.selectedIndex = 0;
		break;	
		}
	case "children":
		{
		show_edit(document.getElementById('children_label'));
		obj.selectedIndex = 0;
		break;	
		}
	case "event":
		{
		show_events();
		obj.selectedIndex = 0;
		break;	
		}
	case "images":
		{
		show_images();
		obj.selectedIndex = 0;
		break;	
		}
	case "thumbnails":
		{
		show_thumbnails();
		obj.selectedIndex = 0;
		break;	
		}
	case "links":
		{
		show_links();
		obj.selectedIndex = 0;
		break;	
		}
	case "messages":
		{
		show_messages();
		obj.selectedIndex = 0;
		break;	
		}
	case "bookmarks":
		{
		show_bookmarks();
		obj.selectedIndex = 0;
		break;	
		}
	case "security":
		{
		show_security();
		obj.selectedIndex = 0;
		break;	
		}
	case "detail":
		{
		show_details();
		obj.selectedIndex = 0;
		break;	
		}
	}
	
}

function show_events()
{
	
var indid = document.getElementById("current_individual").value;
var form_data = "indid=" + indid;
var href = "actions/get_edit_events.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ fill_list(result); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function show_thumbnails()
{
	
var indid = document.getElementById("current_individual").value;
var form_data = "indid=" + indid;
var href = "actions/get_edit_thumbnails.php";
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ fill_list(result); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function event_click(idx)
{

document.getElementById("event_selector_" + idx).checked = true;
document.getElementById('selected_id').value = idx;
	
}

function edit_event()
{

var sid = document.getElementById("selected_id").value;
var year = document.getElementById('year_' + sid).value;
var month = document.getElementById('month_' + sid).value;
var mo = document.getElementById('mo_' + sid).value;
var day = document.getElementById('day_' + sid).value;
var date1 = document.getElementById('date1_' + sid).value;
day = "00" + day;
day = day.substring(day, day.length - 2, 2);
mo = "00" + mo;
mo = mo.substring(mo, mo.length - 2, 2);
var dte = year + "-" + mo + "-" + day;
document.getElementById('event_action').innerHTML = "Edit This Event";
document.getElementById('event_id_edit').value = document.getElementById('event_id_' + sid).value;
document.getElementById('event_edit').value = document.getElementById('event_' + sid).value;
document.getElementById('details_edit').value = document.getElementById('details_' + sid).value;
document.getElementById('year_edit').value = document.getElementById('year_' + sid).value;
document.getElementById('month_edit').value = document.getElementById('month_' + sid).value;
document.getElementById('day_edit').value = document.getElementById('day_' + sid).value;
document.getElementById('date_edit').value = dte;
document.getElementById('date1_edit').value = date1;
document.getElementById('ds').innerHTML = date1;
document.getElementById('accuracy_edit').value = document.getElementById('accuracy_' + sid).value;
document.getElementById('period_edit').value = document.getElementById('period_' + sid).value;
document.getElementById('calendar_edit').value = document.getElementById('calendar_' + sid).value;
document.getElementById('place_edit').value = document.getElementById('place_' + sid).value;
	
}

function get_month(month, type)
{

var retval = "";
var mo = new Array;	
mo[1] = "Jan";	
mo[2] = "Feb";
mo[3] = "Mar";
mo[4] = "Apr";
mo[5] = "May";
mo[6] = "Jun";
mo[7] = "Jul";
mo[8] = "Aug";
mo[9] = "Sep";
mo[10] = "Oct";
mo[11] = "Nov";
mo[12] = "Dec";
for(x=1;x<13;x++)
	{
	if(type == "number")
		{
		if(mo[x].toLowerCase() == month.toLowerCase())	
			{
			retval = "0" + x;
			retval = retval.substr(retval.length - 2, 2);
			break;
			}
		}
	else
		{
		retval = mo[month];
		break;
		}
	}
return retval;
	
}

function remove_event()
{

var sid = document.getElementById("selected_id").value; 
var event_id = document.getElementById("event_id_" + sid).value;
var proxyid = document.getElementById("proxyid").value;
var href = "actions/event_delete.php";
var form_data = "event_id=" + event_id + "&proxyid=" + proxyid;

$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_events(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function save_event()
{

if(document.getElementById('event_action').innerHTML == "Edit This Event")
	{ update_event(); }
else
	{ insert_event(); }
	
}

function update_event()
{

var id = document.getElementById("current_individual").value;
var sid = document.getElementById("selected_id").value;
var event_id = document.getElementById('event_id_' + sid).value;
var event = document.getElementById('event_edit').value;
var details = document.getElementById('details_edit').value;
var year = document.getElementById('year_edit').value;
var month = document.getElementById('month_edit').value;
var day = document.getElementById('day_edit').value;
var accuracy = document.getElementById('accuracy_edit').value;
var period = document.getElementById('period_edit').value;
var calendar = document.getElementById('calendar_edit').value;
var place = document.getElementById('place_edit').value;

var proxyid = document.getElementById('proxyid').value;	
var href = "actions/event_update.php";
var form_data = "event_id=" + event_id + "&accuracy=" + accuracy + "&period=" + period + "&calendar=" + calendar + "&year=" + year;
form_data += "&month=" + month + "&day=" + day + "&event=" + event + "&place=" + place + "&proxyid=" + proxyid;
form_data += "&details=" + details + "&id=" + id;

$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_events(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function insert_event()
{

var id = document.getElementById("current_individual").value;
var sid = document.getElementById("selected_id").value;
var event = document.getElementById('event_edit').value;
var details = document.getElementById('details_edit').value;
var year = document.getElementById('year_edit').value;
var month = document.getElementById('month_edit').value;
var day = document.getElementById('day_edit').value;
var accuracy = document.getElementById('accuracy_edit').value;
var period = document.getElementById('period_edit').value;
var calendar = document.getElementById('calendar_edit').value;
var place = document.getElementById('place_edit').value;	
var proxyid = document.getElementById('proxyid').value;
var href = "actions/event_insert.php"; 
var form_data = "id=" + id + "&accuracy=" + accuracy + "&period=" + period + "&calendar=" + calendar + "&year=" + year;
form_data += "&month=" + month + "&day=" + day + "&event=" + event + "&place=" + place + "&proxyid=" + proxyid + "&details=";
form_data += details;
document.getElementById("test").value = form_data;
//return;
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_events(); }
		}
	);	
	
}

function event_show()
{

var id = document.getElementById("current_individual").value;
var sid = document.getElementById("selected_id").value;
var event = document.getElementById('event_' + sid).value;
var year = document.getElementById('year_' + sid).value;
var month = document.getElementById('month_' + sid).value;
var day = document.getElementById('day_' + sid).value;
var accuracy = document.getElementById('accuracy_' + sid).value;
var period = document.getElementById('period_' + sid).value;
var calendar = document.getElementById('calendar_' + sid).value;
var place = document.getElementById('place_' + sid).value;
var proxyid = document.getElementById('proxyid_' + sid).value;
var href = "actions/event_show.php";
var form_data = "id=" + id + "&accuracy=" + accuracy + "&period=" + period + "&calendar=" + calendar + "&year=" + year;
form_data += "&month=" + month + "&day=" + day + "&event=" + event + "&place=" + place;
$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_events(); }
		}
	);
	
}

function clear_event()
{
	
document.getElementById('event_action').innerHTML = "Add New Event";
document.getElementById('event_id_edit').value = "";
document.getElementById('event_edit').value = "";
document.getElementById('details_edit').value = "";
document.getElementById('date_edit').value = "";
document.getElementById('year_edit').value = "";
document.getElementById('month_edit').value = "";
document.getElementById('day_edit').value = "";
document.getElementById('ds').value = "&nbsp;";
document.getElementById('accuracy_edit').selectedIndex = 0;
document.getElementById('period_edit').selectedIndex = 2;
document.getElementById('calendar_edit').selectedIndex = 1;
document.getElementById('place_edit').value = "";
	
}

function refresh_events()
{

var ind = document.getElementById("current_individual").value;	
show_individual(ind);
document.getElementById("popup_mask").style.display = "block";	
show_events();
	
}

function select_event(idx)
{
	
document.getElementById("selected_id").value = idx;
document.getElementById("event_selector_" + idx).checked = true;
	
}

function date_change()
{

var dv = document.getElementById('date_edit').value;
if(dv == ""){ document.getElementById('ds').innerHTML = "&nbsp;"; }
else
	{
	ar = dv.split("-");
	mo = new Number(ar[1]);
	month = get_month(mo, "text");
	document.getElementById('ds').innerHTML = ar[0] + "-" + month + "-" + ar[2];
	document.getElementById('year_edit').value = ar[0];
	document.getElementById('month_edit').value = month;
	document.getElementById('day_edit').value = ar[2];
	}

}

function check_file(typ, id)
{

var retval = false;
var fu = document.getElementById(id);
var sz = fu.files[0].size;
var limit = 2000000;
document.getElementById("btn_file").disabled = false;
if(typ == "tn"){ limit = 100000; }
var nm = fu.files[0].name;
if(!is_image(fu.value))
	{ 
	alert("Not an image file."); 
	return retval; 
	}
else
	{
	if(sz > 100000)
		{ 
		alert("File too big. Needs to be smaller than 100K."); 
		return retval;
		}
	}
retval = true;
document.getElementById("btn_file").disabled = false;
document.getElementById("file_title").value = document.getElementById("title_edit").value;
return retval;

}
	
function is_image(flname)
{

var retval = false;
flname = flname.toLowerCase();
var regex = new RegExp("(.*?)\.(png|jpg|jpeg|gif)$");
if((regex.test(flname))){ retval = true; }
return retval;

}

function file_upload(id)
{    

document.getElementById(id).submit();

}

function show_people_individual()
{

var sid = document.getElementById("selected_thumbnail").value; 
var individual_id = document.getElementById("current_individual").value;
var individual = document.getElementById("filename_" + sid).value;
var proxyid = document.getElementById("proxyid").value;
var href = "actions/people_individual_show.php";
var form_data = "individual_id=" + individual_id + "&proxyid=" + proxyid + "&individual=" + individual;

$.ajax
	(
		{
		url: href,  
		type: "POST",
		data: form_data,
		success: function(result){ refresh_thumbnails(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function show_people_child()
{
	
var sid = document.getElementById("selected_thumbnail").value; 
var individual_id = document.getElementById("current_individual").value;
var child = document.getElementById("filename_" + sid).value;
var proxyid = document.getElementById("proxyid").value;
var href = "actions/people_child_show.php";
var form_data = "individual_id=" + individual_id + "&proxyid=" + proxyid + "&child=" + child;

$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_thumbnails(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function show_people_parent()
{

var sid = document.getElementById("selected_thumbnail").value; 
var individual_id = document.getElementById("current_individual").value;
var parent = document.getElementById("filename_" + sid).value;
var proxyid = document.getElementById("proxyid").value;
var href = "actions/people_parent_show.php";
var form_data = "individual_id=" + individual_id + "&proxyid=" + proxyid + "&parent=" + parent;

$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_thumbnails(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function delete_thumbnail()
{

var sid = document.getElementById("selected_thumbnail").value; 
var thumbnail_id = document.getElementById("thumbnail_id_" + sid).value;
var proxyid = document.getElementById("proxyid").value;
var href = "actions/thumbnail_remove.php";
var form_data = "thumbnail_id=" + thumbnail_id + "&proxyid=" + proxyid;

$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_thumbnails(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function update_thumbnail()
{

var sid = document.getElementById("selected_thumbnail").value; 
var thumbnail_id = document.getElementById("thumbnail_id_" + sid).value;
var filename = document.getElementById("filename_edit").value;
var title = document.getElementById("title_edit").value;
var ordinalposition = document.getElementById("ordinalposition_edit").value;
var href = "actions/thumbnail_update.php";
var form_data = "thumbnail_id=" + thumbnail_id + "&proxyid=" + proxyid + "&title=" + title + "&filename=" + filename + "&ordinalposition=" + ordinalposition;

$.ajax
	(
		{
		url: href, 
		type: "POST",
		data: form_data,
		success: function(result){ refresh_thumbnails(); }
		}
	);
document.getElementById("popup_mask").style.display = "block";
	
}

function thumbnail_select(idx)
{

document.getElementById("selected_thumbnail").value	= idx;
document.getElementById("thumbnail_selector_" + idx).checked = true;
document.getElementById("show_child").disabled = false;
document.getElementById("show_individual").disabled = false;
document.getElementById("show_parent").disabled = false;
document.getElementById("edit_thumbnail").disabled = false;
document.getElementById("remove_thumbnail").disabled = false;
	
}

function edit_thumbnail()
{
	
var st = document.getElementById("selected_thumbnail").value;
document.getElementById("thumbnail_action").innerHTML = "Edit Selected Thumbnail";
document.getElementById("thumbnail_id_edit").value = document.getElementById("thumbnail_id_" + st).value;
document.getElementById("title_edit").value = document.getElementById("title_" + st).value;
document.getElementById("filename_edit").value = document.getElementById("filename_" + st).value;
document.getElementById("ordinalposition_edit").value = document.getElementById("ordinalposition_" + st).value;
document.getElementById("ordinalposition_edit").disabled = false;
document.getElementById("image_edit").src = "addons/" + document.getElementById("filename_" + st).value;
document.getElementById("image_edit").style.display = "block";
document.getElementById("upload_file").style.display = "none";
document.getElementById("btn_file").style.display = "none";
document.getElementById("btn_save").style.display = "block";
	
}

function refresh_thumbnails()
{

var ind = document.getElementById("current_individual").value;	
show_individual(ind);
document.getElementById("popup_mask").style.display = "block";	
show_thumbnails();
	
}

function clear_thumbnail()
{
document.getElementById("thumbnail_action").innerHTML = "Add New Thumbnail";
document.getElementById("thumbnail_id_edit").value = "";
document.getElementById("title_edit").value = "";
document.getElementById("filename_edit").value = "";
document.getElementById("ordinalposition_edit").value = "";
document.getElementById("ordinalposition_edit").disabled = false;
document.getElementById("image_edit").src = "";
document.getElementById("image_edit").style.display = "none";
document.getElementById("upload_file").style.display = "block";
document.getElementById("btn_file").style.display = "block";
document.getElementById("btn_save").style.display = "none";	
}
