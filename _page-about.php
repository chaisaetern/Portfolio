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
    
    
    <!-- BEGINNING OF ABOUT-CONTAINER -->
    <div class="about-container">

        <!-- BEGINNING OF ABOUT-HEADER -->
        <div class="about-header">

            <!-- BEGINNING OF PROFILE-CARD-CONTAINER -->
            <div class="profile-card-container">
                <?php get_template_part('template-parts/profile-card') ?>
            </div>
            <!-- end of profile-card-container -->
            
            <!-- BEGINNING OF PROFILE-BIO -->
            <div class="profile-bio">
                <h3>
                    <img src="<?php the_field('profile_about_me_img') ?>" alt="" class="profile-about-me-img">
                    <?php the_field('profile_title'); ?>
                </h3>
                <p class="profile-desc">
                    <?php the_field('profile_desc'); ?>
                </p>
            </div>
            <!-- end of profile-bio -->
            
            <?php get_template_part('template-parts/skills') ?>
        </div>
        <!-- end of about-header -->
        
        <!-- BEGINNING OF PROJECTS CONTAINER -->
        <?php get_template_part('template-parts/projects') ?>
        <!-- end of projects-container -->
        
        <!-- Particle effect -->
        <?php get_template_part('template-parts/particles') ?>
    </div>
    <!-- end of about-container -->

<?php get_footer(); ?>