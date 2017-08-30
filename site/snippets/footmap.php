<footer  id="contact container-fluid">
    <div id="map"></div>
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
    <script>
      function initMap() {
        var ASG = {lat: 32.063, lng: 34.774};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"landscape","elementType":"all","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#ff6200"},{"saturation":"98"},{"lightness":"66"},{"gamma":"1.77"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#ff6200"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#ff6200"},{"saturation":58}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":"-100"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":"100"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ff6200"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ff6200"},{"lightness":"40"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff6200"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#19a0d8"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]}],
          center: ASG
        });
        var marker = new google.maps.Marker({
          position: ASG,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPbW0gbcke1P6pm74u7bCkqB7xY_SzwL0&callback=initMap">
    </script>
</body>
</html>