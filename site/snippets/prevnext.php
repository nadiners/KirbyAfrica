<?php

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="pagination row<?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-item col-1 noPadding <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
        <p><?= $page->prevVisible()->title()->html() ?></p>
      </a>
    <?php else: ?>
      <span class="pagination-item <?= $directionPrev ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </span>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class="pagination-item  col-1 offset-10 noPadding alignRight <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
        <p><?= $page->nextVisible()->title()->html() ?></p>
      </a>
    <?php else: ?>
      <span class="pagination-item <?= $directionNext ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </span>
    <?php endif ?>

  </nav>
<?php endif ?>