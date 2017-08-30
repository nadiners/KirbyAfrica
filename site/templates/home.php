<?php snippet('headerhome') ?>
<?php 
  $exhibitions= page('exhibitions')->children()->visible()->filterBy('featxzib', '1');
  $events = page('events')->children()->visible()->filterBy('featxzib', '1');
  $featured = new Pages(array($exhibitions, $events));
?>    
<div id="content">
  <div class="row landing-about firstElemContent">
      <div class="about-main col-lg-4 offset-lg-4 col-sm-8 offset-sm-2 col-10 offset-1 heading">
        <p class="about-text"><i><?= $page->intro()->html() ?></i></p>
        <div class="arrow-down" >
            <img src="<?= url('assets/icons/arrow-down.svg') ?>">
        </div>
      </div>           
  </div>

  <div class="galleryspace row">
    <div class="col-12">
      <?php $img = $page->spaceimg()->toFile();
            if($img):?>
        <img src="<?= $img->url() ?>">
      <?php endif ?>
    </div>
  </div>

  <div class="row heading">
    <h2 class="col-12"><?= $page->sectiontitle() ?></h2>
  </div>


  <div class="row">
      <?php foreach($featured as $feats): ?>
        <a href="<?= $feats->url() ?>" class="col-sm-6 col-lg-8 pictureEdge">
          <?php $image = $feats->featimg()->toFile(); 
            if($image): ?>
            <div class="wrapper">
               <img src="<?= $image->url() ?>">
               <?php if($feats->content()->date()->isNotEmpty()):?>
               <h2 class="exhi-date"><?php echo $feats->content()->date()->html() ?> </h2>
               <?php endif ?>
            </div>
          <?php endif ?>
        </a>
        <div class="col-sm-6 col-lg-4 edge">
          <h2 class="title-main-exhib"><?php echo $feats->title() ?></h2>
          <div class="read-more col-sm-1 offset-sm-5 text-right">
              <img src="<?php echo url('assets/icons/triangledot.svg')?>">
            </div>
          <p class="brief-description-now"> <?php echo $feats->excerpt()->html() ?></p>
          <a href="<?= $feats->url() ?>">
            
           </a>
        </div>
      <?php endforeach ?>

      <!-- Prendre dernière expo en date si aucun feat est défini -->
      <?php $feats = $featured->count(); ?>
      <?php if($feats == 0): ?>
      <?php  $lastxzb = page('exhibitions')->children()->visible()->first(); ?>
        <a href="<?= $lastxzb->url() ?>" class="col-sm-6 col-lg-8 pictureEdge">
           <?php $image = $lastxzb->featimg()->toFile(); 
            if($image): ?>
            <div class="wrapper">
               <img src="<?= $image->url() ?>">
               <?php if($lastxzb->content()->date()->isNotEmpty()):?>
               <h2 class="exhi-date"><?php echo $lastxzb->content()->date()->html() ?> </h2>
               <?php endif ?>
            </div>          
            <?php endif ?>  
        </a>
        <div class="col-sm-6 col-lg-4 edge">
          <h3 class="exhi-date-extra"><?php echo $lastxzb->content()->date()->html() ?></h3>
          <h2 class="title-main-exhib"><?php echo $lastxzb->title()->html() ?></h2>
          <p class="brief-description-now"> <?php echo $lastxzb->excerpt()->html() ?></p>
          <a href="<?= $lastxzb->url() ?>">
            <div class="read-more col-sm-4 offset-sm-8 text-right">
                <img src="<?php echo  url('assets/icons/triangledot.svg')?>">
            </div>
          </a>
        </div>
      <?php endif ?>
  </div>

  <div class="row heading expositionTitle">
    <h2 class="col-12"><?php echo $page->titleseeallexhib()->html()?></h2>
    <a href="<?= page('exhibitions')->url() ?>"  class="col-12"><h4><?php echo $page->seeallexhib()->html()?></h4><img src="<?php echo url('assets/icons/arrow.svg') ?>"></a>
  </div>

  <div class="row past-exhibitions tiles">  
    <?php snippet('accesexhib') ?>
  </div>

  <div class="row heading expositionTitle">
    <h2 class="col-12"><?php echo $page->titleseallevents()->html()?></h2>
    <a href="<?= page('events')->url() ?>" class="col-12"><h4><?php echo $page->seallevents()->html()?></h4><img src="<?php echo url('assets/icons/arrow.svg') ?>"> </a>
  </div>

  <div class="row past-events tiles">
      <?php snippet('accesevent', ['limit' => 3]) ?>
  </div>
    

  <!-- ////CATALOGUES /////// -->

  <div class="row heading expositionTitle">
    <h2 class="col-12"><?php echo $page->titleseallcata()->html()?></h2>
    <a href="<?= page('catalogues')->url() ?>" class="col-12"><h4><?php echo $page->seallcata()->html()?></h4><img src="<?php echo url('assets/icons/arrow.svg') ?>"> </a>
  </div>

  <div class="row past-events lastRow">
    <div class="col-12">
      <img src="<?= page('catalogues')->image('catalogues.jpg')->url() ?>" >
    </div>
  </div>
</div>


<script>
  var current = 0;
  function nextBackground() {
      current++;
      current = current % backgrounds.length;
      $( ".bg" ).css('background', backgrounds[current]);
  }
  $( ".bg" ).css( "background-image", backgrounds[0] );
  nextBackground();

  var jumboHeight = $('.jumbotron').outerHeight();

  function parallax() {
      var scrolled = $(window).scrollTop();
      $('.bg').css('height', (jumboHeight - scrolled) + 'px'); }

  $(window).scroll(function(e) {
      parallax();});
</script>

<?php snippet('footmap') ?>