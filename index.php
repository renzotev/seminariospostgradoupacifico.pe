<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Universidad del Pacífico - Seminarios Escuela de Postgrado</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" href="/css/normalize.css">
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
                <div id="slides" class="slider">
                    <div>
                        <figure class="left">
                             <a href="#"><img src="/img/home/banner/b-1-l.png" alt=""></a>
                        </figure>
                        <figure class="left">
                            <a href="#"><img src="/img/home/banner/b-1-r.png" alt=""></a>
                        </figure>
                    </div>
                    <div>
                        <figure class="left">
                             <a href="#"><img src="/img/home/banner/b-2-l.png" alt=""></a>
                        </figure>
                        <figure class="left">
                            <a href="#"><img src="/img/home/banner/b-2-r.png" alt=""></a>
                        </figure>
                    </div>
                    <div>
                        <figure class="left">
                             <a href="#"><img src="/img/home/banner/b-3-l.png" alt=""></a>
                        </figure>
                        <figure class="left">
                            <a href="#"><img src="/img/home/banner/b-3-r.png" alt=""></a>
                        </figure>
                    </div>
                    <div>
                        <figure class="left">
                             <a href="#"><img src="/img/home/banner/b-4-l.png" alt=""></a>
                        </figure>
                        <figure class="left">
                            <a href="#"><img src="/img/home/banner/b-4-r.png" alt=""></a>
                        </figure>
                    </div>
                </div>
                <div class="description-slider">
                    Eventos 2013
                </div>
                <div class="events-home">
                    <a href="#" class="box left">
                        <figure class="name-event left">
                            <img src="/img/home/banking-finance.jpg" alt="PERU BANKING & FINANCE DAY 2013" title="PERU BANKING & FINANCE DAY 2013">
                        </figure>
                        <figure class="img-event left">
                            <img src="/img/home/banking-finance-thumb.jpg" alt="PERU BANKING & FINANCE DAY 2013" title="PERU BANKING & FINANCE DAY 2013">
                        </figure>
                        <p class="description-event left">
                            Fecha: 20 de junio 2013<br>
                            Lugar: Westin Lima Hotel &<br>
                            Convention Center
                            <span class="mag-glass"></span>
                        </p>
                    </a>

                    <a href="#" class="box left">
                        <figure class="name-event left">
                            <img src="/img/home/capital-markets.jpg" alt="PERU CAPITAL MARKETS DAY 2013" title="PERU CAPITAL MARKETS DAY 2013">
                        </figure>
                        <figure class="img-event left">
                            <img src="/img/home/capital-markets-thumb.jpg" alt="PERU CAPITAL MARKETS DAY 2013" title="PERU CAPITAL MARKETS DAY 2013">
                        </figure>
                        <p class="description-event left">
                            Fecha: 30 de setiembre 2013<br>
                            Lugar: Westin Lima Hotel &<br>
                            Convention Center
                            <span class="mag-glass"></span>
                        </p>
                    </a>
                </div>
                <?php
                    include $_SERVER['DOCUMENT_ROOT']."/plantillas/footer.html";
                ?>
            </div>
        </div>        

        <script src="/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/vendor/jquery.slides.min.js"></script>
        <script>
            $(function() {
              $("#slides").slidesjs({
                width: 792,
                height: 260,
                navigation: {active: false},
                play: {auto: true, pauseOnHover: true, interval: 5000, restartDelay: 2500},
                effect: { slide: {speed: 1500} }
              });
            });
        </script>
    </body>
</html>
