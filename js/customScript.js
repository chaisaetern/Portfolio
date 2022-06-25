/*
    Hover effect for Skill bar
*/
const $skill = $('.skill');
const $skillTitle = $('.skill-title');
const $bar = $('.bar');



// Map through each bar to trigger
// skill bar fill animation
$bar.map($i => {

    // Store each child element and its value
    let $skillBar = $(`.skill:nth-child(${$i+1}) .bar`);
    let $skillEffc = $(`.skill:nth-child(${$i+1}) .skill-effc`);
    let $skillValue = parseInt($skillEffc.attr('value'));
    let $defValue = 0;
    
        // Num Percent animation
        let counter = () => setInterval(() => {

            $defValue++;
            
            if ($defValue >= $skillValue) {
                $defValue = $skillValue;
                clearInterval(counter);
            }
            
            $skillEffc.text(`${$defValue}%`);

        }, 30)

        setTimeout(() => {
            counter();
            $skillBar.animate({
                'width': `${$skillValue}%`,
            }, 1800);
        }, 5000);
        
        // Animate the width based on skill value
        // provided in the HTML element attribute value

        // Show the text value
        $skillEffc.text(`${$defValue}%`);

});
