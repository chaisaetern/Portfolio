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




// Select all »a« elements with a parent class »links« and add a function that is executed on click
$( '.links a' ).on( 'click', function(e){
	
    // Define variable of the clicked »a« element (»this«) and get its href value.
    var href = $(this).attr( 'href' );
    
    // Run a scroll animation to the position of the element which has the same id like the href value.
    $( 'html, body' ).animate({
          scrollTop: $( href ).offset().top
    }, '300' );
      
    // Prevent the browser from showing the attribute name of the clicked link in the address bar
    // e.preventDefault();
  
});