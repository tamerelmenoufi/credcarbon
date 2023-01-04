<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/site/assets/lib/includes.php");
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CredCarbon</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <!-- <link href="assets/css/variables.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <link href="assets/css/variables-green.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- JQUERY -->
  <script src="assets/vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>

  <!-- LIB CONFIRM -->
  <link href="assets/vendor/jquery-confirm-v3.3.4/dist/jquery-confirm.min.css" rel="stylesheet" >
  <script src="assets/vendor/jquery-confirm-v3.3.4/dist/jquery-confirm.min.js" ></script>

  <!-- LIB MASK -->
  <script src="assets/vendor/jQuery-Mask/jquery.mask.min.js" ></script>

  <!-- FONTE AWESOME -->
  <link href="assets/vendor/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">

  <!-- JQUERY UI -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>

<body>

<div class="popup">
    <span><i class="bi bi-x"></i></span>
    <div class="body"></div>
</div>

<main id="main">
<?php

    $componentes = [
        'menu',
        // 'banner_principal',
        'banner_principal_scroll',
        // 'banner_principal2',
        // 'banner_principal3',
        'sobre',
        'servicos',
        'time',
        'noticias',
        //'galeria',
        //'banner_depoimentos',

        // 'pagina_interna',
        // 'pagina_interna2',
        // 'mais_noticias',
        // 'noticias_detalhes',
        // 'produtos_servicos',
        // 'clientes',
        // 'destaque',
        // 'video',
        // 'solucoes',
        // 'produtos_servicos2',
        // 'planos',
        // 'faq',
        //
        'contato',
        'rodape',


    ];

    foreach($componentes as $i => $v){
        include("components/{$v}.php");
    }

?>
</main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="background:#242323">
    <i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSnblPMOwEdteX5UPYXf7XUtJYcbypx6w&language=pt&region=BR"
    async
></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/js.js"></script>

  <div class=" "
            style=" margin:0px;position:fixed!important; bottom:0;
            background-color:#000000d6;z-index:999999999999;padding:20px;width:100%;color:#fff;font-weight:bold"
            id="exemplo1"
            >  
                <div class="col-md-9" style="" >
                    Este site utiliza cookies confiáveis e inofensivos para garantir uma melhor experiência de navegação. <br> 
                    <a style="font-size:16px;" href="#">Política de Privacidade. </a>
                </div>
            
                <div class="col-md-3" style="" >
                    <span><a id="ocultar" style="border-radius:16px;margin:5px;font-size:16px;" class="btn btn-warning pull-right"  role="button">Aceitar</a></span>
                </div> 
            </div>  
            
        <script>
            $(function(){
                
                verifica = window.localStorage.getItem('aceita_cookie');
                
                if(verifica === '1'){
                    $("#exemplo1, #exemplo1_fundo").hide();
                }
                
                $("#ocultar").click(function () {
                    $("#exemplo1, #exemplo1_fundo").hide();
                    window.localStorage.setItem('aceita_cookie', '1');
                });
                
                
                
            })
        </script>
        <!-- SCRIPT DA POLITICA DE PRIVACIDADE -->




</body>

</html>