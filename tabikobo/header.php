<!DOCTYPE html>
<html <?php //language_attributes(); ?> lang="ja" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/style.mobile.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/custom.js"></script>

	<?php wp_head(); ?>
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' |'; } ?> <?php bloginfo( 'name' ); ?></title>
</head>

<body>
	<!-- header -->
	<header>
		<div class="rowwidth">
			<div class="logo_menu">
				<div class="logo">
					<?php if( is_home() || is_front_page()) { ?>
						<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a></h1>
					<?php }else{ ?>
						<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a></h2>
					<?php } ?>
				</div>
				<div class="menu_header">
					<div class="tool">
						<div class="search">
							<form action="<?php echo home_url( '/' ); ?>" role="search" autocomplete="off">
								<input id="search_sp" type="text" placeholder="" value="<?php echo the_search_query(); ?>" name="s">
								<input id="search_submit_sp" value="search" type="submit">
							</form>
						</div>
						<div class="language">
							<span>JP</span><span>VN</span><span>EN</span>
						</div>
					</div>
					<div class="menu_main">
						<?php tabikobo_header_menu(); ?>
						<!-- <ul>
							<li><a href="#">トップ</a></li>
							<li><a href="#">旅工房ベトナムについて</a></li>
							<li><a href="#">サービス</a></li>
							<li><a href="#">お問い合わせ</a></li>
						</ul> -->
					</div>
				</div>
				<div class="menu_sp">
					<div class="open_menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="nav_menu_sp">
						<?php tabikobo_header_menu(); ?>
						<!-- <ul>
							<li><a href="#">トップ</a></li>
							<li><a href="#">旅工房ベトナムについて</a></li>
							<li><a href="#">サービス</a></li>
							<li><a href="#">お問い合わせ</a></li>
						</ul> -->
						<div class="search_mobile">
							<form action="<?php echo home_url( '/' ); ?>" role="search" autocomplete="off">
								<input id="search_sp" type="text" placeholder="" value="<?php echo the_search_query(); ?>" name="s">
								<input id="search_submit_sp" value="search" type="submit">
							</form>
						</div>
					</div>
				</div>
				<div class="overlay"></div>
			</div>
		</div>
	</header>
	<div class="bg_hidden"></div><!-- header -->

