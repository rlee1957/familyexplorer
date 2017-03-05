var search_to;

function campaign_change()
{
check_save();
cs = document.getElementById("campaign_selector");
if(cs.value == ""){ return; }

frmHead = document.getElementById("frmHead");
fns = document.getElementById("fn_search");
lns = document.getElementById("ln_search");
ids = document.getElementById("id_search");
nob = document.getElementById("new_order_button");
hide_search_results();
fns.value = "";
lns.value = "";
ids.value = "";
fns.disabled = false;
lns.disabled = false;
ids.disabled = false;
nob.disabled = false;
ar = cs.value.split("|");
document.getElementById("cid").value = ar[0];
document.getElementById("clabel").value = ar[1];
document.getElementById("cdb").value = ar[2];
document.getElementById("cimage").value = ar[3];
cn = document.getElementById("campaign_name");
cn.innerHTML = ar[1];
if(ar[3] != "")
	{ 
	ci = document.getElementById("campaign_identification");
	ci.style.backgroundImage = "url('" + ar[3] + "')";
	}
}

function show_search_results(htm)
{
searchResults = document.getElementById("search_results");
searchResults.innerHTML = htm;
searchResults.style.display = "block";
}

function hide_search_results()
{
searchResults = document.getElementById("search_results");
searchResults.innerHTML = " ";
searchResults.style.display = "none";
}

function check_save()
{
	
}

function do_search(obj, force)
{
search_to = "";
var fn = "search('" + obj.id + "', " + force + ");";
search_to = window.setTimeout(fn, 1500);
}

function search(obj_name, force)
{
cs = document.getElementById("campaign_selector");
obj = document.getElementById(obj_name);
if(cs.value == ""){ return; }
if((force)||(obj.value.length	> 3))
	{
	f = document.getElementById("frmHead");
	f.action = "do_search.php";
	f.submit();
	}	
}

function show_order(oid)
{
document.getElementById("oid").value = oid;
hide_search_results();	
f = document.getElementById("frmHead");
f.action = "get_order.php";
f.submit();
}

function toggle(nme)
{
if(document.getElementById(nme).style.display == "none")	
	{
	document.getElementById(nme).style.display = "block";	
	}
else
	{
	document.getElementById(nme).style.display = "none";	
	}
}

function show_popup()
{
document.getElementById('popgo').click();	
}

function create_new_order()
{
show_section("sec_new_order");
hide_search_results();	
f = document.getElementById("frmHead");
f.action = "get_brick_options.php";
f.submit();
}

function show_section(dv)
{
document.getElementById("sec_order").style.display = "none";
document.getElementById("sec_new_order").style.display = "none";
document.getElementById("sec_resources").style.display = "none";
document.getElementById(db).style.display = "block";	
}