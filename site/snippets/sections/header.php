<section class="section header">
  <div class="inner">
   <?php if ($data->text()->isNotEmpty()): ?>
     <h2><?= $data->text()->text() ?></h2>
   <?php endif ?>
  </div>
 </section>