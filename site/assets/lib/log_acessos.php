<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/site/assets/lib/includes.php");

    $dados = json_encode($_SERVER);

    echo $query = "insert into log_acessos set data = NOW(), dados = '{$dados}'";
    mysqli_query($con, $query);

?>