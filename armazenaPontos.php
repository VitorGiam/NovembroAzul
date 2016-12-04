<?php
// session_start();
include_once("config bd/conexao_bd.php");
$conn = new conexao_bd();

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];
$pontuacao = $data['pontuacao'];
$tipoRisco = $data['tipoDiabetes'];


$sql = "INSERT INTO Historico_Perfil (`pontuacao`, `idCodigoPessoa`,`TipoRisco`, `dataEntrada` )
        VALUES ( $pontuacao, $id, '$tipoRisco', CURDATE() ) ";

$result = $conn->query($sql);

die(json_encode($data));
