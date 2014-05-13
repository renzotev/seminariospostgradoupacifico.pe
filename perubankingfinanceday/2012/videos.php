<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Seminarios Escuela de Postgrado - Peru Banking & Finance Day 2012 - Videos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href="/css/js-image-slider.css" rel="stylesheet" type="text/css" />
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
                        <img src="/img/perubankingfinanceday/2012/banners/videos-banner.png">
                    </figure>
                </div>
                <?php
                    include "secondary-menu.html";
                ?>
                <div class="main-content-wrapper">
                    <div class="padding" style="color:#FFFFFF">
                        <h2 class="title">PRESENTACIONES</h2>
                        <div class="presentations">
                            <div id="sliderFrame">
                                <div id="slider" class="videos">

                                    <iframe title="Eduardo Torres-Llosa" width="500" height="300" src="http://www.youtube.com/embed/OwCnWBW36w4" frameborder="0" allowfullscreen></iframe>
                                
                                    <iframe title="Luis Miguel Castilla" width="500" height="300" src="http://www.youtube.com/embed/1QEADN9uLlU" frameborder="0" allowfullscreen></iframe>
                                
                                    <iframe title="Julio Velarde" width="500" height="300" src="http://www.youtube.com/embed/yRny_QiR9Qk" frameborder="0" allowfullscreen></iframe>
                                
                                    <iframe title="Daniel Schydlowsky" width="500" height="300" src="http://www.youtube.com/embed/KiQsqiNGqOM" frameborder="0" allowfullscreen></iframe>

                                    <iframe title="José Antonio Blanco" width="500" height="300" src="http://www.youtube.com/embed/GDdDt8tu2M4" frameborder="0" allowfullscreen></iframe>
                                    

                                </div>
                                <!--thumbnails-->
                                <div id="thumbs" class="videos">
                                    <div class="thumb">
                                        <div class="frame"><img src="/img/video-thumbnail.png" /></div>
                                        <div class="thumb-content"><p>Eduardo Torres-Llosa</p></div>
                                        <div style="clear:both;"></div>
                                    </div>

                                    <div class="thumb">
                                        <div class="frame"><img src="/img/video-thumbnail.png" /></div>
                                        <div class="thumb-content"><p>Luis Miguel Castilla</p></div>
                                        <div style="clear:both;"></div>
                                    </div>

                                    <div class="thumb">
                                        <div class="frame"><img src="/img/video-thumbnail.png" /></div>
                                        <div class="thumb-content"><p>Julio Velarde</p></div>
                                        <div style="clear:both;"></div>
                                    </div>

                                    <div class="thumb">
                                        <div class="frame"><img src="/img/video-thumbnail.png" /></div>
                                        <div class="thumb-content"><p>Daniel Schydlowsky</p></div>
                                        <div style="clear:both;"></div>
                                    </div>

                                    <div class="thumb">
                                        <div class="frame"><img src="/img/video-thumbnail.png" /></div>
                                        <div class="thumb-content"><p>José Antonio Blanco</p></div>
                                        <div style="clear:both;"></div>
                                    </div>
                                   
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
        <script src="/js/main.js"></script>
        <script>
            $(".secondary-menu ul").children("li").eq(8).addClass("active");
        </script>
    </body>
</html>
