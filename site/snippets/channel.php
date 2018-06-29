<?php
  
/*
*
* Get all the articles in the Channel blog then create a Vimeo video gallery from it
*
*/
  
?>

<button class="close-channel svg-link" data-href="<?= $site->page('channel')->url() ?>" >

  <svg width="31px" height="33px" viewBox="0 0 31 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="landing_artists2" transform="translate(-176.000000, 1.000000)" stroke="#FEFEFE" stroke-width="3">
              <g id="Page-1" transform="translate(177.000000, 0.000000)">
                  <path d="M0.0906,0.0298 L28.6726,30.2998" id="Stroke-1"></path>
                  <path d="M28.6728,0.0299 L0.0908,30.2999" id="Stroke-3"></path>
              </g>
          </g>
      </g>
  </svg>
</button>

<section id="ChannelGallery" class="video-gallery" data-module-init="slick">
  
  <?php
    // fetch the basic set of articles
    $channels = $site->page('channel')->children()->visible()->flip();
  ?>
  

  <?php foreach($channels as $channel): ?>
    
    <div class="video-wrapper">
    <div class="channel-video" data-module-init="plyr" id="channel-player-home-<?php echo $channel->uid() ?>">
      <?= $channel->video_embed() ?>
      
    </div>
    <div class="channel-caption"><span><?= $channel->title() ?></span></div>
    </div>
    

  <?php endforeach; ?>
  
</section>