
const $skill = $('.skill');
const $skillTitle = $('.skill-title');
const $bar = $('.bar');

$('.bar').map(($i, $e) => {

    
    let $skillBar = $(`.skill:nth-child(${$i+1}) .bar`);
    let $skillEffc = $(`.skill:nth-child(${$i+1}) .skill-effc`);
    let $skillValue = $skillEffc.attr('value');

    
    $(`.skill:nth-child(${$i+1})`).hover(() => {
        
        $skillBar.animate({
            'width': $skillValue
        }, 555);

        $skillEffc.text($skillValue);
            
        },

        () => {
            $skillBar.animate({
                'width': '0%'
            }, 555);
            $skillEffc.text('');
        }
    );

});


