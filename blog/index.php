
<?php

    include_once("bd.php");

    $db = new Db();

    function getArticle($pos,$db)
    {
        $sql = "SELECT * FROM  `articulo` WHERE posicion = $pos order by id_articulo desc LIMIT 1";
        $campos = $db->select($sql);
        $result = array();
        $result['titulo'] = $campos[0]['titulo'];
        $result['desc'] = $campos[0]['desc'];
        $result['contenido'] = $campos[0]['contenido'];
        $result['posicion'] = $pos;
        $result['path'] = $campos[0]['path'];
        $result['id'] = $campos[0]['id_articulo'];
        return $result;
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog 4X4 Imagen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/flaticon.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="css/YTPlayer.css"/>
        <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <link id="colorpreset" rel="stylesheet" type="text/css" href="css/colorpreset/color1.css"/>
        <!-- End Include All CSS -->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]--> 

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
        <!-- Favicon Icon -->
    </head>
    <body>
        <!-- Switcher -->
        
        <!-- End Switcher -->

        <!-- Loader -->
        <div class="loaderArea">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <div></div>
            </div>
        </div>
        <!-- End Loader -->

        
        <!-- End Header Top -->
        <!-- Header -->
        <!--<header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-2" style="height:120px;">
                        <div class="">
                            <a href="index.html" style="padding:15px">
                                
                                 <img src="images/logo.png" style="width:150px;height:100px"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-10">
                        <nav class="mainMenu">
                            <div class="menuButton hidden-lg hidden-md hidden-sm">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <ul>
                                <li class="scroll"><a href="#features">BLOG</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>-->
        <!-- Header -->
        <!-- Slider -->
        <section class="slider">
            <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item itemOne active">
                        <div class="sliderItem">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 slContent">
                                        <!--<h1 class="anim1">Bienvenid@ a 4X4 IMAGEN</h1>
                                        <p class="anim2">
                                            ...
                                        </p>
                                        <a class="sliderButton anim3" href="#"><span>Ir al sitio</span></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item itemTwo">
                        <div class="sliderItem">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 slContent">
                                        <!--<h1 class="anim11">TEXTO</h1>
                                        <p class="anim21">
                                            MAS TEXTO
                                        </p>
                                        <a class="sliderButton anim31" href="#"><span>MAS</span></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item itemThree">
                        <div class="sliderItem">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 slContent">
                                        <!--<h1 class="anim12">TEXTO 3</h1>
                                        <p class="anim22">
                                            MAS TEXTO
                                        </p>
                                        <a class="sliderButton anim32" href="#"><span>MAS</span></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainController">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 paddingSmall">
                                <div class="mainControllerArea">
                                    <a class="left carousel-control" href="#mainSlider" role="button" data-slide="prev">
                                        <i></i>
                                    </a>
                                    <a class="right carousel-control" href="#mainSlider" role="button" data-slide="next">
                                        <i></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Slider -->
        
        
        <!-- End Icon Section -->
        <!-- Portfolio Section -->
        <!--<section class="comonSection" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">Portafolio</h2>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-12 myGridElements wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms" id="mixer">
                        <div class="sFolio webDes mobAps photo mix">
                            <a href="images/folio/1h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/1.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/1h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio webDev webDes mobAps illustra mix">
                            <a href="images/folio/2h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/2.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/2h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio mobAps webDes illustra photo mix">
                            <a href="images/folio/3h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/3.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/3h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio photo webDes mobAps photo mix">
                            <a href="images/folio/4h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/4.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/4h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio illustra webDes webDev mix">
                            <a href="images/folio/5h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/5.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/5h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio mix filter" data-filter="webDev">
                            <div class="bestWorks">
                                <h3>Lo mejor</h3>
                            </div>
                        </div><div class="sFolio webDev photo webDes mix">
                            <a href="images/folio/6h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/6.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/6h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio mobAps illustra webDes mix">
                            <a href="images/folio/7h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/7.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/7h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio photo webDes webDev mix">
                            <a href="images/folio/8h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/8.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/8h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div><div class="sFolio mix filter" data-filter="webDev">
                            <div class="latesWork">
                                <h3>Lo último</h3>
                            </div>
                        </div><div class="sFolio webDes illustra webDev mix">
                            <a href="images/folio/9h.jpg" data-rel="prettyPhoto">
                                <img src="images/folio/9.jpg" alt=""/>
                            </a>
                            <div class="sFHover">
                                <a href="images/folio/9h.jpg" data-rel="prettyPhoto">
                                    <h3>Artículo selecto</h3>
                                    <p>Título</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Portfolio Section -->
        <!-- Information Section -->
        
        <!-- End Information Section -->
        <!-- Pricing Section -->
        <!-- <section class="comonSection pricingSection" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Promos</h2>
                        <p class="subTitle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            Descripción
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="pricing">
                            <div class="pricingHead">
                                <h3>A</h3>
                                <div class="price">
                                    <div class="priceInner">
                                        <p class="currency">$</p>
                                        <p class="pAmount">15</p>
                                        <p class="duration">..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="priceBody">
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="priceFooter">
                                <a href="#"><span>Select</span></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <div class="pricing">
                            <div class="pricingHead">
                                <h3>B</h3>
                                <div class="price">
                                    <div class="priceInner">
                                        <p class="currency">$</p>
                                        <p class="pAmount">26</p>
                                        <p class="duration">..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="priceBody">
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="priceFooter">
                                <a href="#"><span>Select</span></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="pricing">
                            <div class="pricingHead">
                                <h3>C</h3>
                                <div class="price">
                                    <div class="priceInner">
                                        <p class="currency">$</p>
                                        <p class="pAmount">38</p>
                                        <p class="duration">..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="priceBody">
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="priceFooter">
                                <a href="#"><span>Select</span></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                        <div class="pricing">
                            <div class="pricingHead">
                                <h3>D</h3>
                                <div class="price">
                                    <div class="priceInner">
                                        <p class="currency">$</p>
                                        <p class="pAmount">49</p>
                                        <p class="duration">..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="priceBody">
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <p>..</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="priceFooter">
                                <a href="#"><span>Select</span></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Pricing Section -->

        <!-- Video Section -->
        <section class="videoSection wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
            <div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/dpvNIOMbqx0',showControls:false,containment:'self',autoPlay:true, loop:true, mute:true, startAt:0, opacity:1}"></div>
            <div class="videoDes">
                <p><a href="#" class="yPlay alreadyPlay"><i class="fa fa-play"></i></a>video</p>
            </div>
        </section>
        <!-- End Video Section -->
        <!-- Workers Section -->
        <section class="comonSection workersSection" id="works">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Artículos</h2>
                        <p class="subTitle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            Los más nuevos
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <?php

                           $result =  getArticle(1,$db);

                        ?>

                        <div class="singleWorker wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="workerImg">
                                <img src="<?php echo $result['path']; ?>" class="cuadro" alt=""><!-- images/workers/1.jpg -->
                                <div class="workerHover">
                                    <p>
                                        <?php echo $result['desc']; ?>
                                    </p>
                                    <div class="workSocial">
                                        
                                    </div>
                                </div>
                            </div><br/>
                            <h3 style="border:2px solid black;text-align:center"><?php echo "<a class='link' href='detalle.php?id=".$result['id']."'>".$result['titulo']."</a>"; ?></h3>
                            <p>..</p>
                        </div>

                        <?php
                            $result = getArticle(2,$db);
                        ?>

                        <div class="singleWorker wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <div class="workerImg">
                                <img src="<?php echo $result['path']; ?>" class="cuadro" alt="">
                                <div class="workerHover">
                                    <p>
                                        <?php echo $result['desc']; ?>
                                    </p>
                                    <div class="workSocial">
                                        
                                    </div>
                                </div>
                            </div><br/>
                            <h3 style="border:2px solid black;text-align:center"><?php echo "<a class='link' href='detalle.php?id=".$result['id']."'>".$result['titulo']."</a>"; ?></h3>
                            <p>..</p>
                        </div>

                        <?php
                            $result = getArticle(3,$db);
                        ?>


                        <div class="singleWorker wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <div class="workerImg">
                                <img src="<?php echo $result['path']; ?>" class="cuadro" alt="">
                                <div class="workerHover">
                                    <p>
                                        <?php echo $result['desc']; ?>
                                    </p>
                                    <div class="workSocial">
                                        
                                    </div>
                                </div>
                            </div><br/>
                            <h3 style="border:2px solid black;text-align:center"><?php echo "<a class='link' href='detalle.php?id=".$result['id']."'>".$result['titulo']."</a>";?></a></h3>
                            <p>...</p>
                        </div>

                        <?php
                            $result = getArticle(4,$db);
                        ?>

                        <div class="singleWorker wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                            <div class="workerImg">
                                <img src="<?php echo $result['path'];?>" alt="" class="cuadro">
                                <div class="workerHover">
                                    <p>
                                        <?php echo $result['desc']; ?>
                                    </p>
                                    <div class="workSocial">
                                        
                                    </div>
                                </div>
                            </div><br/>
                            <h3 style="border:2px solid black;text-align:center"><?php echo "<a class='link' href='detalle.php?id=".$result['id']."'>".$result['titulo']."</a>";?></h3>
                            <p>...</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End Workers Section -->

        

        
       
        <!-- Section History -->
        <section class="comonSection historySection" id="history">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Históricos</h2>
                        <p class="subTitle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            ...
                        </p>
                    </div>
                </div>
            </div>
            <div id="historyTabs">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="col-lg-12">
                           
                            <div class="clearfix"></div>
                            <div id="tab_2015" class="historyTabPanel">
                                <div class="historyLeft">
                                    <div class="bigHistory">
                                        <div class="bHText">
                                            <h4>9 Feb</h4>
                                            <p>
                                                
                                            </p>
                                        </div>
                                        <div class="bHImg">
                                            <img src="images/history/1.jpg" alt=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="bigHistory">
                                        <div class="bHText">
                                            <h4>27 Ene</h4>
                                            <p>
                                                
                                            </p>
                                        </div>
                                        <div class="bHImg">
                                            <img src="images/history/2.jpg" alt=""/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="bigHistory bigHistoryRight">
                                        <div class="bHImg">
                                            <img src="images/history/3.jpg" alt=""/>
                                        </div>
                                        <div class="bHText">
                                            <h4>4 Nov</h4>
                                            <p>
                                                ...
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="bigHistory bigHistoryRight">
                                        <div class="bHImg">
                                            <img src="images/history/4.jpg" alt=""/>
                                        </div>
                                        <div class="bHText">
                                            <h4>30 Oct</h4>
                                            <p>
                                                ...
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section History -->
        <!-- Contact Section -->
        
        <!-- End Contact Section -->
        <!-- Footer -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 wow zoomIn" data-wow-duration="700ms" data-wow-delay="350ms">
                        <p class="copyright">2015 &copy; imagen 4x4 - <a href="#"></a></p>
                    </div>
                    <div class="col-lg-6 col-sm-6 wow zoomIn" data-wow-duration="700ms" data-wow-delay="350ms">
                        <div class="footerSocial">
                            
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="backToTop"><i class="fa fa-angle-double-up"></i></a>
        </footer>
        <!-- End Footer -->

        <!-- Include All JS -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mixer.js"></script>
        <script type="text/javascript" src="js/jquery.mb.YTPlayer.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/prettyPhoto.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>
    </body>
</html>