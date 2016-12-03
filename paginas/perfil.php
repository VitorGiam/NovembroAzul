<?php
session_start();
//include_once("../seguranca.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class = "container">
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Historico do sue perfil</h3>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <th>Data</th>
            <th>Progresso</th>

            </thead>
            <tbody>
            <?php
            include_once("../config bd/conexao_bd.php");
            $conn = new conexao_bd();
            $result = $conn->query("SELECT * FROM historico_perfil WHERE idcodigopessoa =1");
            //echo '<pre>';print_r($result->fetch_all());
            if (!empty($result)) {
                if ($fetch = $result->fetch_all()) {
                    foreach ($fetch as $value) {
                        $valor = $value;
                        echo "<tr>";
                        echo "<td>{$value[0]}</td>";
                        echo "<td>{$value[0]}</td>";
                        echo "</tr>";
                    }
                }
            }echo "<td>nada</td>";
            ?>
            </tbody>
        </table>
    </div>
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:$valor%">
        $valor%
    </div>

</div>
</body>
</html>
