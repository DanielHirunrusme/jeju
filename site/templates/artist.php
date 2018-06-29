<?php snippet('header') ?>

<main class="main" role="main">
  <article class="artist-article" >

      <div class="inner">
        <h1 class="article-title">
          <span ><?= $page->title()->html() ?></span><br>
          <span class="location"><?= $page->lives()->html() ?></span>
        </h1>
      </div>
        
      <div>
        <div class="inner">
          <?= $page->text()->kirbytext() ?>
        </div>
        <?php foreach($page->builder()->toStructure() as $section): ?>
          <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
        <?php endforeach ?>
      </div>
      
    </div>
    
    

  </article>
  
  
</main>

<?php snippet('footer') ?>