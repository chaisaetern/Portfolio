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

        <h3 class="socials-title">"Socials"</h3>

        <div class="socials-icon-wrapper">

            <?php
                $links = array(
                    array('name' => 'Steam', 'class' => 'fa-steam-symbol', 'link' => '#'),
                    array('name' => 'Discord', 'class' => 'fa-discord', 'link' => '#'),
                    array('name' => 'Linked In', 'class' => 'fa-linkedin-in', 'link' => '#'),
                    array('name' => 'Github', 'class' => 'fa-github', 'link' => '#'),
                    array('name' => 'Email', 'class' => 'fa-solid fa-envelope', 'link' => '#'),
                );

                for($i = 0; $i < count($links); ++$i) {
            ?>

            <div class="socials-icon">

                <span class="socials-desc"><?php echo $links[$i]['name']; ?></span>

                <a class="socials-link" href="<?php echo $links[$i]['link']; ?>">

                    <i class="fa-brands <?php echo $links[$i]['class']; ?>"></i>

                </a>

            </div>

        <?php
            }
        ?>

        </div>

    </div>

</div>