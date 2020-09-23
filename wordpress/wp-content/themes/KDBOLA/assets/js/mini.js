$ ( document).ready(function(){

    // $( ".dropdown-toggle" ).click(function() {
    //     $('.dropdown-menu').toggleClass('show');
    //   });

    $(".bar-trigger").click(function(event){
        $('body.main').toggleClass('opened-sidebar');
        $('.overlay-side-bar').toggleClass('opened-sidebar');
        $('.overlay-sidebar').toggleClass('opened-sidebar');
        event.preventDefault();
    });
});

$(document).ready(function(){
  $('div.article-body-first').each(function(){
    var allbreak =$(this).find('hr').length;
    var i = 1 ;
    while (i <= allbreak ) {
      console.log($(this).find(`hr:eq(${i})`));
      // console.log(`${i} bgsd dari ${allbreak} halaman`);
      $("hr:eq(0)").replaceWith( `<div class="wp-block-separator"> ${i} dari ${allbreak} halaman</div>`);
      i++;
    }

    })
  
});




// if($(window).width() < 780) {
//   console.log($(window).width());
//   alert('tepe')
//   $('.fixed-navbar').addClass('none');

// }else if ($(window).width() > 780) {
//   $(window).bind('scroll', function () {
//     if ($(window).scrollTop() > 50) {
//         $('.sticky-nav').addClass('fixed');
//         $('.fixed-navbar').addClass('none');
//     } else {
//         $('.sticky-nav').removeClass('fixed');
//         $('.fixed-navbar').removeClass('none');
//     }
//     });
//     alert('tape')
// }
// alert('pepex')



$(window).on('resize', function() {
  if($(window).width() < 770) {
      $('.header-mobile').addClass('show');
      $('.header').addClass('none');
      $('.carousel-container').addClass('none');
      $('.topnews-container').addClass('show');
  }else{
      $('.header-mobile').removeClass('show');
      $('.header').removeClass('none');
      $('.carousel-container').removeClass('none');
      $('.topnews-container').removeClass('show');
  }
});

if($(window).width() < 770) {
  $('.header-mobile').addClass('show');
  $('.header').addClass('none');
  $('.carousel-container').addClass('none');
  $('.topnews-container').addClass('show');
}else{
  $('.header-mobile').removeClass('show');
  $('.header').removeClass('none');
  $('.carousel-container').removeClass('none');
  $('.topnews-container').removeClass('show');
}

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
