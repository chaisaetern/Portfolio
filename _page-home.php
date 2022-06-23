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
    <?php get_template_part('template-parts/socials') ?>

    <div class="main-wrapper">

        <div class="bg-container">
            <img class="bg-img" src="<?php the_field("background_image_1"); ?>" alt="">
            <h2>"We're not the cause, <br>we're the effect." <br><span>-Nipsey Hussle</span></h2>
        </div>
        
        <div class="hero-container">
            <h2>Hello World!</h2>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
