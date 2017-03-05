var newContent = document.getElementById("results").value;
msg = "<font color='blue' style='font-weight: bold;'>";
msg += "Your Promo Code -------- " + newContent + "</font>";
title = "When you successfully finish, [" + newContent + "] will be your team code!"
var w;
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
//w.changeMade("No");
w.document.getElementById("team_code").value = newContent;
w.document.getElementById("team_check").src = "../_common/images/check_on.png";
w.document.getElementById("team_check").title = title;
w.document.getElementById("team_code_verified").value = true;