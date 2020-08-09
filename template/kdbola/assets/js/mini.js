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

    var num = 30; //number of pixels before modifying styles

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