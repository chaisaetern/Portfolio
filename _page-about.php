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
        
        <div class="about-quote-block">
            <h2 class="about-quote">"My life is a movie even Hollywood can't produce."</h2>
        </div>

        <div class="about">
            <div class="about-img-container">
                <img src="<?php the_field('about_img'); ?>" alt="" class="about-img">
            </div>
        </div>
    </div>

<?php get_footer(); ?>