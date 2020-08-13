$ ( document).ready(function(){

    // $( ".dropdown-toggle" ).click(function() {
    //     $('.dropdown-menu').toggleClass('show');
    //   });
  

    // $(window).scroll(function () {
    //   if($(window).scrollTop() > 20) {
    //     // alert('Ppppp');
    //     $("#sticky-navbar").css({
    //       "background-color": "#fff",
    //       "position":"fixed"
    //     })
    //   } else {
    //     $("#fixed-navbar").css({
    //       "display": "none",
    //     });
    //   }
    // });winley$15
  // alert("padd")

    var num = 50; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.sticky-nav').addClass('fixed');
        $('.fixed-navbar').addClass('none');
    } else {
        $('.sticky-nav').removeClass('fixed');
        $('.fixed-navbar').removeClass('none');
    }
});

});

(function($){
  $('#thumbcarousel').carousel(0);
  var $thumbItems = $('#thumbcarousel .item');
  $('#carousel').on('slide.bs.carousel', function (event) {
     var $slide = $(event.relatedTarget);
     var thumbIndex = $slide.data('thumb');
     var curThumbIndex = $thumbItems.index($('#thumbcarousel .item.active').get(0));
      if (curThumbIndex>thumbIndex) {
          $('#thumbcarousel').one('slid.bs.carousel', function (event) {
              $('#thumbcarousel').carousel(thumbIndex);
          });
          if (curThumbIndex === ($thumbItems.length-1)) {
              $('#thumbcarousel').carousel('next');
          } else {
              $('#thumbcarousel').carousel(numThumbItems-1);
          }
      } else {
          $('#thumbcarousel').carousel(thumbIndex);
      }
  });
})(jQuery);

//Get the button
var mybutton = document.getElementById("backTotop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};