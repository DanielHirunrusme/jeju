<?php snippet('header') ?>

  <main class="main blog <?= strtolower($page->title()) ?>" role="main">
    
    <!--
    <aside>
      <?php

      // fetch all tags
      $tags = $page->children()->visible()->pluck('tags', ',', true);

      ?>
      <ul class="tags">
        <?php foreach($tags as $tag): ?>
        <li>
          <a href="<?= url( './' . url::paramsToString(['tag' => $tag])) ?>">
            <?= html($tag) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </aside>
      -->
      
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

          <article class="artist-article" data-module-init="accordion">

              <div class="inner">
                <button class="accordion-trigger">
                  <h1 class="article-title">
                  <span href="<?= $article->url() ?>"><?= $article->title()->html() ?></span><br>
                  <span class="location"><?= $article->lives()->html() ?></span>
                </h1>
                </button>
              </div>
                
              <div class="accordion-body">
                <div class="inner">
                  <?= $article->text()->kirbytext() ?>
                 
                </div>
                <?php foreach($article->builder()->toStructure() as $section): ?>
                  <?php snippet('sections/' . $section->_fieldset(), array('data' => $section, 'page' => $article)) ?>
                <?php endforeach ?>
              </div>
              
            </div>
            
            

          </article>

        

        <?php endforeach ?>

    </section>

    <?php //snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>