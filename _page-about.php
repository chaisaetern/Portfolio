<?php
/**
 * Template Name: About Page
 *
 * @package Portfolio
 *
 */
?>
<?php get_header(); ?>

    <?php get_template_part('template-parts/loading') ?>
    <?php get_template_part('template-parts/socials') ?>
    
    <div class="about-container">
        <img src="<?php the_field('about_bg'); ?>" alt="" class="about-bg">
    </div>

<?php get_footer(); ?>