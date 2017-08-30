<?php snippet('header') ?>
<div class="container-fluid content notHome"> 
  <div class="row heading firstElemContent">
    <h2 class="col-12"><?= $page->title()->html()?></h2>
    <p class="about-about col-10 offset-1 col-md-8 offset-md-2">
      <?= $page->text()->html()?>
    </p>
  </div>

  <div class="row">
    <div  class="col-12 noMargin noPadding">
      <?php if($page->image()): ?>
        <img src="<?= $page->image()->url()?> ">
      <?php endif ?>
    </div>
  </div>
</div>
<?php snippet('backtomain') ?>
<?php snippet('footer') ?>