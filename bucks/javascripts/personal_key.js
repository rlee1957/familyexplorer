function personal_key_change()
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
	document.getElementById("key_valid").value = "false"; 
	}
else
	{
	if(personal_key == existing_key)	
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_on.png";
		title = "Personal Key is valid. Your Personal Key is [" + personal_key.value + "]!";
		document.getElementById("key_valid").value = "true"; 
		}
	else
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
		document.getElementById("personal_key_check").title = title;
		document.getElementById("key_valid").value = "false"; 
		}	
	}
	
}

function test_personal_key()
{
	
var personal_key = document.getElementById("personal_key").value;
var existing_key = document.getElementById("existing_key").value;
var title = "";	
if(personal_key == "")
	{
	alert("Please enter a Personal Key to test!\r\nThen click the 'Test Personal Key' link.");
	document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
	document.getElementById("key_valid").value = "false"; 
	document.getElementById("personal_key_check").title = title;
	}
else
	{
	if(personal_key == existing_key)	
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_on.png";
		title = "Personal Key is valid. Your Personal Key is [" + personal_key + "]!";
		alert(title);
		document.getElementById("personal_key_check").title = title;
		document.getElementById("key_valid").value = "true";
		}
	else
		{
		document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
		document.getElementById("personal_key_check").title = title;
		document.getElementById("key_valid").value = "false";
		document.getElementById("personal_key_form").action = "../bucks_actions/test_personal_key.php";
		document.getElementById("personal_key_form").submit();
		}
	}

}

function keep_my_personal_key()
{

var existing_key = document.getElementById("existing_key").value;
document.getElementById("personal_key").value = existing_key;
document.getElementById("personal_key_form").action = "../bucks_actions/keep_my_personal_key.php";
document.getElementById("personal_key_form").submit();
	
}

function save_personal_key()
{
	
var personal_key = document.getElementById("personal_key").value;
var existing_key = document.getElementById("existing_key").value;
var title = "";	
if(personal_key == "")
	{
	alert("Please enter a Personal Key to test!\r\nThen click the 'Test Personal Key' link.");
	document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
	document.getElementById("key_valid").value = "false"; 
	document.getElementById("personal_key_check").title = title;
	}
else
	{
	if(personal_key == existing_key)	
		{
		keep_my_personal_key()
		}
	else
		{
		if(document.getElementById("key_valid").value == "true")
			{
			document.getElementById("personal_key_form").action = "../bucks_actions/save_verify_personal_key.php";
			document.getElementById("personal_key_form").submit();		
			}
		else
			{
			document.getElementById("personal_key_check").src = "../_common/images/check_off.png";
			document.getElementById("personal_key_check").title = title;
			msg = "Please click the [Test Personal Key] link.\r\nIf the Personal Key is already being used, you will be informed.\r\nIf the Personal Key is not being used, then click the Save button.";
			alert(msg);
			}
		}
	}
	
}