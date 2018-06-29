<section class="event">
  <div class="event-header">
  <?= $data->title() ?><br>
  Latitude: <?= $data->latitude() ?><br>
  Longitude: <?= $data->longitude() ?><br>
  <?= $data->time() ?><br>
  </div>
  <div class="marker-body">
  <?= $data->text()->kt() ?>
  </div>
</section>