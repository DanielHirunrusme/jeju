<?php snippet('header') ?>

  <main class="main blog <?= strtolower($page->title()) ?>" role="main">
    
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
          <a href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>">
            <?= html($tag) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </aside>

    <section class="wrap">
      <?php if($articles->count()): ?>
        
        <?php
        // fetch the basic set of articles
        $articles = $page->children()->visible()->flip();
        
        // add the tag filter
        if($tag = param('tag')) {
          $articles = $articles->filterBy('tags', $tag, ',');
        }
        ?>
        
        <?php foreach($articles as $article): ?>

          <article class="article">

            
              <h1 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h1>

              <p class="article-date"><?= $article->date('m.d.y') ?></p>
        

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

     

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php //snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>