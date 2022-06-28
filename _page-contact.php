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

    <div class="contact-container">
        <img src="<?php the_field('contact_bg') ?>" alt="" class="contact-bg">
        <h3 class="contact-header">Contact Me</h3>
        <?php echo do_shortcode('[contact-form-7 id="531" title="Contact form 1"]'); ?>
        
    </div>
    
<?php get_footer(); ?>