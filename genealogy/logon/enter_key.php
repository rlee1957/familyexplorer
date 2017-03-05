<html>
<head><title>___---</title></head>
<body bgcolor='#dbdbdb'>

<?php
include '../includes/connection.inc';
include '../includes/database_open_hits.inc';
include '../includes/hits_page.inc';
include '../includes/database_close.inc';
include '../includes/connection.inc';
include '../includes/database_open_genealogy.inc';
include '../includes/database_functions.inc';
$memberId = "";
$id = "";
$msg = "";
$proxy = "";
$family = "";
$id = $_REQUEST["id"];
$sql = "select * from members where UserName = '".$_REQUEST["hUN"]."' and password='".$_REQUEST["hP"]."'";
$recset = new recordset;
$rs = $recset->open($sql);
$rc = mysql_num_rows($rs);
$test = "../member/preference/ajax/people.php";
$prod = "../member/people.php";
if($_REQUEST["environment"] == "test")
   {
   $use = $test;
   }
else
   {
   $use = $prod;
   }
$ur = "";
if($rc < 1) 
   {  
   $msg = "Login failed. Please try again.";
   }
else
   {
   while ($row = mysql_fetch_array($rs, MYSQL_ASSOC)) 
      {
   	  $id = $row["id"]; 
	  $v = $row["validated"];
      $msg = "";
	  if($v == "1")
	     {
		 $ur = $use;
		 }
	  else
	     {
		 $ur = "../signup/signup.php";
		 $f = $row["firstname"];
		 $ln = $row["lastName"];
		 $u = $row["username"];
		 $e = $row["email"];
		 $p = $row["password"];
		 $msg = "Your email has not been validated. ";
		 $msg .= "Please check your email for subject 'Family Explorer Membership'. ";
		 $msg .= "If you have received this email, ";
		 $msg .= "please close this page and navigate to the link provided in your email and your email address will be validated. ";
		 $msg .= "If you have not received this email, ";
		 $msg .= "please ensure your email address is correct,";
		 $msg .= " on the following page.";
	     }
	  break;
	  }
   } 
// Closing recordset
mysql_free_result($rs);     
// Closing connection
include 'database_close.inc'; 
?>


<center>
<font color='#8d6407'><b>Login</b></font>
</center>
<form id='frmLogin' name='frmLogin' target='_self' method='post'>
<input type='hidden' id='memberId' name='memberId' value='<?php echo($id); ?>'>
<input type='hidden' id='id' name='id' value='<?php echo($id); ?>'>
<input type='hidden' id='page' name='page' value='<?php echo($_REQUEST["page"]); ?>'>
<input type='hidden' id='txtUserNameCheck' name='txtUserNameCheck' value='0'>
<input type='hidden' id='IDCheck' name='IDCheck' value='0'>
<input type='hidden' id='hID' name='hID' value='<?php echo($id); ?>'>
<input type='hidden' id='hPhase' name='hPhase' value='2'>
<input type='hidden' id='txtLName' name='txtLName' value='<?php echo($ln); ?>'>
<input type='hidden' id='txtFName' name='txtFName' value='<?php echo($f); ?>'>
<input type='hidden' id='txteMail' name='txteMail' value='<?php echo($e); ?>'>
<input type='hidden' id='txtUserName' name='txtUserName' value='<?php echo($u); ?>'>
<input type='hidden' id='txtPWD' name='txtPWD' value='<?php echo($p); ?>'>
<?php
include '../member/common/includes/browser_info.inc';
?>
</form>
</body>
</html>
<script language='JavaScript'>

var f = document.getElementById("frmLogin");
f.action = '<?php echo($ur); ?>';
var msg = "<?php echo($msg); ?>";
if(f.action == "")
   {
   window.resizeTo(100,100);
   alert(msg);
   self.close();
   }
else
   {
   f.submit();
   } 
</script>