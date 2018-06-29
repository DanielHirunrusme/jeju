var settings = require( "modules/settings" );
	
module.exports = function( el ) {
		var $el = $( el ),
		$window = $( window ),
		resizeTimer;
 
 
 	  init();
 
		function init(){
			
      $(function() {
         $(window).unload(function() {
            var scrollPosition = $(".ui-page").scrollTop();
            var scrollPositionMenu = $("#top-menu").scrollTop();
            localStorage.setItem("scrollPosition", scrollPosition);
            localStorage.setItem("scrollPositionMenu", scrollPositionMenu);
            localStorage.setItem("url", window.location.href);
         });
         if(localStorage.scrollPosition) {
            $("#top-menu").scrollTop(localStorage.getItem("scrollPositionMenu"));
            if(window.location.href == localStorage.getItem("url"))
              $(".ui-page").scrollTop(localStorage.getItem("scrollPosition"));
         }
      });
		}
		
		
		
};
  