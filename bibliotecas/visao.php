<?php

function exibir($view, $data = array()) {
    $viewFilePath = 'visao/' . $view . '.visao.php';

    if (!file_exists($viewFilePath)) {
        die("Nao foi encontrado o arquivo '$viewFilePath' correspondente a visao requisitada!");
    }

    extract($data);

    require("visao/template.php");
}

function redirecionar($path) {
    $finalPath = BASE_URL . $path;
    header("location: $finalPath");
}

function assinalarCampo($valorA, $valorB) {
    if ($valorA == $valorB) {
        return 'selected';
    }
}

function tratarData($data) {
    $dataExplode = explode("-", $data);
    $dataFormatadaBR = $dataExplode[2] . "/" . $dataExplode[1]  . "/" . $dataExplode[0];
    return $dataFormatadaBR;
}

function morrer($dados) {
    echo "<pre>";
    print_r($dados);
    echo "</pre>";
    die();
}

?>