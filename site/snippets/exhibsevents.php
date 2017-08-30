<div class="container-fluid content notHome">  
    <div class="row heading firstElemContent">
      <h2 class="col-12 "><?= $page->subtitle() ?></h2>      
    </div>

    <div class="row">
      <?php $lastxzb = $page->children()->visible(); ?>
      <div class="col-sm-6 col-lg-8 pictureEdge "> 
       <?php $image = $lastxzb->first()->featimg()->toFile(); 
          if($image): ?>
        <div class="wrapper">
         <a href="<?= $lastxzb->first()->url()?>"><img src="<?= $image->url() ?>"></a> 
          <?php if($lastxzb->first()->content()->date()->isNotEmpty()):?>
          <h2 class="exhi-date"><?php echo $lastxzb->first()->content()->date()->html() ?> </h2>
          <?php endif ?>
        </div>
        <?php endif ?>
      </div>

      <div class="col-sm-6 col-lg-4 edge">
        <h2 class="title-main-exhib"><?php echo $lastxzb->first()->title() ?></h2>
        <div class="read-more col-sm-1 offset-sm-5 text-right">
              <img src="<?= url('assets/icons/triangledot.svg')?>">  
          </div>
        <p class="brief-description-now"><?php echo $lastxzb->first()->excerpt()->html() ?></p>
        <a href="<?= $lastxzb->first()->url() ?>">
          
        </a>
      </div>

    </div>
    
    <div class="row heading expositionTitle">
      <?php if($page->uri() == "exhibitions"):?>
      <h2 class="col-12 ">
      <?php if($site->language()->code() == "he"){
          echo "תערוכות בעבר";
        } else {
          echo "past exhibitions";
        }?>
      </h2>      
      <?php endif ?>
      <?php if($page->uri() == "events"):?>
      <h2 class="col-12 ">
      <?php if($site->language()->code() == "he"){
          echo "אירועים בעבר";
        } else {
          echo "past events";
        }?>
      </h2>      
      <?php endif ?>
    </div>

    <div class="row past-exhibitions tiles"> 
    <?php foreach($page->children()->visible() as $exzbition): ?>
      <div class="col-sm-4 main-box">
        <a href="<?= $exzbition->url() ?>" >
            <div class="border">
             <?php if($image = $exzbition->images()->sortBy('sort', 'asc')->last()): $thumb = $image->crop(600, 600); ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $exzbition->title()->html() ?>" width="100%" >
            <?php endif ?>
            <?php if($exzbition->content()->date()->isNotEmpty()):?>
            <h2 class="exhi-date"><?= $exzbition->content()->date()->html() ?></h2>
          <?php endif ?>
            </div>
            <div class="borderBottom">
              <h2 class="title-exhib"><?= $exzbition->title()->html() ?></h2>
              <img src="<?php echo url('assets/icons/triangledot.svg') ?>" alt="" class="dotTriangleRight"></h1>
            </div>
        </a>
    </div>
    <?php endforeach ?>
    </div>

  </div>