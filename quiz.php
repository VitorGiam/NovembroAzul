<?php
// session_start();
include("config bd/conexao_bd.php");

$conn = new conexao_bd();
$result1 = $conn->query("SELECT peso, altura, idade, sexo FROM pessoa WHERE idCodigoPessoa = 1"); //". $_SESSION['id'] );
$fetch = $result1->fetch_assoc();
// var_dump($fetch);
$sexo = $fetch['sexo'];
$peso = $fetch['peso'];
$altura = $fetch['altura'];
$idade = $fetch['idade'];

$imc = $peso / ($altura * $altura);

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link rel="icon" href="imagens/favicon.ico">

  <title>Quiz</title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="css/signin.css" rel="stylesheet">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="logica_quiz.js"></script>
</head>
<body>
  <div class="container">

  <form action="#">

      <ul>
        <label class="form-check-label">Você pratica esportes?</label>
        <li class="radio">
          <label><input type="radio" name="op1" value="0" required>Sim</label>
        </li>
        <li class="radio">
          <label><input type="radio" name="op1" value="0">Não</label>
        </li>
      </ul>

      <ul>
        <label>Quantas vezes na semana?</label>
        <li class="radio">
          <label><input type="radio" name="op2" value="0" required>Mais de 3 vezes</label>
        </li>
        <li class="radio">
          <label><input type="radio" name="op2" value="0">3 vezes</label>
        </li>
        <li class="radio">
          <label><input type="radio" name="op2" value="10">2 vezes</label>
        </li>
        <li class="radio">
          <label><input type="radio" name="op2" value="20">1 vez</label>
        </li>
      </ul>

      <ul>
        <label>Você costuma ficar quantas horas diarias em frente ao computador ou televisão?</label>
        <li class="radio">
        <label><input type="radio" name="op3" value="40" required>6 horas</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op3" value="30">4 horas</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op3" value="10">3 horas</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op3" value="0">até 2 hora</label>
      </li>
      </ul>

      <ul>
        <label>Você consome bebida alcoolica?</label>
        <div class="radio">
        <label><input type="radio" name="op4" value="20" required>Sim</label>
        </div>
        <div class="radio">
        <label><input type="radio" name="op4" value="0">Não</label>
        </div>
      </ul>

      <ul>
        <label>Socialmente ou diariamente?</label>
        <div class="radio">
        <label><input type="radio" name="op5" value="5">Socialmente</label>
        </div>
        <div class="radio">
        <label><input type="radio" name="op5" value="20">Diariamente</label>
        </div>
      </ul>

      <ul>
        <label>Tem algum histórico de diabetes na família?</label>
        <li class="checkbox">
        <label><input type="checkbox" name="op6r1" value="50" required>Pais</label>
        </li>
        <li class="checkbox">
        <label><input type="checkbox" name="op6r2" value="30">Avós</label>
        </li>
        <li class="checkbox">
        <label><input type="checkbox" name="op6r3" value="0">Não tenho</label>
        </li>
        <li class="checkbox">
        <label><input type="checkbox" name="op6r4" value="20">Não sei</label>
        </li>
      </ul>

      <ul>
        <label>Você prefere uma fruta ou chocolate de manhâ?</label>
        <li class="radio">
        <label><input type="radio" name="op7" value="10" required>Fruta</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op7" value="40">Chocolate</label>
        </li>
      </ul>

      <ul>
        <label>Quando você está com sede você prefere agua ou refrigerante?</label>
        <li class="radio">
        <label><input type="radio" name="op8" value="50" required>Refrigerante</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op8" value="0">Água</label>
        </li>
      </ul>

      <ul>
        <label>Quando você sai com a namorada (o) qual a primeira escolha que vem à mente quando vocês vão comer?</label>
        <li class="radio">
        <label><input type="radio" name="op9" value="50" required>Mc Donalds/Burguer King</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op9" value="10">Subway</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op9" value="50">Não tenho namorado(a)</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op9" value="10">O que ela(e) pedir eu como</label>
        </li>
      </ul>

      <ul>
        <label>No dia da sua folga o que você prefere fazer?</label>
        <li class="radio">
        <label><input type="radio" name="op10" value="0" required>Acordar de manhã e fazer uma caminhada</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op10" value="50">Assistir à temporada da série que você está atrasado</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op10" value="40">Zerar aquele game</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op10" value="10">Sair com a namorada (o)</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op10" value="0">Jogar bola o dia inteiro</label>
        </li>
      </ul>

      <ul>
        <label>Depois de um dia estressante no trabalho o que você faz quando chega em casa?</label>
        <li class="radio">
        <label><input type="radio" name="op11" value="40" required>Ataca a geladeira</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op11" value="40">Liga o netflix</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op11" value="80">As duas coisas acima</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op11" value="0">Descansa para o dia seguinte</label>
        </li>
        <li class="radio">
        <label><input type="radio" name="op11" value="0">Lê um livro</label>
        </li>
      </ul>
        <input type="hidden" name="mulher" value="<?php if($sexo == "feminino"){
            echo "true";
        }else{
            echo "false";
        }?>">
        <input type="hidden" name="imc" value="<?php echo $imc;?>">
        <input type="hidden" name="idade" value="<?php echo $idade;?>">
          <button id="btn" class="btn btn-success">Finalizar</button>
  </form>
  </div>
</body>
</html>