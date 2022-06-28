/*
    Hover effect for Skill bar
*/

const $skill = $('.skill');

// Map through each bar to trigger
// skill bar fill animation
$skill.map($i => {
    
    // Store each child element and its value
    const $skillBar = $(`.skill:nth-child(${$i+1}) .bar`);
    const $skillEffc = $(`.skill:nth-child(${$i+1}) .skill-effc`);
    const $skillValue = parseInt($skillEffc.data('value'));
    const $skillTitle = $(`.skill:nth-child(${$i+1}) .skill-title`);
    let $defValue = 0;
    
    // Num Percent animation
    let counter = () => setInterval(() => {

        $defValue++;
        
        if ($defValue >= $skillValue) {
            $defValue = $skillValue;
            clearInterval(counter);
        }
        
        $skillEffc.text(`${$defValue}%`);

    }, 30);

    // Animate the width based on skill value
    // provided in the HTML element attribute value
    setTimeout(() => {

        counter();

        $skillBar.animate({

            'width': `${$skillValue}%`,

        }, 1800);

    }, 5000);

    // Show the text value
    $skillEffc.text(`${$defValue}%`);
    
    


    $(`.skills-wrapper:nth-child(${$i}) .skill-title-container`).hover(
        
    function (e) {

        $(this).each(function(i) {

            const $si = $(this).children().children('.skill-icon');
            const $st = $(this).children().children('.skill-title');

            console.log($si.attr('class'))

            if($si.hasClass('fa-brands fa-html5')) {
                $si.removeClass('fa-brands fa-html5').addClass('fa-solid fa-crosshairs');
                $st.text('Focus');
            }
            if($si.hasClass('fa-brands fa-css3')) {
                $si.removeClass('fa-css3').addClass('fa-google');
                $st.text('Time Spent Googling');
            }
            if($si.hasClass('fa-brands fa-js-square')) {
                $si.removeClass('fa-brands fa-js-square').addClass('fa-solid fa-mug-hot');
                $st.text('Cups of Coffee');
            }
            if($si.hasClass('fa-brands fa-wordpress')) {
                $si.removeClass('fa-brands fa-wordpress').addClass('fa-solid fa-face-dizzy');
                $st.text('Head Scratches');
            }
            if($si.hasClass('fa-solid fa-chalkboard-user')) {
                $si.removeClass('fa-chalkboard-user').addClass('fa-hourglass');
                $st.text('Hours on Portfolio');
            }
            if($si.hasClass('fa-solid fa-poop')) {
                $si.removeClass('fa-poop').addClass('fa-code');
                $st.text('Sleep');
            }
            

        })



    },
        function(e) {

            $(this).each(function(i) {

                const $si = $(this).children().children('.skill-icon');
                const $st = $(this).children().children('.skill-title');

                if($si.hasClass('fa-solid fa-crosshairs')) {
                    $si.removeClass('fa-solid fa-crosshairs').addClass('fa-brands fa-html5');
                    $st.text('HTML5');
                }
                if($si.hasClass('fa-brands fa-google')) {
                    $si.removeClass('fa-google').addClass('fa-css3');
                    $st.text('CSS3 | SCSS');
                }
                if($si.hasClass('fa-solid fa-mug-hot')) {
                    $si.removeClass('fa-solid fa-mug-hot').addClass('fa-brands fa-js-square');
                    $st.text('JavaScript | ES6+ | jQuery');
                }
                if($si.hasClass('fa-solid fa-face-dizzy')) {
                    $si.removeClass('fa-solid fa-face-dizzy').addClass('fa-brands fa-wordpress');
                    $st.text('PHP | WordPress');
                }
                if($si.hasClass('fa-solid fa-hourglass')) {
                    $si.removeClass('fa-hourglass').addClass('fa-chalkboard-user');
                    $st.text('Learning');
                }
                if($si.hasClass('fa-solid fa-code')) {
                    $si.removeClass('fa-code').addClass('fa-poop');
                    $st.text('Engrish');
                }
    
            })

        }
    )

});
