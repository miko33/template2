
$( document ).ready(function() {


  $( ".dropdown-toggle" ).click(function() {
    $('.dropdown-menu').toggleClass('show');
  });
    //start marquee
    $('.marquee').marquee({
        //speed in milliseconds of the marquee
        duration: 20000,
        //gap in pixels between the tickers
        gap: 20,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 100,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        pauseOnHover: true
    });


    $( ".sidebar-trigger" ).click(function() {
        $('.turn-to-sidebar').toggleClass('opened-sidebar');
        $('body.main').toggleClass('opened-sidebar');
        $('.overlay-sidebar').toggleClass('opened-sidebar');
        .preventDefault();
    });
            //end marquee





document.addEventListener('readystatechange', (event) => {
  if(document.readyState === 'interactive') {
    $('.splash-bar').css('width', '75%');
  }

  if(document.readyState === 'complete') {
    setTimeout(function () {
      $('.splash-bar').css('width', '100%');
    }, 500);
  }
});

window.addEventListener('load', (event) => {
  setTimeout(function () {
    $('.splash-screen').css('display', 'none');
    $('.splash-bar').css('width', '0%');
    $("body").removeClass('modal-open');
  }, 2000);
});


 // ///start main slider owlcarousel

 var time = 7; // time in seconds

 var $progressBar,
     $bar,
     $elem,
     isPause,
     tick,
     percentTime;
 //Init the carousel
 $("#owl-demo").owlCarousel({
  slideSpeed      : 500,
  paginationSpeed : 500,
  singleItem      : true,
  navigation      : true,
  navigationText : ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
  pagination      : false,
  afterInit       : progressBar,
  afterMove       : moved,
  transitionStyle : "fade",
  startDragging   : pauseOnDragging
});

//Init progressBar where elem is $("#owl-demo")
function progressBar(elem){
  $elem = elem;
  //build progress bar elements
  buildProgressBar();
  //start counting
  start();
}

//create div#progressBar and div#bar then prepend to $("#owl-demo")
function buildProgressBar(){
  $progressBar = $("<div>",{
  id:"progressBar"
  });
  $bar = $("<div>",{
  id:"bar"
  });
  $progressBar.append($bar).prependTo($elem);
}

function start() {
  //reset timer
  percentTime = 0;
  isPause = false;
  //run interval every 0.01 second
  tick = setInterval(interval, 10);
};

function interval() {
  if(isPause === false){
  percentTime += 1 / time;
  $bar.css({
      width: percentTime+"%"
      });
  //if percentTime is equal or greater than 100
  if(percentTime >= 100){
      //slide to next item
      $elem.trigger('owl.next')
  }
  }
}

//pause while dragging
function pauseOnDragging(){
  isPause = true;
}

//moved callback
function moved(){
  //clear interval
  clearTimeout(tick);
  //start again
  start();
}

//uncomment this to make pause on mouseover
$("#owl-demo").on('mouseover',function(){
isPause = true;
})
$("#owl-demo").on('mouseout',function(){
isPause = false;
})



});
