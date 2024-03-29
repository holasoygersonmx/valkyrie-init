<?php defined('_EXEC') or die; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="Code Monkey" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="{$path.css}valkyrie.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		{$dependencies.css}
	</head>
	<body class="pos-relative">
		<a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" class="pos-fixed abt-bottom-30 abt-right-30 z-97"><img src="{$path.images}whatsapp.png" alt="Whatsapp" class="m-r-10"><span class="p-20 brd-rad-20 bkg-white">{$lang.send_whatsapp}</span></a>
		<header id="desktop_menu" class="wth-100pr pos-fixed p-tb-20 ttn-400 z-98">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-4 col-md-2">
						<figure>
							<a href="/">
								<img src="{$path.images}logotype_white.png?v=1.0" alt="Logotype" class="img-wth-fluid">
								<img src="{$path.images}logotype_black.png?v=1.0" alt="Logotype" class="d-none img-hth-fluid">
							</a>
						</figure>
					</div>
					<div class="col-10" data-desktop>
						<nav>
							<ul class="d-flex align-items-center justify-content-end list-unstyled">
								<li class="m-r-20"><a href="#home">{$lang.home}</a></li>
								<li class="m-r-20"><a href="#contact">{$lang.contact}</a></li>
								<li class="m-r-20"><a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank"><i class="fa-brands fa-facebook-square"></i></a></li>
								<li class="m-r-20"><a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
								<!-- <li class="m-r-20"><a href="?lang=es"><img src="{$path.images}mex.png?v=1.0" alt="ES Lang"></a></li>
								<li><a href="?lang=en"><img src="{$path.images}usa.png?v=1.0" alt="EN Lang"></a></li> -->
							</ul>
						</nav>
					</div>
					<div class="col-8" data-mobile-block>
						<nav>
							<ul class="d-flex align-items-center justify-content-end list-unstyled">
								<li><a data-action="open_mobile_menu"><i class="fas fa-bars"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<header id="mobile_menu" class="hth-100vh pos-fixed d-flex align-items-center justify-content-center p-20 bkg-white ttn-400 z-99" data-mobile-flex>
			<a data-action="close_mobile_menu" class="pos-absolute"><i class="fas fa-times"></i></a>
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-20"><a href="#home">{$lang.home}</a></li>
					<li class="m-b-20"><a href="#contact">{$lang.contact}</a></li>
					<li>
						<a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="m-r-10"><i class="fa-brands fa-facebook-square"></i></a>
						<a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="m-lr-10"><i class="fa-brands fa-instagram"></i></a>
						<a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="m-l-10"><i class="fa-brands fa-whatsapp"></i></a>
					</li>
					<!-- <li>
						<a href="?lang=es" class="m-r-10"><img src="{$path.images}mex.png?v=1.0" alt="ES Lang"></a>
						<a href="?lang=en" class="m-l-10"><img src="{$path.images}usa.png?v=1.0" alt="EN Lang"></a>
					</li> -->
				</ul>
			</nav>
		</header>
