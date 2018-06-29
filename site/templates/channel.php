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

          <article class="article">
            <div class="plyr__video-embed" data-module-init="plyr" id="channel-player-<?php echo $article->uid() ?>">
              <?= $article->video_embed() ?>
            </div>
          </article>



        <?php endforeach ?>

    </section>

    <?php //snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>