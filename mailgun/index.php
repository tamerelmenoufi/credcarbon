<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST))
    $_POST = json_decode(file_get_contents('php://input'), true);

    $post = addslashes(json_encode($_POST));

    file_put_contents('anexos/'.date("YmdHis").".txt");