<?php

    require_once("scripts/valida_autenticacao.php");

?>

<html>
    
    <head>
        <meta charset="utf-8" />
        <title>Home - App Help Desk</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .card-home {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
            <a style="cursor: pointer;" href="scripts/logout.php">
                <img src="img/logout.png" width="30" height="30" class="d-inline-block align-top">
            </a>
        </nav>

        <div class="container"> 
               
            <div class="row">

            <div class="card-home">

                <div class="card">

                    <div class="card-header">
                        <b> Olá, Você está logado como <span class="text-info"><?= $_SESSION["perfil"] ?></span> </b>
                    </div>
                    
                    <div class="card-body">

                        <div class="row">

                        <div class="col-6 d-flex justify-content-center">
                            <a href="abrir_chamado.php">
                                <img src="img/formulario_abrir_chamado.png" width="70" height="70" style="cursor: pointer;">
                            </a>
                        </div>

                        <div class="col-6 d-flex justify-content-center">
                            <a href="consultar_chamado.php">
                                <img src="img/formulario_consultar_chamado.png" width="70" height="70" style="cursor: pointer;">
                            </a> 
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>