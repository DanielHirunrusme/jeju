<?php
$cols = 'one-col';
if($data->col_2() != ''){
  $cols = 'two-col';
}
if($data->col_3() != ''){
  $cols = 'three-col';
}
if($data->col_4() != ''){
  $cols = 'four-col';
}
  
?>

<section class="section bodyColumns <?php echo $cols ?>">
  <div class="inner">
    <h1><?= $data->title()->text() ?></h1>
    <div class="columns">
      <div class="col"><?= $data->col_1()->kt() ?></div>
      <div class="col"><?= $data->col_2()->kt() ?></div>
      <div class="col"><?= $data->col_3()->kt() ?></div>
      <div class="col"><?= $data->col_4()->kt() ?></div>
    </div>
  </div>
</section>