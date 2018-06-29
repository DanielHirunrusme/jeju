module.exports = function( el ) {
	
	var $el = $(el),
  id = $el.attr('id');
  
  init();
  
  function init(){
    console.log('#' + id)
    player = new Plyr('#' + id, {
      controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'pip', 'airplay', 'fullscreen']
    });
    if($('body').hasClass('default')){
      $(window).on('resize', function(){
        sizeControls();
      });
      
      setTimeout(function(){
        sizeControls();
      }, 400);
      setTimeout(function(){
        sizeControls();
      }, 1000);
      setTimeout(function(){
        sizeControls();
      }, 2000);
      function sizeControls(){
        $('.plyr__controls').each(function(){
          var t = $(window).height() - $('.channel-caption').outerHeight() - $(this).outerHeight();
          $(this).css('top', t);
        });
      }
    }
  }

};
