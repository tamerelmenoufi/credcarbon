<?php
    date_default_timezone_set("America/Manaus");
    include("/appinc/connect.php");
    $con = AppConnect('portal');
    include("classes.php");

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/credcarbon/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/credcarbon/site/";