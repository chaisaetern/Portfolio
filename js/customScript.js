/*
    Hover effect for Skill bar
*/

const $skill = $('.skill');
const $skillTitleCont = $('.skill-title-container');

// Map through each bar to trigger
// skill bar fill animation
$skill.map($i => {
    
    // Store each child element and its value
    const $skillBar = $(`.skill:nth-child(${$i+1}) .bar`);
    const $skillEffc = $(`.skill:nth-child(${$i+1}) .skill-effc`);
    const $skillValue = parseInt($skillEffc.data('value'));
    
    let $defValue = 0;
    
    const setSkill = ($amount, $delay) => {
        // Num Percent animation
        let counter = () => setInterval(() => {

            $defValue++;
            
            if ($defValue > $amount) {
                clearInterval(counter);
                $defValue = $amount;
                return;
            }
            
            $skillEffc.text(`${$defValue}%`);

        }, 30);

        // Animate the width based on skill value
        // provided in the HTML element attribute value
        setTimeout(() => {

            counter();

            $skillBar.animate({

                'width': `${$amount}%`,

            }, 1800);

        }, $delay);

        // Show the text value
        $skillEffc.text(`${$defValue}%`);
    }
    setSkill($skillValue, 3000);
    
});




/*
    Hover effect for Socials
*/
const $socials  = $('.socials-wrapper');
const $sIcons = $('.socials-icon');

