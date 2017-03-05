
function show_div(div_id)
{

document.getElementById("advance_to_tier").style.display = "none";
document.getElementById("print_instructions").style.display = "none";
document.getElementById("show_instructions").style.display = "none";
document.getElementById("verify_contributions").style.display = "none";
document.getElementById(div_id).style.display = "block";

}

function verify_contributions()
{
cv1 = document.getElementById("contribution_verify_1").checked;
cv2 = document.getElementById("contribution_verify_2").checked;
cv3 = document.getElementById("contribution_verify_3").checked;
cv4 = document.getElementById("contribution_verify_4").checked;

if((!cv1)||(!cv2)||(!cv3)||(!cv4))
	{
	msg = "You must click each of the checkboxes in order to proceed. If you have not mailed your contributions yet then click the BACK link at the top of the page and follow the instructions offered. Then come back to this page.";
	alert(msg);
	}
else
	{
	document.getElementById("vc").submit();	
	}
}