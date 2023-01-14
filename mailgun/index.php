<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST))
    $_POST = json_decode(file_get_contents('php://input'), true);

    // $post = addslashes(json_encode($_POST));
    $post = print_r($_POST, true)."\n<hr>\n".print_r($_GET, true);

    $dados = print_r($_POST['attachments'], true);
    foreach($_POST['attachments'] as $ind => $arq){
        $dados .= print_r($arq, true)."\n";
        $dados .= "Nome: ".$arq['name']."\n";
        $dados .= "Type: ".$arq['content-type']."\n";
        $dados .= "Size: ".$arq['size']."\n";
        $dados .= "url: ".$arq['url']."\n\n\n";
    }

    file_put_contents('anexos/'.date("YmdHis").".txt", $post."\n\n\n".$dados);