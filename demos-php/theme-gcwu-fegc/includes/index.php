<div class="col-md-12">
    <h1><?php echo $_PAGE['title_'.$_PAGE['lang1']]; ?> / <span lang="<?php echo $_PAGE['lang2']; ?>"><?php echo $_PAGE['title_'.$_PAGE['lang2']]; ?></span></h1>
    <section class="col-md-6">
		<h2><?php echo $_PAGE['sub_title_'.$_PAGE['lang1']]; ?></h2>
		<a class="btn btn-lg btn-primary btn-block" href="<?php echo $_SITE['wb_site_href_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_lang_text_'.$_PAGE['lang1']]; ?></a>
		<a class="btn btn-lg btn-default btn-block" href="<?php echo $_SITE['wb_terms_href_'.$_PAGE['lang1']]; ?>" rel="license"><?php echo $_SITE['wb_terms_'.$_PAGE['lang1']]; ?></a>
    </section>
    <section class="col-md-6" lang="fr">
		<h2><?php echo $_PAGE['sub_title_'.$_PAGE['lang2']]; ?></h2>
		<a class="btn btn-lg btn-primary btn-block" href="<?php echo $_SITE['wb_site_href_'.$_PAGE['lang2']]; ?>"><?php echo $_SITE['wb_lang_text_'.$_PAGE['lang2']]; ?></a>
		<a class="btn btn-lg btn-default btn-block" href="<?php echo $_SITE['wb_terms_href_'.$_PAGE['lang2']]; ?>" rel="license"><?php echo $_SITE['wb_terms_'.$_PAGE['lang2']]; ?></a>
    </section>
</div>  
