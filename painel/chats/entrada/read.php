<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");

        $dados = file_get_contents('caixa/msg.json');

        echo $dados = json_decode(trim($dados));

        unlink("caixa/msg.json");


?>