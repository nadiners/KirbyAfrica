<div class="slidermodule">
  <?php foreach($module->slideshow()->yaml() as $image): ?>   
    <?php if($image = $module->image($image)): ?>
    <div class="module-cell">
      <img src="<?= $image->url() ?>"/>
    </div>
    <?php endif ?>
  <?php endforeach; ?>
</div>
