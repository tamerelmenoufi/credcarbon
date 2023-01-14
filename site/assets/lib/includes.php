<?php
    date_default_timezone_set("America/Manaus");
    include("/credcarbonoinc/connect.php");
    $con = AppConnect('portal');
    include("classes.php");

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/credcarbon/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/credcarbon/site/";

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://206.81.10.165:8180/credcarbon/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://206.81.10.165:8180/credcarbon/site/";