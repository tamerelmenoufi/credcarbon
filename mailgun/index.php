<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST))
    $_POST = json_decode(file_get_contents('php://input'), true);

    // $post = addslashes(json_encode($_POST));
    $post = var_dump($_POST).var_dump($_GET);

    $dados = false;
    foreach($_POST['[attachments]'] as $ind => $arq){
        $dados .= "Nome: ".$arq['name']."\n";
        $dados .= "Type: ".$arq['content-type']."\n";
        $dados .= "Size: ".$arq['size']."\n";
        $dados .= "url: ".$arq['url']."\n\n\n";
    }

    file_put_contents('anexos/'.date("YmdHis").".txt", $post."\n\n\n".$dados);