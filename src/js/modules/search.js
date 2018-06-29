module.exports = function( el ) {
	
	var $el = $(el),
      $input = $el.find('input'),
      timer,
      $button = $el.find('button');
  
  init();
  
  function init(){
    $button.on('click', function(e){
      if(!$el.hasClass('active')){
        e.preventDefault();
      }
    });
    $el.on('click', function(){
      clearTimeout(timer);
      $el.addClass('active');
      $('footer').addClass('search-open');
    }).on('mouseout', function(){
      timer = setTimeout(function(){
        $el.removeClass('active');
      }, 2000);
    }).on('mouseover', function(){
      if ($el.hasClass('active'))
        clearTimeout(timer);
    });
  }
  

  
};
