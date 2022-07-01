<?php
/**
 * Template Name: Home Page
 *
 * @package Portfolio
 *
 */
?>

<?php get_header(); ?>

<div class="main-container">

    <?php get_template_part('template-parts/loading') ?>

    <div class="main-wrapper">
        <div class="background-image-1-container">
            <img src="<?php the_field('background_image_1') ?>" alt="" class="background-image-1">
        </div>
        <div class="hero-container">
            <div class="hero-wrapper">
                <div class="hero"></div>
                <div class="hero"></div>
                <div class="hero"></div>
                <div class="hero"></div>
                <div class="hero"></div>
                <div class="hero"></div>
                <div class="hero"></div>
                <!-- <div class="hero-text-container">
                    <h3 class="hero-title">Hi, and welcome!</h3>
                </div> -->
            </div>
            <div class="arrow-down-container">
                <i class="fa-solid fa-arrow-down"></i>
            </div>
            <?php get_template_part('template-parts/particles') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
