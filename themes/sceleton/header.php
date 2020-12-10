<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header" role="banner">
		<div class="wrapper clearfix <?php if(!is_front_page()){ echo "non-front-page-header"; } ?>">
			<?php if(!is_front_page()){ ?>
					<!--Not a logo, rather the back button-->
					<a href="<?php echo get_option( 'home' ); ?>" class="logotype"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo get_option( 'blogname' ); ?>" /></a>
			<?php } ?>
			<div class="header-text">
				<h1>Bingofy</h1>
				<?php if(!is_front_page()){ echo "<h3>- " . get_the_title() ."</h3>";} ?>
			</div>
		</div>
	</header>

	<div id="content">
