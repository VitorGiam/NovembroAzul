<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blank Template for Bootstrap</title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../incremento/Style.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<br>
<header>
    <div class="col-md-12 text-center">
        <img src="../imagens/bigode.png" width="200" />
    </div>
</header>
    <body class="body-background">
        <div class="container background-configuration">
            <form class="form-signin" method="POST" action="cadastro_acao.php" >
                <h2 class="form-signin-heading">Cadastro</h2>
                Nome:

                <input type="text" name="txt_nome" id="inputnome" class="form-control box-formatation" placeholder="Nome" required autofocus>
                <br>
                Email:

                <input type="email" name="txt_email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <br>
                Senha:

                <input type="password" name="txt_senha" id="inputsenha" class="form-control" placeholder="Senha" required autofocus>
                <br>Idade:
                <input type="number" step="1" name="txt_idade" id="inputidade" min="1" class="form-control" placeholder="Idade" required autofocus>
                <br>
                Peso (Kg):

                <input type="number" step="0.1" name="txt_peso" id="inputPeso" min="1" class="form-control" placeholder="Peso" required autofocus>
                <br>
                Altura(m):

                <input type="number" step="0.1" name="txt_altura" id="inputAltura" min="1" class="form-control" placeholder="Altura" required autofocus>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="txt_sexo" id="Homem" value="h" checked>Homem
                </label>
                <label class="radio-inline">
                    <input type="radio" name="txt_sexo" id="mulher" value="m">Mulher
                </label>
                <br>
                <br>
                <button class="btn btn-lg btn-success btn-block" type="submit">Salvar</button>
                <p class="text-center text-danger">
            </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
