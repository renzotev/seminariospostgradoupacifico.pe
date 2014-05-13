<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Seminarios Escuela de Postgrado - Peru Banking & Finance Day 2012 - Galería de fotos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/js-image-slider.css" type="text/css" />
        <link rel="stylesheet" href="/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" />
        <link rel="stylesheet" href="/css/main.css">

        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Esta usando un navegador <strong>desactualizado</strong>. Por favor <a href="http://browsehappy.com/">actualícelo</a>.
        <![endif]-->

        <div class="main">
            <?php
               include $_SERVER['DOCUMENT_ROOT']."/plantillas/header.html";
            ?>
            <div class="content">
                <div class="inner-banner">
                    <figure>
                        <img src="/img/perubankingfinanceday/2012/banners/galeria-banner.png">
                    </figure>
                </div>
                <?php
                    include "secondary-menu.html";
                ?>
                <div class="main-content-wrapper">
                    <div class="padding" style="color:#FFFFFF">
                        <h2 class="title">GALERÍA DE FOTOS</h2>
                        <div class="presentations">
                            <div id="sliderFrame">
                                <div id="slider">

                                    <?php
                                        for ($i = 1; $i < 40; $i++) {
                                            if ($i < 10) {
                                                $i = "0".$i;
                                            }
                                    ?>
                                        <a class="fancybox" href="/img/perubankingfinanceday/2012/galeria/large/<?php echo $i; ?>.png" data-fancybox-group="gallery">
                                            <img src="/img/perubankingfinanceday/2012/galeria/large/<?php echo $i; ?>.png" alt="Perú Banking & Finance Day - 2012" />
                                        </a>
                                    <?php
                                        }
                                    ?>

                                </div>
                                <!--thumbnails-->
                                <div id="thumbs">
                                    <?php
                                        for ($i = 1; $i < 40; $i++) {
                                            if ($i < 10) {
                                                $i = "0".$i;
                                            }
                                    ?>
                                    <div class="thumb">
                                        <div class="frame"><img src="/img/perubankingfinanceday/2012/galeria/thumb/<?php echo $i; ?>sm.png" /></div>
                                        <div class="thumb-content"><p>Perú Banking & Finance Day - 2012</p></div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                   
                                </div>
                                <div style="clear:both;height:0;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    include $_SERVER['DOCUMENT_ROOT']."/plantillas/footer.html";
                ?>
            </div>
        </div>        

        <script src="/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="/js/vendor/js-image-slider.js" type="text/javascript"></script>
        <script src="/fancybox/jquery.fancybox.js?v=2.1.5" type="text/javascript"></script>
        <script src="/js/main.js"></script>
        <script>
            $(".secondary-menu ul").children("li").eq(7).addClass("active");
            $(document).ready(function() {

                $(".fancybox").fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',
                    padding     : 0,
                    margin      : [20, 60, 20, 60], 
                    iframe : {
                        preload: false
                    }
                });
            });
        </script>
    </body>
</html>