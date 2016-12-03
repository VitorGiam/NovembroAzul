<?php

session_start();

unset($_SESSION['id'],
    $_SESSION['email'],
    $_SESSION['senha'],
    $_SESSION['nivel_acesso']);
session_destroy();
header("Location: index.html");exit;





