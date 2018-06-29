module.exports = function( el ) {
	
	var $el = $(el),
  $window = $(window),
  $months = $('#months'),
  $days = $('#days'),
  $years = $('#years'),
  monthSet = false,
  daySet = false,
  yearSet = false,
  currMonth = undefined,
  currDay = undefined,
  currYear = undefined,
  availMonths = [],
  availDays = [],
  availYears = [];
  
  init();
  
  function init(){
    $months.change(function(){
        if ($('#months').val() != 'MM'){
          currMonth = $('#months').val();
          monthSet = true;
          currDay = undefined;
          daySet = false;
          currYear = undefined;
          yearSet = false;
          $days.find('option').first().prop('selected', true);
          $years.find('option').first().prop('selected', true);
        } else {
          currMonth = undefined;
          monthSet = false;
          currDay = undefined;
          daySet = false;
          currYear = undefined;
          yearSet = false;
        }
        updateToggles();
        filterArticles();
    });
    
    $days.change(function(){
        if ($days.val() != 'DD'){
          currDay = $days.val();
          daySet = true;
          currYear = undefined;
          
          
        } else {
          currDay = undefined;
          daySet = false;
        }
        currYear = undefined;
        yearSet = false;
        $years.find('option').first().prop('selected', true);
        $years.removeClass('active');
        updateToggles();
        filterArticles();
    });
    
    $years.change(function(){
        if ($years.val() != 'YYYY'){
          currYear = $years.val();
          yearSet = true;
          console.log(currYear)
        } else {
          currYear = undefined;
          yearSet = false;
        }
        updateToggles();
        filterArticles();
    });
  }
   
  function filterArticles(){
    $('.article').each(function(){
      $a = $(this);
      //month set
      if(currMonth != undefined){
        if($a.data('month') == currMonth){
          $a.addClass('active').show();
        } else {
          $a.removeClass('active').hide();
        }
        if(currDay != undefined){
          if($a.data('day') == currDay){
            $a.addClass('active').show();
          } else {
            $a.removeClass('active').hide();
          }
          if(currYear != undefined){
            if($a.data('year') == currYear && $a.data('day') == currDay && $a.data('month') == currMonth){
              $a.addClass('active').show();
            } else {
              $a.removeClass('active').hide();
            }
          } else {
            if($a.data('month') == currMonth){
              $a.addClass('active').show();
            } else {
              $a.removeClass('active').hide();
            }
            if($a.data('day') == currDay){
              $a.addClass('active').show();
            } else {
              $a.removeClass('active').hide();
            }
          }
        } else {
          if($a.data('month') == currMonth){
            $a.addClass('active').show();
          } else {
            $a.removeClass('active').hide();
          }
        }
      } else {
        $a.removeClass('active').show();
      }
    
    });
    
    updateToggles();
  }
  
  function updateToggles(){
    
    availMonths = [];
    availDays = [];
    availYears = [];
    
    $('.article.active').each(function(){
      var month = $(this).data('month');
      var day = $(this).data('day');
      var year = $(this).data('year');
      availMonths.push(month);
      availDays.push(day);
      availYears.push(year);
    });
    
    availMonths = $.unique(availMonths);
    availDays = $.unique(availDays);
    availYears = $.unique(availYears);
    
    // update options based on available articles
    if (monthSet){
      $days.addClass('active');
      
      //show available days
      $days.find('option').hide();
      for(var i=0; i<availDays.length; i++){
        $days.find('option').each(function(){
          if($(this).val() == availDays[i]) $(this).show();
        });
      }
      $days.find('option').first().show();
      
      if(daySet){
        $years.addClass('active');
        //show available years
        $years.find('option').hide();
        for(var i=0; i<availYears.length; i++){
          $years.find('option').each(function(){
            if($(this).val() == availYears[i]) $(this).show();
          });
        }
        $years.find('option').first().show();
      }
    } else {
      //month not set show all
      $days.removeClass('active');
      $years.removeClass('active');
      $months.find('option').show();
      $days.find('option').show();
      $years.find('option').show();
      $days.find('option').first().prop('selected', true);
      $years.find('option').first().prop('selected', true);
    }
    
    /*
    $('.article.active').each(function(){
      var month = $(this).data('month');
      var day = $(this).data('day');
      var year = $(this).data('year');
      availMonths.push(month);
      availDays.push(day);
      availYears.push(year);
    });
    
    availMonths = $.unique(availMonths);
    availDays = $.unique(availDays);
    availYears = $.unique(availYears);
    
    console.log(monthSet)
    
    if (!monthSet) $months.find('option').show();
    else $months.find('option').hide();
    
    $days.find('option').hide();
    $years.find('option').hide();
    
    for(var i=0; i<availMonths.length; i++){
      $months.find('option').each(function(){
        if($(this).val() == availMonths[i]) $(this).show();
      });
    }
    
    for(var i=0; i<availDays.length; i++){
      $days.find('option').each(function(){
        if($(this).val() == availDays[i]) $(this).show();
      });
    }
    
    for(var i=0; i<availYears.length; i++){
      $years.find('option').each(function(){
        if($(this).val() == availYears[i]) $(this).show();
      });
    }
    
    $months.find('option').first().show();
    $days.find('option').first().show();
    $years.find('option').first().show();
    */
    
  }
  

  
};
