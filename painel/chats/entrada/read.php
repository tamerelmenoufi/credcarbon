<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");

        $dados = file_get_contents('caixa/msg.json', $dados);

        echo $dados = json_decode($dados);

        unlink("caixa/msg.json");


?>