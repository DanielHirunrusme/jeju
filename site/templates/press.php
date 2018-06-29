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
          <a href="<?= url('press/' . url::paramsToString(['tag' => $tag])) ?>">
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
      
      <?php if($articles->count()): ?>
        
        
        
        <?php foreach($articles as $article): ?>

          <article class="article">

            
              <h1 class="article-title">
                <?php if($article->press_url() != ''): ?><a href="<?= $article->press_url() ?>"><?= $article->title()->html() ?></a><?php else: ?><?= $article->title()->html() ?><?php endif; ?>
              </h1>

              <p class="article-date"><?= $article->date('m.d.y') ?></p>
        

            <?php snippet('coverimage', $article) ?>

            <div class="text">
            
                <?= $article->text()->kirbytext() ?>
            
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