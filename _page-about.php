<?php
/**
 * Template Name: About Page
 *
 * @package Portfolio
 *
 */
?>
<?php get_header(); ?>

    <!-- LOADING SCREEN -->
    <?php get_template_part('template-parts/loading') ?>
    <!-- <?php get_template_part('template-parts/socials') ?> -->
    

    <!-- BEGINNING OF ABOUT-CONTAINER -->
    <div class="about-container">

        <!-- BEGINNING OF ABOUT-HEADER -->
        <div class="about-header">


            <!-- BEGINNING OF PROFILE-CARD-CONTAINER -->
            <div class="profile-card-container">
                <?php get_template_part('template-parts/profile-card') ?>
            </div>
            <!-- end of profile-card-container -->


            <!-- 
                BEGINNING OF PROFILE-BIO 
            -->
            <div class="profile-bio">
                <h3><span></span>About Me</h3>
                <p>
                    Gamer. Gamer God. 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ad porro facere. Laborum vel laudantium ipsa exercitationem soluta laboriosam, quaerat facilis minus explicabo aspernatur voluptates accusamus non sit sequi quis!
               </p>
            </div>
            <!-- end of profile-bio -->


        </div>
        <!-- end of about-header -->

    </div>
    <!-- end of about-container -->

<?php get_footer(); ?>