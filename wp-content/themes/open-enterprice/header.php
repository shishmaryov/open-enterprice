<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package open-enterprice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="manifest" href="img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php	$open_enterprice_description = get_bloginfo( 'description', 'display' ); ?>

	<header class="header wow animate__animated animate__fadeIn">
		<div class="container header__container">
				<?php the_custom_logo() ?>
			<nav class="nav">
				<ul class="nav__list">
					<li class="nav__item">
						<?php
						$link1 = get_field('why_open_enterprise');
						if( $link1 ): 
							$link1_url = $link1['url'];
							$link1_title = $link1['title'];
							$link1_target = $link1['target'] ? $link1['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link1_url); ?>" target="<?php echo esc_attr($link1_target); ?>" class="nav__link"><?php echo esc_html($link1_title); ?></a>
						<?php endif; ?>
					</li>
					<li class="nav__item">
						<?php
						$link2 = get_field('features');
						if( $link2 ): 
							$link2_url = $link2['url'];
							$link2_title = $link2['title'];
							$link2_target = $link2['target'] ? $link2['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link2_url); ?>" target="<?php echo esc_attr($link2_target); ?>" class="nav__link"><?php echo esc_html($link2_title); ?></a>
						<?php endif; ?>
					</li>
					<li class="nav__item">
						<?php
						$link3 = get_field('contribute');
						if( $link3 ): 
							$link3_url = $link3['url'];
							$link3_title = $link3['title'];
							$link3_target = $link3['target'] ? $link3['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link3_url); ?>" target="<?php echo esc_attr($link3_target); ?>" class="nav__link"><?php echo esc_html($link3_title); ?></a>
						<?php endif; ?>
					</li>
					<li class="nav__item nav__item--accent">
						<?php
						$link4 = get_field('request_early_access');
						if( $link4 ): 
							$link4_url = $link4['url'];
							$link4_title = $link4['title'];
							$link4_target = $link4['target'] ? $link4['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link4_url); ?>" target="<?php echo esc_attr($link4_target); ?>" class="nav__link"><?php echo esc_html($link4_title); ?></a>
						<?php endif; ?>
					</li>
				</ul>
			</nav>
		</div>
	</header>