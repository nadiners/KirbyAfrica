 <?php snippet('header') ?>

<div class="contentExhib container-fluid">

  <div class="row">
    <div class="col-12 noPadding">
      <div class="carousel">
        <?php foreach($page->children()->images() as $image): ?> 
          <?php if($image): ?>
            <div class="carousel-cell">
              <img src="<?= $image->url() ?>" alt="" />
              <?php if ($image->title() != "" || $image->author() != "" || $image->pinfo() != ""): ?>
                
                <div class="caption row">
                  <div class="col-4 col-sm-10">
                    <h3><?= $image->title() ?></h3>

                    <?php if ($image->author() != ""): ?>
                     <h4><?= $image->author() ?></h4>
                    <?php endif ?>

                    <?php if ($image->pinfo() != ""): ?>
                     <h5><?= $image->pinfo() ?></h5>
                    <?php endif ?>
                  </div>

                  <?php if (strlen($image->caption()) > 2): ?>
                    <?php $str ="" ?>
                    <?php $str = substr($image->caption()->text(), 0, 120) . '...'; ?>
                    <p  class="col-6 hidden-sm-down">"<?= $str ?>" <br><a href="#1" >Read More</a></p>
                  <?php endif ?>
                  
                  <div class="col-2">
                   <a href=""><img src="<?php echo url('assets/images/fullscreen.svg') ?>" style="width: 35px; float: right;"></a>
                  </div>
                </div>

              <?php endif ?>
            </div>
          <?php endif ?> 
        <?php endforeach; ?>
      </div>
    </div>
  </div>

 <?php snippet('prevnext') ?>

  <div class="row heading">
    <div class="col-md-6 offset-md-2">
      <h1><?= $page->title()->html() ?></h1>
      <p class="date-title"><?= $page->content()->date()->html() ?></p>
    </div>

  </div> 

  <div class="row detailsExhib">
    <div class="col-md-9">
      
      <div class="hidden-md-up">
      <li class="curator"><?= $page->colartist()->html() ?></li>
      <span class="curator-name"><?php echo $page->participants()->kirbytext()?></span></div>

      <?= $page->aboutexhib()->kirbytext() ?>
      <?php $page->modules() ?>

      <?php $relatedlinks = $page->related()->toStructure();
            if($relatedlinks != ""): ?>
      <h2 class="about-exhib">Related articles/news</h2>
      <ul class="newsarticles row noPadding">
        <?php foreach ($relatedlinks as $relatedlink): ?>
        <li class="col-2"> 
          <a target="blank" href="<?php echo $relatedlink->link()->html()?>">
          <img src="<?php echo url('assets/images/triangledot.svg') ?>"> <?php echo $relatedlink->linktitle()->html() ?>
          </a> 
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
      
      <div class='relatednews'>
        <?php echo $page->relatedtext()->kirbytext() ?>
      </div>
    </div>

    <div class="col-md-3 info">
      <ul>

          <div class="hidden-sm-down">
              <li class="curator"><?= $page->colartist()->html() ?></li>
              <span class="curator-name"><?php echo $page->participants()->kirbytext()?></span>
          </div>
          
          <?php $catalogues = $page->Catalogue()->toStructure() ?>
          <?php foreach($catalogues as $catalogue): ?>
          <li class="curator cat-mob">
            <?php if( $catalogue->cover()->isNotEmpty()): ?> <p><? echo $page->colcatalogue()->html() ?></p> <?php endif ?>
              <li class="catalogue col-10 offset-2 noPadding">
                <a href="<?php echo $catalogue->pdf()->url() ?>">
                 <img src="<?php echo $catalogue->cover()->url() ?>" 
                      alt="<?php echo $catalogue->pdf()->url() ?>">
                </a>
              </li>
              <?php endforeach ?>       
       
          </li>
      </ul>
    </div>

  </div>

<?php snippet('backtomain') ?>

<script>
$( document ).ready(function() {
  $('.carousel').flickity({
    pageDots: false
  });
});
</script>
<script>
window.addEventListener( 'load', function() {
  var galleryElems = document.querySelectorAll('.slidermodule');
  for ( var i=0, len = galleryElems.length; i < len; i++ ) {
  var galleryElem = galleryElems[i];
  new Flickity( galleryElem, {
    adaptiveHeight: true,
    wrapAround: true
  });}
});
</script>
<?php snippet('footer') ?>