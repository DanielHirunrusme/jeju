<?php
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$android = false;
if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
  $android = true;
}
?>

<!DOCTYPE html>
<html lang="<?= $site->language() ?>" <?php if (detect()->isMobile()): ?>class="mobile"<?php endif; ?>>
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  
  <!-- CSS -->
  <?= css('assets/plugins/embed/css/embed.css') ?>
  <?php echo css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
  <?php echo css('https://cdnjs.cloudflare.com/ajax/libs/plyr/3.3.20/plyr.css') ?>
  <?php echo css('assets/css/snazzy-info-window.min.css') ?>
  <?php echo css('assets/main.min.css') ?>
  <?php echo css('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css') ?>
  
  

</head>
<body id="<?= $page->id() ?>" class="<?php echo $page->template(); ?> <?php if($android): ?>android<?php endif; ?>" data-module-init="body">
  

  <?php snippet('channel') ?>
  <?php snippet('menu') ?>
  


  

