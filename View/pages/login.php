<?php 
    // session_start();
    // require "Model/Validation.php";
    // Validation::validaSessao();

    // require "Controller/ControladorValidaSessao.php";
    // $validacao = new ControladorValidaSessao();
    // $validacao->validarSessao();
    
    // print("<pre>".print_r($_SESSION,true)."</pre>");
    // unset($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="View/CSS/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        label.error {
            color: red;
        }
    </style>
    <script>
        function validateForm() {
            var usuario = document.forms["login"]["usuario"].value;
            if (usuario == "") {
                alert("O nome do usuario deve ser preenchido");
                return false;
            }
            if (usuario == "admin") {
                window.location.href = "./adminDashboard.html";
                return true;
            }
            var cpf = document.forms["login"]["senha"].value;
            if (cpf == "") {
                alert("A senha deve ser preenchido");
                return false;
            }
        }
    </script>


<script type="text/javascript" language="JavaScript">
    function clickedButton()
{
    var usuario = document.forms["login"]["usuario"].value;
    if (usuario == "admin") {
        window.location = 'admindash'
    }
    var usuario = document.forms["login"]["usuario"].value;
    if (usuario == "aluno") {
        window.location = 'alunodash'
    }
    var usuario = document.forms["login"]["usuario"].value;
    if (usuario == "resp") {
        window.location = 'responsaveldash'
    }
}
</script>
    
    <title>Dona Maria</title>
</head>
<body>
    <nav id="navbar">
        <a href="Home">
            <img src="View/images/logo-nome.png" alt="Dona Maria Cantina Escolar" id="logo-nome">
        </a>
    </nav>

    <div class="login-box">
        <form name="login" method="post" action="FazerLogin" id="login">
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="userlogin" placeholder="Seu usuário..." maxlength="30" >
            <!-- <?php if(isset($_GET['errSenha'])): ?>

                <div style="color:red">Login inválido!</div> 
            <?php endif; ?>     -->
            
            
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Sua senha..." maxlength="15" >
        
            <input type="submit" value="Login">
            <!-- <input type="button" value="Login" onClick="clickedButton()"> -->
        </form>
        <a href="#" class="login-link">Esqueçeu a senha?</a>
        <a href="#" class="login-link">Não tenho conta.</a>
    </div>

    <script src="https://kit.fontawesome.com/ffb9df773d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Inclusão do jQuery-->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="View/JS/validate.js"></script>   
</body>
</html>