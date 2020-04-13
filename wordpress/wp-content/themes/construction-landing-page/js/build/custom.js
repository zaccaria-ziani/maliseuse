jQuery(document).ready(function($){
	$('.about .col .text-holder').matchHeight();
	$('.our-services .col .holder').matchHeight();
	$('.testimonial .col').matchHeight();
	$('.testimonial blockquote').matchHeight();
	  $(window).on("load",function(){
	      $(".our-projects .col .text-holder").mCustomScrollbar();
	  });

    //mobile-menu
    $('.menu-opener').click(function(){
        $('body').addClass('menu-open');
    });

    $('.overlay').click(function(){
        $('body').removeClass('menu-open');
    });

    $('.mobile-menu').prepend('<div class="close-mobile-menu">Close</div>');

    $('.close-mobile-menu').click(function(){
        $('body').removeClass('menu-open');
    });

    $('.mobile-menu .primary-navigation ul .menu-item-has-children').append('<div class="open-submenu"></div>');
    $('.mobile-menu .primary-navigation ul li .open-submenu').click(function(){
        $(this).prev().slideToggle();
        $(this).toggleClass('active');
    });

    //accessible menu for edge
    $("#site-navigation ul li a").focus(function(){
       $(this).parents("li").addClass("focus");
   }).blur(function(){
       $(this).parents("li").removeClass("focus");
   });
});
