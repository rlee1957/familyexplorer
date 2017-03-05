<?php  


include("../_common/includes/session_start.php");
include("../_common/includes/show_errors.php");
include("../_common/includes/sql_functions.php");
include("../bucks/includes/patron_functions.php");
include("../bucks/includes/get_patron_information.php");
$patron = $results["recordset"][0];

$id = $patron["idx"];
$level = $patron["level"] + 1;

$contributions = get_contributions($level);

$benef = do_relationships_exist($id);

$benefactors = array();
$proxies = array();
$addresses = array();
$relations = array();

foreach($benef as $key => $idx)
	{
	if((is_active($idx)) && (is_worthy($idx, $level)))
		{
		$benefactors[$key]	= $idx;
		$relations[$key] = is_related($id, $idx);
		}		
	else
		{
		$benefactors[$key] = proxy_with_least_hits($proxies);
		$rel_idx = is_related($id, $benefactors[$key]);
		if($rel_idx == 0)
			{
			create_relationship($id, $benefactors[$key], $key, 'proxy');	
			$rel_idx = is_related($id, $benefactors[$key]);
			}
		else
			{
			update_relationship($rel_idx, $key, 'proxy');
			}
		$proxies[count($proxies)] = $benefactors[$key]; 
		}
	$addresses[$key] = get_address($benefactors[$key]);
	$relations[$key] = $rel_idx;
	}

$statement = "Please accept my tier ".$level." contribution<br />at http://contributions4u.com and verify receipt using code:";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<meta name="generator" content="PSPad editor, www.pspad.com">
<title></title>
</head>
<body>

<?php
foreach($benefactors as $key => $idx)
	{
	echo('
<br />
<div id="contribution_1" style="padding: 0; page-break-after: always;">
	<table cellpadding=25 cellspacing=0>
		<tr>
			<td valign=middle align=center>
				<b>Contribution '.$key.'</b><br />
				<i>Cut this coupon out and place in an envelope along with with $'.$contributions[$key].' and a thank you card (optional).
			</td>
			<td>
				<div style="width: 430px; height: 215px; text-align: center; 
							padding: 0;">	
					<img src="../bucks/images/send_with_payment.jpg" />
					<div style="position: relative; top: -185px;">
						<span>'.$statement.'</span><br />  <br />
						<span style="font-size: 60">'.$patron["personal_key"].'</span><br /> <br />
						<span>Contribution of $'.$contributions[$key].'</span> 
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign=middle align=center><b>Send to</b></td>
			<td valign=left align=top style="border-style: solid; border-width: 1px; padding: 25px;">
				'.$addresses[$key].'
			</td>
		</tr>
	</table>
</div>
<hr />
');
	}
?>

  </body>
</html>
<?php

?>