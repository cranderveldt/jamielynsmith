jQuery(document).ready(function($){
  /* this function isn't getting called, it's like the on cycle post initialize never happens even though it does! */
  /* Probably has to do with using the .cycle-slidehosw class grrrrrrr */
  $('.cycle-slideshow').on('cycle-post-initialize', function() {
    $('.hero .cycle-pager').css('marginLeft','-' + $('.hero .cycle-pager').width()/2 + 'px');
    console.log('initialized');
  });
  $('.hero').imagesLoaded(function(){
    
    $('.cycle-slide').each(function(){
      var dimensions = {
        img:        $(this).find('img'),
        imgWidth:   $(this).find('img').width(),
        imgHeight:  $(this).find('img').height(),
        imgRatio:   $(this).find('img').width()/$(this).find('img').height(),
        container:  $(this),
        contWidth:  $(this).width(),
        contHeight: $(this).height(),
        contRatio:  $(this).width()/$(this).height()
      };
      console.log(dimensions);
      if(dimensions.imgRatio > dimensions.contRatio) {
        console.log('math dont lie');
        $(dimensions.img).width('auto');
        $(dimensions.img).height('100%');
        $(dimensions.img).css('left', '-' + (($(this).find('img').width() - $(this).width()) / 2) + 'px');
      }
    });
  });
});
