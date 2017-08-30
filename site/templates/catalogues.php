<?php snippet('header') ?>

<div class="container-fluid content notHome"> 
  <div class="row">
  <div class="heading firstElemContent col-lg-4 col-md-6 offset-1">
      <h2> <?= $page->title()->html() ?> </h2> 
      <p class="about-catalogue"> <?= $page->text()->html() ?> </p>
</div>

  <div class="catalogueimg col-md-6">
    <div class=" noPadding noMargin">
      <?php $image = $page->coverimg()->toFile();
      if($image): ?>
          <img src="<?= $image->url() ?>" alt="">
      <?php endif ?>
    </div>
  </div>
          </div><!-- end row -->

  <div class="about-main">
    <div class="arrow-down" >
      <img src="<?php echo url('assets/icons/arrow-down.svg') ?>">
    </div>
  </div>

  <div class="catalogues-list row">
    
    <?php foreach($page->catalogues()->toStructure() as $catalogue): ?>
      <div class="col-sm-3 cata">
          
      <?php if($image = $catalogue->cover()->toFile()): ?>
        <div class="catalogue">
           <?php if($pdf = $catalogue->pdf()->toFile()): ?>
            <a href="<?php echo $pdf->url() ?>" target='_blank'>
              <img src="<?php echo $image->url() ?>" /> 
            </a>
          <?php else: ?>
            <img src="<?php echo $image->url() ?>" /> 
          <?php endif ?>
        </div>
      <?php endif ?>
          <h3 class="catalogue-name"><?= $catalogue->title()->html() ?></h3>
          <h4 class="catalogue-date"><?= $catalogue->year()->html() ?></h4>
      </div>
    <?php endforeach ?>
  </div>

</div>

<?php snippet('backtomain') ?>
<?php snippet('footer') ?>