<?php

function verifica_session()
{
    if ((empty($_SESSION['id_usuario'])) || empty($_SESSION['nome'])|| empty($_SESSION['email'])){
        session_destroy();
        header("Location: acesso_negado.php");exit;
    }
}