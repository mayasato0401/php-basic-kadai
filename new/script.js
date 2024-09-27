
$(function() {

  $('#menubotton').click(function(){
      $('#hamburger_back').fadeIn();
  });
  $('#sp-navclose').click(function(){
    $('#hamburger_back').fadeOut();
  });


$('#firstview_slider').slick({
slidesToShow: 3,
slidesToScroll: 3,
arrows: true,
dots: true,
infinite: true,
swipe: true,
autoplay: true,
autoplaySpeed: 5000,
prevArrow: '<img class="slide-arrow prev-arrow" src="img/prev-arrow.png" alt="前へボタン">',
nextArrow: '<img   class="slide-arrow next-arrow" src="img/next-arrow.png" alt="次へボタン">',

responsive:[{
breakpoint: 431,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
}
}],
respondTo: 'slider'
});


$("#stopbutton").on('click', function(){
  if($(this).hasClass("paused")){
    $("#firstview_slider").slick("slickPlay");
    $(this).removeClass("paused");
    $('#button-img').attr("src", "img/stopbutton.png").attr("alt", "ストップボタン");
  } else {
    $("#firstview_slider").slick("slickPause");
    $(this).addClass("paused");
    $('#button-img').attr("src", "img/startbutton.png").attr("alt", "スタートボタン");
  }
});


$('#pickup_content').slick({
slidesToShow: 4,
slidesToScroll: 3,
arrows: true,
dots: true,
infinite: true,
autoplay: true,
autoplaySpeed: 5000,
prevArrow: '<img class="slide-arrow prev-arrow" src="img/prev-arrow.png" alt="前へボタン">',
nextArrow: '<img   class="slide-arrow next-arrow" src="img/next-arrow.png" alt="次へボタン">',

responsive: [{
  breakpoint: 431,
  settings: {
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 1,
  slidesToScroll: 4,
  }
}], 
respondTo: 'slider'
});

var pagetop = $('#pagetop');
pagetop.hide();
$(window).scroll(function (){
  if($(this).scrollTop() > 100){
    pagetop.fadeIn();
  } else {
    pagetop.fadeOut();
  }
});
pagetop.click(function () {
  $('body, html').animate({ scrollTop: 0 }, 500);
  return false;
});



  $('#openModal').click(function(){
      $('#modalArea').fadeIn();
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });



$('.tab-item').on('click', function() {
  var tabIndex = $('.tab-item').index(this);
  $('.tab-item, .panel-item').removeClass('is-active');
  $('.panel-item').eq(tabIndex).addClass('is-active');
  $(this).addClass('is-active');
});


});	