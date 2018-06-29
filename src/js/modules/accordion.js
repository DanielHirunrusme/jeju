module.exports = function( el ) {
	
	var $el = $(el),
  $title = $el.find('.accordion-trigger'),
  $body = $el.find('.accordion-body');
  
  init();
  
  function init(){
    $title.on('click', function(){
      $el.find('.slick-initialized').slick('resize');
      //$body.toggle();
      
      setTimeout(function(){
        $el.find('.slick-initialized').slick('resize');
      }, 100)
      $el.toggleClass('visible');
    });
  }
  

  
};
