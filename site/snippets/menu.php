  <script>
    $(window).scroll(function(e){
      var scrolled = $(window).scrollTop();
      $('header').css('top', -(scrolled * 0.2) + 'px');
      // sticky menu
      if(scrolled>550){
        $('.menu').addClass("sticky");
      }else if(scrolled<550){
        $('.menu').removeClass("sticky");
      }
    });
  </script>
  <div class="background container-fluid">
<nav class="menu container-fluid ">
  <div class="row align-items-center ">
    <a href="<?=  $site->language()->url() ?>" rel="home" class="logo hidden-sm-down col-sm-3 col-md-3">
        <img src="<?= url('assets/images/logo.svg')?>"  alt="<?= $site->title()->html() ?>" class=" " style="">        
    </a>
    
    <a href="<?= url() ?>" rel="home"  class="logoMini hidden-md-up col-3">
      <img src="<?= url('assets/images/logo-mob.svg')?>"  alt="<?= $site->title()->html() ?>">
    </a>
    
    <div rel="home"  class="hidden-md-up col-2 offset-7">
      <img src="<?= url('assets/images/menu-mob.svg')?>"  alt="<?= $site->title()->html() ?>" class=" menu-mob" onclick="openNav()">
    </div>


    <div class="col-sm-9 col-md-8 hidden-sm-down" >
      <div class="row align-items-center" style="height: 100%">
        <ul class='menubar'>
        <?php foreach($pages->visible() as $item): ?>
          <li class="menu-item <?= r($item->isOpen(), ' is-active') ?>">
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          </li>
        <?php endforeach ?>
        </ul>
      </div>
    </div>



    <div class="hidden-sm-down col-md-1" id="languages">
      <div id="line"></div>
      <?php foreach($site->languages() as $language): ?>
        <div class="row">
          <a  href="<?php echo $page->url($language->code()) ?>" class="col-12 langue <?php e($site->language() == $language, ' active '); echo $language->code()?>">
              <?php echo html($language->name()) ?>
          </a>
        </div>
      <?php endforeach ?>
    </div>

    <!-- mobile menu -->
    <div class="hidden-md-up mobileMenu">

      <div class="close">
        <a href="#1" class="closebtn" onclick="closeNav()" style="float: right; margin-top: 3px;">
          <img src="<?= url('assets/icons/menu-exit.svg')?>" alt="" style="width:25px">
        </a>
      </div>

      <div class="mob-link col-12">
        <?php foreach($pages->visible() as $item): ?>
        <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        <?php endforeach ?>
      </div>

      <div class="mob-lang">
          <?php foreach($site->languages() as $language): ?>
          <div<?php e($site->language() == $language, ' class="active"') ?>>
            <a href="<?php echo $page->url($language->code()) ?>">
              <?php echo html($language->name()) ?>
            </a>
          </div>
          <?php endforeach ?>
      </div>
    </div>

  </div>
</nav>
</nav>