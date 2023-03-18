<?php
    session_start();

    // include("connect_local.php");

    include("/credcarbonoinc/connect.php");
    $con = AppConnect('portal');

    // include("/appinc/connect.php");
    include("fn.php");

    $md5 = md5(date("YmdHis"));

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/credcarbon/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/credcarbon/site/";

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://painel.credcarbonmanaus.com.br/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://credcarbonmanaus.com.br/";