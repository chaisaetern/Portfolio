/*
    Hover effect for Skill bar
*/
const $skill = $('.skill');
const $skillTitle = $('.skill-title');
const $bar = $('.bar');

// Map through each bar to trigger
// skill bar fill animation
$bar.map(($i, $e) => {

    // Store each child element and its value
    let $skillBar = $(`.skill:nth-child(${$i+1}) .bar`);
    let $skillEffc = $(`.skill:nth-child(${$i+1}) .skill-effc`);
    let $skillValue = $skillEffc.attr('value');

    // When hovering over each child element
    $(`.skill:nth-child(${$i+1})`).hover(() => {
        
        // Animate the width based on skill value
        // provided in the HTML element attribute value
        $skillBar.animate({
            'width': $skillValue
        }, 555);

        // Show the text value
        $skillEffc.text($skillValue);

    },

    // When not hovering reset the values to its defaults
        () => {
            $skillBar.animate({
                'width': '0%'
            }, 555);

            // Reset text value
            $skillEffc.text('');
        }
    );

});


