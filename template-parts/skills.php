<?php
/**
 * Template Name: Skills Template Part
 *
 * @package Portfolio
 *
 */
?>


<div class="skills-container">

    <h3 class="skill-header">Skills</h3>

    <div class="skills-wrapper">

    <?php
        $skillTypes = array(
            array('lang' => 'HTML5', 'effc' => '68', 'icon' => 'fa-brands fa-html5'),
            array('lang' => 'CSS3 | SCSS', 'effc' => '65', 'icon' => 'fa-brands fa-css3'),
            array('lang' => 'JavaScript | ES6+ | jQuery', 'effc' => '57', 'icon' => 'fa-brands fa-js-square'),
            array('lang' => 'PHP | WordPress', 'effc' => '42', 'icon' => 'fa-brands fa-wordpress'),
            array('lang' => 'Learning', 'effc' => '99', 'icon' => 'fa-solid fa-chalkboard-user'),
            array('lang' => 'Engrish', 'effc' => '-99', 'icon' => 'fa-solid fa-poop'),
        );
        $skillTypes2 = array(
            array('name' => 'Focus', 'effc' => '68', 'icon' => 'fa-solid fa-crosshairs'),
            array('name' => 'Time Spent Googling', 'effc' => '65', 'icon' => 'fa-brands fa-google'),
            array('name' => 'Cups of Coffee', 'effc' => '57', 'icon' => 'fa-solid fa-mug-hot'),
            array('name' => 'Head Scratches', 'effc' => '42', 'icon' => 'fa-solid fa-face-dizzy'),
            array('name' => 'Portfolio Hours', 'effc' => '99', 'icon' => 'fa-solid fa-hourglass'),
            array('name' => 'Sleep', 'effc' => '-99', 'icon' => 'fa-solid fa-code'),
        );

        for($s = 0; $s < count($skillTypes); ++$s) {
    ?>
    
        <div class="skill">

            <div class="skill-title-container">

                <div class="skill-icon-container">

                    <i class="skill-icon <?php echo $skillTypes[$s]['icon']; ?>"></i>
                    
                    <h3 class="skill-title" 
                        data-lang="<?php echo $skillTypes[$s]['lang']; ?>" 
                        data-name="<?php echo $skillTypes2[$s]['name']; ?>"
                    >
                        <?php echo $skillTypes[$s]['lang']; ?>
                    </h3>

                </div>

                <span data-value="<?php echo $skillTypes[$s]['effc']; ?>" class="skill-effc">0%</span>
            
            </div>

            <div class="skill-bar"><div class="bar"></div></div>

        </div>

    <?php }; ?>

    </div>
    
</div>
