<?php
/**
 * Template Name: Profile Card Template Part
 *
 * @package Portfolio
 *
 */
?>

<div class="profile-container">
    <div class="profile-card">
        <img src="<?php the_field('profile_img'); ?>" alt="" class="profile-img">
        <?php get_template_part('template-parts/socials') ?>
        <div class="profile-content">
            <h3 class="profile-text">Chai Saetern</h3>
            <h5 class="profile-text">WordPress X</h5>
            <p class="profile-text">Front-End Developer</p>
        </div>
    </div>
</div>