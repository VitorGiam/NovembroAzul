<?php
session_start();
//include_once("../seguranca.php");
<<<<<<< HEAD
include_once("../config bd/conexao_bd.php");
$conn = new conexao_bd();
$result = $conn->query("SELECT pontuacao, dataEntrada FROM historico_perfil WHERE idcodigopessoa = ". $_SESSION['id']);
if (!empty($result)) {
=======

include_once("../config bd/conexao_bd.php");
$conn = new conexao_bd();
$result = $conn->query("SELECT pontuacao, dataEntrada FROM historico_perfil WHERE idcodigopessoa = ". $_SESSION['id']);
//echo '<pre>';print_r($result->fetch_all());
if (!empty($result)) {

>>>>>>> 9a1e9ca72a7a75a93d8b85d91974695565d9e707
  $arrayResultado = array();
    if ($fetch = $result->fetch_all()) {
        foreach ($fetch as $value) {
            $valores = array();
            array_push($valores, floatval($value[0]));
            array_push($valores, $value[1]);
<<<<<<< HEAD
            array_push($arrayResultado, $valores);
        }
    }var_dump($arrayResultado);
}
=======

            array_push($arrayResultado, $valores);
        }
    }
}

>>>>>>> 9a1e9ca72a7a75a93d8b85d91974695565d9e707
?>

<!DOCTYPE html>
<html lang="pt-br">
<<<<<<< HEAD
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Carousel Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link rel="icon" href="../imagens/favicon.ico">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
        <link href="../incremento/Style.css" rel="stylesheet">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>

        <!-- Additional files for the Highslide popup effect -->
        <script src="https://www.highcharts.com/samples/static/highslide-full.min.js"></script>
        <script src="https://www.highcharts.com/samples/static/highslide.config.js" charset="utf-8"></script>
        <link rel="stylesheet" type="text/css" href="https://www.highcharts.com/samples/static/highslide.css" />
    </head>
    <!-- NAVBAR
================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container">
</div>
        </div>
        <!-- Carousel
    ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="http://pinegrow.com/placeholders/img4.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Novembro Azul!</h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver!</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="http://pinegrow.com/placeholders/img3.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Dicas de prevenção</h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver!</a><br></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="http://pinegrow.com/placeholders/img8.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Faça nosso Quiz</h1>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver!</a><br></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="file:///C:/Program%20Files%20(x86)/Pinegrow%20Web%20Designer/placeholders/img2.jpg" alt="" />
                    <div class="carousel-caption">
                        <h1>Dicas de saúde</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
        </div>
        <div class="container marketing">
            <h1>Bem vindo!</h1>
            <!-- Three columns of text below the carousel -->
            <div class="col-lg-4">
</div>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="file:///C:/xampp/htdocs/NovembroAzul/imagens/Dapino-People-Brown-man.ico" alt="Generic placeholder image" width="140" height="140">
                    <h2>Nome</h2>
                    <br>
                    <p></p>
                    <a href="../sair.php" class="btn btn-default">Sair</a>
                </div>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!-- START THE FEATURETTES -->
            <div >
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
                                text: ''
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

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Pré diabetes</h2>
                    <p class="lead">O termo pré-diabetes é usado quando os níveis de glicose no sangue estão mais altos do que o normal, mas não o suficiente para um diagnóstico de Diabetes Tipo 2. Obesos, hipertensos e pessoas com alterações nos lipídios estão no grupo de alto risco.
                        Infelizmente, cerca de 50% dos pacientes nesta condição irão desenvolver a doença . O pré-diabetes é especialmente importante por ser a única etapa que ainda pode ser revertida ou mesmo que permite retardar a evolução para o diabetes e suas complicações.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img6.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Diabetes tipo 1</h2>
                    <p class="lead">Doença auto-imune em que tem-se auto-destruição das células do pâncreas que produzem insulina.

                        Quando pouca ou nenhuma insulina é produzida, o corpo não consegue absorver a glicose do sangue; as células ficam desnutridas, e o nível de glicose no sangue fica constantemente alto.

                        Uma vez que o distúrbio se desenvolve, não existe maneira de “reativar” as células produtoras de insulina no pâncreas.
                    </p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img7.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading" >Diabete tipo 2</h2>
                    <p class="lead">O Diabetes Tipo 2 é considerado o diabetes do adulto, e é responsável por 95 % dos diabéticos.

                        Esse tipo de diabetes é de 8 a 10 vezes mais comum que o Tipo 1, acometendo 10% da população, entre 30 a 69 anos.

                        Sabe-se que o Diabetes Tipo 2 possui  fator hereditário maior do que o Tipo 1. Além disso, há  grande relação com a obesidade e o sedentarismo, ou seja, com o estilo de vida. Estima-se que 60% a 90% dos portadores da doença sejam obesos. A incidência é maior após os 40 anos.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img9.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
            </footer>
        </div>


        <!-- /.carousel -->
        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <!-- /.container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="assets/js/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
=======
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
<img src="azul.jpg" width="320" height="205"/>
<div class="container">
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Histórico do seu perfil</h3>
        </div>
       
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
                  text: ''
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
>>>>>>> 9a1e9ca72a7a75a93d8b85d91974695565d9e707
</html>
