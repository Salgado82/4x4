
<?php

    include_once("bd.php");

    $db = new Db();
    $id = $_GET['id'];
    $contenido = "";
    
    function getContent($id,$db)
    {
        $sql = "SELECT contenido FROM  `articulo` WHERE id_articulo = $id";
        $campos = $db->select($sql);
        return $campos[0]['contenido'];
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
        
        <?php echo getContent($id,$db); ?>
        
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