<?php
<<<<<<< HEAD
	//set the theme folder, this could be set programaticlly, but
	//this configuration file is unfortunately differnt for each
	//theme anyway.
	$_SITE['wb_theme_folder'] = "/theme-gcwu-fegc";

	/*
	 * Path to the distribution /inc/config.php file containing the common
	 * in the demo this is programatically defined demonstrating one method
	 * of including the configuration file. This could also be hardcoded
	 */
	$_INC_CONFIG = realpath(dirname(__FILE__));

	//if this is a windows machine use the backslash, otherwise use forwardslash
	$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
	$_INC_CONFIG = substr($_INC_CONFIG, 0, strrpos($_INC_CONFIG, $_SLASH_)) ."/config.php";

	require $_INC_CONFIG;

	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	$_SITE['gcwu_cmblang_href_eng'] = $_SITE['gcwu_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//Modify Terms and conditions and Transparency links 
	$_SITE['gcwu_terms_href_eng'] = "#"; 
	$_SITE['gcwu_terms_href_fra'] = "#"; 

	$_SITE['gcwu_trans_href_eng'] = "#"; 
	$_SITE['gcwu_trans_href_fra'] = "#"; 

	//Terms and conditions and transparency text
	$_SITE['gcwu_terms_text_eng'] = "Terms and conditions"; 
	$_SITE['gcwu_terms_text_fra'] = "Avis"; 

	$_SITE['gcwu_trans_text_eng'] = "Transparency"; 
	$_SITE['gcwu_trans_text_fra'] = "Transparence"; 

	//sets the name of the signature image and alt text used in the top left of the theme
	$_SITE['gcwu_sig_image'] = "sig"; 
	$_SITE['gcwu_sig_eng'] = "Government of Canada"; 
	$_SITE['gcwu_sig_fra'] = "Gouvernement du Canada"; 

	//alt text used for the "Canada" logo that appears about the search tool
	$_SITE['gcwu_wmms_eng'] = "Symbol of the Government of Canada"; 
	$_SITE['gcwu_wmms_fra'] = "Symbole du gouvernement du Canada"; 

	//hidden text used for accessibility
	$_SITE['gcwu_gcnavbar_eng'] = "Government of Canada navigation bar"; 
	$_SITE['gcwu_gcnavbar_fra'] = "Barre de navigation du gouvernement du Canada"; 
	$_SITE['gcwu_gcfooter_eng'] = "Government of Canada footer"; 
	$_SITE['gcwu_gcfooter_fra'] = "Pied de page du gouvernement du Canada"; 
	
	//links that appear at the very top of the page for this theme
	$_SITE['gcwu_gcnb1_href_eng'] = "http://www.canada.ca/en/index.html"; 
	$_SITE['gcwu_gcnb1_href_fra'] = "http://www.canada.ca/fr/index.html"; 
	$_SITE['gcwu_gcnb1_text_eng'] = "Canada.ca"; 
	$_SITE['gcwu_gcnb1_text_fra'] = "Canada.ca"; 

	$_SITE['gcwu_gcnb2_href_eng'] = "http://www.canada.ca/en/services/index.html"; 
	$_SITE['gcwu_gcnb2_href_fra'] = "http://www.canada.ca/fr/services/index.html"; 
	$_SITE['gcwu_gcnb2_text_eng'] = "Services"; 
	$_SITE['gcwu_gcnb2_text_fra'] = "Services"; 
	
	$_SITE['gcwu_gcnb3_href_eng'] = "http://www.canada.ca/en/gov/dept/index.html"; 
	$_SITE['gcwu_gcnb3_href_fra'] = "http://www.canada.ca/fr/gouv/min/index.html"; 
	$_SITE['gcwu_gcnb3_text_eng'] = "Departments"; 
	$_SITE['gcwu_gcnb3_text_fra'] = "Ministères"; 
	
	//button and language swap text
	$_SITE['gcwu_cmblang_text_fra'] = "Français";
	$_SITE['gcwu_cmblang_text_eng'] = "English"; 
	$_SITE['gcwu_cmblang_title_eng'] = "Français - Version française de cette page"; 
	$_SITE['gcwu_cmblang_title_fra'] = "English - English version of the Web page"; 

	//links that appear at the very bottom of the page for this theme
	$_SITE['gcwu_trail1_href_eng'] = "http://healthycanadians.gc.ca"; 
	$_SITE['gcwu_trail1_href_fra'] = "http://canadiensensante.gc.ca"; 
	$_SITE['gcwu_trail1_text_eng'] = "Health"; 
	$_SITE['gcwu_trail1_text_fra'] = "Santé";
	
	$_SITE['gcwu_trail2_href_eng'] = "http://www.voyage.gc.ca"; 
	$_SITE['gcwu_trail2_href_fra'] = "http://www.voyage.gc.ca"; 
	$_SITE['gcwu_trail2_text_eng'] = "Travel"; 
	$_SITE['gcwu_trail2_text_fra'] = "Voyage"; 

	$_SITE['gcwu_trail3_href_eng'] = "http://www.servicecanada.gc.ca/eng/home.shtml"; 
	$_SITE['gcwu_trail3_href_fra'] = "http://www.servicecanada.gc.ca/fra/accueil.shtml"; 
	$_SITE['gcwu_trail3_text_eng'] = "Service Canada"; 
	$_SITE['gcwu_trail3_text_fra'] = "Service Canada"; 

	$_SITE['gcwu_trail4_href_eng'] = "http://www.jobbank.gc.ca"; 
	$_SITE['gcwu_trail4_href_fra'] = "http://www.guichetemplois.gc.ca"; 
	$_SITE['gcwu_trail4_text_eng'] = "Jobs"; 
	$_SITE['gcwu_trail4_text_fra'] = "Emplois";
	
	$_SITE['gcwu_trail5_href_eng'] = "http://actionplan.gc.ca"; 
	$_SITE['gcwu_trail5_href_fra'] = "http://plandaction.gc.ca"; 
	$_SITE['gcwu_trail5_text_eng'] = "Economy"; 
	$_SITE['gcwu_trail5_text_fra'] = "Économie"; 

	$_SITE['gcwu_trail_canada_href_eng'] = "http://www.canada.ca/en/index.html"; 
	$_SITE['gcwu_trail_canada_href_fra'] = "http://www.canada.ca/fr/index.html"; 
	$_SITE['gcwu_trail_canada_text_eng'] = "Canada.ca"; 
	$_SITE['gcwu_trail_canada_text_fra'] = "Canada.ca"; 

	/* Support for other languages, only necessary for multilingual demos */
	$_SITE['gcwu_cmblang_text_spa'] = "español";

	$_SITE['gcwu_terms_href_deu'] = "#"; 
	$_SITE['gcwu_terms_text_deu'] = "Begriffe und gewöhnt"; 

	$_SITE['gcwu_terms_href_spa'] = "#"; 
	$_SITE['gcwu_terms_text_spa'] = "Términos y condiciones"; 

	$_SITE['gcwu_terms_href_ita'] = "#"; 
	$_SITE['gcwu_terms_text_ita'] = "Termini e condiziona"; 

	$_SITE['gcwu_terms_href_por'] = "#"; 
	$_SITE['gcwu_terms_text_por'] = "Termos e condiciona"; 

	$_SITE['gcwu_terms_href_rus'] = "#"; 
	$_SITE['gcwu_terms_text_rus'] = "Сроки и условия"; 
		
	$_SITE['gcwu_langselect_eng'] = "Language selection links"; 
	$_SITE['gcwu_langselect_fra'] = "Liens de sélection de langue"; 
	$_SITE['gcwu_hidebtarrow'] = "1"; 
?>
=======
	//if $_PAGE['lang1'] is set assume the user set the languages
	//before including the config file. If so add only the required
	//configration files.
	if( isset($_PAGE['lang1']) ) {
		for( $i=1; isset($_PAGE['lang'.$i]); $i++ ) {
			include_once "config-" . $_PAGE['lang'.$i] .".php";
		}
	}
?>
>>>>>>> 76fac622b44b9b5811e3001855e477f23a1a0d4d
