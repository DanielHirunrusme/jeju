<section class="event">
  <div class="event-header">
  <?= $data->title() ?><br>
  <?= $data->location() ?><br>
  <?= $data->time() ?><br>
  </div>
  <div class="event-body">
  <?= $data->text()->kt() ?>
  </div>
</section>