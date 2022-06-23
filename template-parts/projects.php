<?php
/**
 * Template Name: Projects Template Part
 *
 * @package Portfolio
 *
 */
?>
<?php get_header(); ?>

    <div class="projects-container">
        <h3>Projects</h3>
        <div class="projects-wrapper">

            <?php 
                $projects = array(
                    array(
                        'title' => get_field("project_title_1"), 
                        'link' => get_field("project_link_1"), 
                        'desc' => get_field("project_desc_1"), 
                        'img' => get_field("project_img_1")
                    ),
                    array(
                        'title' => get_field("project_title_2"), 
                        'link' => get_field("project_link_2"), 
                        'desc' => get_field("project_desc_2"), 
                        'img' => get_field("project_img_2")
                    ),
                    array(
                        'title' => get_field("project_title_3"), 
                        'link' => get_field("project_link_3"), 
                        'desc' => get_field("project_desc_3"), 
                        'img' => get_field("project_img_3")
                    ),
                    array(
                        'title' => get_field("project_title_4"), 
                        'link' => get_field("project_link_4"), 
                        'desc' => get_field("project_desc_4"), 
                        'img' => get_field("project_img_4")
                    ),
                    array(
                        'title' => get_field("project_title_5"), 
                        'link' => get_field("project_link_5"), 
                        'desc' => get_field("project_desc_5"), 
                        'img' => get_field("project_img_5")
                    ),
                );

                for($i = 0; $i < count($projects); ++$i) {
            ?>
            <!-- Project Card -->
            <div class="project-card">
                <img src="<?php echo $projects[$i]['img']; ?>" alt="" class="project-img">
                <div class="project-overlay"></div>
                <a href="<?php echo $projects[$i]['link']; ?>" class="project-link">View Project</a>
                <div class="project">
                    <h3 class="project-title"><?php echo $projects[$i]['title']; ?></h3>
                    <p class="project-desc">
                        <?php echo $projects[$i]['desc']; ?>
                    </p>
                </div>
            </div>

            <?php
                }
            ?>

        </div>
    </div>

<?php get_footer(); ?>