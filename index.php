<?php include 'components/head.php'?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6E07JQRRW4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6E07JQRRW4');
</script>

<body>
 

<?php include 'components/menu.php'; ?>

    
    <!-- Slider main container Start -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="7000" style="background-image: url(assets/images/slider/slider-1.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="7000" style="background-image: url(assets/images/slider/slider-2.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="7000" style="background-image: url(assets/images/slider/slider-3.jpg);">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
    <!-- Slider main container End -->

    <!-- Sale Banner Section Start -->
    <div class="section section-padding" data-bg-image="assets/images/bg/home-2.webp">
        <div class="container">
            <div class="row learts-mb-n30">

                <div class="col-lg-5 col-12 ms-auto align-self-center learts-mb-30">
                    <div class="about-us">
                        <div class="inner">
                            <span class="special-title">Ci presentiamo...</span>
                            <p class="home-p">Il progetto Vita e Luce nasce dalla volontà di stimolare la fede dei credenti attraverso CD musicali, lezioni della scuola domenicale e richieste di preghiera. Comprendiamo l'importanza di condividere la parola di Dio e siamo pronti ed entusiasti di essere i tuoi portatori di questa meraviglia. <strong><em><a href="scopridipiu.php">Scopri di piu'</a></em></strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                    <div class="category-banner-1">
                            <div class="image"><img src="assets/images/banner/category/home2.jpg" alt="immagine-presentazione1" style="max-width: 100%; max-height: 570px;"></div>
                            <div class="content">
                            </div>
                        </a>
                    </div>
                </div>
                

                <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                    <div class="category-banner-2">
                            <div class="image"><img src="assets/images/banner/category/home1.jpg" alt="immagine-presentazione2" style="max-width: 100%; max-height: 570px;"></div>
                            <div class="content">
                            </div>
                        </a>
                    </div>
                </div>
                

                <div class="col-lg-5 col-12 ms-auto align-self-center learts-mb-30">
                    <div class="about-us">
                        <div class="inner">
                            <span class="special-title">Rimani con noi!</span>
                            <p class="home-p">Se sei alla ricerca di un modo per connetterti con Dio e arricchire la tua fede, allora <strong>non cercare oltre!</strong> Abbiamo quello che fa per te. Sfoglia subito per apprezzare tutti i modi in cui puoi connetterti con Dio!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 



            <?php include 'components/testimonianze.php'?>



            
            <div id="instafeed" class="instafeed instafeed-carousel instafeed-carousel1">
            </div>

        </div>
    </div>
    <!-- Gallery Section End -->

    <?php include 'components/footer.php'?>
    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/mo.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery.matchHeight-min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/photoswipe.min.js"></script>
    <script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/ResizeSensor.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/product360.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
    <script src="assets/js/plugins/scrollax.min.js"></script>
    <script src="assets/js/plugins/instafeed.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/versetti.js"></script>
    <script>
    populateCarousel(verses);
    </script>
    <!--
    <!--
    <script>
        if (window.location.href.indexOf('.php') > -1) {
  var updatedUrl = window.location.href.replace(/\.php/, '');
  window.history.replaceState({}, '', updatedUrl);
}

    </script> 
-->

</body>

</html>