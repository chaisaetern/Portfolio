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
        $skillTypes1 = array(
            array('lang' => 'HTML5', 'effc' => '68', 'icon' => 'fa-brands fa-html5'),
            array('lang' => 'CSS3 | SCSS', 'effc' => '65', 'icon' => 'fa-brands fa-css3'),
            array('lang' => 'JavaScript | ES6+ | jQuery', 'effc' => '57', 'icon' => 'fa-brands fa-js-square'),
            array('lang' => 'PHP | WordPress', 'effc' => '42', 'icon' => 'fa-brands fa-wordpress'),
            array('lang' => 'Learning', 'effc' => '99', 'icon' => 'fa-solid fa-chalkboard-user'),
            array('lang' => 'Engrish', 'effc' => '-99', 'icon' => 'fa-solid fa-poop'),
        );
        for($s1 = 0; $s1 < count($skillTypes1); ++$s1) {
    ?>
    
        <div class="skill">

            <div class="skill-title-container">

                <div class="skill-icon-container">
                    <i class="skill-icon <?php echo $skillTypes1[$s1]['icon']; ?>"></i>
                    
                    <h3 class="skill-title" 
                        data-lang="<?php echo $skillTypes1[$s1]['lang']; ?>" 
                    >
                        <?php echo $skillTypes1[$s1]['lang']; ?>
                    </h3>
                </div>
      
                <span 
                    data-value="<?php echo $skillTypes1[$s1]['effc']; ?>"
                    class="skill-effc"
                >0%</span>
            
            </div>

            <div class="skill-bar"><div class="bar"></div></div>

        </div>

    <?php }; ?>

    </div>
    
</div>
