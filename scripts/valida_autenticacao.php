<?php

    session_start();

    if(isset($_SESSION["autenticado"]) == false || $_SESSION["autenticado"] == false) {

        header("Location: index.php?login=erro2");

        exit;
        
    } 

?>