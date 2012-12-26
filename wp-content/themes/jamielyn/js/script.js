// JavaScript Document
jQuery(document).ready(function($){
  $('#menu a').each(function(){
    $(this).html('<span class="ss-icon ss-standard">' + $(this).attr('title') + '</span><span class="title">' + $(this).text() + '</span>');
  });
  $('#menu a span.title').each(function(){
    $(this).css('left', '-' + ((($(this).width() + 10)/2) + 14) + 'px');
  });
  $('#footer-nav a').each(function(){
    $(this).html('<span class="ss-icon ss-standard">' + $(this).attr('title') + '</span>');
  });
});
