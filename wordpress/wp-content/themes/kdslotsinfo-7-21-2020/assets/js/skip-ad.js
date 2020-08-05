
$( document ).ready(function() {
    progressbarbtn(0, 5, $('.intervalprog'));
    progressbartimeout(5, 5, $('.intervalprog'));
    // $(this).unbind();
});

function progressbarbtn(timeStart, timetotal, $element) {
    var timeStart = 0;
    var interval = setInterval(function(){
        timeStart++;
        if(timeStart === 5){
            clearInterval(interval);
        }
        //do whatever here..
        $element.find('#counter2').html(timeStart)
        var progressBarWidth = timeStart * $element.width() / timetotal;
        $element.find('.progressbars').animate({ width: progressBarWidth }, 1000);
        $element.css('cursor', 'default');
        $element.removeClass('.intervalprog');
    }, 1000); 
};

function progressbartimeout(timeleft, timetotal, $element) {
    $element.find('.counter-number').html(timeleft%60)
    if(timeleft > 0) {
        setTimeout(function() {
            progressbartimeout(timeleft - 1, timetotal, $element);
        }, 1000);
    } else 
    if(timeleft == 0) {
        setTimeout(function() { 
            $element.find('.counter-number').remove();
            $element.find('.skp-text').html('SKIP AD ' + '<i class="fas fa-chevron-right"></i>');
            $element.attr("href", "http://www.google.com/").attr("target", "blank_");
            $element.css('cursor', 'pointer'); 
        }, 2000);
    }
};
