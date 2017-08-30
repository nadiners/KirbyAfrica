<?php snippet('header') ?>
<div class="container-fluid content notHome">
  <div class="row heading firstElemContent">
    <h2 class="col-12"><?= $page->visitus()->html() ?></h2>
    <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-10 offset-1">
      <p class=""><?= $page->text()->html() ?></p>
      <form action="">
        <input class="form-email" placeholder="enter your email" type="text">
        <input class="submit-email" type="submit" text="subscribe">
        <img src="<?= url('assets/icons/arrow.svg') ?>" alt="" style='width:30px''>
      </form>
    </div>
  </div>
</div>
<?php snippet('backtomain') ?>
<?php snippet('footmap') ?>