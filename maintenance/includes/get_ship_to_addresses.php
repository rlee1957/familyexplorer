<?php
	$ship_to_address = array();
	if(isset($ship_to_info["recordset"][$key]))
		{
		$ship_to_address["name"] = $ship_to_info["recordset"][$key]["s_name"];
		$name_parts = split_name($ship_to_address["name"]);
		$ship_to_address["prefix"] = $name_parts["prefix"];
		$ship_to_address["first"] = $name_parts["first"];
		$ship_to_address["middle"] = $name_parts["mi"];
		$ship_to_address["last"] = $name_parts["last"];
		$ship_to_address["company"] = $ship_to_info["recordset"][$key]["s_company"];
		$ship_to_address["address"] = $ship_to_info["recordset"][$key]["s_addr1"];
		$ship_to_address["address2"] = $ship_to_info["recordset"][$key]["s_addr2"];
		$ship_to_address["city"] = $ship_to_info["recordset"][$key]["s_city"];
		$ship_to_address["state"] = $ship_to_info["recordset"][$key]["s_state"];
		$ship_to_address["zip"] = $ship_to_info["recordset"][$key]["s_zip"];
		$ship_to_address["phone"] = $ship_to_info["recordset"][$key]["s_phone"];
		$ship_to_address["email"] = $ship_to_info["recordset"][$key]["s_email"];
		$ship_to_address["country"] = $ship_to_info["recordset"][$key]["s_country"];
		$ship_to_addresses[$key] = $ship_to_address;
		}
	else
		{
		if( count($ship_to_addresses) > 0)
			{
			$ship_to_addresses[$key] = $ship_to_addresses[count($ship_to_addresses) - 1];
			}
		else
			{
			$ship_to_address["prefix"] = "";
			$ship_to_address["first"] = $order_info["o_bfname"];
			$ship_to_address["middle"] = "";
			$ship_to_address["last"] = $order_info["o_blname"];
			$ship_to_address["company"] = $order_info["o_bcompany"];
			$ship_to_address["address"] = $order_info["o_baddr1"];
			$ship_to_address["address2"] = $order_info["o_baddr2"];
			$ship_to_address["city"] = $order_info["o_bcity"];
			$ship_to_address["state"] = $order_info["o_bstate"];
			$ship_to_address["zip"] = $order_info["o_bzip"];
			$ship_to_address["phone"] = $order_info["o_bphone"];
			$ship_to_address["email"] = $order_info["o_bemail"];
			$ship_to_address["country"] = $order_info["o_country"];
			$ship_to_addresses[$key] = $ship_to_address;			
			}
		}
?>