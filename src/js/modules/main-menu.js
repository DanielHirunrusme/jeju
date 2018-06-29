var settings = require( "modules/settings" );

module.exports = function( el ) {
	
	var $el = $(el),
      $window = $(window),
      timer;
  
  init();
  
  function init(){
    //setMenu();
    //$window.on('resize', setMenu);
    setActions();
    setGradientAnimations();
    setAsideTrigger();
  }
  
  function setAsideTrigger(){
    $('.mobile-header').on('click', function(e){
      e.preventDefault();
      if(!$('body').hasClass('artists')){
        $('#top-menu').hide();
        $('body').toggleClass('aside-shown');
      }
      
    });
    
    if(settings.isMobile){
      $('.home-link').on('click', function(e){
        e.preventDefault();
        $('#top-menu').toggle();
      });
    }
  }
  
  function growRadial(gradient){
    var $gradient = $(gradient);
    var r = Number( $gradient.attr('r').split('%').join('') );
    animationInt = setInterval(function(){
      if($gradient.data('grow') == 'up'){
        if (r < 100){
          var new_r = r++;
          $gradient.attr('r', new_r + '%');
        } else {
          $gradient.data('grow', 'down');
        }
      } else {
        if(r > 0){
          var new_r = r--;
          $gradient.attr('r', new_r + '%');
        } else {
          $gradient.data('grow', 'up');
        }
      }
    }, 20); 
  }
  
  function growVertical(gradient){
    var $gradient = $(gradient);
    var r = Number( $gradient.attr('y1').split('%').join('') );
    var y2 = Number( $gradient.attr('y2').split('%').join('') );
    console.log($gradient)
    animationInt = setInterval(function(){
      if($gradient.data('grow') == 'up'){
        if (r < 100){
          var new_r = r++;
          var new_y2 = y2++;
          $gradient.attr('y1', new_r + '%');
          $gradient.attr('y2', new_y2 + '%');
        } else {
          $gradient.data('grow', 'down');
        }
      } else {
        if(r > 0){
          var new_r = r--;
          var new_y2 = y2--;
          $gradient.attr('y1', new_r + '%');
          $gradient.attr('y2', new_y2 + '%');
        } else {
          $gradient.data('grow', 'up');
        }
      }
    }, 20); 
  }
  
  function growHorizontal(gradient){
    var $gradient = $(gradient);
    var x1 = Number( $gradient.attr('x1').split('%').join('') );
    var x2 = Number( $gradient.attr('x2').split('%').join('') );
    console.log($gradient)
    animationInt = setInterval(function(){
      if($gradient.data('grow') == 'up'){
        if (x2 < 100){
          var new_x1 = x1++;
          var new_x2 = x2++;
          $gradient.attr('x1', new_x1 + '%');
          $gradient.attr('x2', new_x2 + '%');
        } else {
          $gradient.data('grow', 'down');
        }
      } else {
        if(x2 > 0){
          var new_x1 = x1--;
          var new_x2 = x2--;
          $gradient.attr('x1', new_x1 + '%');
          $gradient.attr('x2', new_x2 + '%');
        } else {
          $gradient.data('grow', 'up');
        }
      }
    }, 20); 
  }
  
  function stopAnimation(){
    clearInterval(animationInt);
  }
  
  function setGradientAnimations(){
    
    
    $('linearGradient').each(function(){
      var x1 =  $(this).attr('x1').split('%').join('')
      var y1 =  $(this).attr('y1').split('%').join('')
      var x2 =  $(this).attr('x2').split('%').join('')
      var y2 =  $(this).attr('y2').split('%').join('')
      $(this).attr('data-x1', x1).attr('data-y1', y1).attr('data-x2', x2).attr('data-y2', y2);
      $(this).attr('data-grow', 'up');
    });
  
    $('radialGradient').each(function(){
      var r = $(this).attr('r').split('%').join('');
      $(this).attr('data-r', r);
      $(this).attr('data-grow', 'up');
    });
    
    var animationInt;
    $('.radial-link').on('mouseover', function(){
      var $gradient = $('#' + $(this).data('gradient'));
      growRadial($gradient);
    }).on('mouseout', function(){
      stopAnimation();
    });
    
    $('.radial-link.active').each(function(){
      var $gradient = $('#' + $(this).data('gradient'));
      growRadial($gradient, false);
    });
    
    $('.vertical-link').on('mouseover', function(){
      var $gradient = $('#' + $(this).data('gradient'));
      growVertical($gradient);
    }).on('mouseout', function(){
      stopAnimation();
    });
    
    $('.vertical-link.active').each(function(){
      var $gradient = $('#' + $(this).data('gradient'));
      growVertical($gradient, false);
    });
    
    $('.horizontal-link').on('mouseover', function(){
      var $gradient = $('#' + $(this).data('gradient'));
      growHorizontal($gradient);
    }).on('mouseout', function(){
      stopAnimation();
    });
    
    $('.horizontal-link.active').each(function(){
      var $gradient = $('#' + $(this).data('gradient'));
      growHorizontal($gradient, false);
    });
    
  }
  
  function setActions(){
    $('#channel-main').on('click', showChannel);
    $('.close-channel').on('click', function(){
      $('body').removeClass('show-channel');
    })
    $('.svg-link').on('click', function(){
      var href = $(this).data('href');
      window.location.href = href;
    });
  }
  
  function showChannel(){
    $('body').addClass('show-channel');
  }
  
  function setMenu(){
    var stroke = 8;
    $artists = $('#Artists-svg');
    $about = $('#About-svg')
    $('#About-svg').css('top', $artists.height() - stroke);
    $('#Visit-svg').css('top', $artists.height() - stroke);
    $('#Events-svg').css('top', $about.position().top + $about.height() - stroke);
  }
  
};
