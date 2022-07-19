<?php

    // include "exemplo-01.php"; //Tenta executar mesmo que o arquivo esteja com erros,
                                 //permite acesso ao PATH do SO
    require_once "exemplo-01.php"; //Exige que o arquivo exista e que esteja funcionando (RECOMENDADO)
    require_once "exemplo-01.php";
    $resultado = somar(10, 20);

    echo $resultado;
?>