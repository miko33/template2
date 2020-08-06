$(function() {
  // set variables
  var duration = 3000;
  var transTime = 600;
  var slides = $("#cycling-promo .slider-viewport ul.slide-images li").length;
  var index = 1;

  // add in the first slide
  $("#cycling-promo .slider-viewport ul.slide-images li:nth-child(1)").fadeIn(transTime);
  $("#cycling-promo nav.thumb-nav ul li:nth-child(1)").addClass("active");
 
  index++;

  function fadeSlides() {
    var imagePosition = "#cycling-promo .slider-viewport ul.slide-images li:nth-child(" + index + ")";
    var navPosition = "#cycling-promo nav.thumb-nav ul li:nth-child(" + index + ")";

    $(imagePosition).siblings().fadeOut(transTime);
    $(imagePosition).fadeIn(transTime);

    $(navPosition).siblings().removeClass("active");
    $(navPosition).addClass("active");
  }

  // Slide the images
  function loopIndex() {
    if (index <= slides) {
      fadeSlides();
    }

    // if(index == 0) { index = slides; }
    // if(index < 0)  { index = 0; }
    index++;

    if (index > slides) {
      index = 1;
    }
  }

  var reload = setInterval(loopIndex, duration);

  $('#cycling-promo nav.thumb-nav ul li').click(function() {
    clearInterval(reload);
    index = $(this).index() + 1;

    fadeSlides();
    reload = setInterval(loopIndex, duration);
    index++;
    return false;
  })

});

function getImageSizes() {
  $("#cycling-promo .slider-viewport ul.slide-images li").each(function() {
    var $img = $(this).find("img");
    var imageHeight = $img.height();

    if (imageHeight > 0) {
      var slideHeight = imageHeight;
      $("#cycling-promo.slide-image-wrapper .slider-viewport").css("height", slideHeight);
      console.log(slideHeight);
    }
  });
}

$(document).ready(function() {
  console.log('document.ready :');
  getImageSizes();
  $(window).resize(function() {
    console.log('window.resize :');
    getImageSizes();
  });
});