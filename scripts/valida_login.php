<?php

    session_start();

    $usuarios = [
        0 => ["user_id" => 1, "email" => "admin@teste.com", "senha" => "130296", "perfil" => 1],
        1 => ["user_id" => 2, "email" => "admin2@teste.com", "senha" => "130296", "perfil" => 1],
        2 => ["user_id" => 3, "email" => "user@teste.com", "senha" => "abcde" , "perfil" => 2],
        3 => ["user_id" => 4, "email" => "user2@teste.com", "senha" => "abcde" , "perfil" => 2]
    ];

    foreach ($usuarios as $users) {

        if ($_POST["email"] == $users["email"] && $_POST["senha"] == $users["senha"]) {

            $_SESSION["autenticado"] = true;

            if($users["perfil"] == 1) {
                $_SESSION["user_id"] = $users["user_id"];
                $_SESSION["perfil"] = "Administrativo";
            } else {
                $_SESSION["user_id"] = $users["user_id"];
                $_SESSION["perfil"] = "Usuário";
            }

            header("Location: ../home.php");

            exit;

        } 

    }

    $_SESSION["autenticado"] = false;

    header("Location: ../index.php?login=erro1");

    exit;

?>
