<?php  $languages = pll_the_languages( array("raw" => 1) ); ?>
<!DOCTYPE HTML>
<html lang="en">
  <head>    
	<meta property="og:title" content="Bakertillyks" >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="google-site-verification" content="J9LiFOid99DKkUoh4RzelHbG4YCQNN2xLYTB2JH1Re0" >	
    <link rel="stylesheet" href="/wp-content/themes/bakertilly/style.css">
    <link rel="stylesheet" href="/wp-content/themes/bakertilly/css/main-about.css">
    <link rel="stylesheet" href="/wp-content/themes/bakertilly/css/main-contact.css">    
    <link rel="stylesheet" href="/wp-content/themes/bakertilly/css/main-services.css">    
    <?php wp_head(); ?>
  </head>
  <body class="view-cookie">
	<div class="wrapper">
		<header id="header" class="header sticky">
		  <div class="header-container">
			<div class="wrap">
			  <div class="logo">
				<a href="../">
				  <img class="default-logo" src="/wp-content/themes/bakertilly/img/logo.svg" alt="bakertilly">
				</a>
			  </div>
			  <span class="menu-burger">
				<span></span>
			  </span>
			  <span class="search-btn-opener mobile"><i class="icon icon-search"></i></span>
			  <div class="mobile-drop-container">
				<div class="mobile-drop">
				  <nav class="nav">
					<ul class="main-nav">
						<li class="nav-item">
							<a href="<?php if (pll_current_language() == "en") {echo home_url('/');}else{echo home_url('/ballina');} ?>"><?php if (pll_current_language() == "en"){echo 'Home';}else{ echo 'Ballina';} ?><span class="open-icon"></span></a>
						 </li>
						<li class="nav-item">
							<a href="<?php if (pll_current_language() == "en"){echo home_url('/about-us');}else{echo home_url('/per-ne');} ?>"><?php if (pll_current_language() == "en"){echo 'About Us';}else{echo 'Për ne';}?><span class="open-icon"></span></a>
						 </li>
						  <li class="nav-item">
							<a href="<?php if (pll_current_language() == "en") {echo home_url('/services');}else{echo home_url('/sherbimet');} ?>"><?php if (pll_current_language() == "en"){echo 'SERVICES &amp; SECTORS';}else{echo 'Sektorët &amp; Shërbimet';} ?><span class="open-icon"></span></a>
						  </li>
						<li class="nav-item has-drop-down">
							<a class="has-drop-down-a"><?php if (pll_current_language() == "en"){echo 'INSIGHTS';}else{echo 'Njoftime';} ?> <span class="open-icon"></span></a>
							<ul class="drop">
							  <li><a href="<?php if (pll_current_language() == "en") { echo home_url('/insights-news');}else{echo home_url('/lajme');} ?>"><?php if (pll_current_language() == "en"){echo 'News';}else{echo 'Lajmet';} ?></a></li>
							  <li><a href="<?php if (pll_current_language() == "en"){echo home_url('insights-publications');}else{echo home_url('/publikimet');} ?>"><?php if (pll_current_language() == "en"){echo 'Publications';}else{echo 'Publikimet';}?></a></li>
							</ul>
						</li>
						<li class="nav-item">
						<a href="<?php if (pll_current_language() == "en"){ echo home_url('/contact');}else{echo home_url('/kontakti');} ?>"><?php if (pll_current_language() == "en"){echo 'CONTACT';}else{echo 'Kontakti';} ?><span class="open-icon"></span></a>
					  </li>
					</ul>
				  </nav>
				  <div class="language-switcher">
					<div class="title">Language</div>
					<span class="lang-opener">
					  <i class="icon icon-language"></i>
					  <span class="lang-selected"><span class="desktop"><?php if (pll_current_language() == "en") {echo 'en';}else{echo 'al';} ?></span><span class="mobile"><?php if (pll_current_language() == "en") {echo 'English';}else{echo 'Albanian';} ?></span></span>
					  <span class="lang-opener-mobile">
						<i class="icon icon-arrow-left"></i>
					  </span>
					</span>
					<ul class="language-drop">
						<a href="<?php 
								
								 echo $languages["en"]['url']; ?>"><li><span class="desktop">en</span><span class="mobile">English</span></li></a>
						<a href="<?php echo $languages["al"]['url']; ?>"><li class=""><span class="desktop">al</span><span class="mobile">Albanian</span></li></a>
					</ul>
				  </div>
				  <div class="search-btn-container">
					<span class="search-btn-opener"><i class="icon icon-search"></i></span>
				  </div>
				  <a href="http://bakertilly.global/web/worldwide-directory.aspx" class="location" target="_blank"><i class="icon icon-globe"></i></a>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="search-container">
			 <?php get_search_form(); ?>
		  </div>
		</header>