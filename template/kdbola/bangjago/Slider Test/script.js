// var slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
// }




// $('.sv-slider .owl-carousel').owlCarousel({
//   autoplay: false,
//   autoplayHoverPause: true,
//   dots: false,
//   nav: true,
//   thumbs: true,
//   thumbImage: true,
//   thumbsPrerendered: true,
//   thumbContainerClass: 'owl-thumbs',
//   thumbItemClass: 'owl-thumb-item',
//   loop: true,
//   navText: [
//     "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
//     "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
//   ],
//   items: 1,
//   responsive: {
//     0: {
//       items: 1,
//     },
//     768: {
//       items: 1,
//     },
//     992: {
//       items: 1,
//     }
//   }
// });


$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    sync: "#carousel"
  });
});