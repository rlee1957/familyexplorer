/*function personal_key_change()
{
	
var personal_key = document.getElementById("personal_key").value;
var existing_key = document.getElementById("existing_key").value;
var title = "";	
document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
document.getElementById("personal_key_check").title = title;
if(personal_key == "")
	{
	document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
	document.getElementById("personal_key_check").title = title;	
	}
else
	{
	if(personal_key == existining_key)	
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_on.png";
		title = "Personal Key is valid. Your new Personal Key is [" + personal_key.value + "]!";
		alert("Tested Good!\r\nClick the Save button to finish.";)
		}
	else
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
		document.getElementById("personal_key_check").title = title;
		}	
	}
	
}*/

function test_personal_key()
{
	
var personal_key = document.getElementById("personal_key").value;
var existing_key = document.getElementById("existing_key").value;
var title = "";	
if(personal_key == "")
	{
	alert("Please enter a Personal Key to test!\r\nThen click the 'Test Personal Key' link.");
	document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
	}
else
	{
	if(personal_key == existining_key)	
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_on.png";
		title = "Personal Key is valid. Your Personal Key is [" + personal_key.value + "]!";
		alert("Tested Good!\r\nClick the Save button to finish.");
		}
	else
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
		document.getElementById("personal_key_check").title = title;
		document.getElementById("personal_key_form").action = ",,/bucks_actions/test_personal_key.php";
		document.getElementById("personal_key_form").submit();
		}
	}
document.getElementById("personal_key_check").title = title;

}

function keep_my_personal_key()
{
	
	
}


