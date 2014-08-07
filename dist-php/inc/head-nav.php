<?php
	$_COL_LAYOUT = "";
	$_NAV_LINK = "";
	//'left_menu_gauche' is all that's needed since you can only have one leftside per page
	//This is just incase the user used 'left_menu_gauche_en' or 'left_menu_gauche_fr' to be 
	//consistent with naming in the rest of the varient.
	if( isset($_PAGE['left_menu_gauche_'.$_PAGE['lang1']]) && $_PAGE['left_menu_gauche_'.$_PAGE['lang1']]!="") {
		$_PAGE['left_menu_gauche'] = $_PAGE['left_menu_gauche_'.$_PAGE['lang1']];
	}
	$_PAGE['is_left_gauche'] = isset($_PAGE['left_menu_gauche']) && 
	$_PAGE['left_menu_gauche'] != "";
		
	// if no left side is uesed then use a single column layout
	// and skip to navigation points to the footer. 
	// Otherwise use a two column layout and skip to the left side menu
	if(  $_PAGE['is_left_gauche'] == "1" ) {
		$_COL_LAYOUT = "wb-body-sec";
		$_NAV_LINK = "wb_sh_link_2_";
	} else {
		$_COL_LAYOUT = "wb-body";
		$_NAV_LINK = "wb_sh_link_3_";
	}

	$_SKIP_1_NAV_TEXT = $_SITE['wb_sh_link_1_' . $_PAGE['lang1']];
	$_SKIP_2_NAV_TEXT = $_SITE[$_NAV_LINK . $_PAGE['lang1']];
?>
</head>

<body vocab="http://schema.org/" typeof="WebPage"<?php echo ' '.$_PAGE['bodytag']; ?>>
<?php 
//if this is a server page the skip navigation isn't required
if( $_PAGE['isserv'] != "1" && $_PAGE['issplash']!='1') {?>
<ul id="wb-tphp">
	<li class="wb-slc">
		<a class="wb-sl" href="#wb-cont"><?php echo $_SKIP_1_NAV_TEXT ?></a>
	</li>
	<li class="wb-slc visible-md visible-lg">
		<a class="wb-sl" href="#wb-info"><?php echo $_SKIP_2_NAV_TEXT ?></a>
	</li>
</ul>
<?php } ?>

<header role="banner">
<?php
//use the content footers by default
$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'];
$_INC_TYPE_ = 'cont';

if( $_PAGE['issplash'] == "1" ) {
	$_INC_TYPE_ = 'sp-pe';
}

$_HEAD_INCLUDE_ = $_ROOT_PATH_ . "/inc/".$_INC_TYPE_."/head.php";

if( file_exists($_HEAD_INCLUDE_) ) {
	include_once $_HEAD_INCLUDE_;
}
?>

</header>
<!-- MainContentStart -->

<?php
if( isset($_PAGE['left_menu_gauche']) && $_PAGE['left_menu_gauche']!='' && file_exists($_PAGE['left_menu_gauche']) ) {
	echo '<div class="container">';
	echo '<div class="row">';
	echo '<main role="main" property="mainContentOfPage" class="col-md-9 col-md-push-3">';
} else {
	echo '<main role="main" property="mainContentOfPage" class="container">';
}

<<<<<<< HEAD
if( $_PAGE['issplash']!='1' ) {
	echo '<h1 id="wb-cont" property="name">';
        if( $_PAGE['isarchived'] == "1" ){
                $_TITLE_ = $_SITE['wb_archive_title_'.$_PAGE['lang1']]. $_PAGE['short_title_' . $_PAGE['lang1']];
                //if there's more than one language set then add the additioal title elements
                for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
        if( isset($_PAGE['short_title_' . $_PAGE['lang'.$i]]) ) {
                $_TITLE_ .= " / <span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">" . $_PAGE['short_title_' . $_PAGE['lang'.$i]] ."</span>";
        }
        }
}
else{
        if( isset($_PAGE['short_title_' . $_PAGE['lang1']])) {
                $_TITLE_ = $_PAGE['short_title_' . $_PAGE['lang1']];
                //if there's more than one language set then add the additioal title elements
                for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
                        if( isset($_PAGE['short_title_' . $_PAGE['lang'.$i]]) ) {
                                $_TITLE_ .= " / <span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">" . $_PAGE['short_title_' . $_PAGE['lang'.$i]] ."</span>";
                        }
                }
                echo $_TITLE_;
        }
}
        echo '</h1>';

        $_HEAD_END_ = $_SERVER['DOCUMENT_ROOT'] .$_SITE['wb_php_dist_folder'] ."/head-end.php";
        if( file_exists($_HEAD_END_) ) {
                include_once $_HEAD_END_;
        }
=======
		echo '<div id="wb-session"><aside>' ."\n";
		echo '<h2 class="wb-invisible">'.$_HEADING_.'</h2>' ."\n";
		echo '<ul class="button-group">' ."\n";
		if( $_PAGE['signout'] == "1" ) {
			echo '<li class="settings"><a class="button" href="'.$_ACCOUNT_FILE.'">';
				echo $_ACCOUNT_TEXT_.'</a></li>';
		}
		echo '<li class="session">';
		echo '<a class="button" href="'.$_LINK_.'">';
			echo $_BUTTON_.'</a></li>' ."\n";
		echo '</ul>' ."\n";
		echo '</aside></div>' ."\n";
	}
?>
<h1 id="wb-cont"><?php
if( $_PAGE['isarchived'] == "1" ){
$_TITLE_ = $_SITE['wb_archive_title_'.$_PAGE['lang1']]. $_PAGE['short_title_' . $_PAGE['lang1']];
//if there's more than one language set then add the additioal title elements
for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
        if( isset($_PAGE['short_title_' . $_PAGE['lang'.$i]]) ) {
                $_TITLE_ .= " / <span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">" . $_PAGE['short_title_' . $_PAGE['lang'.$i]] ."</span>";
        }
}
}
else{
$_TITLE_ = $_PAGE['short_title_' . $_PAGE['lang1']];
//if there's more than one language set then add the additioal title elements
for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
        if( isset($_PAGE['short_title_' . $_PAGE['lang'.$i]]) ) {
                $_TITLE_ .= " / <span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">" . $_PAGE['short_title_' . $_PAGE['lang'.$i]] ."</span>";
        }
}
}
echo $_TITLE_;
?></h1>
>>>>>>> 7ac7ca9ec74a876242db80434848ce5cf13ea4a2

<<<<<<< HEAD
<?php
	$_HEAD_END_ = $_SERVER['DOCUMENT_ROOT'] .$_SITE['wb_php_dist_folder'] .$_SITE['wb_theme_folder'] ."/head-end.php";
	if( file_exists($_HEAD_END_) ) {
		include_once $_HEAD_END_;
	}
	
	// Archived Section
	if( $_PAGE['isarchived'] == "1" ){
		echo "<p><img src='".$_SITE['wb_archive_warn_icon']."' alt='".$_SITE['wb_archive_warn_alt_'.$_PAGE['lang1']];
		echo "' title='".$_SITE['wb_archive_warn_alt_'.$_PAGE['lang1']]."' class='margin-bottom-none' />".$_SITE['wb_archive_warn_webuse_'.$_PAGE['lang1']];
		echo "</p><div id='archived' class='wet-boew-archived span-6' data-load='archived'>";
		echo "<section><h2>".$_SITE['wb_archive_warn_head_'.$_PAGE['lang1']]."</h2>";
		echo "<p>".$_SITE['wb_archive_warn_msg_'.$_PAGE['lang1']]."</p></section></div><div class='clear'></div>";
	}
=======
        // Archived Section
        if( $_PAGE['isarchived'] == "1" ){
                echo $_SITE['wb_archive_warn_msg_'.$_PAGE['lang1']];
        }
}
>>>>>>> 76fac622b44b9b5811e3001855e477f23a1a0d4d
?>
