<?php
$promos = array();
$promos[0] = "none";
$promos[1] = "promo";
$brick = array();
if ($brick["promo"] == 0) 
	{
	# Normal - No Promo
	$brick["g_bktype"] = 4;
	$brick["g_bkstartat"] = 1;
	$brick["g_bkendat"] = 3;
	$brick["g_enable_replica"] = TRUE;
	$brick["g_enable_replica2"] = FALSE;
	$brick["g_enable_display_case"] = TRUE;
	$brick["g_enable_display_case2"] = FALSE;
	
	# First Brick Information 4x8
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][1] = 100.00;
			$brick["g_bktaxable_amt"][1] = 60.00;
			$brick["g_bkdesc"][1] = "4&#34; x 8&#34; PAVER";//4x8 brick only-Rose Plaza section
			$brick["g_bkdesc_addl"][1] = "<span style='font-size: xx-small;'>WITH COMPLIMENTARY REPLICA</span>";
			$brick["g_bk_span"][1] = "span4";
			$brick["g_bkimg"][1] = "4x8.png";
			$brick["g_bkno"][1] = 11; //9
			$brick["g_bklines"][1] = 3;
			$brick["g_bkchar"][1] = 15;
			$brick["g_bkpcost"][1] = 160.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][1] = "ADDITIONAL 4&#34; x 8&#34; REPLICA";
			$brick["g_bkr_span"][1] = "span4";
			$brick["g_bkrimg"][1] = "4x8_Replica.png";
			$brick["g_bkrcost"][1] = 60.00;
			$brick["g_bkrship"][1] = 0.00;
			$brick["g_bkr_bkno"][1] = 10;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][1] = "Not Offered";
			$brick["g_bkr2_span"][1] = "span4";
			$brick["g_bkr2img"][1] = "";
			$brick["g_bkr2cost"][1] = 0.00; //* $brick["g_bkrcost_discount"];
			$brick["g_bkr2_bkno"][1] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][1] = "4&#34; x 8&#34; DISPLAY CASE";
			$brick["g_bkdc_span"][1] = "span3";
			$brick["g_bkdcimg"][1] = "4x8_DisplayCase.png";
			$brick["g_bkdccost"][1] = 55.00;
			$brick["g_bkdc_bkno"][1] = 9;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][1] = "Not Offered";
			$brick["g_bkdc2_span"][1] = "span3";
			$brick["g_bkdc2img"][1] = "4x8_dc_001.png";
			$brick["g_bkdc2cost"][1] = 0.00;
			$brick["g_bkdc2_bkno"][1] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][1] = 0.00;
			$brick["g_bkpcost_pay2"][1] = 0.00;
			$brick["g_bkpcost_pay3"][1] = 0.00;
			$brick["g_bkrcost_pay1"][1] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][1] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][1] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bk_location"][1] = "";
			$brick["g_bk_location_desc"][1] = "";
			$brick["g_bk_location_data"][1] = "";
			$brick["g_bkkeyboard"][1] = ""; // Leave Blank for not greek. or  Greek
			}
		}
	
	# Second Brick Information 8x8 BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][2] = 215.00;
			$brick["g_bktaxable_amt"][2] = 80.00;
			$brick["g_bkdesc"][2] = "8&#34; x 8&#34; PAVER";
			$brick["g_bkdesc_addl"][2] = "<span style='font-size: xx-small;'>WITH COMPLIMENTARY REPLICA</span>";
			$brick["g_bk_span"][2] = "span4";
			$brick["g_bkimg"][2] = "8x8.png";
			$brick["g_bkno"][2] = 16; //31
			$brick["g_bklines"][2] = 6;
        	$brick["g_bkchar"][2] = 15;
        	$brick["g_bkpcost"][2] = 295.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][2] = "ADDITIONAL 8&#34; x 8&#34; REPLICA";
			$brick["g_bkr_span"][2] = "span4";
			$brick["g_bkrimg"][2] = "8x8_Replica.png";
			$brick["g_bkrcost"][2] = 80.00; //* $brick["g_bkrcost_discount"];
			$brick["g_bkrship"][2] = 0.00;
			$brick["g_bkr_bkno"][2] = 14;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][2] = "Not Offered";
			$brick["g_bkr2img"][2] = "";
			$brick["g_bkr2cost"][2] = 0.00;
			$brick["g_bkr2_span"][2] = "span4";
			$brick["g_bkr2_bkno"][2] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][2] = "8&#34; x 8&#34; DISPLAY CASE";
			$brick["g_bkdc_span"][2] = "span3";
			$brick["g_bkdcimg"][2] = "8x8_DisplayCase.png";
			$brick["g_bkdccost"][2] = 70.00;
			$brick["g_bkdc_bkno"][2] = 10;
			}
		# DISPLAY CASE 2 data
			{
			$brick["g_bkdc2desc"][2] = "Not Offered";
			$brick["g_bkdc2_span"][2] = "span3";
			$brick["g_bkdc2img"][2] = "";
			$brick["g_bkdc2cost"][2] = 0.00;
			$brick["g_bkdc2_bkno"][2] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][2] = 0.00;
			$brick["g_bkpcost_pay2"][2] = 0.00;
			$brick["g_bkpcost_pay3"][2] = 0.00;
			$brick["g_bkrcost_pay1"][2] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][2] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][2] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][2] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][2] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][2] = "";
			$brick["g_bk_location_data"][2] = ""; //Pipe separated
			}
		}
	
	# Third Brick Information 8x8 Logo BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][3] = 270.00;
			$brick["g_bktaxable_amt"][3] = 95.00;
			$brick["g_bkdesc"][3] = "8&#34; x 8&#34; LOGO PAVER";
			$brick["g_bkdesc_addl"][3] = "<span style='font-size: xx-small;'>WITH COMPLIMENTARY REPLICA</span>";
			$brick["g_bk_span"][3] = "span4";
			$brick["g_bkimg"][3] = "8x8Logo.png";
			$brick["g_bkno"][3] = 21; //36
			$brick["g_bklines"][3] = 4;
			$brick["g_bkchar"][3] = 15;
			$brick["g_bkpcost"][3] = 360.00;
			}
		# REPLICA data
			{
			$brick["g_bkrdesc"][3] = "ADDITIONAL 8&#34; x 8&#34; LOGO REPLICA";
			$brick["g_bkr_span"][3] = "span4";
			$brick["g_bkrimg"][3] = "8x8_LogoReplica.png";
			$brick["g_bkrcost"][3] = 95.00;
        	$brick["g_bkrship"][3] = 0.00;
			$brick["g_bkr_bkno"][3] = 14;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][3] = "Not Offered";
			$brick["g_bkr2img"][3] = "";
			$brick["g_bkr2cost"][3] = 0.00;
			$brick["g_bkr2_span"][3] = "span4";
			$brick["g_bkr2_bkno"][3] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][3] = "8&#34; x 8&#34; DISPLAY CASE";
			$brick["g_bkdc_span"][3] = "span3";
			$brick["g_bkdcimg"][3] = "8x8_DisplayCase.png";
			$brick["g_bkdccost"][3] = 70.00;
			$brick["g_bkdc_bkno"][3] = 10;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][3] = "Not Offered";
			$brick["g_bkdc2_span"][3] = "span3";
			$brick["g_bkdc2img"][3] = "";
			$brick["g_bkdc2cost"][3] = 0.00;
			$brick["g_bkdc2_bkno"][3] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][3] = 0.00;
			$brick["g_bkpcost_pay2"][3] = 0.00;
			$brick["g_bkpcost_pay3"][3] = 0.00;
			$brick["g_bkrcost_pay1"][3] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][3] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][3] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][3] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][3] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][3] = "";
			$brick["g_bk_location_data"][3] = ""; //Pipe
			}
		}
	
	# Fourth BRICK Information 8x8 
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][4] = 0;
			$brick["g_bktaxable_amt"][4] = 0.00;
			$brick["g_bkdesc"][4] = "8&#34;x8&#34; GRANITE BRICK";
			$brick["g_bkdesc_addl"][4] = "<span style='font-size: 8pt;'>&nbsp;</span>";
			$brick["g_bk_span"][4] = "span4";
			$brick["g_bkimg"][4] = "8x8.png";
			$brick["g_bkno"][4] = 17;
			$brick["g_bklines"][4] = 6;
			$brick["g_bkchar"][4] = 25;
			$brick["g_bkpcost"][4] = 5000.00;
			}
		# REPLICA data
			{
			$brick["g_bkrdesc"][4] = "8&#34;x8&#34; TILE REPLICA";
			$brick["g_bkr_span"][4] = "span4";
			$brick["g_bkrimg"][4] = "8x8replica.png";
			$brick["g_bkrcost"][4] = 375.00;
			$brick["g_bkrship"][4] = 0.00;
			$brick["g_bkr_bkno"][4] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][4] = "Not Offered";
			$brick["g_bkr2img"][4] = "";
			$brick["g_bkr2cost"][4] = 0.00;
			$brick["g_bkr2_span"][4] = "span4";
			$brick["g_bkr2_bkno"][4] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][4] = "Not Offered";
			$brick["g_bkdc_span"][4] = "span3";
			$brick["g_bkdcimg"][4] = "";
			$brick["g_bkdccost"][4] = 0.00;
			$brick["g_bkdc_bkno"][4] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][4] = "Not Offered";
			$brick["g_bkdc2_span"][4] = "span3";
			$brick["g_bkdc2img"][4] = "";
			$brick["g_bkdc2cost"][4] = 0.00;
			$brick["g_bkdc2_bkno"][4] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][4] = 0.00;
			$brick["g_bkpcost_pay2"][4] = 0.00;
			$brick["g_bkpcost_pay3"][4] = 0.00;
			$brick["g_bkrcost_pay1"][4] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][4] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][4] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][4] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][4] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][4] = "";
			$brick["g_bk_location_data"][4] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
	
	# Fifth BRICK Information 12x12 GRANITE BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][5] = 0;
			$brick["g_bktaxable_amt"][5] = 275.00;
			$brick["g_bkdesc"][5] = "12&#34;x12&#34; GRANITE BRICK";
			$brick["g_bkdesc_addl"][5] = "<span style='font-size: 8pt;'>&nbsp;</span>";
			$brick["g_bk_span"][5] = "span4";
			$brick["g_bkimg"][5] = "12x12.png";
			$brick["g_bkno"][5] = 23;
			$brick["g_bklines"][5] = 10;
			$brick["g_bkchar"][5] = 25;
			$brick["g_bkpcost"][5] = 10000.00;
			}
		# REPLICA data
			{
			$brick["g_bkrdesc"][5] = "12&#34;x12&#34; TILE REPLICA";
			$brick["g_bkr_span"][5] = "span4";
			$brick["g_bkrimg"][5] = "12x12replica.png";
			$brick["g_bkrcost"][5] = 450.00;
			$brick["g_bkrship"][5] = 0.00;
			$brick["g_bkr_bkno"][5] = 24;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][5] = "Not Offered";
			$brick["g_bkr2img"][5] = "";
			$brick["g_bkr2cost"][5] = 0.00;
			$brick["g_bkr2_span"][5] = "span4";
			$brick["g_bkr2_bkno"][5] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][5] = "Not Offered";
			$brick["g_bkdc_span"][5] = "span3";
			$brick["g_bkdcimg"][5] = "";
			$brick["g_bkdccost"][5] = 0.00;
			$brick["g_bkdc_bkno"][5] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][5] = "Not Offered";
			$brick["g_bkdc2_span"][5] = "span3";
			$brick["g_bkdc2img"][5] = "";
			$brick["g_bkdc2cost"][5] = 0.00;
			$brick["g_bkdc2_bkno"][5] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][5] = 0.00;
			$brick["g_bkpcost_pay2"][5] = 0.00;
			$brick["g_bkpcost_pay3"][5] = 0.00;
			$brick["g_bkrcost_pay1"][5] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][5] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][5] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][5] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][5] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][5] = "";
			$brick["g_bk_location_data"][5] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
	
	# Sixth BRICK Information 4x8 LOGO BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][6] = 0;
			$brick["g_bktaxable_amt"][6] = 0.00;
			$brick["g_bkdesc"][6] = "4&#34;x8&#34; LOGO BRICK";
			$brick["g_bkdesc_addl"][6] = "<span style='font-size: 8pt;'>&nbsp;</span>";
			$brick["g_bk_span"][6] = "span4";
			$brick["g_bkimg"][6] = "4x8logo.png";
			$brick["g_bkno"][6] = 11;
			$brick["g_bklines"][6] = 2;
			$brick["g_bkchar"][6] = 25;
			$brick["g_bkpcost"][6] = 150.00;
			}
		# REPLICA data
			{
			$brick["g_bkrdesc"][6] = "4&#34;x8&#34; LOGO REPLICA";
			$brick["g_bkr_span"][6] = "span4";
			$brick["g_bkrimg"][6] = "4x8logoreplica.png";
			$brick["g_bkrcost"][6] = 60.00;
			$brick["g_bkrship"][6] = 0.00;
			$brick["g_bkr_bkno"][6] = 12;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][6] = "Not Offered";
			$brick["g_bkr2img"][6] = "";
			$brick["g_bkr2cost"][6] = 0.00;
			$brick["g_bkr2_span"][6] = "span4";
			$brick["g_bkr2_bkno"][6] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][6] = "Not Offered";
			$brick["g_bkdc_span"][6] = "span3";
			$brick["g_bkdcimg"][6] = "";
			$brick["g_bkdccost"][6] = 0.00;
			$brick["g_bkdc_bkno"][6] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][6] = "Not Offered";
			$brick["g_bkdc2_span"][6] = "span3";
			$brick["g_bkdc2img"][6] = "";
			$brick["g_bkdc2cost"][6] = 0.00;
			$brick["g_bkdc2_bkno"][6] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][6] = 0.00;
			$brick["g_bkpcost_pay2"][6] = 0.00;
			$brick["g_bkpcost_pay3"][6] = 0.00;
			$brick["g_bkrcost_pay1"][6] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][6] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][6] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][6] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][6] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][6] = "";
			$brick["g_bk_location_data"][6] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
	
	# Seventh BRICK Information 4x8 LOGO LEGACY SET
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][7] = 0.00;
			$brick["g_bktaxable_amt"][7] = 0.00;
			$brick["g_bkdesc"][7] = "4&#34;x8&#34; LOGO LEGACY SET";
			$brick["g_bkdesc_addl"][7] = "<span style='font-size: 8pt;'>Processed as Four Gift Certificates</span>";
			$brick["g_bk_span"][7] = "span4";
			$brick["g_bkimg"][7] = "4x8logoset.png";
			$brick["g_bkno"][7] = 42;
			$brick["g_bklines"][7] = 2;
			$brick["g_bkchar"][7] = 25;
			$brick["g_bkpcost"][7] = 500.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][7] = "4&#34;x8&#34; LOGO LEGACY SET REPLICAS";
			$brick["g_bkr_span"][7] = "span4";
			$brick["g_bkrimg"][7] = "4x8logosetreplicas.png";
			$brick["g_bkrcost"][7] = 225.00;
			$brick["g_bkrship"][7] = 0.00;
			$brick["g_bkr_bkno"][7] = 14;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][7] = "Not Offered";
			$brick["g_bkr2img"][7] = "";
			$brick["g_bkr2cost"][7] = 0.00;
			$brick["g_bkr2_span"][7] = "span4";
			$brick["g_bkr2_bkno"][7] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][7] = "Not Offered";
			$brick["g_bkdc_span"][7] = "span3";
			$brick["g_bkdcimg"][7] = "";
			$brick["g_bkdccost"][7] = 0.00;
			$brick["g_bkdc_bkno"][7] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][7] = "Not Offered";
			$brick["g_bkdc2_span"][7] = "span3";
			$brick["g_bkdc2img"][7] = "";
			$brick["g_bkdc2cost"][7] = 0.00;
			$brick["g_bkdc2_bkno"][7] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][7] = 0.00;
			$brick["g_bkpcost_pay2"][7] = 0.00;
			$brick["g_bkpcost_pay3"][7] = 0.00;
			$brick["g_bkrcost_pay1"][7] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][7] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][7] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][7] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][7] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][7] = "";
			$brick["g_bk_location_data"][7] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
	
	# Eighth BRICK Information 6x8 LOGO GRANITE BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][8] = 0.00;
			$brick["g_bktaxable_amt"][8] = 0.00;
			$brick["g_bkdesc"][8] = "6&#34;x8&#34; LOGO GRANITE BRICK";
			$brick["g_bkdesc_addl"][8] = "<span style='font-size: 8pt;'>&nbsp;</span>";
			$brick["g_bk_span"][8] = "span4";
			$brick["g_bkimg"][8] = "6x8logo.png";
			$brick["g_bkno"][8] = 31;
			$brick["g_bklines"][8] = 4;
			$brick["g_bkchar"][8] = 25;
			$brick["g_bkpcost"][8] = 1000.00;
			}
		# REPLICA data
			{
			$brick["g_bkrdesc"][8] = "6&#34;x8&#34; LOGO TILE REPLICA";
			$brick["g_bkr_span"][8] = "span4";
			$brick["g_bkrimg"][8] = "6x8logoreplica.png";
			$brick["g_bkrcost"][8] = 300.00;
			$brick["g_bkrship"][8] = 0.00;
			$brick["g_bkr_bkno"][8] = 16;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][8] = "Not Offered";
			$brick["g_bkr2img"][8] = "";
			$brick["g_bkr2cost"][8] = 0.00;
			$brick["g_bkr2_span"][8] = "span4";
			$brick["g_bkr2_bkno"][8] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][8] = "Not Offered";
			$brick["g_bkdc_span"][8] = "span3";
			$brick["g_bkdcimg"][8] = "";
			$brick["g_bkdccost"][8] = 0.00;
			$brick["g_bkdc_bkno"][8] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][8] = "Not Offered";
			$brick["g_bkdc2_span"][8] = "span3";
			$brick["g_bkdc2img"][8] = "";
			$brick["g_bkdc2cost"][8] = 0.00;
			$brick["g_bkdc2_bkno"][8] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][8] = 0.00;
			$brick["g_bkpcost_pay2"][8] = 0.00;
			$brick["g_bkpcost_pay3"][8] = 0.00;
			$brick["g_bkrcost_pay1"][8] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][8] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][8] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][8] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][8] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][8] = "";
			$brick["g_bk_location_data"][8] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
	
	# Ninth BRICK Information 8x8 LOGO GRANITE BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][9] = 0.00;
			$brick["g_bktaxable_amt"][9] = 0.00;
			$brick["g_bkdesc"][9] = "8&#34;x8&#34; LOGO GRANITE BRICK";
			$brick["g_bkdesc_addl"][9] = "<span style='font-size: 8pt;'>&nbsp;</span>";
			$brick["g_bk_span"][9] = "span4";
			$brick["g_bkimg"][9] = "8x8logo.png";
			$brick["g_bkno"][9] = 19;
			$brick["g_bklines"][9] = 5;
			$brick["g_bkchar"][9] = 25;
			$brick["g_bkpcost"][9] = 5000.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][9] = "8&#34;x8&#34; LOGO TILE REPLICA";
			$brick["g_bkr_span"][9] = "span4";
			$brick["g_bkrimg"][9] = "8x8logoreplica.png";
			$brick["g_bkrcost"][9] = 375.00;
			$brick["g_bkrship"][9] = 0.00;
			$brick["g_bkr_bkno"][9] = 20;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][9] = "Not Offered";
			$brick["g_bkr2img"][9] = "";
			$brick["g_bkr2cost"][9] = 0.00;
			$brick["g_bkr2_span"][9] = "span4";
			$brick["g_bkr2_bkno"][9] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][9] = "Not Offered";
			$brick["g_bkdc_span"][9] = "span3";
			$brick["g_bkdcimg"][9] = "";
			$brick["g_bkdccost"][9] = 0.00;
			$brick["g_bkdc_bkno"][9] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][9] = "Not Offered";
			$brick["g_bkdc2_span"][9] = "span3";
			$brick["g_bkdc2img"][9] = "";
			$brick["g_bkdc2cost"][9] = 0.00;
			$brick["g_bkdc2_bkno"][9] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][9] = 0.00;
			$brick["g_bkpcost_pay2"][9] = 0.00;
			$brick["g_bkpcost_pay3"][9] = 0.00;
			$brick["g_bkrcost_pay1"][9] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][9] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][9] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][9] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][9] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][9] = "";
			$brick["g_bk_location_data"][9] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
	
	# Tenth BRICK Information 12x12 LOGO GRANITE BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][10] = 0.00;
			$brick["g_bktaxable_amt"][10] = 0.00;
			$brick["g_bkdesc"][10] = "12&#34;x12&#34; LOGO GRANITE BRICK";
			$brick["g_bkdesc_addl"][10] = "<span style='font-size: 8pt;'>&nbsp;</span>";
			$brick["g_bk_span"][10] = "span4";
			$brick["g_bkimg"][10] = "12x12logo.png";
			$brick["g_bkno"][10] = 23;
			$brick["g_bklines"][10] = 9;
			$brick["g_bkchar"][10] = 25;
			$brick["g_bkpcost"][10] = 10000.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][10] = "12&#34;x12&#34; LOGO TILE REPLICA";
			$brick["g_bkr_span"][10] = "span4";
			$brick["g_bkrimg"][10] = "12x12logoreplica.png";
			$brick["g_bkrcost"][10] = 450.00;
			$brick["g_bkrship"][10] = 0.00;
			$brick["g_bkr_bkno"][10] = 24;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][10] = "Not Offered";
			$brick["g_bkr2img"][10] = "";
			$brick["g_bkr2cost"][10] = 0.00;
			$brick["g_bkr2_span"][10] = "span4";
			$brick["g_bkr2_bkno"][10] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][10] = "Not Offered";
			$brick["g_bkdc_span"][10] = "span3";
			$brick["g_bkdcimg"][10] = "";
			$brick["g_bkdccost"][10] = 0.00;
			$brick["g_bkdc_bkno"][10] = -1;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][10] = "Not Offered";
			$brick["g_bkdc2_span"][10] = "span3";
			$brick["g_bkdc2img"][10] = "";
			$brick["g_bkdc2cost"][10] = 0.00;
			$brick["g_bkdc2_bkno"][10] = -1;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][10] = 0.00;
			$brick["g_bkpcost_pay2"][10] = 0.00;
			$brick["g_bkpcost_pay3"][10] = 0.00;
			$brick["g_bkrcost_pay1"][10] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][10] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][10] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][10] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][10] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][10] = "";
			$brick["g_bk_location_data"][10] = $lang["location_0_value"]."|".$lang["location_1_value"]."|".$lang["location_2_value"]; //Pipe
			}
		}
/*	
	# Eleventh Brick Information 4x8 Premium Brick
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][11] = 0;
			$brick["g_bktaxable_amt"][11] = 195.00;
			$brick["g_bkdesc"][11] = "4x8 PREMIUM BRICK";
			$brick["g_bkdesc_addl"][11] = " ";
			$brick["g_bk_span"][11] = "span4";
			$brick["g_bkimg"][11] = "4x8.png";
			$brick["g_bkno"][11] = 46;
			$brick["g_bklines"][11] = 3;
			$brick["g_bkchar"][11] = 15;
			$brick["g_bkpcost"][11] = 195.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][11] = "4x8  REPLICA";
			$brick["g_bkr_span"][11] = "span4";
			$brick["g_bkrimg"][11] = "4x8replica.png";
			$brick["g_bkrcost"][11] = 50.00;
			$brick["g_bkrship"][11] = 0.00;
			$brick["g_bkr_bkno"][11] = 12;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][11] = "Not Offered";
			$brick["g_bkr2img"][11] = "";
			$brick["g_bkr2cost"][11] = 0.00;
			$brick["g_bkr2_span"][11] = "span4";
			$brick["g_bkr2_bkno"][11] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][11] = "4x8 DISPLAY CASE";
			$brick["g_bkdc_span"][11] = "span3";
			$brick["g_bkdcimg"][11] = "4x8displaycase.png";
			$brick["g_bkdccost"][11] = 60.00;
			$brick["g_bkdc_bkno"][11] = 9;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][11] = "Not Offered";
			$brick["g_bkdc2_span"][11] = "span3";
			$brick["g_bkdc2img"][11] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][11] = 75.00;
			$brick["g_bkdc2_bkno"][11] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][11] = 0.00;
			$brick["g_bkpcost_pay2"][11] = 0.00;
			$brick["g_bkpcost_pay3"][11] = 0.00;
			$brick["g_bkrcost_pay1"][11] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][11] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][11] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][11] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][11] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][11] = "";
			$brick["g_bk_location_data"][11] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Twelvth Brick Information 8x8 Premium Brick
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][12] = 0;
			$brick["g_bktaxable_amt"][12] = 295.00;
			$brick["g_bkdesc"][12] = "8x8 PREMIUM BRICK";
			$brick["g_bkdesc_addl"][12] = " ";
			$brick["g_bk_span"][12] = "span4";
			$brick["g_bkimg"][12] = "8x8.png";
			$brick["g_bkno"][12] = 17;
			$brick["g_bklines"][12] = 6;
			$brick["g_bkchar"][12] = 15;
			$brick["g_bkpcost"][12] = 295.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][12] = "8x8 REPLICA";
			$brick["g_bkr_span"][12] = "span4";
			$brick["g_bkrimg"][12] = "8x8replica.png";
			$brick["g_bkrcost"][12] = 75.00;
			$brick["g_bkrship"][12] = 0.00;
			$brick["g_bkr_bkno"][12] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][12] = "Not Offered";
			$brick["g_bkr2img"][12] = "";
			$brick["g_bkr2cost"][12] = 0.00;
			$brick["g_bkr2_span"][12] = "span4";
			$brick["g_bkr2_bkno"][12] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][12] = "8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][12] = "span3";
			$brick["g_bkdcimg"][12] = "8x8displaycase.png";
			$brick["g_bkdccost"][12] = 75.00;
			$brick["g_bkdc_bkno"][12] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][12] = "Not Offered";
			$brick["g_bkdc2_span"][12] = "span3";
			$brick["g_bkdc2img"][12] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][12] = 75.00;
			$brick["g_bkdc2_bkno"][12] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][12] = 0.00;
			$brick["g_bkpcost_pay2"][12] = 0.00;
			$brick["g_bkpcost_pay3"][12] = 0.00;
			$brick["g_bkrcost_pay1"][12] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][12] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][12] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][12] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][12] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][12] = "";
			$brick["g_bk_location_data"][12] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Thirteenth Brick Information 8x8 PREMIUM IMS LOGO BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][13] = 0;
			$brick["g_bktaxable_amt"][13] = 295.00;
			$brick["g_bkdesc"][13] = "8x8 PREMIUM IMS LOGO BRICK";
			$brick["g_bkdesc_addl"][13] = " ";
			$brick["g_bk_span"][13] = "span4";
			$brick["g_bkimg"][13] = "8x8logo1.png";
			$brick["g_bkno"][13] = 17;
			$brick["g_bklines"][13] = 4;
			$brick["g_bkchar"][13] = 15;
			$brick["g_bkpcost"][13] = 295.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][13] = "8x8 IMS LOGO REPLICA";
			$brick["g_bkr_span"][13] = "span4";
			$brick["g_bkrimg"][13] = "8x8logoreplica1.png";
			$brick["g_bkrcost"][13] = 75.00;
			$brick["g_bkrship"][13] = 0.00;
			$brick["g_bkr_bkno"][13] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][13] = "Not Offered";
			$brick["g_bkr2img"][13] = "";
			$brick["g_bkr2cost"][13] = 0.00;
			$brick["g_bkr2_span"][13] = "span4";
			$brick["g_bkr2_bkno"][13] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][13] = "8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][13] = "span3";
			$brick["g_bkdcimg"][13] = "8x8displaycase.png";
			$brick["g_bkdccost"][13] = 75.00;
			$brick["g_bkdc_bkno"][13] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][13] = "Not Offered";
			$brick["g_bkdc2_span"][13] = "span3";
			$brick["g_bkdc2img"][13] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][13] = 75.00;
			$brick["g_bkdc2_bkno"][13] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][13] = 0.00;
			$brick["g_bkpcost_pay2"][13] = 0.00;
			$brick["g_bkpcost_pay3"][13] = 0.00;
			$brick["g_bkrcost_pay1"][13] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][13] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][13] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][13] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][13] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][13] = "";
			$brick["g_bk_location_data"][13] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Fourteenth Brick Information 8x8 PREMIUM WING & WHEEL LOGO BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][14] = 0;
			$brick["g_bktaxable_amt"][14] = 295.00;
			$brick["g_bkdesc"][14] = "8x8 PREMIUM WING & WHEEL LOGO BRICK";
			$brick["g_bkdesc_addl"][14] = "";
			$brick["g_bk_span"][14] = "span4";
			$brick["g_bkimg"][14] = "8x8logo2.png";
			$brick["g_bkno"][14] = 17;
			$brick["g_bklines"][14] = 4;
			$brick["g_bkchar"][14] = 15;
			$brick["g_bkpcost"][14] = 295.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][14] = "8x8 WING & WHEEL LOGO REPLICA";
			$brick["g_bkr_span"][14] = "span4";
			$brick["g_bkrimg"][14] = "8x8logoreplica2.png";
			$brick["g_bkrcost"][14] = 75.00;
			$brick["g_bkrship"][14] = 0.00;
			$brick["g_bkr_bkno"][14] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][14] = "Not Offered";
			$brick["g_bkr2img"][14] = "";
			$brick["g_bkr2cost"][14] = 0.00;
			$brick["g_bkr2_span"][14] = "span4";
			$brick["g_bkr2_bkno"][14] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][14] = "8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][14] = "span3";
			$brick["g_bkdcimg"][14] = "8x8displaycase.png";
			$brick["g_bkdccost"][14] = 75.00;
			$brick["g_bkdc_bkno"][14] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][14] = "Not Offered";
			$brick["g_bkdc2_span"][14] = "span3";
			$brick["g_bkdc2img"][14] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][14] = 75.00;
			$brick["g_bkdc2_bkno"][14] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][14] = 0.00;
			$brick["g_bkpcost_pay2"][14] = 0.00;
			$brick["g_bkpcost_pay3"][14] = 0.00;
			$brick["g_bkrcost_pay1"][14] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][14] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][14] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][14] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][14] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][14] = "";
			$brick["g_bk_location_data"][14] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Fifteenth Brick Information 8x8 PREMIUM 100TH RUNNING LOGO BRICK
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][15] = 0;
			$brick["g_bktaxable_amt"][15] = 325.00;
			$brick["g_bkdesc"][15] = "8x8 PREMIUM 100TH RUNNING LOGO BRICK";
			$brick["g_bkdesc_addl"][15] = " ";
			$brick["g_bk_span"][15] = "span4";
			$brick["g_bkimg"][15] = "8x8logo3.png";
			$brick["g_bkno"][15] = 17;
			$brick["g_bklines"][15] = 4;
			$brick["g_bkchar"][15] = 15;
			$brick["g_bkpcost"][15] = 325.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][15] = "8x8 100TH RUNNING LOGO REPLICA";
			$brick["g_bkr_span"][15] = "span4";
			$brick["g_bkrimg"][15] = "8x8logoreplica3.png";
			$brick["g_bkrcost"][15] = 100.00;
			$brick["g_bkrship"][15] = 0.00;
			$brick["g_bkr_bkno"][15] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][15] = "Not Offered";
			$brick["g_bkr2img"][15] = "";
			$brick["g_bkr2cost"][15] = 0.00;
			$brick["g_bkr2_span"][15] = "span4";
			$brick["g_bkr2_bkno"][15] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][15] = "8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][15] = "span3";
			$brick["g_bkdcimg"][15] = "8x8displaycase.png";
			$brick["g_bkdccost"][15] = 75.00;
			$brick["g_bkdc_bkno"][15] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][15] = "Not Offered";
			$brick["g_bkdc2_span"][15] = "span3";
			$brick["g_bkdc2img"][15] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][15] = 75.00;
			$brick["g_bkdc2_bkno"][15] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][15] = 0.00;
			$brick["g_bkpcost_pay2"][15] = 0.00;
			$brick["g_bkpcost_pay3"][15] = 0.00;
			$brick["g_bkrcost_pay1"][15] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][15] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][15] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][15] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][15] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][15] = "";
			$brick["g_bk_location_data"][15] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Sixteenth Brick Information 4x8 PREMIUM BRICK PACKAGE
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][16] = 0;
			$brick["g_bktaxable_amt"][16] = 275.00;
			$brick["g_bkdesc"][16] = "4x8 PREMIUM BRICK PACKAGE";
			$brick["g_bkdesc_addl"][16] = "<span style='font-size: 8pt;'>INCLUDES REPLICA & DISPLAY CASE</span>";
			$brick["g_bk_span"][16] = "span4";
			$brick["g_bkimg"][16] = "4x8package.png";
			$brick["g_bkno"][16] = 17;
			$brick["g_bklines"][16] = 3;
			$brick["g_bkchar"][16] = 15;
			$brick["g_bkpcost"][16] = 275.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][16] = "ADDITIONAL 4x8 REPLICA";
			$brick["g_bkr_span"][16] = "span4";
			$brick["g_bkrimg"][16] = "4x8replica.png";
			$brick["g_bkrcost"][16] = 50.00;
			$brick["g_bkrship"][16] = 0.00;
			$brick["g_bkr_bkno"][16] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][16] = "Not Offered";
			$brick["g_bkr2img"][16] = "";
			$brick["g_bkr2cost"][16] = 0.00;
			$brick["g_bkr2_span"][16] = "span4";
			$brick["g_bkr2_bkno"][16] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][16] = "ADDITIONAL 4x8 DISPLAY CASE";
			$brick["g_bkdc_span"][16] = "span3";
			$brick["g_bkdcimg"][16] = "4x8displaycase.png";
			$brick["g_bkdccost"][16] = 75.00;
			$brick["g_bkdc_bkno"][16] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][16] = "Not Offered";
			$brick["g_bkdc2_span"][16] = "span3";
			$brick["g_bkdc2img"][16] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][16] = 75.00;
			$brick["g_bkdc2_bkno"][16] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][16] = 0.00;
			$brick["g_bkpcost_pay2"][16] = 0.00;
			$brick["g_bkpcost_pay3"][16] = 0.00;
			$brick["g_bkrcost_pay1"][16] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][16] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][16] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][16] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][16] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][16] = "";
			$brick["g_bk_location_data"][16] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Seventeenth Brick Information 8x8 PREMIUM BRICK PACKAGE
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][17] = 0;
			$brick["g_bktaxable_amt"][17] = 425.00;
			$brick["g_bkdesc"][17] = "8x8 PREMIUM BRICK PACKAGE";
			$brick["g_bkdesc_addl"][17] = "<span style='font-size: 8pt;'>INCLUDES REPLICA & DISPLAY CASE</span>";
			$brick["g_bk_span"][17] = "span4";
			$brick["g_bkimg"][17] = "8x8package.png";
			$brick["g_bkno"][17] = 17;
			$brick["g_bklines"][17] = 6;
			$brick["g_bkchar"][17] = 15;
			$brick["g_bkpcost"][17] = 425.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][17] = "ADDITIONAL 8x8 REPLICA";
			$brick["g_bkr_span"][17] = "span4";
			$brick["g_bkrimg"][17] = "8x8replica.png";
			$brick["g_bkrcost"][17] = 75.00;
			$brick["g_bkrship"][17] = 0.00;
			$brick["g_bkr_bkno"][17] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][17] = "Not Offered";
			$brick["g_bkr2img"][17] = "";
			$brick["g_bkr2cost"][17] = 0.00;
			$brick["g_bkr2_span"][17] = "span4";
			$brick["g_bkr2_bkno"][17] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][17] = "ADDITIONAL 8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][17] = "span3";
			$brick["g_bkdcimg"][17] = "8x8displaycase.png";
			$brick["g_bkdccost"][17] = 75.00;
			$brick["g_bkdc_bkno"][17] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][17] = "Not Offered";
			$brick["g_bkdc2_span"][17] = "span3";
			$brick["g_bkdc2img"][17] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][17] = 75.00;
			$brick["g_bkdc2_bkno"][17] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][17] = 0.00;
			$brick["g_bkpcost_pay2"][17] = 0.00;
			$brick["g_bkpcost_pay3"][17] = 0.00;
			$brick["g_bkrcost_pay1"][17] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][17] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][17] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][17] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][17] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][17] = "";
			$brick["g_bk_location_data"][17] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Eighteenth Brick Information 8x8 PREMIUM IMS LOGO BRICK PACKAGE
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][18] = 0;
			$brick["g_bktaxable_amt"][18] = 425.00;
			$brick["g_bkdesc"][18] = "8x8 PREMIUM IMS LOGO BRICK PACKAGE";
			$brick["g_bkdesc_addl"][18] = "<span style='font-size: 8pt;'>INCLUDES REPLICA & DISPLAY CASE</span>";
			$brick["g_bk_span"][18] = "span4";
			$brick["g_bkimg"][18] = "8x8logopackage1.png";
			$brick["g_bkno"][18] = 17;
			$brick["g_bklines"][18] = 4;
			$brick["g_bkchar"][18] = 15;
			$brick["g_bkpcost"][18] = 425.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][18] = "ADDITIONAL 8x8 IMS LOGO REPLICA";
			$brick["g_bkr_span"][18] = "span4";
			$brick["g_bkrimg"][18] = "8x8logoreplica1.png";
			$brick["g_bkrcost"][18] = 75.00;
			$brick["g_bkrship"][18] = 0.00;
			$brick["g_bkr_bkno"][18] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][18] = "Not Offered";
			$brick["g_bkr2img"][18] = "";
			$brick["g_bkr2cost"][18] = 0.00;
			$brick["g_bkr2_span"][18] = "span4";
			$brick["g_bkr2_bkno"][18] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][18] = "ADDITIONAL 8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][18] = "span3";
			$brick["g_bkdcimg"][18] = "8x8displaycase.png";
			$brick["g_bkdccost"][18] = 75.00;
			$brick["g_bkdc_bkno"][18] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][18] = "Not Offered";
			$brick["g_bkdc2_span"][18] = "span3";
			$brick["g_bkdc2img"][18] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][18] = 75.00;
			$brick["g_bkdc2_bkno"][18] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][18] = 0.00;
			$brick["g_bkpcost_pay2"][18] = 0.00;
			$brick["g_bkpcost_pay3"][18] = 0.00;
			$brick["g_bkrcost_pay1"][18] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][18] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][18] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][18] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][18] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][18] = "";
			$brick["g_bk_location_data"][18] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Nineteenth Brick Information 8x8 PREMIUM WING & WHEEL LOGO BRICK PACKAGE
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][19] = 0;
			$brick["g_bktaxable_amt"][19] = 425.00;
			$brick["g_bkdesc"][19] = "8x8 PREMIUM WING & WHEEL LOGO BRICK PACKAGE";
			$brick["g_bkdesc_addl"][19] = "<span style='font-size: 8pt;'>INCLUDES REPLICA & DISPLAY CASE</span>";
			$brick["g_bk_span"][19] = "span4";
			$brick["g_bkimg"][19] = "8x8logopackage2.png";
			$brick["g_bkno"][19] = 17;
			$brick["g_bklines"][19] = 4;
			$brick["g_bkchar"][19] = 15;
			$brick["g_bkpcost"][19] = 425.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][19] = "ADDITIONAL 8x8 WING & WHEEL LOGO REPLICA";
			$brick["g_bkr_span"][19] = "span4";
			$brick["g_bkrimg"][19] = "8x8logoreplica2.png";
			$brick["g_bkrcost"][19] = 75.00;
			$brick["g_bkrship"][19] = 0.00;
			$brick["g_bkr_bkno"][19] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][19] = "Not Offered";
			$brick["g_bkr2img"][19] = "";
			$brick["g_bkr2cost"][19] = 0.00;
			$brick["g_bkr2_span"][19] = "span4";
			$brick["g_bkr2_bkno"][19] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][19] = "ADDITIONAL 8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][19] = "span3";
			$brick["g_bkdcimg"][19] = "8x8displaycase.png";
			$brick["g_bkdccost"][19] = 75.00;
			$brick["g_bkdc_bkno"][19] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][19] = "Not Offered";
			$brick["g_bkdc2_span"][19] = "span3";
			$brick["g_bkdc2img"][19] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][19] = 75.00;
			$brick["g_bkdc2_bkno"][19] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][19] = 0.00;
			$brick["g_bkpcost_pay2"][19] = 0.00;
			$brick["g_bkpcost_pay3"][19] = 0.00;
			$brick["g_bkrcost_pay1"][19] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][19] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][19] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][19] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][19] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][19] = "";
			$brick["g_bk_location_data"][19] = $lang["premium_location_value"]; //Pipe
			}
		}
	
	# Twentieth Brick Information 8x8 PREMIUM 100TH RUNNING LOGO BRICK PACKAGE
		{
		# paver data
			{
			$brick["g_bknottaxable_amt"][20] = 0;
			$brick["g_bktaxable_amt"][20] = 450.00;
			$brick["g_bkdesc"][20] = "8x8 PREMIUM 100TH RUNNING LOGO BRICK PACKAGE";
			$brick["g_bkdesc_addl"][20] = "<span style='font-size: 8pt;'>INCLUDES REPLICA & DISPLAY CASE</span>";
			$brick["g_bk_span"][20] = "span4";
			$brick["g_bkimg"][20] = "8x8logopackage3.png";
			$brick["g_bkno"][20] = 17;
			$brick["g_bklines"][20] = 4;
			$brick["g_bkchar"][20] = 15;
			$brick["g_bkpcost"][20] = 450.00;
			}
		# replica data
			{
			$brick["g_bkrdesc"][20] = "ADDITIONAL 8x8 100TH RUNNING LOGO REPLICA";
			$brick["g_bkr_span"][20] = "span4";
			$brick["g_bkrimg"][20] = "8x8logoreplica3.png";
			$brick["g_bkrcost"][20] = 100.00;
			$brick["g_bkrship"][20] = 0.00;
			$brick["g_bkr_bkno"][20] = 18;
			}
		# replica2 data
			{
			$brick["g_bkr2desc"][20] = "Not Offered";
			$brick["g_bkr2img"][20] = "";
			$brick["g_bkr2cost"][20] = 0.00;
			$brick["g_bkr2_span"][20] = "span4";
			$brick["g_bkr2_bkno"][20] = -1;
			}
		# DISPLAY CASE data
			{
			$brick["g_bkdcdesc"][20] = "ADDITIONAL 8x8 DISPLAY CASE";
			$brick["g_bkdc_span"][20] = "span3";
			$brick["g_bkdcimg"][20] = "8x8displaycase.png";
			$brick["g_bkdccost"][20] = 75.00;
			$brick["g_bkdc_bkno"][20] = 20;
			}
		# DISPLAY CASE2 data
			{
			$brick["g_bkdc2desc"][20] = "Not Offered";
			$brick["g_bkdc2_span"][20] = "span3";
			$brick["g_bkdc2img"][20] = "8x8_dc_001.png";
			$brick["g_bkdc2cost"][20] = 75.00;
			$brick["g_bkdc2_bkno"][20] = 21;
			}
		# other data
			{
			$brick["g_bkpcost_pay1"][20] = 0.00;
			$brick["g_bkpcost_pay2"][20] = 0.00;
			$brick["g_bkpcost_pay3"][20] = 0.00;
			$brick["g_bkrcost_pay1"][20] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay2"][20] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkrcost_pay3"][20] = 0.00 * $brick["g_bkrcost_discount"];
			$brick["g_bkkeyboard"][20] = ""; // Leave Blank for not greek. or  Greek
			$brick["g_bk_location"][20] = ""; // Leave Blank for EMPTY 
			$brick["g_bk_location_desc"][20] = "";
			$brick["g_bk_location_data"][20] = $lang["premium_location_value"]; //Pipe
			}
		}
*/		
	/* Add more bricks here if required */
	
	// Gift Certificates and Display Cases
		{
		// NEW OPTIONS MAY 9 2008  *********************************************
		$brick["g_op_enable"] =FALSE;
		$brick["g_gc_enable"] =FALSE;
		$brick["g_gc_enable_li"] =TRUE;
		$brick["g_op_selected_type"] = 0;
		$brick["g_op_max_type"] = 2;
		$brick["g_op_startat"] = 1;
		$brick["g_op_endat"] = 2;
		$brick["g_op_r_startat"] = 3;
		$brick["g_op_r_endat"] = 14;
		// 4 X 8 Display Case
		$brick["g_op_desc"][1] = "4x8 Display Case"; // No Discount Display Case
		$brick["g_op_bkno"][1] = 25;
		$brick["g_op_cost"][1] = 55.00;
		$brick["g_op_ship"][1] = 0.00;
		$brick["g_op_cost_pay1"][1] = 00.00;
		$brick["g_op_cost_pay2"][1] = 00.00;
		$brick["g_op_cost_pay3"][1] = 00.00;
		$brick["g_op_rdesc"][1] = "4x8 Gift Certificate";
		$brick["g_op_rcost"][1] = 100.00;
		$brick["g_op_rship"][1] = 0.00;
		// 8 X 8 Display Case
		$key = $key+$options_array_total;
		$brick["g_op_desc"][2] = "8x8 Display Case"; // No Discount Display Case
		$brick["g_op_bkno"][2] = 26;
		$brick["g_op_cost"][2] = 70.00;
		$brick["g_op_ship"][2] = 0.00;
		$brick["g_op_cost_pay1"][2] = 0.00;
		$brick["g_op_cost_pay2"][2] = 0.00;
		$brick["g_op_cost_pay3"][2] = 0.00;
		$brick["g_op_rdesc"][2] = "8x8 Gift Certificate";
		$brick["g_op_rcost"][2] = 165.00;
		$brick["g_op_rship"][2] = 0.00;
		// Donation
		$key = $key+$options_array_total;
		$brick["g_op_desc"][3] = "10% Discount-Plaza(Gold)4x8 Brick with Replica Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][3] = 15;//71
		$brick["g_op_cost"][3] = 175.00;
		$brick["g_op_ship"][3] = 0.00;
		$brick["g_op_cost_pay1"][3] = 0.00;
		$brick["g_op_cost_pay2"][3] = 0.00;
		$brick["g_op_cost_pay3"][3] = 0.00;
		$brick["g_op_rdesc"][3] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][3] = 0.00;
		$brick["g_op_rship"][3] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][4] = "10% Discount-Plaza(Gold)4x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][4] = 16;//72
		$brick["g_op_cost"][4] = 230.00;
		$brick["g_op_ship"][4] = 0.00;
		$brick["g_op_cost_pay1"][4] = 0.00;
		$brick["g_op_cost_pay2"][4] = 0.00;
		$brick["g_op_cost_pay3"][4] = 0.00;
		$brick["g_op_rdesc"][4] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][4] = 0.00;
		$brick["g_op_rship"][4] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][5] = "10% Discount-Plaza(Gold)8x8 Brick with Replica Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][5] = 17;//73
		$brick["g_op_cost"][5] = 315.00;
		$brick["g_op_ship"][5] = 0.00;
		$brick["g_op_cost_pay1"][5] = 0.00;
		$brick["g_op_cost_pay2"][5] = 0.00;
		$brick["g_op_cost_pay3"][5] = 0.00;
		$brick["g_op_rdesc"][5] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][5] = 0.00;
		$brick["g_op_rship"][5] = 0.00;
				
		$key = $key+$options_array_total;
		$brick["g_op_desc"][6] = "10% Discount-Plaza(Gold)8x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][6] = 18;//74
		$brick["g_op_cost"][6] = 385.00;
		$brick["g_op_ship"][6] = 0.00;
		$brick["g_op_cost_pay1"][6] = 0.00;
		$brick["g_op_cost_pay2"][6] = 0.00;
		$brick["g_op_cost_pay3"][6] = 0.00;
		$brick["g_op_rdesc"][6] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][6] = 0.00;
		$brick["g_op_rship"][6] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][7] = "10% Discount-Plaza(Gold)8x8 Logo Brick with Replica Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][7] = 19;//75
		$brick["g_op_cost"][7] = 360.00;
		$brick["g_op_ship"][7] = 0.00;
		$brick["g_op_cost_pay1"][7] = 0.00;
		$brick["g_op_cost_pay2"][7] = 0.00;
		$brick["g_op_cost_pay3"][7] = 0.00;
		$brick["g_op_rdesc"][7] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][7] = 0.00;
		$brick["g_op_rship"][7] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][8] = "10% Discount-Plaza(Gold)8x8 Logo Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][8] = 20;//75
		$brick["g_op_cost"][8] = 430.00;
		$brick["g_op_ship"][8] = 0.00;
		$brick["g_op_cost_pay1"][8] = 0.00;
		$brick["g_op_cost_pay2"][8] = 0.00;
		$brick["g_op_cost_pay3"][8] = 0.00;
		$brick["g_op_rdesc"][8] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][8] = 0.00;
		$brick["g_op_rship"][8] = 0.00;
		
		$brick["g_op_desc"][9] = "10% Discount-Premium(Red)4x8 Brick with Replica Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][9] = 21;//71
		$brick["g_op_cost"][9] = 240.00;
		$brick["g_op_ship"][9] = 0.00;
		$brick["g_op_cost_pay1"][9] = 0.00;
		$brick["g_op_cost_pay2"][9] = 0.00;
		$brick["g_op_cost_pay3"][9] = 0.00;
		$brick["g_op_rdesc"][9] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][9] = 0.00;
		$brick["g_op_rship"][9] = 0.00;		
			
		$brick["g_op_desc"][10] = "10% Discount-Premium(Red)4x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][10] = 22;//72
		$brick["g_op_cost"][10] = 295.00;
		$brick["g_op_ship"][10] = 0.00;
		$brick["g_op_cost_pay1"][10] = 0.00;
		$brick["g_op_cost_pay2"][10] = 0.00;
		$brick["g_op_cost_pay3"][10] = 0.00;
		$brick["g_op_rdesc"][10] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][10] = 0.00;
		$brick["g_op_rship"][10] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][11] = "10% Discount-Premium(Red)8x8 Brick with Replica Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][11] = 23; //73
		$brick["g_op_cost"][11] = 450.00;
		$brick["g_op_ship"][11] = 0.00;
		$brick["g_op_cost_pay1"][11] = 0.00;
		$brick["g_op_cost_pay2"][11] = 0.00;
		$brick["g_op_cost_pay3"][11] = 0.00;
		$brick["g_op_rdesc"][11] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][11] = 0.00;
		$brick["g_op_rship"][11] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][12] = "10% Discount-Premium(Red)8x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][12] = 24;//74
		$brick["g_op_cost"][12] = 520.00;
		$brick["g_op_ship"][12] = 0.00;
		$brick["g_op_cost_pay1"][12] = 0.00;
		$brick["g_op_cost_pay2"][12] = 0.00;
		$brick["g_op_cost_pay3"][12] = 0.00;
		$brick["g_op_rdesc"][12] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][12] = 0.00;
		$brick["g_op_rship"][12] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][13] = "10% Discount-Premium(Red)8x8 Logo Brick with Replica Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][13] = 25;//75
		$brick["g_op_cost"][13] = 495.00;
		$brick["g_op_ship"][13] = 0.00;
		$brick["g_op_cost_pay1"][13] = 0.00;
		$brick["g_op_cost_pay2"][13] = 0.00;
		$brick["g_op_cost_pay3"][13] = 0.00;
		$brick["g_op_rdesc"][13] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][13] = 0.00;
		$brick["g_op_rship"][13] = 0.00;
		
		$key = $key+$options_array_total;
		$brick["g_op_desc"][14] = "10% Discount-Premium(Red)8x8 Logo Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
		$brick["g_op_bkno"][14] = 26;//75
		$brick["g_op_cost"][14] = 565.00;
		$brick["g_op_ship"][14] = 0.00;
		$brick["g_op_cost_pay1"][14] = 0.00;
		$brick["g_op_cost_pay2"][14] = 0.00;
		$brick["g_op_cost_pay3"][14] = 0.00;
		$brick["g_op_rdesc"][14] = "4x8 Replica Gift Certificate";
		$brick["g_op_rcost"][14] = 0.00;
		$brick["g_op_rship"][14] = 0.00;	
		}
	
	}
else 
	{
	// Promo option 1
	$brick["g_bktype"] = 1;
	$brick["g_bkstartat"] = 1;
	$brick["g_bkendat"] = 2;
	$brick["g_enable_replica"] = TRUE;
	$brick["g_enable_replica2"] = FALSE;
	$brick["g_enable_display_case"] = TRUE;
	$brick["g_enable_display_case2"] = FALSE;
	# paver data
	$brick["g_bknottaxable_amt"][1] = 0;
	$brick["g_bktaxable_amt"][1] = 165.00;
	$brick["g_bkdesc"][1] = "4x12 Brick";
	$brick["g_bkdesc_addl"][1] = " ";
	$brick["g_bk_span"][1] = "span4";
	$brick["g_bkimg"][1] = "4x12_Brick_200px.png";
	$brick["g_bkno"][1] = 58; //39
	$brick["g_bklines"][1] = 3;
	$brick["g_bkchar"][1] = 18;
	$brick["g_bkpcost"][1] = 165.00;
	# replica data
	$brick["g_bkrdesc"][1] = "4x12 Brick Replica";
	$brick["g_bkr_span"][1] = "span4";
	$brick["g_bkrimg"][1] = "4x12_Brick_Rep_2_200px.png";
	$brick["g_bkrcost"][1] = 50.00;
	$brick["g_bkrship"][1] = 0.00;
	$brick["g_bkr_bkno"][1] = 19;
	# replica2 data
	$brick["g_bkr2desc"][1] = "2x6 Mini Replica";
	$brick["g_bkr2_span"][1] = "span3";
	$brick["g_bkr2img"][1] = "4x12_Brick_Rep_2_200px.png";
	$brick["g_bkr2cost"][1] = 50.00;
	$brick["g_bkr2ship"][1] = 0.00;
	$brick["g_bkr2_bkno"][1] = 20;
	# display case data
	$brick["g_bkdcdesc"][1] = "4x12 Leafs Display Case";
	$brick["g_bkdc_span"][1] = "span3";
	$brick["g_bkdcimg"][1] = "4x12_DC_Leafs_200px.png";
	$brick["g_bkdccost"][1] = 55.00;
	$brick["g_bkdcship"][1] = 0.00;
	$brick["g_bkdc_bkno"][1] = 9;
	# display case2 data
	$brick["g_bkdc2desc"][1] = "4x12 Raptors Display Case";
	$brick["g_bkdc2_span"][1] = "span3";
	$brick["g_bkdc2img"][1] = "4x12_DC_Raptors_200px.png";
	$brick["g_bkdc2cost"][1] = 55.00;
	$brick["g_bkdc2ship"][1] = 0.00;
	$brick["g_bkdc2_bkno"][1] = 9;
	# other data
	$brick["g_bkpcost_pay1"][1] = 0.00;
	$brick["g_bkpcost_pay2"][1] = 0.00;
	$brick["g_bkpcost_pay3"][1] = 0.00;
	$brick["g_bkrcost_pay1"][1] = 0.00 * $brick["g_bkrcost_discount"];
	$brick["g_bkrcost_pay2"][1] = 0.00 * $brick["g_bkrcost_discount"];
	$brick["g_bkrcost_pay3"][1] = 0.00 * $brick["g_bkrcost_discount"];
	$brick["g_bk_location"][1] = "SELECT A PREFERRED PLAZA BRICK INSTALL LOCATION:";
	$brick["g_bk_location_desc"][1] = "<em>(4x8 plaza bricks will be installed in pre-determined affiliate locations listed below. “Other” group requests may be submitted but not guaranteed based on space and final plaza brick sales)</em>";
	$brick["g_bk_location_data"][1] = "";
	$brick["g_bkkeyboard"][1] = ""; // Leave Blank for not greek. or  Greek
	# Second Brick
	$brick["g_bknottaxable_amt"][2] = 0;
	$brick["g_bktaxable_amt"][2] = 295.00;
	$brick["g_bkdesc"][2] = "4x12 Brick, Replica and Display Case";
	$brick["g_bkdesc_addl"][2] = " ";
	$brick["g_bk_span"][2] = "span4";
	$brick["g_bkimg"][2] = "4x12_Package_200px.png";
	$brick["g_bkno"][2] = 49; //31
	$brick["g_bklines"][2] = 3;
	$brick["g_bkchar"][2] = 15;
	$brick["g_bkpcost"][2] = 295.00;
	# replica data
	$brick["g_bkrdesc"][2] = "4x12 Leafs Logo Brick Replica";
	$brick["g_bkr_span"][2] = "span4";
	$brick["g_bkrimg"][2] = "4x12_Logo_Rep_Leafs_200px.png";
	$brick["g_bkrcost"][2] = 50.00;
	$brick["g_bkrship"][2] = 0.00;
	$brick["g_bkr_bkno"][2] = 19;
	# replica2 data
	$brick["g_bkr2desc"][2] = "4x12 Raptors Logo Brick Replica";
	$brick["g_bkr2_span"][2] = "span3";
	$brick["g_bkr2img"][2] = "4x12_Logo_Rep_Leafs_200px.png";
	$brick["g_bkr2cost"][2] = 50.00;
	$brick["g_bkr2ship"][2] = 0.00;
	$brick["g_bkr2_bkno"][2] = 20;
	# display case data
	$brick["g_bkdcdesc"][2] = "4x12 Leafs Replica Display Case";
	$brick["g_bkdc_span"][2] = "span3";
	$brick["g_bkdcimg"][2] = "4x12_DC_Leafs_200px.png";
	$brick["g_bkdccost"][2] = 70.00;
	$brick["g_bkdcship"][2] = 0.00;
	$brick["g_bkdc_bkno"][2] = 10;
	# display case2 data
	$brick["g_bkdc2desc"][2] = "4x12 Raptors Replica Display Case";
	$brick["g_bkdc2_span"][2] = "span3";
	$brick["g_bkdc2img"][2] = "4x12_DC_Leafs_200px.png";
	$brick["g_bkdc2cost"][2] = 70.00;
	$brick["g_bkdc2ship"][2] = 0.00;
	$brick["g_bkdc2_bkno"][2] = 10;
	# other data
	$brick["g_bkpcost_pay1"][2] = 0.00;
	$brick["g_bkpcost_pay2"][2] = 0.00;
	$brick["g_bkpcost_pay3"][2] = 0.00;
	$brick["g_bkrcost_pay1"][2] = 0.00 * $brick["g_bkrcost_discount"];
	$brick["g_bkrcost_pay2"][2] = 0.00 * $brick["g_bkrcost_discount"];
	$brick["g_bkrcost_pay3"][2] = 0.00 * $brick["g_bkrcost_discount"];
	$brick["g_bkkeyboard"][2] = ""; // Leave Blank for not greek. or  Greek
	$brick["g_bk_location"][2] = ""; // Leave Blank for EMPTY 
	$brick["g_bk_location_desc"][2] = "";
	$brick["g_bk_location_data"][2] = ""; //Pipe

	/* Add new brick type here if necessary */	
		
	// Gift Certificates and Display Cases
	// NEW OPTIONS MAY 9 2008  *********************************************
	$brick["g_op_enable"] =FALSE;
	$brick["g_gc_enable"] =FALSE;
	$brick["g_gc_enable_li"] =TRUE;
	$brick["g_op_selected_type"] = 0;
	$brick["g_op_max_type"] = 2;
	$brick["g_op_startat"] = 1;
	$brick["g_op_endat"] = 2;
	$brick["g_op_r_startat"] = 3;
	$brick["g_op_r_endat"] = 14;
	
	// removed [$key] and replaced with [1][2][3] etc for donations		
	// 8x8
	//foreach ($options_array["displaycase"] as $key => $value){
	$brick["g_op_desc"][1] = "4x8 Display Case"; // No Discount Display Case
	$brick["g_op_bkno"][1] = 25;
	$brick["g_op_cost"][1] = 55.00;
	$brick["g_op_ship"][1] = 0.00;
	$brick["g_op_cost_pay1"][1] = 00.00;
	$brick["g_op_cost_pay2"][1] = 00.00;
	$brick["g_op_cost_pay3"][1] = 00.00;
	$brick["g_op_rdesc"][1] = "4x8 Gift Certificate";
	$brick["g_op_rcost"][1] = 100.00;
	$brick["g_op_rship"][1] = 0.00;
	// 12x12
	$key = $key+$options_array_total;
	$brick["g_op_desc"][2] = "8x8 Display Case"; // No Discount Display Case
	$brick["g_op_bkno"][2] = 26;
	$brick["g_op_cost"][2] = 70.00;
	$brick["g_op_ship"][2] = 0.00;
	$brick["g_op_cost_pay1"][2] = 0.00;
	$brick["g_op_cost_pay2"][2] = 0.00;
	$brick["g_op_cost_pay3"][2] = 0.00;
	$brick["g_op_rdesc"][2] = "8x8 Gift Certificate";
	$brick["g_op_rcost"][2] = 165.00;
	$brick["g_op_rship"][2] = 0.00;
	// Donation
	$key = $key+$options_array_total;
	$brick["g_op_desc"][3] = "Plaza(Gold)4x8 Brick with Replica Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][3] = 3;//71
	$brick["g_op_cost"][3] = 195.00;
	$brick["g_op_ship"][3] = 0.00;
	$brick["g_op_cost_pay1"][3] = 0.00;
	$brick["g_op_cost_pay2"][3] = 0.00;
	$brick["g_op_cost_pay3"][3] = 0.00;
	$brick["g_op_rdesc"][3] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][3] = 0.00;
	$brick["g_op_rship"][3] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][4] = "Plaza(Gold)4x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][4] = 4;//72
	$brick["g_op_cost"][4] = 250.00;
	$brick["g_op_ship"][4] = 0.00;
	$brick["g_op_cost_pay1"][4] = 0.00;
	$brick["g_op_cost_pay2"][4] = 0.00;
	$brick["g_op_cost_pay3"][4] = 0.00;
	$brick["g_op_rdesc"][4] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][4] = 0.00;
	$brick["g_op_rship"][4] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][5] = "Plaza(Gold)8x8 Brick with Replica Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][5] = 5;//73
	$brick["g_op_cost"][5] = 345.00;
	$brick["g_op_ship"][5] = 0.00;
	$brick["g_op_cost_pay1"][5] = 0.00;
	$brick["g_op_cost_pay2"][5] = 0.00;
	$brick["g_op_cost_pay3"][5] = 0.00;
	$brick["g_op_rdesc"][5] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][5] = 0.00;
	$brick["g_op_rship"][5] = 0.00;
				
	$key = $key+$options_array_total;
	$brick["g_op_desc"][6] = "Plaza(Gold)8x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][6] = 6;//74
	$brick["g_op_cost"][6] = 415.00;
	$brick["g_op_ship"][6] = 0.00;
	$brick["g_op_cost_pay1"][6] = 0.00;
	$brick["g_op_cost_pay2"][6] = 0.00;
	$brick["g_op_cost_pay3"][6] = 0.00;
	$brick["g_op_rdesc"][6] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][6] = 0.00;
	$brick["g_op_rship"][6] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][7] = "Plaza(Gold)8x8 Logo Brick with Replica Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][7] = 7;//75
	$brick["g_op_cost"][7] = 395.00;
	$brick["g_op_ship"][7] = 0.00;
	$brick["g_op_cost_pay1"][7] = 0.00;
	$brick["g_op_cost_pay2"][7] = 0.00;
	$brick["g_op_cost_pay3"][7] = 0.00;
	$brick["g_op_rdesc"][7] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][7] = 0.00;
	$brick["g_op_rship"][7] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][8] = "Plaza(Gold)8x8 Logo Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][8] = 8;//75
	$brick["g_op_cost"][8] = 465.00;
	$brick["g_op_ship"][8] = 0.00;
	$brick["g_op_cost_pay1"][8] = 0.00;
	$brick["g_op_cost_pay2"][8] = 0.00;
	$brick["g_op_cost_pay3"][8] = 0.00;
	$brick["g_op_rdesc"][8] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][8] = 0.00;
	$brick["g_op_rship"][8] = 0.00;
		
	$brick["g_op_desc"][9] = "Premium(Red)4x8 Brick with Replica Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][9] = 9;//71
	$brick["g_op_cost"][9] = 265.00;
	$brick["g_op_ship"][9] = 0.00;
	$brick["g_op_cost_pay1"][9] = 0.00;
	$brick["g_op_cost_pay2"][9] = 0.00;
	$brick["g_op_cost_pay3"][9] = 0.00;
	$brick["g_op_rdesc"][9] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][9] = 0.00;
	$brick["g_op_rship"][9] = 0.00;		
	
		
	$brick["g_op_desc"][10] = "Premium(Red)4x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][10] = 10;//72
	$brick["g_op_cost"][10] = 320.00;
	$brick["g_op_ship"][10] = 0.00;
	$brick["g_op_cost_pay1"][10] = 0.00;
	$brick["g_op_cost_pay2"][10] = 0.00;
	$brick["g_op_cost_pay3"][10] = 0.00;
	$brick["g_op_rdesc"][10] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][10] = 0.00;
	$brick["g_op_rship"][10] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][11] = "Premium(Red)8x8 Brick with Replica Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][11] = 11;//73
	$brick["g_op_cost"][11] = 495.00;
	$brick["g_op_ship"][11] = 0.00;
	$brick["g_op_cost_pay1"][11] = 0.00;
	$brick["g_op_cost_pay2"][11] = 0.00;
	$brick["g_op_cost_pay3"][11] = 0.00;
	$brick["g_op_rdesc"][11] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][11] = 0.00;
	$brick["g_op_rship"][11] = 0.00;
		
	$key = $key+$options_array_total;
	$brick["g_op_desc"][12] = "Premium(Red)8x8 Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][12] = 12;//74
	$brick["g_op_cost"][12] = 565.00;
	$brick["g_op_ship"][12] = 0.00;
	$brick["g_op_cost_pay1"][12] = 0.00;
	$brick["g_op_cost_pay2"][12] = 0.00;
	$brick["g_op_cost_pay3"][12] = 0.00;
	$brick["g_op_rdesc"][12] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][12] = 0.00;
	$brick["g_op_rship"][12] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][13] = "Premium(Red)8x8 Logo Brick with Replica Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][13] = 13;//75
	$brick["g_op_cost"][13] = 545.00;
	$brick["g_op_ship"][13] = 0.00;
	$brick["g_op_cost_pay1"][13] = 0.00;
	$brick["g_op_cost_pay2"][13] = 0.00;
	$brick["g_op_cost_pay3"][13] = 0.00;
	$brick["g_op_rdesc"][13] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][13] = 0.00;
	$brick["g_op_rship"][13] = 0.00;
	
	$key = $key+$options_array_total;
	$brick["g_op_desc"][14] = "Premium(Red)8x8 Logo Brick & Replica w/Display Case Gift Certificate"; // No Discount Display Case
	$brick["g_op_bkno"][14] = 14;//75
	$brick["g_op_cost"][14] = 615.00;
	$brick["g_op_ship"][14] = 0.00;
	$brick["g_op_cost_pay1"][14] = 0.00;
	$brick["g_op_cost_pay2"][14] = 0.00;
	$brick["g_op_cost_pay3"][14] = 0.00;
	$brick["g_op_rdesc"][14] = "4x8 Replica Gift Certificate";
	$brick["g_op_rcost"][14] = 0.00;
	$brick["g_op_rship"][14] = 0.00;
	}
// NEW OPTIONS MAY 9 2008  *********************************************	
$brick["g_op_selected_qty"] = 0;
$brick["g_op_ship_total"] = 0.00;  // Holds accumalated options shipping - do not tax, similar to handling fee
$brick["g_op_no_li"] = 0;  // Number of Lineitems for Options
$brick["g_op_li"][][] = 0;  // Array to hold multiple Options Lineitems
// Pepsi Center Plaza of Fame LOGO STUFF ******************************************************		
$brick["g_logo_display"] = TRUE;
$brick["g_logo_display_default"] = "";
//$brick["g_span_class_layout"] = "span4";
$brick["g_logo_name"] = "";
$brick["g_logo_no"] = "";
$brick["g_lilogoname"][] = "" ;     // The Logo Name for this line item [LINE NUMBER]
$brick["g_lilogono"][] = "" ;        // Logo number for this line item     [LINE NUMBER]
// END OF NEW CHANGES *****************************************************
$brick["g_payplan"] = 0;
$brick["g_totalbk_pay1"] = 0.00; 
$brick["g_totalbk_pay2"] = 0.00;
$brick["g_totalbk_pay3"]= 0.00;
$brick["g_totalbkr_pay1"] = 0.00; 
$brick["g_totalbkr_pay2"] = 0.00;
$brick["g_totalbkr_pay3"]= 0.00;
$brick["g_totalop_pay1"] = 0.00; 
$brick["g_totalop_pay2"] = 0.00;
$brick["g_totalop_pay3"]= 0.00;
$brick["g_totalcost_pay1"] = 0.00; 
$brick["g_totalcost_pay2"] = 0.00;
$brick["g_totalcost_pay3"]= 0.00;
$brick["g_currentbktype"] = 0;
$brick["g_currentpqty"] = 0;
$brick["g_currentrqty"] = 0;
$brick["g_currentli"] = 0;
$brick["g_rqtyremaining"] = 0;
$brick["g_ordertotal"] = 0;
$brick["g_rordertotal"] = 0;    // Add for NASCAR - tax only replicas
$brick["g_taxtotal"] = 0.0; // tax total
$brick["g_taxrate"] = 0.0;//0.07925;   // Tax rate applies only to replicas 9-21-08
$brick["g_taxrate_all"] = 0.0;
$brick["g_gc_redeem_amount"] = 0.0;

// Global Line Item variables
$brick["g_litotals"] = 0 ;         // Total number of line items
$brick["g_libktype"][] = 0 ;     // The Brick Type for this line item [LINE NUMBER]
$brick["g_lipqty"][] = 0 ;        // Brick qty for this line item     [LINE NUMBER]
$brick["g_lirqty"][] = 0 ;        // Replica qty for this line item   [LINE NUMBER]
$brick["g_liins"][][][] = 0;
$brick["g_lishiptoqty"][] = 0;  // Holds qty of ship to address for this line item
$brick["g_liship"][][][] = "";
// Global Billing array
$brick["g_billing"][11] = "";
// Global Enable/Disable variable
$brick["show_buttons"] = 1;
// Global Called_From_Cart
$brick["called_from_cart"] = 1;
/*  -------------------------------------------------------------------------------------------
$brick["g_liins"][][][] = 0;
Holds inscription information (lines and chars) for a particular line item
syntax is [LINE NUMBER]    [ROW]   [CHAR]
$brick["g_liship"][][][] = "";
Holds all replica ship to info for this replica for a particular line item
syntax is [LINE NUMBER]  [shipping line item]  ["name"]
------------------------------------------------------------------------------------------------ */

?>
