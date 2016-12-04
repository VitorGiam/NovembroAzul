<?php
print_r($_POST['txt_nome']);

include_once("../config bd/conexao_bd.php");
$conn = new conexao_bd();

$nome = $_POST['txt_nome'];
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];
$idade = $_POST['txt_idade'];
$peso = $_POST['txt_peso'];
$altura = $_POST['txt_altura'];
$sexo = $_POST['txt_sexo'];

$sql = "INSERT INTO `pessoa` (`idCodigoPessoa`, `nome`, `email`, `senha`, `sexo`, `peso`, `altura`, `idade`) 
                                VALUES (NULL, '$nome', '$email', '$senha','$sexo','$peso','$altura','idade' )";

$result = $conn->query($sql);

header("Location: ../quiz.php");
?>