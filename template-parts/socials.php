<?php
/**
 * Template Name: Socials Template Part
 *
 * @package Portfolio
 *
 */
?>

<div class="socials-container">
    
    <div class="socials">

        <!-- <h3 class="socials-title">"Socials"</h3> -->

        <div class="socials-icon-wrapper">

            <?php
                $links = array(
                    array('name' => 'Codepen', 'class' => 'fa-codepen', 
                    'link' => get_field('social_link_1')
                ),
                //     array('name' => 'Discord', 'class' => 'fa-discord', 
                //     'link' => get_field('social_link_2')
                // ),
                    array('name' => 'Linked In', 'class' => 'fa-linkedin-in', 
                    'link' => get_field('social_link_3')
                ),
                    array('name' => 'Github', 'class' => 'fa-github', 
                    'link' => get_field('social_link_4')
                ),
                    array('name' => 'Email', 'class' => 'fa-solid fa-envelope', 
                    'link' => get_field('social_link_5')
                ),
                );

                for($i = 0; $i < count($links); ++$i) {
            ?>

            <div class="socials-icon-container">
                
                <a class="socials-link" href="<?php echo $links[$i]['link']; ?>">
                    
                    <i class="socials-icon fa-brands <?php echo $links[$i]['class']; ?>"></i>
                    
                </a>
                
                <span class="socials-desc"><?php echo $links[$i]['name']; ?></span>

            </div>

        <?php
            }
        ?>

        </div>

    </div>

</div>