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
            <h3>Chai Saetern</h3>
            <h5>WordPress Web Developer</h5>
            <p>Wordpress front-end developer</p>
        </div>
    </div>
</div>