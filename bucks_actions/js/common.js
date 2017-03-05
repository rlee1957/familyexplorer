
function Message_reload(msg)
{

var w;
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
alert(msg);
w.location.reload();

}