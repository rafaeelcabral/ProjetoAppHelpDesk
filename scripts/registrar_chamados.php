<?php

    session_start();

    //Tratando os dados para evitar divergência com o '#' do Texto
    $user_id = $_SESSION["user_id"];
    $titulo = str_replace('#', '-', $_POST["Título"]);
    $categoria = str_replace('#', '-', $_POST["Categoria"]);
    $descricao = str_replace('#', '-', $_POST["Descrição"]);

    //Abrindo o Arquivo para Escrita
    $arquivo = fopen('../arquivo.txt', 'a');

    //Formando o Texto para escrever no Arquivo
    $texto = $user_id . '#' . $titulo . '#' . $categoria . '#' . $descricao;

    //Escrevendo o Texto no Arquivo
    fwrite($arquivo, $texto . PHP_EOL);

    //Fechando o Arquivo
    fclose($arquivo);
    
    //Redirecionando para a Página de Abrir Chamado com Sucesso
    header("Location: ../abrir_chamado.php?resultado=sucesso");

    exit;

?>