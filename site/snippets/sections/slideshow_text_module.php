<section class="section slideshow_with_text" data-module-init="slick">
  
  <?php if ($data->picture_1()->isNotEmpty()): ?>
  <div class="slideshow-item">
    
    <div class="slideshow-image">
      <img src="<?= $page->image($data->picture_1())->url() ?>" />
    </div>
    <?php if ($data->text_1()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_1()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_2()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_2())->url() ?>" />
    </div>
    <?php if ($data->text_2()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_2()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_3()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_3())->url() ?>" />
    </div>
    <?php if ($data->text_3()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_3()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_4()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_4())->url() ?>" />
    </div>
    <?php if ($data->text_4()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_4()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_5()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_5())->url() ?>" />
    </div>
    <?php if ($data->text_5()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_5()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_6()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_6())->url() ?>" />
    </div>
    <?php if ($data->text_6()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_6()->kt() ?>
    </div>
    <?php endif ?>
    
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_7()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_7())->url() ?>" />
    </div>
    <?php if ($data->text_7()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_7()->kt() ?>
    </div>
    <?php endif ?>
    
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_8()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_8())->url() ?>" />
    </div>
    <?php if ($data->text_8()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_8()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_9()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_9())->url() ?>" />
    </div>
    <?php if ($data->text_9()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_9()->kt() ?>
    </div>
    <?php endif ?>
  </div>
  <?php endif ?>
  
  <?php if ($data->picture_10()->isNotEmpty()): ?>
  <div class="slideshow-item">
    <div class="slideshow-image">
    <img src="<?= $page->image($data->picture_10())->url() ?>" />
    </div>
    <?php endif ?>
  
    <?php if ($data->text_10()->isNotEmpty()): ?>
    <div class="project-section-text">
       <?= $data->text_10()->kt() ?>
    </div>
  </div>
  <?php endif ?>
   
</section>