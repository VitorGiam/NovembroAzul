<?php
session_start();
//include_once("../seguranca.php");

include_once("../config bd/conexao_bd.php");
$conn = new conexao_bd();
$result = $conn->query("SELECT pontuacao, dataEntrada FROM historico_perfil WHERE idcodigopessoa = ". $_SESSION['id']);
//echo '<pre>';print_r($result->fetch_all());
if (!empty($result)) {

  $arrayResultado = array();
    if ($fetch = $result->fetch_all()) {
        foreach ($fetch as $value) {
            $valores = array();
            array_push($valores, floatval($value[0]));
            array_push($valores, $value[1]);

            array_push($arrayResultado, $valores);
        }
    }
}

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

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <!-- Additional files for the Highslide popup effect -->
    <script src="https://www.highcharts.com/samples/static/highslide-full.min.js"></script>
    <script src="https://www.highcharts.com/samples/static/highslide.config.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="https://www.highcharts.com/samples/static/highslide.css" />

</head>
<body>
<div class="container">
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Histórico do seu perfil</h3>
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
            $result = $conn->query("SELECT * FROM historico_perfil WHERE idcodigopessoa = "+ $_SESSION['id']);
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

    <div id="container" class="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <script type="text/javascript">

    var arrayResultado = $.parseJSON('<?php echo json_encode($arrayResultado); ?>');
    var data = [];

    for(op of arrayResultado){
     var x = op; var d = [];
       for(c of x){
         d.unshift(c);
       }
       data.push(d);
    }
    $(function () {
          Highcharts.chart('container', {
              chart: {
                  type: 'column'
              },
              title: {
                  text: 'Seu histórico'
              },
              subtitle: {
                  text: 'Subtitulo'
              },
              xAxis: {
                  type: 'category',
                  labels: {
                      rotation: -45,
                      style: {
                          fontSize: '13px',
                          fontFamily: 'Verdana, sans-serif'
                      }
                  }
              },
              yAxis: {
                  min: 0,
                  title: {
                      text: 'Porcentagem de Risco'
                  }
              },
              legend: {
                  enabled: false
              },
              tooltip: {
                  pointFormat: 'Probabilidade do risco <b>{point.y:.1f} millions</b>'
              },
              series: [{
                  name: 'Avaliações',
                  // data: [
                  //     ['Semana 1', 23.7],
                  //     ['Semana 2', 16.1],
                  //
                  // ],
                  data: data,
                  dataLabels: {
                      enabled: true,
                      rotation: -90,
                      color: '#FFFFFF',
                      align: 'right',
                      format: '{point.y:.1f}', // one decimal
                      y: 10, // 10 pixels down from the top
                      style: {
                          fontSize: '13px',
                          fontFamily: 'Verdana, sans-serif'
                      }
                  }
              }]
          });
      });

    </script>
</div>
</body>
</html>
