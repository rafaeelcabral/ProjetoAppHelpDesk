<?php

    require_once("scripts/valida_autenticacao.php");

?>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Abrir Chamado - App Help Desk</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .card-abrir-chamado {
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

            <div class="card-abrir-chamado">

                <div class="card">

                    <div class="card-header">
                        Abertura de chamado
                    </div>

                    <div class="card-body">

                        <div class="row">

                        <div class="col">
                            
                            <form action="scripts/registrar_chamados.php" method="post">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" placeholder="Título" name="Título" required>
                                </div>
                                
                                <div class="form-group">

                                    <label>Categoria</label>

                                    <select class="form-control" name="Categoria" required>
                                        <option value="Criação Usuário">Criação Usuário</option>
                                        <option value="Impressora">Impressora</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="Software">Software</option>
                                        <option value="Rede">Rede</option>
                                    </select>

                                </div>
                                
                                <div class="form-group">

                                    <label>Descrição</label>

                                    <textarea class="form-control" rows="3" name="Descrição" required></textarea>

                                </div>

                                <!-- Retorno de Sucesso no registro do Chamado -->
                                <?php if(isset($_GET["resultado"]) == true) { ?>

                                    <div class="text-success" style="text-align: center;">
                                        Chamado registrado com sucesso !
                                    </div>

                                <?php } ?>    
                                <!-- ----------------------------------------- -->

                                <div class="row mt-5">
                                    
                                    <div class="col-6">
                                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a> 
                                    </div>

                                    <div class="col-6">
                                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
         
    </body>

</html>