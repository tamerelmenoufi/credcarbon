<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");

        $arq = 'caixa/msg.json';
        if(is_file($arq))
        echo $dados = file_get_contents($arq);

        // echo $dados = json_decode(trim($dados));

        unlink("caixa/msg.json");


?>