document.createElement('header');
document.createElement('nav');
document.createElement('menu');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');

// textarea count characters
function countChar(val) {
	var len = val.value.length;
	if (len >= 401) {
	  val.value = val.value.substring(0, 400);
	} else {
	  $('#charNum').text(400 - len + " characters left.");
	}
};

// scroll to top
$(document).ready(function(){ 

setTimeout(function(){
	$('.main-search').addClass('loaded');
},500)

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.gore1').fadeIn();
		} else {
			$('.gore1').fadeOut();
		}
	}); 
	
	$('.gore1').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});

// smooth scroling
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-83
        }, 1000);
        return false;
      }
    }
  });
});

// mobile menu
$('#menu-button').click(function() {
	$('.overlay').toggleClass('visina');
	$('#menu-button').toggleClass('top');
});

// search
$('.login-button').click(function(e) {
	e.stopPropagation();
	$(this).toggleClass('active');
	$('.cart-button').removeClass('active');
	$('.login-menu').toggleClass('show-menu');
	$('.cart-menu').removeClass('show-cart');
});
$('.cart-button').click(function(e) {
	e.stopPropagation();
	$(this).toggleClass('active');
	$('.login-button').removeClass('active');
	$('.login-menu').removeClass('show-menu');
	$('.cart-menu').toggleClass('show-cart');
});
$('html').click(function() {
	$('.login-menu').removeClass('show-menu');
	$('.cart-menu').removeClass('show-cart');
	$('.cart-button').removeClass('active');
	$('.login-button').removeClass('active');
});
$('.nav-other').click(function(e) {
	e.stopPropagation();
});


$('#log-overlay, .close').click(function(){
	$('#log-overlay').fadeOut();
	$('#reg-box').fadeOut();
	$('#login-box').fadeOut();
	$('#forgot-box').fadeOut();
	$('#myacc-box').fadeOut();
	$('#basket-popup').fadeOut();
});
$('.reg-form').click(function(){
	$('#log-overlay').fadeIn();
	$('#reg-box').fadeIn();
	$('#login-box').fadeOut();
	$('#forgot-box').fadeOut();
	$('#myacc-box').fadeOut();
});
$('.login-form').click(function(){
	$('#log-overlay').fadeIn();
	$('#reg-box').fadeOut();
	$('#login-box').fadeIn();
	$('#forgot-box').fadeOut();
	$('#myacc-box').fadeOut();
});
$('.forgot-form').click(function(){
	$('#log-overlay').fadeIn();
	$('#reg-box').fadeOut();
	$('#login-box').fadeOut();
	$('#forgot-box').fadeIn();
	$('#myacc-box').fadeOut();
});
$('.myacc-form').click(function(){
	$('#log-overlay').fadeIn();
	$('#reg-box').fadeOut();
	$('#login-box').fadeOut();
	$('#forgot-box').fadeOut();
	$('#myacc-box').fadeIn();
});
$('.modal').click(function(){
	$('.modal-overlay').fadeIn();
	$('.modal-box').fadeOut();
});
	$('#basket-popup').fadeOut();

$('.basket-button').click(function(){
	$('#log-overlay').fadeIn();
	$('#reg-box').fadeOut();
	$('#login-box').fadeOut();
	$('#forgot-box').fadeOut();
	$('#myacc-box').fadeOut();
	$('#basket-popup').fadeIn();
});


});