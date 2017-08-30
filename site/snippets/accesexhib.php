<?php
if($feats == 0) {  $parts = page('exhibitions')->children()->visible()->limit(3); } 
else { $parts = page('exhibitions')->children()->visible()->limit(3); }?> 

<?php foreach($parts as $exzibition): ?>
  <div class="col-sm-4 main-box">
    <a href="<?= $exzibition->url() ?>" >
        <div class="border">
           <?php if($image = $exzibition->images()->sortBy('sort', 'asc')->last()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $exzibition->title()->html() ?>" width="100%" >
          <?php endif ?>
          <h2 class="exhi-date"><?= $exzibition->content()->date()->html() ?></h2>
        </div>
        <div class="borderBottom">
          <h2 class="title-exhib"><?= $exzibition->title()->html() ?></h2>
          <img src="<?php echo url('assets/icons/triangledot.svg') ?>" alt="" class="dotTriangleRight">
        </div>
    </a>
  </div>
<?php endforeach ?>

