

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <form class="form-signin" method="POST" action="cadastro_acao.php">
        <h2 class="form-signin-heading">Cadastro</h2>

        Nome:<input type="text" name="txt_nome" id="inputnome" class="form-control"
                    placeholder="Nome" required autofocus><br>
        Email: <input type="email" name="txt_email" id="inputEmail" class="form-control" placeholder="Email" required
                      autofocus><br>
        Senha:<input type="password" name="txt_senha" id="inputsenha" class="form-control" placeholder="Senha"
                     required autofocus><br>
        Idade:<input type="number" step="1" name="txt_idade" id="inputidade" min="1"
                     class="form-control" placeholder="Idade" required
                     autofocus> <br>
        Peso (Kg):<input type="number" step="0.1" name="txt_peso" id="inputPeso" min="1"
                         class="form-control" placeholder="Peso" required
                         autofocus> <br>
        Altura(m):<input type="number" step="0.1" name="txt_altura" id="inputAltura" min="1"
                         class="form-control" placeholder="Altura" required
                         autofocus> <br>
        <label class="radio-inline"><input type="radio" name="txt_sexo" id="Homem">Homem</label>
        <label class="radio-inline"><input type="radio" name="txt_sexo" id="mulher">Mulher</label>
        <br> <br>

        <button class="btn btn-lg btn-success btn-block" type="submit">Salvar</button>
        <p class="text-center text-danger">
    </form>
</div>

</body>
</html>
