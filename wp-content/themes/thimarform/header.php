<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('p-4');?>>

		<div class="site-wrapper">
				
			<nav class="site-navigation">
				<div class="row no-gutters">
					<div class="col-sm-6">
						<div class="logo">
							<a href="<?php echo home_url();?>"><?php echo file_get_contents(__DIR__.'/assets/img/logo.svg');?></a>
						</div>
					</div>
					<div class="col-sm-6">
						<?php
						echo ob_nav_menu( array(
						'menu_name' => 'Huvudmeny',
						'menu_class' => 'site-menu',
						) );
						?>
					</div>
				</div>
			</nav>