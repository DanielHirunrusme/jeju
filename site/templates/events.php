<?php snippet('header') ?>

  <main class="main blog <?= strtolower($page->title()) ?>" role="main" data-module-init="articles">
    
    <aside>
      <?php

      // fetch all tags
      $tags = $page->children()->visible()->pluck('tags', ',', true);

      ?>
      <ul class="tags">
        <?php $pageTags = $page->tags()->split(); ?>
        <?php $p = kirby()->request()->params()->tag(); ?>
        
        <?php foreach($tags as $tag): ?>
        <li <?php ecco($tag == $p, 'class="active"') ?>>
          <a href="<?= url( './' . url::paramsToString(['tag' => $tag])) ?>">
            <?= html($tag) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </aside>

    <section class="wrap">

        
        <?php
        // fetch the basic set of articles
        $articles = $page->children()->visible()->flip();
        
        // add the tag filter
        if($tag = param('tag')) {
          $articles = $articles->filterBy('tags', $tag, ',');
        }
        ?>
        
        <?php foreach($articles as $article): ?>

          <article class="event-article article">

            
              <h1 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h1>
              
              <ul class="event-tags">
                <?php foreach($article->tags()->split(',') as $tag): ?>
                <li><?php echo $tag ?> <span>/</span></li>
                <?php endforeach ?>
              </ul>
        
            <div class="event-image">
              <?php snippet('coverimage', $article) ?>
              <h4><?= $article->location()->kt()?></h4>
            </div>

            <div class="text">
              <div class="excerpt">
                <?= $article->text()->kirbytext()->excerpt(20, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </div>
              <div class="full" style="display: none;">
                <?= $article->text()->kirbytext(); ?>
              </div>
            </div>

          </article>

    

        <?php endforeach ?>

    </section>

    <?php //snippet('pagination') ?>

  </main>



<?php snippet('footer') ?>