<?php snippet('header') ?>

<main class="main search-results" role="main">
  
  <?php foreach($results as $result): ?>
      
     
      
      <?php
        
      $page = $site->pages($result->id());
      //print_r($result->parents());
      //print_r($result->parents()->count());
      if($result->parents()->count()){
        //echo $result->parent()->title();
      }
        
      ?>
  
  <?php endforeach; ?>
  <section class="section header">
    <div class="inner">
       <h2>Search Results: <em><?= esc($query) ?></em></h2>
    </div>
   </section>
   
  <ul>
    <?php foreach($pages->visible() as $p): ?>
      <?php
      $title = $p->title();
      $title = str_replace("<br>", " ", $title);
      $count = 0;
      ?>
      <?php foreach($results as $result): ?>
    
        <?php if($result->parent()->title() == $p->title() || $result->title() == $p->title()): ?>
          <?php $count++; ?>
        <?php endif; ?>
      <?php endforeach; ?>
      <li data-module-init="accordion"><h2 class="accordion-trigger"><?= $title ?> (<?= $count ?>)</h2>
      <?php foreach($results as $result): ?>

        <?php if( $result->parent()->title() == $p->title() || $result->title() == $p->title() ): ?>
          <?php if($result->template() != 'event' ):?>
            <div class="search-content">
              <h2 <?php if($result->text() == ''): ?>class="solo"<?php endif; ?>><a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a></h2>
              <?= $result->text()->excerpt(20, 'words') ?>
              <?php if($result->title() != $p->title()):?><a href="<?= $result->url() ?>" class="article-more">read more</a><?php endif; ?>
            </div>
         <?php else: ?>
           <div class="search-content">
           <h2 <?php if($result->text() == ''): ?>class="solo"<?php endif; ?>><a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a></h2>
           <?php foreach($result->builder()->toStructure() as $section): ?>
             <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
           <?php endforeach ?>
           </div>
         <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
      </li>
    <?php endforeach; ?>
    
    <?php
    /*
    
    
    <?php foreach($results as $result): ?>
    <li>
      <a href="<?= $result->url() ?>">
        <h2><?= $result->title()->html() ?></h2>
        <?php if($result->text() != ''):?>
          <div class="search-content"><?= $result->text()->excerpt(20, 'words') ?></div>
        <?php endif; ?>
      </a>
      
    </li>
    <?php endforeach ?>
    
    */
    ?>
    
  </ul>
</main>

<?php snippet('footer') ?>