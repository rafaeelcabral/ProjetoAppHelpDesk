<html>

    <head>
        <meta charset="utf-8" />
        <title>App Help Desk</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .card-login {
            padding: 30px 0 0 0;
            width: 350px;
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
        </nav>

        <div class="container">  

            <div class="row">

            <div class="card-login">

                <div class="card">

                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">

                        <form method="post" action="scripts/valida_login.php">

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                            </div>

                            <!-- Retorno do valida_login.php por erro de autenticação -->
                            <?php   if(isset($_GET["login"]) == true && $_GET["login"] == "erro1") {   ?>

                                <div class="text-danger" style="text-align: center;">
                                    Usuário ou Senha Inválidos
                                </div>

                            <?php   }   ?>    
                            <!-- ---------------------------------------------------- -->

                            <!-- Retorno das páginas restritas por perda de sessão -->
                            <?php   if(isset($_GET["login"]) == true && $_GET["login"] == "erro2") {   ?>

                                <div class="text-danger" style="text-align: center;">
                                    Faça Login para acessar esta Página
                                </div>

                            <?php   }   ?>    
                            <!-- ------------------------------------------------- -->

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>
     
    </body>

</html>