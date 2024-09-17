<?php

    //Abrindo o Arquivo para Exclusão dos Dados
    $arquivo = fopen('../arquivo.txt', 'w');

    //Fechando o Arquivo
    fclose($arquivo);

    header("Location: ../consultar_chamado.php?resultado=sucesso");

    exit;

?>