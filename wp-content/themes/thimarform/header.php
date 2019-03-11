<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>

		<?php if ( (is_home() || is_front_page()) && empty($_COOKIE['thimar_visited']) ) : ?>
			<div class="intro-video">
				<video src="<?php echo asset('video/thimarlogo_svart.mp4');?>" playsinline autoplay muted></video>
			</div>
		<?php endif;?>

		<nav class="mobile-menu">
			<div class="mobile-menu__close">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
					<defs>
						<style>
						.cls-1 {
							fill: none;
							stroke: #707070;
							stroke-linecap: round;
							stroke-width: 3px;
						}
						</style>
					</defs>
					<g id="Symbol_2_1" data-name="Symbol 2 – 1" transform="translate(-312.379 -88.379)">
						<line id="Line_25" data-name="Line 25" class="cls-1" x2="28" y2="28" transform="translate(314.5 90.5)"/>
						<line id="Line_26" data-name="Line 26" class="cls-1" x1="28" y2="28" transform="translate(314.5 90.5)"/>
					</g>
				</svg>
			</div>
			<?php
			echo ob_nav_menu(array(
				'menu_name' => 'Huvudmeny',
				'active_a_class' => 'active'
			));
			?>
		</nav>

		<div class="site-wrapper">
				
			<nav class="site-navigation">
				<div class="row no-gutters">
					<div class="col-12">
						<div class="logo">
							<a href="<?php echo home_url();?>"><?php echo file_get_contents(__DIR__.'/assets/img/logo.svg');?></a>
						</div>
						<div class="menu-icon__wrapper">
							<svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.111 20.403">
								<defs>
									<style>
									.cls-1 {
										fill: none;
										stroke: #707070;
										stroke-linecap: round;
										stroke-width: 3px;
									}
									</style>
								</defs>
								<g id="Symbol_1_1" data-name="Symbol 1 – 1" transform="translate(-292.889 -51)">
									<line id="Line_5" data-name="Line 5" class="cls-1" x2="48.111" transform="translate(294.389 52.5)"/>
									<line id="Line_6" data-name="Line 6" class="cls-1" x2="48.111" transform="translate(294.389 61.201)"/>
									<line id="Line_7" data-name="Line 7" class="cls-1" x2="48.111" transform="translate(294.389 69.903)"/>
								</g>
							</svg>
						</div>
						<?php
						echo ob_nav_menu( array(
							'menu_name' => 'Huvudmeny',
							'menu_class' => 'site-menu',
							'active_a_class' => 'active'
						) );
						?>
					</div>
				</div>
			</nav>