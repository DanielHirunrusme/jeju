module.exports = function( el ) {
	
	var $el = $(el);
  init();
  
  function init(){
    console.log('slick')
    if(!$el.hasClass('video-gallery')) {
      var $slick = $el.slick({
        adaptiveHeight: true,
        infinite: true,
        arrows: false,
        speed: 300,
        easing: 'linear',
      });
      $el.on('click', function(){
        $slick.slick('next');
      })
    } else {
      var $slick = $el.slick({
        adaptiveHeight: true,
        infinite: false,
        arrows: false,
        speed: 300,
        easing: 'linear',
        slidesToShow: 1,
        centerMode: false
      });
    }
    
    
  }
  

  
};
