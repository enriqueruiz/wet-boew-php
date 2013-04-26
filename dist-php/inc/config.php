<?php

	$_SITE['wb_core_dist_folder'] = "/dist";
	$_SITE['wb_php_dist_folder'] = "/dist-php";
	$_SITE['wb_theme_folder'] = "/theme-gcwu-fegc";
	
	//modify this for you're specific site
	$_SITE['wb_site_title_eng'] = "PHP Variant"; 
	$_SITE['wb_site_title_fra'] = "Variante pour PHP"; 
	$_SITE['wb_site_href_eng'] = "home-accueil-eng.php"; 
	$_SITE['wb_site_href_fra'] = "home-accueil-fra.php"; 

	//modify to point to your sites search option
	$_SITE['wb_search_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/search.php";
	$_SITE['wb_search_eng'] = "Search"; 
	$_SITE['wb_search_fra'] = "Recherche"; 

	$_SITE['wb_search_label_eng'] = "Search Web site"; 
	$_SITE['wb_search_label_fra'] = "Recherchez le site Web"; 
	
	//modify to point to your sites mega menu
	$_SITE['wb_sitenav_file_eng'] = $_SERVER['DOCUMENT_ROOT'] . "/demos-php/menu/prim-megamenu-eng.php";
	$_SITE['wb_sitenav_file_fra'] = $_SERVER['DOCUMENT_ROOT'] . "/demos-php/menu/prim-megamenu-fra.php";
	$_SITE['wb_sitenav_eng'] = "Site menu"; 
	$_SITE['wb_sitenav_fra'] = "Menu du site"; 

	$_SITE['wb_bcrumb_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/bt_fa.php"; 
	$_SITE['wb_bcrumb_eng'] = "Breadcrumb trail"; 
	$_SITE['wb_bcrumb_fra'] = "Fil d'Ariane"; 
	
	//Modify to point to a custom signin/signout application
	$_SITE['wb_signin_file_eng'] = "application-signout-eng.php";
	$_SITE['wb_signin_file_fra'] = "application-signout-fra.php";
	$_SITE['wb_signin_text_eng'] = "Sign in";
	$_SITE['wb_signin_text_fra'] = "Ouvrir une session";
	
	//Modify to point to a custom signin/signout application
	$_SITE['wb_signout_file_eng'] = "application-signin-eng.php";
	$_SITE['wb_signout_file_fra'] = "application-signin-fra.php";
	$_SITE['wb_signout_text_eng'] = "Sign out";
	$_SITE['wb_signout_text_fra'] = "Ouvrir une session";

	//Modify to point to a custom account settings application when using sign in/sign out button
	$_SITE['wb_sio_file_eng'] = "#";
	$_SITE['wb_sio_file_fra'] = "#";
	$_SITE['wb_sio_text_eng'] = "Account settings";
	$_SITE['wb_sio_text_fra'] = "Paramètres du compte";
	
	$_SITE['wb_sio_heading_eng'] = "My account";
	$_SITE['wb_sio_heading_fra'] = "Mon compte";
	
	//Other Language support
	$_SITE['wb_site_title_deu'] = "PHP Variant (in German)"; 
	$_SITE['wb_site_href_deu'] = "#"; 

	$_SITE['wb_site_title_spa'] = "PHP Variant (in Spanish)"; 
	$_SITE['wb_site_href_spa'] = "#"; 
	
	$_SITE['wb_site_title_ita'] = "PHP Variant (in Italian)"; 
	$_SITE['wb_site_href_ita'] = "#"; 

	$_SITE['wb_site_title_por'] = "PHP Variant (in Portuguese)"; 
	$_SITE['wb_site_href_por'] = "#"; 

	$_SITE['wb_site_title_rus'] = "PHP Variant (in Russin)"; 
	$_SITE['wb_site_href_rus'] = "#"; 

	$_SITE['wb_meta_eng'] = "en"; 
	$_SITE['wb_meta_fra'] = "fr"; 
	$_SITE['wb_meta_deu'] = "de"; 
	$_SITE['wb_meta_spa'] = "es"; 
	$_SITE['wb_meta_ita'] = "it"; 
	$_SITE['wb_meta_por'] = "pt"; 
	$_SITE['wb_meta_rus'] = "ru"; 
	$_SITE['wb_lang_text_eng'] = "English"; 
	$_SITE['wb_lang_text_fra'] = "Français"; 
	$_SITE['wb_lang_text_deu'] = "Deutsch"; 
	$_SITE['wb_lang_text_spa'] = "Español"; 
	$_SITE['wb_lang_text_ita'] = "Italiano"; 
	$_SITE['wb_lang_text_por'] = "Português"; 
	$_SITE['wb_lang_text_rus'] = "&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;"; 
	$_SITE['wb_sh_link_1_eng'] = "Skip to main content"; 
	$_SITE['wb_sh_link_1_fra'] = "Passer au contenu principal"; 
	$_SITE['wb_sh_link_2_eng'] = "Skip to secondary menu"; 
	$_SITE['wb_sh_link_2_fra'] = "Passer au menu secondaire"; 
	$_SITE['wb_sh_link_3_eng'] = "Skip to footer"; 
	$_SITE['wb_sh_link_3_fra'] = "Passer au pied de page"; 
	$_SITE['wb_sec_eng'] = "Secondary menu"; 
	$_SITE['wb_sec_fra'] = "Menu secondaire"; 
	$_SITE['wb_sup_eng'] = "Supplemental content"; 
	$_SITE['wb_sup_fra'] = "Contenu supplémentaire"; 
	$_SITE['wb_doc_dates_eng'] = "Date modified:"; 
	$_SITE['wb_doc_dates_fra'] = "Date de modification&nbsp;:"; 
	$_SITE['wb_doc_version_eng'] = "Version:"; 
	$_SITE['wb_doc_version_fra'] = "Version&nbsp;:"; 
	$_SITE['wb_foot_eng'] = "Footer"; 
	$_SITE['wb_foot_fra'] = "Pied de page"; 
	$_SITE['wb_sitefooter_eng'] = "Site footer"; 
	$_SITE['wb_sitefooter_fra'] = "Pied de page du site"; 	

	//include the theme specific variables.
	//	NOTE: some variables in the theme specific config will override
	//		the generic config variables. So this needs to be included at
	//		the end of the generic config.
	$_THEME_CONFIG_FILE_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/config.php";
	if( file_exists($_THEME_CONFIG_FILE_) ) {
		include_once $_THEME_CONFIG_FILE_;
	}
?>