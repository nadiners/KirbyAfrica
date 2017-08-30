<?php
$parts = page('events')->children()->visible();
if(isset($limit)) $parts = $parts->limit($limit);
?>
  <?php foreach($parts as $exzibition): ?>

    <div class="col-sm-4 main-box">
        <a href="<?= $exzibition->url() ?>" >
            <div class="border">
             <?php if($image = $exzibition->images()->sortBy('sort', 'asc')->last()): $thumb = $image->crop(600, 600); ?>
              <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $exzibition->title()->html() ?>" width="100%" >
          <?php endif ?>
              <?php if($exzibition->content()->date()->isNotEmpty()):?>
              <h2 class="exhi-date"><?= $exzibition->content()->date()->html() ?></h2>
               <? endif ?>
            </div>

            <div class="borderBottom">
              <h2 class="title-exhib"><?= $exzibition->title()->html() ?></h2>
              <img src="<?php echo url('assets/icons/triangledot.svg') ?>" alt="" class="dotTriangleRight">
            </div>
        </a>
    </div>

  <?php endforeach ?>
