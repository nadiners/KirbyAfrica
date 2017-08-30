<a href="<?=  $site->language()->url() ?>" class="row heading expositionTitle back"> 
  	<h4 class="col-12 flip"><img src="<?= url('assets/icons/arrow-left.svg') ?>">
    <?php if($site->language()->code() == "he"){
      echo "חזרה לדף הראשי";
    } else {
      echo "back to main page ";
    }?>
    </h4>    
</a>  