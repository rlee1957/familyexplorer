function sanitize_sql(obj)
{
var tmp = obj.value;
var reTVal = "";
var len = tmp.length;
var chr = "";
var asc = 0;
var x = 0;
for(x;x<len;x++)
	{
	asc = tmp.charCodeAt(x);
	chr = String.fromCharCode(asc);
	if(asc == 39){chr = "`";}
	if(asc == 92){chr = "";}
	reTVal += chr;	
	}
obj.value = reTVal;
}

function only_printable(obj)
{
var tmp = obj.value;
var reTVal = "";
var len = tmp.length;
var chr = "";
var asc = 0;
var x = 0;
for(;x<len;x++)
	{
	asc = tmp.charCodeAt(x);
	chr = String.fromCharCode(asc);
	if((asc < 33)||(asc > 126)){ chr = ""; }
	reTVal += chr;	
	}
return reTVal;
}