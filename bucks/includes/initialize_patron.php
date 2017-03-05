<?php

$check = "../_common/images/check_off.png";
$id = $patron["idx"];
$level = $patron["level"] + 1;
$contributions = get_contributions($level);
$total = $contributions[1] + $contributions[2] + $contributions[3] + $contributions[4]; 
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
		$rel_idx = is_related($id, $idx);
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
$statement = "Please accept my tier ".$level." contribution at http://contributions4u.com by verifying receipt using code: ";
$_SESSION["benefactors"] = $benefactors;
$_SESSION["proxies"] = $proxies;
$_SESSION["addresses"] = $addresses;
$_SESSION["relations"] = $relations;
$_SESSION["patron"] = $patron;
$_SESSION["contributions"] = $contributions;

?>