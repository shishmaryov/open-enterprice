<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package open-enterprice
 */


 /*
 Template Name: Главная
 */
?>



<?php get_header(); ?>
    <main class="main">
      <section class="promo wow animate__animated animate__fadeIn">
        <div class="container">
          <div class="promo__info">
            <h1 class="title--1 promo__title"><?php the_field('promo_title'); ?></h1>
            <p class="description promo__description"><?php the_field('promo_description'); ?></p>
            <button class="btn-reset button promo__button" data-graph-path="request">Request early access</button>
          </div>
          <img src="<?php the_field('promo_img'); ?>" alt="promo-img" class="promo__img">
        </div>
      </section>
      <section class="reimagining">
        <div class="container">
          <h2 id="reimagining" class="title--2 reimagining__title wow animate__animated animate__fadeInDown"><?php the_field('reimagining_title'); ?></h2>
        <p class="description reimagining__description wow animate__animated animate__fadeInDown"><?php the_field('reimagining_description'); ?></p>
        <div class="reimagining__cards wow animate__animated animate__fadeIn">
          <div class="reimagining__card">
            <img src="<?php the_field('reimagining_img_1'); ?>" alt="icon">
            <h3 class="title--3 reimagining__subtitle"><?php the_field('reimagining_subtitle_1'); ?></h3>
            <p class="reimagining__subtext"><?php the_field('reimagining_subdescription_1'); ?></p>
          </div>
          <div class="reimagining__card">
            <img src="<?php the_field('reimagining_img_2'); ?>" alt="icon">
            <h3 class="title--3 reimagining__subtitle"><?php the_field('reimagining_subtitle_2'); ?></h3>
            <p class="reimagining__subtext"><?php the_field('reimagining_subdescription_2'); ?></p>
          </div>
          <div class="reimagining__card">
            <img src="<?php the_field('reimagining_img_3'); ?>" alt="icon">
            <h3 class="title--3 reimagining__subtitle"><?php the_field('reimagining_subtitle_3'); ?></h3>
            <p class="reimagining__subtext"><?php the_field('reimagining_subdescription_3'); ?></p>
          </div>
        </div>
        </div>
      </section>
      <section class="kickstart__wrapper">
        <div class="container">
          <div class="kickstart wow animate__animated animate__fadeIn">
            <div id="features" class="kickstart__info">
            <img src="<?php the_field('kickstart_icon_1'); ?>" alt="icon">
              <h2 class="title--2 kickstart__title"><?php the_field('kickstart_title_1'); ?></h2>
              <p class="description kickstart__description"><?php the_field('kickstart_description_1'); ?></p>
            </div>
            <img src="<?php the_field('kickstart_img_1'); ?>" alt="kickstart-img">
          </div>
          <div class="kickstart wow animate__animated animate__fadeIn">
          <img src="<?php the_field('kickstart_img_2'); ?>" alt="kickstart-img">
            <div class="kickstart__info">
              <img src="<?php the_field('kickstart_icon_2'); ?>" alt="icon">
              <h2 class="title--2 kickstart__title"><?php the_field('kickstart_title_2'); ?></h2>
              <p class="description kickstart__description"><?php the_field('kickstart_description_2'); ?></p>
            </div>
          </div>
          <div class="kickstart wow animate__animated animate__fadeIn">
            <div class="kickstart__info">
              <img src="<?php the_field('kickstart_icon_3'); ?>" alt="icon">
              <h2 class="title--2 kickstart__title wow animate__animated animate__fadeIn"><?php the_field('kickstart_title_3'); ?></h2>
              <p class="description kickstart__description wow animate__animated animate__fadeIn"><?php the_field('kickstart_description_3'); ?></p>
            </div>
            <img src="<?php the_field('kickstart_img_3'); ?>" alt="kickstart-img">
          </div>
        </div>
      </section>
      <section class="help">
        <div class="container">
          <h2 id="contribute" class="title--2 help__title wow animate__animated animate__fadeInDown">Help us improve Open Enterprise</h2>
          <p class="description help__description wow animate__animated animate__fadeInDown">As an Open Enterprise ourselves, we are actively looking for new talent to join our mission of improving and delivering the Open Enterprise model to the world. Apply for open tasks and earn a stake in our success.</p>
          <div class="help__cards wow animate__animated animate__fadeIn">
            <?php if (have_rows("help_records")) : ?>
              <?php while (have_rows("help_records")) : the_row(); ?>
                      <div class="help__card">
                        <h3 class="help__subtitle"><?php the_sub_field('help_record_title'); ?></h3>
                        <p class="help__subtext"><?php the_sub_field('help_record_description'); ?></p>
                        <div class="help__meta">
                          <span class="help__date"><?php the_sub_field('help_record_date'); ?></span>
                          <span class="help__apply"><?php the_sub_field('help_record_apply'); ?></span>
                      </div>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
          <button class="btn-reset button button--dark help__button wow animate__animated animate__fadeIn" data-graph-path="request">View more</button>
        </div>
      </section>
      <section class="start wow animate__animated animate__fadeIn">
        <div class="start__decor"></div>
        <div class="container">
          <div class="start__info">
            <h2 id="request" class="title--2 start__title"><?php the_field('start_title'); ?></h2>
            <p class="description start__description"><?php the_field('start_description'); ?></p>
            <button class="btn-reset button start__button" data-graph-path="request">Request early access</button>
          </div>
          <img src="<?php the_field('start_img'); ?>" alt="start-img">
        </div>
      </section>
    </main>
<?php get_footer(); ?>