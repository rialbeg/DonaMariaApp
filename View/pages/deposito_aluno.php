<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="VIew/CSS/deposito_aluno.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script>
        function validateForm() {
            var nome = document.forms["form-deposito"]["deposito"].value;
            if (nome == "") {
                alert("O nome deve ser preenchido");
                return false;
            }else
                return true;
        }

        function confirmaDeposito(){
            if(validateForm())
                return confirm("Confirma o depóstio?");
            return false;
        }
    </script>

    <title>Dona Maria</title>
</head>
<body>
    
    <nav id="navbar">
        <a href="home">
            <img src="View/images/logo-nome.png" alt="Dona Maria Cantina Escolar" id="logo-nome">
        </a>
    </nav>   
    <div class="container">
        <form name="form-deposito" method="post" class="" action="depositoAluno" onSubmit="return confirmaDeposito();">
            <label for="deposito">Valor:</label>
            <input type="number" id="deposito" name="deposito" placeholder="Digite aqui ...">
            <input type="hidden" name="idaluno" value="<?= $idaluno ?>">
            <input  class="button" type="submit" value="Depositar">
        </form>
    </div>

    <script src="https://kit.fontawesome.com/ffb9df773d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>