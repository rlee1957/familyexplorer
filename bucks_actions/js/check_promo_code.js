var newContent = document.getElementById("results").value; 
var sponsor = document.getElementById("sponsor").value;
var msg = "Promo code\n\n" + sponsor + "\n\n";
msg += "Is not a valid Team Code!\n\n";
msg += "Please re-enter and try again.";
var w;
if(window.parent){ w = window.parent; }
if(window.opener){ w = window.opener; }
if(newContent.indexOf("does not exist.") > -1)
  {
  alert(msg);
  w.document.getElementById("team_code").value = "";
  w.document.getElementById("team_code").focus();
  //w.changeMade("Yes");
  w.document.getElementById("sp_sponsor").innerHTML = "";
  w.document.getElementById("team_code_verified").value = "false";
  w.document.getElementById("team_check").src = "../_common/images/check_off.png";
  }
else
  {
  msg = "<font color='blue' style='font-weight: bold;'>";
  msg += "Team Code Found -------- " + sponsor + "</font>";
  title = "When you successfully finish, [" + sponsor + "] will be your team code!"
  //w.changeMade("No");
  w.document.getElementById("sp_sponsor").innerHTML = msg;
  w.document.getElementById("team_code_verified").value = "true";
  w.document.getElementById("team_check").src = "../_common/images/check_on.png";
  w.document.getElementById("team_check").title = title;
  }