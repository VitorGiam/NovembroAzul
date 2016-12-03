<?php
session_start();
include("config bd/conexao_bd.php");

$email = @$_POST['txt_email'];
$senha = @$_POST['txt_senha'];

header("Location: paginas/perfil.php");

function consulta_usuario_bd($senha, $email)
{
    $conn = new conexao_bd();
    $result1 = $conn->query("SELECT * FROM pessoa WHERE email = '$email' LIMIT 1");
    if (!empty($result1)) {
        if ($fetch = $result1->fetch_assoc()) {
            foreach ($fetch as $field => $value) {
                echo '<pre>';print_r($result->fetch_all());exit;
                header("Location: paginas/perfil.php");
                if ($field == 'senha') {
                    if ($value != $senha) {
                        header('Location: index.html');
                        exit;
                    }
                }
                if ($field == 'email') {
                    if ($value != $email) {
                        header("Location: index.html");
                        exit;
                    } else {
                        $_SESSION['email'] = $value;
                        header("Location: paginas/perfil.php");exit;
                    }
                }
                if ($field == 'id') {
                    $_SESSION['id'] = $value;
                }
                if ($field == 'nome') {
                    $_SESSION['nome'] = $value;
                }
                if ($field == 'sexo') {
                    $_SESSION['sexo'] = $value;
                }
                //header("Location: paginas/perfil.php");exit;
            } //foreach
        } // fetch
    } else {
        header("Location: index.html");
        exit;
    }
}

//consulta_usuario_bd($senha, $email);
