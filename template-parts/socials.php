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

        <p>"Socials"</p>

        <div class="socials-icon-wrapper">

            <?php
                $links = array(
                    array('name' => 'Steam', 'class' => 'fa-steam-symbol'),
                    array('name' => 'Discord', 'class' => 'fa-discord'),
                    array('name' => 'Linked In', 'class' => 'fa-linkedin-in'),
                    array('name' => 'Github', 'class' => 'fa-github'),
                    array('name' => 'Email', 'class' => 'fa-solid fa-envelope'),
                );

                for($i = 0; $i < count($links); ++$i) {
            ?>

            <div class="socials-icon">

                <span class="socials-desc"><?php echo $links[$i]['name']; ?></span>

                <a class="socials-link" href="#">

                    <i class="fa-brands <?php echo $links[$i]['class'] ?>"></i>

                </a>

            </div>

        <?php
            }
        ?>

        </div>

    </div>

</div>