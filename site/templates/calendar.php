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
          <a href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>">
            <?= html($tag) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </aside>
    -->

    <section class="wrap">
        <!--
        <div id="datepicker"></div>
        -->
        <?php
          // fetch the basic set of articles
          $articles = $page->children()->visible()->flip();
        
          $months = [];
          $days = [];
          $years = [];
        ?>
        
        <?php foreach($articles as $article): ?>
          
          <?php
          $month = $article->date('m');
          array_push($months, $month);
          
          $day = $article->date('d');
          array_push($days, $day);
          
          $year = $article->date('Y');
          array_push($years, $year);
          
          ?>
          
        <?php endforeach; ?>
        
        <?php
        $months = array_unique($months);
        //print_r($months);
        
        $days = array_unique($days);
        //print_r($days);
        
        $years = array_unique($years);
        //print_r($years);
        ?>
        
        <div class="calendar-form-holder" data-module-init="calendar">
        <form class="calendar-form">
          <select id="months">
            <option selected>MM</option>
            <?php foreach($months as $month): ?>
              <option><?= $month ?></option>
            <?php endforeach;?>
          </select>
        </form>
        
        <form class="calendar-form">
          <select id="days">
            <option selected>DD</option>
            <?php foreach($days as $day): ?>
              <option><?= $day ?></option>
            <?php endforeach;?>
          </select>
        </form>
        
        <form class="calendar-form">
          <select id="years">
            <option selected>YYYY</option>
            <?php foreach($years as $year): ?>
              <option><?= $year ?></option>
            <?php endforeach;?>
          </select>
        </form>
        </div>
        
        <?php
        
        
        // add the tag filter
        if($tag = param('tag')) {
          $articles = $articles->filterBy('tags', $tag, ',');
        }
        ?>
        
        <?php foreach($articles as $article): ?>

          <article class="article" data-month="<?= $article->date('m') ?>" data-day="<?= $article->date('d') ?>" data-year="<?= $article->date('Y') ?>">

            
              <h1 class="article-title">
                <?= $article->date('l') ?>&nbsp;<?= $article->date('m.d.y') ?>
              </h1>

              <p class="article-date"></p>
        

            <?php snippet('coverimage', $article) ?>

            <?php foreach($article->builder()->toStructure() as $section): ?>
              <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
            <?php endforeach ?>

          </article>

          

        <?php endforeach ?>

    </section>

    <?php //snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>