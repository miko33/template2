$( document ).ready(function() {
  if($("#slider-post").length){
    $("#slider-post .main-slider-img").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    autoplay: true,
    adaptiveHeight: true,
    arrows: true,
    asNavFor: '.post-thumbnails',
   });
  $('#slider-post .post-thumbnails').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      asNavFor: '#slider-post .main-slider-img',
      dots: false,
      focusOnSelect: true,
      infinite: false,
   });
   $('.main-slider-img').slickLightbox({
    src: 'src',
    itemSelector: 'img'
  });
  }
});