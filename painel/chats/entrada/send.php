<?php
        include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");

        $dados = [
            'mensagem' => 'Resposta de: '.utf8_decode($_POST['msg']),
        ];

        $dados = json_encode($dados);

        file_put_contents('caixa/msg.json', $dados);

?>