<?php
/**
 * Template Name: Contact Page
 *
 * @package Portfolio
 *
 */
?>
<?php get_header(); ?>

    <?php get_template_part('template-parts/loading'); ?>
    <!-- <?php get_template_part('template-parts/socials'); ?> -->

    <div class="contact-container">

        <img src="<?php the_field('contact_bg'); ?>" alt="" class="contact-bg">
        
        <div class="coming-soon">
            <h2 class="coming">COMING</h2>
            <h2 class="coming">SOON</h2>
        </div>
    </div>
    
<?php get_footer(); ?>