<footer  id="contact container-fluid">
    <div class="address col-10 offset-1 row">
        <div class="col-md-3 col-sm-6 col-10 adresseElem">
            <?= $site->adresse()->kirbytext(); ?>
        </div>
        <div class="col-md-3 col-sm-6 col-10 adresseElem">
            <p class="space-foot"><?= $site->curator()->kirbytext(); ?></p>
            <?= $site->contact()->kirbytext(); ?>
            <a href="https://www.facebook.com/africanstudiesgallery" target="_blank"><img src="<?= url('assets/icons/facebook-logo.svg') ?>" style="width:20px"></a>
            <a href="https://vimeo.com/user24082369"><img src="<?= url('assets/icons/vimeo-logo.svg') ?>" style="width:20px"></a>
        </div>
        <div class="col-md-3 col-sm-6 col-10 adresseElem">
            <?= $site->opening()->kirbytext(); ?>
        </div>
        <div class="col-md-3 col-sm-6 col-10 adresseElem">
            <h5 class="status-footer"><?= $site->footsubscribe()->html(); ?></h5 >
            <form action="">
                <div div class="form-group">
                    <input class="form-email" class="form-control" type="text">
                    <br>
                    <input class="submit-email" class="btn btn-default" type="submit" text="subscribe">
                    <img src="<?= url('assets/icons/arrow.svg') ?>" alt="" style="width:20px">
                </div>
            </form>
        </div>
    </div>
</footer>
</div>
<script>
    function openNav()  {document.getElementsByClassName("mobileMenu")[0].style.left = "0px"; }
    function closeNav() {document.getElementsByClassName("mobileMenu")[0].style.left = "-1500px"; }
</script>
</body>
</html>