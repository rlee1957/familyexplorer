<?php

# /var/www/brickorder.com/accbricks/configuration/option_settings.php

$options = array();
$options["offer_language"] = 		false; // Allow user to set country and language
$options["greek_lettering"] = 		false; // Allow GREEK lettering on inscription
$options["promo"] = 				false; // Allow user to enter promo codes (see promo_codes.php)
$options["logo_options"] =          false;
$options["inform_events"] =         true;
$options["verify_address"] = 		false; // Address verification will occur
$options["get_tax_information"] = 	true; // Tax information lookup will occur
$options["web_convenience_fee"] = 	true; // A web convenience fee will be added
$options["gift_certificates"] =     true; // Gift certificates will be offered
$options["gift_certificates_list"] =false; // A Gift certificate list will be presented
$options["enable_replica"] =        true; // Replicas will be offered
$options["enable_replica2"] =       false; // Other replicas will be offered
$options["enable_displaycase"] =    true; // Display cases will be offered
$options["enable_displaycase2"] =   false; // Other display cases will be offered
$options["options_format"] =        2; // (1 or 2) Inscr page paver 1(all same mod) 2( paver mod options mod)
$options["options_format2"] =       1; // (1 or 2) Replica notice placement 1(after brick) 2(after subtotal) 3(don't display)
$options["show_allowed_characters1"]=false;
$options["show_allowed_characters2"]=true;
$options["apply_sales_tax"] =       true; // Sales tax will be applied (see tax_settings.php)
$options["social_media_email"] =    false; // Social Media integration on email confirmation
$options["social_media_confirm"] =  false; // Social Media integration on confirmation page
$options["facebook_integration"] =  false; // Facebook integration (see social_networking_settings.php)
$options["twitter_integration"] =   false; // Twitter integration (see twitter_settings.php)
$options["linkedin_integration"] =  false; // Twitter integration (see twitter_settings.php)
$options["pinterest_integration"] = false; // Twitter integration (see twitter_settings.php)
$options["googleplus_integration"] =false; // Twitter integration (see twitter_settings.php)
$options["tumblr_integration"] =    false; // Twitter integration (see twitter_settings.php)
$options["instagram_integration"] = false; // Instagram integration (see instagram_settings.php)
$options["vk_integration"] =        false; // Instagram integration (see instagram_settings.php)
$options["flickr_integration"] =    false; // Instagram integration (see instagram_settings.php)
$options["vine_integration"] =      false; // Instagram integration (see instagram_settings.php)
$options["meetup_integration"] =    false; // Pintrest integration (see pintrest_settings.php)
$options["tagged_integration"] =    false; // Pintrest integration (see pintrest_settings.php)
$options["askfm_integration"] =     false; // Pintrest integration (see pintrest_settings.php)
$options["meetme_integration"] =    false; // Pintrest integration (see pintrest_settings.php)
$options["classmates_integration"] =false; // Pintrest integration (see pintrest_settings.php)
$options["google_analytics"] =      false; // Google analytics integration (see google_analytics_settings.php)
$options["tell_your_story"] =       true;

?>