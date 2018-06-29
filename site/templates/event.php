<?php snippet('header') ?>

  <main class="main" role="main">
    
    <article class="article single wrap">
        
        <h1 class="article-title">
          <?= $page->title()->html() ?>
        </h1>

        <h2 class="article-date"><?= $page->date('m.d.y') ?></h2>
      
      <?php snippet('coverimage', $page) ?>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </article>
    
    <?php snippet('prevnext', ['flip' => true]) ?>
    
  </main>

<?php snippet('footer') ?>