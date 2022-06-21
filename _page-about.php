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

        <div class="about-content">
            <div class="about-info">
                <div class="about-img-portfolio">
                    <img src="<?php the_field('about_img'); ?>" alt="" class="about-img">
                </div>
                <div class="about-info-content">
                    <h2 class="about-title">About Me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor facilis qui reiciendis placeat cupiditate, illo provident nam maxime odit quaerat ex consequuntur error. Illo omnis culpa, voluptatibus dolore et repellendus!</p>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>