<?php
function dd($valor){
    echo "<pre>";
    var_dump($valor);
    exit;
    echo "</pre>";
}

function validar($datos){
    $errores = [];
    $dni = trim($datos["dni"]);
    if (empty($dni)){
        $errores["dni"] = "Hermano querido esto no lo puedes dejar en blanco";
    }
    return $errores;
}
