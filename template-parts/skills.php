<?php
/**
 * Template Name: Skills Template Part
 *
 * @package Portfolio
 *
 */
?>


<div class="skills-container">
    <div class="skills-wrapper">

    <?php
        $skillTypes = array(
            array('lang' => 'HTML', 'effc' => '85%'),
            array('lang' => 'CSS / SCSS', 'effc' => '80%'),
            array('lang' => 'JavaScript / ES6+', 'effc' => '55%'),
            array('lang' => 'PHP / WordPress', 'effc' => '33%'),
            array('lang' => 'Engrish', 'effc' => '50%'),
        );

        for($s = 0; $s < count($skillTypes); ++$s) {
    ?>
        
        <div class="skill">
            <h3 class="skill-title">
                <?php echo $skillTypes[$s]['lang']; ?>
                <span value="<?php echo $skillTypes[$s]['effc']; ?>" class="skill-effc"></span>
            </h3>
            <div class="skill-bar">
                <div class="bar"></div>
            </div>
        </div>

    <?php }; ?>

    </div>
</div>
