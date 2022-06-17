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
            <h2>About Header</h2>
            <div class="about-info">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor facilis qui reiciendis placeat cupiditate, illo provident nam maxime odit quaerat ex consequuntur error. Illo omnis culpa, voluptatibus dolore et repellendus!</p>
            </div>
        </div>

    </div>

<?php get_footer(); ?>