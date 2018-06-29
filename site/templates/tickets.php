<?php snippet('header') ?>

<main class="main" role="main">
  <?php foreach($page->builder()->toStructure() as $section): ?>
    <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
  <?php endforeach ?>
  
  <section class="section vendor-list">
    <div class="inner">
      <h1>Vendors List</h1>
      <h3>USA</h3>
      <ul>
      <?php foreach($page->usa_vendors()->toStructure() as $vendor): ?>
        <li><?= $vendor->vendor()->kt() ?></li>
      <?php endforeach ?>
      </ul>
      <h3>Korea</h3>
      <ul>
      <?php foreach($page->korea_vendors()->toStructure() as $vendor): ?>
        <li><?= $vendor->vendor()->kt() ?></li>
      <?php endforeach ?>
      </ul>
      <h3>Japan</h3>
      <ul>
      <?php foreach($page->japan_vendors()->toStructure() as $vendor): ?>
        <li><?= $vendor->vendor()->kt()  ?></li>
      <?php endforeach ?>
      </ul>
      
    </div>
  </section>

  
</main>

<?php snippet('footer') ?>