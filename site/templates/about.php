<?php snippet('header') ?>

<main class="main" role="main">
  <?php foreach($page->builder()->toStructure() as $section): ?>
    <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
  <?php endforeach ?>
  
  <section class="section faq-list">
    <div class="inner">
      <h1>FAQ</h1>
      <ul>
      <?php foreach($page->faq()->toStructure() as $vendor): ?>
        <li>
          <em><?= $vendor->question()->kt() ?></em>
          <blockquote><?= $vendor->answer()->kt() ?></blockquote>
        </li>
      <?php endforeach ?>
      </ul>
      
    </div>
  </section>

  
</main>

<?php snippet('footer') ?>