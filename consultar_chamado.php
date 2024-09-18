<?php

    require_once("scripts/valida_autenticacao.php");

    //Criando Array para armazenar os Chamados
    $chamados = [];

    //Abrindo Arquivo para Leitura
    $arquivo = fopen('arquivo.txt', 'r');

    //Lendo o Arquivo Linha por Linha e Adicionando no Array
    while(feof($arquivo) == false) {
        $registro = fgets($arquivo);

        $divisao = explode('#', $registro);

        if($_SESSION["perfil"] == "Usuário" && $_SESSION["user_id"] != $divisao[0]){
            continue; //Ignora a inserção no Array;
        }

        $chamados[] = $registro;
    }

    //Fechando o Arquivo
    fclose($arquivo);

    /*echo "<pre>";
    print_r($chamados);
    echo "</pre>";*/

?>

<html>
    
    <head>
        <meta charset="utf-8" />
        <title>Consultar Chamado - App Help Desk</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
            <a style="cursor: pointer;" href="scripts/logout.php">
                <img src="img/logout.png" width="30" height="30" class="d-inline-block align-top">
            </a>
        </nav>

        <div class="container">   

            <div class="row">

            <div class="card-consultar-chamado">

                <div class="card mb-3">

                    <div class="card-header">
                        Consulta de chamado
                    </div>
                
                    <div class="card-body">

                        <!-- Lógica para exibição das Divs de Chamado -->
                        <?php 
                            if(empty($chamados[0]) == false){
                                $cont = 0;
                                while($cont < count($chamados)) {    
                                    $divisao = explode('#', $chamados[$cont]);
                                    if(count($divisao) < 3) {
                                        $cont++;
                                        continue; // Ignora linhas inválidas ou vazias
                                    }
                        ?>
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title"> <?= $divisao[1] ?> </h5>
                                            <h6 class="card-subtitle mb-2 text-muted"> <?= $divisao[2] ?> </h6>
                                            <p class="card-text"> <?= $divisao[3] ?> </p>
                                        </div>
                                    </div>
                        <?php 
                                    $cont++;
                                } 
                            }     
                        ?>
                        <!-- ---------------------------------------- -->

                        <!-- Retorno de Sucesso na Exclusão dos Chamados -->    
                        <?php 
                            if(isset($_GET["resultado"]) == true) { 
                        ?>
                                <div class="text-success" style="text-align: center;">
                                    Chamados excluídos com sucesso!
                                </div>
                        <?php 
                            } 
                        ?> 
                        <!-- ------------------------------------------- -->

                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a> 
                            </div>

                            <?php if($_SESSION['perfil'] == "Administrativo") { ?>
                                <div class="col-6">
                                    <a class="btn btn-lg btn-danger btn-block" href="scripts/excluir_chamados.php">Excluir Chamados</a>
                                </div>
                            <?php } ?>    
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>