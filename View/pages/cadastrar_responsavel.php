<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/cadastrar_responsavel.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script>
        function validateForm() {
            var nome = document.forms["cadastrar_responsavel"]["nome"].value;
            if (nome == "") {
                alert("O nome deve ser preenchido");
                return false;
            }
            var cpf = document.forms["cadastrar_responsavel"]["cpf"].value;
            if (cpf == "") {
                alert("O cpf deve ser preenchido");
                return false;
            }
            var telefone = document.forms["cadastrar_responsavel"]["telefone"].value;
            if (telefone == "") {
                alert("O telefone deve ser preenchido");
                return false;
            }
            var senha = document.forms["cadastrar_responsavel"]["senha"].value;
            if (senha == "") {
                alert("A senha deve ser preenchida");
                return false;
            }
            var email = document.forms["cadastrar_responsavel"]["email"].value;
            if (email == "") {
                alert("O email deve ser preenchida");
                return false;
            }
            var login = document.forms["cadastrar_responsavel"]["login"].value;
            if (login == "") {
                alert("O login deve ser preenchida");
                return false;
            }
        }

    </script>



    <title>Dona Maria</title>
</head>

<body>
    <nav id="navbar">
        <a href="../index.html">
            <img src="../images/logo-nome.png" alt="Dona Maria Cantina Escolar" id="logo-nome">
        </a>
    </nav>

    <h1 class="cdr-title">
        Cadastro de responsável
    </h1>
    <!-- <div class="container"> -->
    <form name="cadastrar_responsavel" class="container" action="/action_page.php" onsubmit="return validateForm()"
        method="post" required>
        <div class="inforesponsavel1">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">

            <label for="email">Email de Contato</label>
            <input type="email" id="email" name="email">

            <label for="login">Login (ID)</label>
            <input type="text" id="login" name="login">

            <input class="hidden" type="submit" value="Cadastrar">

        </div>
        <div class="inforesponsavel2">

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf">

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone">

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">

            <div class="buttons">
                <a href="javascript:history.back()" class="btn-cancelar">Cancelar</a>
                <input class="medium-blue" type="submit" value="Cadastrar">
            </div>
        </div>
    </form>

    <!-- </div> -->



    <script src="https://kit.fontawesome.com/ffb9df773d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>