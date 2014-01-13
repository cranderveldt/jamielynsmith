
jQuery(document).ready(function($){
  $('.slideshow').on('cycle-pre-initialize', function(e, opts) {
    $('.hero .pager').css('marginLeft','-' + $('.hero .pager').width()/2 + 'px');
    $('.slideshow .slide img').each(function(){
      $(this).after('<div class="slide-wrapper" style="background-image: url(' + $(this).data('bg') + ')"><div class="slide-image" style="background-image: url(' + $(this).prop('src') + ')"></div></div>');
      $(this).remove();
    });
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
  if ($('#sticky-sidebar').length > 0) {
    $('#sticky-sidebar-target').html($('#single-sidebar').html());
    $(window).scroll(function(){
      var scrollY = $(window).scrollTop();
      if (scrollY >= 24) {
        $('#sticky-sidebar').show();
        $('#single-sidebar').hide();
      } else {
        $('#sticky-sidebar').hide();
        $('#single-sidebar').show();
      }
    });
  }
});
