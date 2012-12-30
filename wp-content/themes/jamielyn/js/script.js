
jQuery(document).ready(function($){
  $('.slideshow').on('cycle-pre-initialize', function(e, opts) {
    $('.hero .pager').css('marginLeft','-' + $('.hero .pager').width()/2 + 'px');
    $('.slideshow .slide img').each(function(){
      $(this).after('<div class="slide-image" style="background-image: url(' + $(this).attr('src') + ')"></div>');
      $(this).remove();
    });
    console.log('initialized');
  });
  $('.slideshow').cycle({
    slides: '>.slide',
    pagerTemplate: '<span></span>',
    swipe: true,
    next: '>.next',
    prev: '>.prev',
    pager: '>.pager',
    fx: 'scrollHorz'
  });
});
