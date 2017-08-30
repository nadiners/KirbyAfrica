<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= url('assets/images/favicon1.png')?>">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= js('assets/js/jquery-3.2.1.min.js') ?>
  <?= js('assets/js/tether.js') ?>
  <?= js('assets/js/js/bootstrap.js') ?>
  <?= js('assets/flickity/flickity.pkgd.min.js') ?>

  <?= css('assets/css/boot/css/bootstrap.css') ?>

  <?= css('assets/flickity/flickity.min.css') ?>
  <?= css('assets/css/index.css') ?>

  <?php if($site->language()->code() == "he") {
        echo css('assets/css/heb.css'); 
        echo '<link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">'; }?>

  <script src="https://use.typekit.net/mqu4vxc.js"></script>
  <script>try {Typekit.load({async: true});}catch (e) {}</script>

</head>
<body class="<?php echo $site->language()->direction() ?> container-fluid" >
<?php snippet('menu') ?>



