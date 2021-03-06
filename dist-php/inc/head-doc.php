<?php
/* Include the Document head information and easily described metadata */

//if this is an application then use the target tag when opening links to
//open them in new tabs. Otherwise leve the $_TARGET_ variable blank so
//it won't be added to anchor tags
$_TARGET_ = ($_PAGE['isapp']=="1"?" target=\"_blank\"":"");

// create the title to be used throughout
$_PAGE_TITLE_ = "";
// itterate over the set languages starting from 1 and print the titles for the page
for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['title_'.$_PAGE['lang'.$i]]) ) {
		//if the short title isn't set then use the long title
		if( !isset($_PAGE['short_title_'.$_PAGE['lang'.$i]]) ) {
			$_PAGE['short_title_'.$_PAGE['lang'.$i]] = $_PAGE['title_'.$_PAGE['lang'.$i]];
		}
		//create the longer page title
		if( $i > 1 ) {
			$_PAGE_TITLE_ .= " / ";
		}
		$_PAGE_TITLE_ .= $_PAGE['title_'.$_PAGE['lang'.$i]];
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js lt-ie9" lang="<?php echo $_SITE['wb_meta_' . $_PAGE['lang1']]; ?>"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $_SITE['wb_meta_' . $_PAGE['lang1']]; ?>">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
<<<<<<< HEAD
wet-boew.github.io/wet-boew/License-eng.html / wet-boew.github.io/wet-boew/Licence-fra.html -->
<title><?php 
if( $_PAGE['isarchived'] == "1" ){
	echo $_SITE['wb_archive_title_'.$_PAGE['lang1']];
}
echo $_PAGE_TITLE_;?></title>
=======
wet-boew.github.io/wet-boew/License-en.html / wet-boew.github.io/wet-boew/Licence-fr.html -->
<title><?php echo $_PAGE_TITLE_;?></title>
>>>>>>> 76fac622b44b9b5811e3001855e477f23a1a0d4d

<link rel="shortcut icon" href="<?php echo $_SITE['wb_core_dist_folder']?>/assets/favicon.ico" />
<?php 
$_META_LANG_ = "";
//print the available title metadata for this page
for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['title_'.$_PAGE['lang'.$i]]) ) {
		$_CONTENT_LANG_ = $_PAGE['lang'.$i];
		$_CONTENT_TITLE_ =  $_PAGE['title_'.$_CONTENT_LANG_];
	
		//ISO spec should be updated in the future to depend on the
		//language that's chosen.
		$_ISO_ = "ISO639-2";
		if( $i > 1 ) {
			$_META_LANG_ = ' lang="'.$_SITE['wb_meta_'.$_CONTENT_LANG_].'"';
		}
		if( $_PAGE['isarchived'] == "1" ){
			echo '<meta name="dcterms.title"'.$_META_LANG_.' title="'.$_ISO_.'" content="'.$_SITE['wb_archive_title_'.$_PAGE['lang1']].$_CONTENT_TITLE_.'" />'."\n";
		}
		else{
			echo '<meta name="dcterms.title"'.$_META_LANG_.' title="'.$_ISO_.'" content="'.$_CONTENT_TITLE_.'" />'."\n";
		}
		echo '<meta name="dcterms.language"'.$_META_LANG_.' title="'.$_ISO_.'" content="'.$_CONTENT_LANG_.'" />' ."\n";
	}
}
?>

<<<<<<< HEAD
<meta name="viewport" content="width=device-width, initial-scale=1" />
=======
<meta content="width=device-width, initial-scale=1" name="viewport"/>
>>>>>>> 76fac622b44b9b5811e3001855e477f23a1a0d4d
