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
    <?php get_template_part('template-parts/socials') ?>

    <?php get_template_part('template-parts/loading') ?>


    <div class="main-wrapper">

        <div class="banner-container">
            

        </div>

        <div class="bg-container">
            <img class="bg-img" src="<?php the_field("background_image_1"); ?>" alt="">
        </div>
    </div>
</div>

<?php get_footer(); ?>

