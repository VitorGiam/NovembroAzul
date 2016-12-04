<?php
    session_start();
    // session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Home</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body>
<div class="container">



    <form class="form-signin" method="POST" action="valida.php">
      <div>
        <img src="imagens/banner.png" alt="Banner Novembro Azul" class="img-responsive" >
      </div>
        <h2 class="form-signin-heading">Faça seu login</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="txt_email" id="inputEmail" class="form-control" placeholder="Email" required
               autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>

        <button class="btn btn-lg btn-success btn-block" type="submit">Acessar</button>
        <p class="text-center text-danger">
    </form>

</div> <!-- /container -->
<form class="form-signin" method="POST" action="valida.php">

    <a href="paginas/cadastro.php" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true">Cadastrar</a>

</form>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
