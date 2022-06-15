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

        <div class="banner-container">
            <h2 class="banner-title">
                <!-- <?php the_field("banner_title"); ?> -->
                <div class="typed-out">
                    <div class="letter">N</div>
                    <div class="letter">e</div>
                    <div class="letter">v</div>
                    <div class="letter">e</div>
                    <div class="letter">r</div>
                    <div class="letter">s</div>
                    <div class="letter">h</div>
                    <div class="letter">i</div>
                    <div class="letter">n</div>
                    <div class="letter">e</div>
                </div>
            </h2>

        </div>

        <div class="bg-container">
            <img class="bg-img" src="<?php the_field("background_image_1"); ?>" alt="">
        </div>
    </div>
</div>

<?php get_footer(); ?>

