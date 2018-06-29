module.exports = function( el ) {
	
	var $el = $(el),
      $input = $el.find('input'),
      timer;
  
  init();
  
  function init(){
    console.log('[article.js]');
    /*
      $('.event-article').each(function(){
        $text = $(this).find('.text');
        $excerpt = $text.find('.excerpt');
        $full = $text.find('.full');
        $more = $text.find('.article-more');
      
        $more.on('click', function(e){
          e.preventDefault();
          $excerpt.hide();
          $full.show();
        });
      })
  */
      
      $('.article-more').on('click', function(e){
        e.preventDefault();
        $article = $(this).closest('.text');
        $article.find('.excerpt').hide();
        $article.find('.full').show();
      });
 
  }
  

  
};
