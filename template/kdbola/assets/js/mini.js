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

