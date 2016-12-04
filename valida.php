<?php
session_start();
include("config bd/conexao_bd.php");

$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];

// header("Location: paginas/perfil.php");

function consulta_usuario_bd($senha, $email)
{
    $conn = new conexao_bd();
    $result1 = $conn->query("SELECT * FROM pessoa WHERE email = '$email' LIMIT 1");
    if (!empty($result1)) {
        if ($fetch = $result1->fetch_assoc()) {
            foreach ($fetch as $field => $value) {
                // header("Location: paginas/perfil.php");
                if ($field == 'senha') {
                    if ($value != $senha) {
                        header('Location: index.php?e=1');
                        exit;
                    }
                }
                if ($field == 'email') {
                    if ($value != $email) {
                        header("Location: index.php?e=2");
                        exit;
                    } else {
                        $_SESSION['email'] = $value;
                        // header("Location: paginas/perfil.php");exit;
                    }
                }
                if ($field == 'idCodigoPessoa') {
                    $_SESSION['id'] = $value;
                }
                if ($field == 'nome') {
                    $_SESSION['nome'] = $value;
                }
                if ($field == 'sexo') {
                    $_SESSION['sexo'] = $value;
                }
            } //foreach
            header("Location: paginas/perfil.php");
            exit;
        }else{
          header("Location: index.php?e=3");
          exit;
        }
    }
    header("Location: index.php?e=4");
    exit;
}

consulta_usuario_bd($senha, $email);
