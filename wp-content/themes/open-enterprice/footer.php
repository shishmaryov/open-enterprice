<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package open-enterprice
 */

?>

<footer class="footer wow animate__animated animate__fadeInUp">
	<div class="container">
		<a href="#" class="footer__logo">
			<img src="<?php the_field('footer_logo'); ?>" alt="Open enterprice">
		</a>
		<nav class="nav">
			<ul class="nav__list">
					<li class="nav__item">
						<?php
						$link5 = get_field('documentation');
						if( $link5 ): 
							$link5_url = $link5['url'];
							$link5_title = $link5['title'];
							$link5_target = $link5['target'] ? $link5['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link5_url); ?>" target="<?php echo esc_attr($link5_target); ?>" class="nav__link"><?php echo esc_html($link5_title); ?></a>
						<?php endif; ?>
					</li>
					<li class="nav__item">
						<?php
						$link6 = get_field('github');
						if( $link6 ): 
							$link6_url = $link6['url'];
							$link6_title = $link6['title'];
							$link6_target = $link6['target'] ? $link6['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link6_url); ?>" target="<?php echo esc_attr($link6_target); ?>" class="nav__link"><?php echo esc_html($link6_title); ?></a>
						<?php endif; ?>
					</li>
					<li class="nav__item">
						<?php
						$link7 = get_field('twitter');
						if( $link7 ): 
							$link7_url = $link7['url'];
							$link7_title = $link7['title'];
							$link7_target = $link7['target'] ? $link7['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link7_url); ?>" target="<?php echo esc_attr($link7_target); ?>" class="nav__link"><?php echo esc_html($link7_title); ?></a>
						<?php endif; ?>
					</li>
					<li class="nav__item">
						<?php
						$link8 = get_field('contact_us');
						if( $link8 ): 
							$link8_url = $link8['url'];
							$link8_title = $link8['title'];
							$link8_target = $link8['target'] ? $link5['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link8_url); ?>" target="<?php echo esc_attr($link8_target); ?>" class="nav__link"><?php echo esc_html($link8_title); ?></a>
						<?php endif; ?>
					</li>
			</ul>
		</nav>
	</div>
</footer>
<div class="graph-modal">
	<div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="request">
		<button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"
			></button>
		<div class="graph-modal__content">
			<h2 class="tittle--2">Request</h2>

			<form action="" class="modal__form">
				<div class="modal__inputs">
					<input placeholder="name" type="text" class="modal__input">
					<input placeholder="phone" type="tel" class="modal__input">
				</div>
				<button class="button modal__button">Send</button>
			</form>
		</div>
	</div>
</div>

</div>
<?php wp_footer(); ?>
</body>

</html>