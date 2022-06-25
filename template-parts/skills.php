<?php
/**
 * Template Name: Skills Template Part
 *
 * @package Portfolio
 *
 */
?>


<div class="skills-container">
    <h3 class="skill-header">Skills &amp;</h3>
    <h3 class="skill-header">Proficiency</h3>
    <div class="skills-wrapper">

    <?php
        $skillTypes = array(
            array('lang' => 'HTML5', 'effc' => '68', 'icon' => 'fa-brands fa-html5'),
            array('lang' => 'CSS3 | SCSS', 'effc' => '65', 'icon' => 'fa-brands fa-css3'),
            array('lang' => 'JavaScript | ES6+ | jQuery', 'effc' => '57', 'icon' => 'fa-brands fa-js-square'),
            array('lang' => 'PHP | WordPress', 'effc' => '42', 'icon' => 'fa-brands fa-wordpress'),
            array('lang' => 'Engrish ', 'effc' => '-99', 'icon' => 'fa-solid fa-poop'),
        );

        for($s = 0; $s < count($skillTypes); ++$s) {
    ?>
        
        <div class="skill">
            <h3 class="skill-title">
                    <div class="skill-icon">
                        <div class="skill-icon <?php echo $skillTypes[$s]['icon']; ?>"></div>
                        <?php echo $skillTypes[$s]['lang']; ?>
                    </div>
                <span value="<?php echo $skillTypes[$s]['effc']; ?>" class="skill-effc">0%</span>
            </h3>
            <div class="skill-bar">
                <div class="bar"></div>
            </div>
        </div>

    <?php }; ?>

    </div>
</div>
