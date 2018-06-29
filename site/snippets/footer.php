
</div>
</div>
<!-- barba-containers -->



<footer class="footer cf" role="contentinfo">
  <!--
  <ul class="languages">
    <?php foreach($site->languages() as $language): ?>
    <li<?php e($site->language() == $language, ' class="active"') ?>>
      <a href="<?= $language->url() ?>">
        <?= html($language->code()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  -->
    
    
    <form class="MenuSearch" action="<?= $site->language()->url() ?>/search" data-module-init="search">
      <button class="search-icon" type="submit">
        <svg width="27px" height="26px" viewBox="0 0 27 26"
         version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(1.000000, 1.000000)" stroke="#FEFEFE" stroke-width="2.85">
                    <path d="M9.186,17.9469 C14.025,17.9469 17.947,14.0249 17.947,9.1859 C17.947,4.3469 14.025,0.4249 9.186,0.4249 C4.347,0.4249 0.425,4.3469 0.425,9.1859 C0.425,14.0249 4.347,17.9469 9.186,17.9469 Z" id="Stroke-1"></path>
                    <path d="M24.6832,23.5843 L16.2582,15.1593" id="Stroke-3"></path>
                </g>
            </g>
        </svg>
      </button>
      
      <input type="search" name="q" value="">

      
    </form>
  
    <ul class="social">
      <?php if($site->facebook() != ''): ?><li><a href="<?php echo $site->facebook(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
      <?php if($site->youtube() != ''): ?><li><a href="<?php echo $site->youtube(); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
      <?php if($site->blog() != ''): ?><li><a href="<?php echo $site->blog(); ?>" target="_blank">
      

      <svg width="318px" height="318px" viewBox="0 0 318 318" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Artboard" transform="translate(-129.000000, -108.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g id="Naver-blog-icon" transform="translate(129.000000, 108.000000)">
                      <path d="M187.658179,212.68 L251.73,212.68 C263.139519,212.664105 274.074977,208.114384 282.128654,200.032573 C290.182332,191.950762 294.693891,180.999506 294.67,169.59 L294.67,67.38 C294.693891,55.9704945 290.182332,45.0192382 282.128654,36.9374273 C274.074977,28.8556164 263.139519,24.3058953 251.73,24.29 L65.73,24.29 C54.3222146,24.3085458 43.3893266,28.8594363 35.3378114,36.9409595 C27.2862962,45.0224826 22.7761081,55.9722245 22.8,67.38 L22.8,169.59 C22.7761081,180.997775 27.2862962,191.947517 35.3378114,200.029041 C43.3893266,208.110564 54.3222146,212.661454 65.73,212.68 L129.776986,212.68 L151.65,248.32 C151.863391,248.669262 152.100621,249.003389 152.36,249.32 C153.670152,251.585017 156.088361,252.979867 158.705,252.979867 C161.321639,252.979867 163.739848,251.585017 165.05,249.32 C165.336371,248.998324 165.58159,248.642253 165.78,248.26 L187.658179,212.68 Z M317.48,254 C317.477348,270.840328 310.784326,286.98972 298.873603,298.894817 C286.96288,310.799914 270.810327,317.485305 253.97,317.48 L63.49,317.48 C28.4293461,317.48 0.00552223246,289.060653 0,254 L0,63.5 C-4.34821516e-07,28.4338233 28.4238237,0.00552223256 63.49,-3.00568968e-14 L253.97,-3.00568968e-14 C270.81298,-0.00265243777 286.967022,6.68633596 298.877745,18.5951835 C310.788468,30.504031 317.48,46.6570201 317.48,63.5 L317.48,254 Z" id="Combined-Shape"></path>
                      <path d="M83.18,99.18 C77.8272455,99.5722255 72.8006104,101.900688 69.04,105.73 L69.04,79.38 L52.39,79.38 L52.39,148.68 L69.26,148.68 L69.26,143.25 C69.26,143.25 73.26,150.41 83.26,150.41 C83.26,150.41 106.72,149.55 106.72,124.54 C106.64,124.54 105.78,99.18 83.18,99.18 Z M79.52,135.77 C73.6145097,135.747921 68.8435011,130.945605 68.8600466,125.040097 C68.8765921,119.134588 73.674435,114.359082 79.5799563,114.370093 C85.4854776,114.381105 90.2654779,119.174471 90.26,125.08 C90.2573628,127.923027 89.1233833,130.648121 87.1083737,132.65375 C85.0933641,134.659378 82.3630085,135.780629 79.52,135.77 Z" id="Shape"></path>
                      <path d="M111.99,77.78 L111.99,93.83 C111.99,93.83 119.58,93.48 119.58,107.63 L119.58,148.68 L135.58,148.68 L135.58,103.84 C135.58,103.84 136.31,77.78 111.99,77.78 Z" id="Shape"></path>
                      <path d="M174.85,99.38 C174.85,99.38 147.35,99.38 147.35,125.07 C147.35,125.07 146.46,150.4 174.85,150.4 C174.85,150.4 202.98,150.4 202.98,125.07 C202.98,125.08 203.9,99.38 174.85,99.38 Z M174.85,135.76 C170.520437,135.764044 166.615128,133.158557 164.956407,129.159334 C163.297686,125.160112 164.212497,120.555427 167.273962,117.493962 C170.335427,114.432497 174.940112,113.517686 178.939334,115.176407 C182.938557,116.835128 185.544044,120.740437 185.54,125.07 C185.54001,130.971645 180.761635,135.758969 174.86,135.77 L174.85,135.76 Z" id="Shape"></path>
                      <path d="M248.91,101.07 L248.91,105.73 C245.407412,101.654466 240.283544,99.3340853 234.91,99.39 C234.91,99.39 211.36,98.39 211.36,124.9 C211.36,124.9 211.1,149.59 234.26,149.59 C234.26,149.59 243.71,149.97 248.88,143.25 L248.88,147.13 C248.88,147.13 250.05,159.29 238.27,159.29 L234.27,159.29 L234.27,174.04 L240.74,174.04 C240.74,174.04 265.06,174.3 265.06,148.04 L265.06,101.04 L248.91,101.07 Z M238.96,135.77 C234.630437,135.774044 230.725128,133.168557 229.066407,129.169334 C227.407686,125.170112 228.322497,120.565427 231.383962,117.503962 C234.445427,114.442497 239.050112,113.527686 243.049334,115.186407 C247.048557,116.845128 249.654044,120.750437 249.65,125.08 C249.65,130.983924 244.863924,135.77 238.96,135.77 Z" id="Shape"></path>
                  </g>
              </g>
          </g>
      </svg>
      
      </a></li><?php endif; ?>
    </ul>
    
    <?php if($site->subscribe() != ''): ?>
      <a class="footer-link" href="<?= $site->subscribe() ?>" target="_blank">Subscribe</a>
    <?php endif; ?>
    
    <?php if($site->contact() != ''): ?>
      <a class="footer-link" href="<?= $site->contact() ?>" target="_blank">Contact Us</a>
    <?php endif; ?>
  
</footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.3.20/plyr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.3.20/plyr.polyfilled.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.12.4.js"></script>   
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBWyGmaN_v3DoCjRDlnlsmYeCb5BXlnK78">
      </script>
  <?= js('assets/js/snazzy-info-window.min.js') ?>
  <script>
        $(function() {
          var coords = new google.maps.LatLng(33.38797, 126.568077);
            var map = new google.maps.Map($('.map-canvas')[0], {
                zoom: 10,
                zoomControl: false,
                scaleControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                center: coords,
                disableDefaultUI: true
            });

            <?php $count = 0; ?>
            <?php $map = $site->find('map') ?>
            <?php foreach($map->builder()->toStructure() as $section): ?>
           
            var marker_<?= $count ?> = new google.maps.Marker({
                map: map,
                icon: "<?= $site->url() ?>/assets/images/marker_small.png",
                position: new google.maps.LatLng(<?= $section->latitude() ?>, <?= $section->longitude() ?>)
            });
            var ct = "<h1><?= $section->title() ?></h1>";
            ct += "<div class='infobody'><?= $section->text()->kt() ?></div>";
            ct += "<img src='<?= $map->image($section->image())->url() ?>' />";
            //alert("ct:");
            console.log(ct); 
            var info_<?= $count ?> = new SnazzyInfoWindow({
                marker: marker_<?= $count ?>,
                content: ct
            });
            <?php endforeach ?>

            //console.log(marker_0);
            
            /*
            var marker = new google.maps.Marker({
                map: map,
                position: coords
            });
            var info = new SnazzyInfoWindow({
                marker: marker,
                content: 'Your snazzy content.'
            });
            info.open();
            */
            
     
        });    
      </script>
  <?= js('assets/main.min.js'); ?>
  
  <script type="text/javascript">
  $(document).bind("mobileinit", function () {
      $.mobile.ajaxEnabled = false;
        var silentScroll = $.mobile.silentScroll;
        $.mobile.silentScroll = function( ypos ) {
          if ( $.type( ypos ) !== "number" ) {
            // FIX : prevent auto scroll to top after page load
          return;
          } else {
          silentScroll.apply(this, arguments);
        }
      }
  });
  </script>

  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
  
  <script type="text/javascript">
    /*
    $(document).ready(function(){
      
      $('#bl-logo').on('click', function(){
        $('body, html').animate({scrollTop: 1}, 500);
      });
      
      $('#br-logo').on('click', function(){
        $('body, html').animate({scrollTop: 1}, 500);
      });

        
        var isSwitchLogo = false;
        
       
          $(window).on('scroll', $.throttle( 500, switchLogo ) )
        
        
        $(window).on('scroll', function(){
          if($(window).scrollTop() > $('#bl-logo-main').height()) {
            $('#bl-logo-main').css('opacity', 0);
            $('#bl-logo').css('opacity', 1);
          } else {
            $('#bl-logo-main').css('opacity', 1);
            $('#bl-logo').css('opacity', 0);
          }
        });
        
        if ($(window).width() > 767) {
          $(window).on('mousemove', function(e){
            //linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 100%)
          
            var _y = -1 * ($(window).height() - e.clientY);
            var perc = e.clientY/$(window).height() * 100;
            $('.gradient-gradient').css({background: "linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(255,255,255,1) "+ perc +"%)" });
            $('.gradient-overlay').css('transform', 'translate(0px, '+ _y +'px)');
            if(e.clientY > $(window).height() - $(window).height()/4 && !isSwitchLogo) {
              switchLogo();
              console.log('change logo')
            }
          
            if(e.clientY < $(window).height() - $(window).height()/4 && isSwitchLogo) {
              isSwitchLogo = false;
              console.log('change back')
            }
          
          
          });
        }
        
        function switchLogo(){
          isSwitchLogo = true;
          var total = 8;
          var rand = Math.floor(Math.random() * total);
          $('#bl-logo').find('img').removeClass('active');
          $('#bl-logo').find('img').eq(rand).addClass('active');
          $('#bl-logo-main').find('div').removeClass('active');
          $('#bl-logo-main').find('div').eq(rand).addClass('active');
        }
        
        $(".hamburger").click(function () {
          $(this).toggleClass("active");
          $('#top-menu').toggleClass('active');
        });
        
        $('.artist-link').on('vclick', function(e){
          e.preventDefault();
          var artist = $(this).data('artist-link');
          
          $('body, html').stop().animate({ scrollTop: $('article[data-artist-section="'+ artist +'"]').offset().top  - $(window).height()/4  }, 500, 'linear')
        });
        
        
        $('.gallery').slick({
          speed: 300,
          slidesToShow: 1,
          adaptiveHeight: true,
          dots: true,
          dotsClass: 'custom_paging',
          customPaging: function (slider, i) {
              //FYI just have a look at the object to find available information
              //press f12 to access the console in most browsers
              //you could also debug or look in the source
              console.log(slider);
              return  (i + 1) + '/' + slider.slideCount;
          }
        });
        
        $('.gallery').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            //$status.text(i + '/' + slick.slideCount);
        });
        
        $('img').on('mouseover', function(){
          //$('body').addClass('gradient-dim');
        }).on('mouseout', function(){
          //$('body').removeClass('gradient-dim');
        })
        
        $('.slick-slider').on('vclick', '.slick-slide', function (e) {
                    e.stopPropagation();
                    var index = $(this).index();
                    if ($('.slick-slider').slick('slickCurrentSlide') !== index) {
                          $('.slick-slider').slick('slickGoTo', index);
                    }
                });
        
        
        $('.nav-link').on('vclick', function(e){
          e.preventDefault();
          $('.hamburger').removeClass("active");
          $('#top-menu').removeClass('active');
          $section = $('#' + $(this).data('uri'));
          $('body, html').stop().animate({ scrollTop: $section.position().top - $('main').offset().top - $(window).height()/4 }, 500, 'linear');
        });
    });
    */
  </script>
  
</body>
</html>