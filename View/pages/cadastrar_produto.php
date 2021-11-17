<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/cadastrar_produto.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Dona Maria</title>

    <script>
        function validateForm() {
            var codigo = document.forms["produto_form"]["codigo"].value;
            if (codigo == "") {
              alert("Código deve ser preenchido");
              return false;
            }
            var nome = document.forms["produto_form"]["nome"].value;
            if (nome == "") {
              alert("O nome deve ser preenchido");
              return false;
            }
            var ingredientes = document.forms["produto_form"]["ingredientes"].value;
            if (ingredientes == "") {
              alert("Os ingredientes deve ser preenchido");
              return false;
            }
            var preco = document.forms["produto_form"]["preco"].value;
            if (preco == "") {
              alert("O preço deve ser preenchido");
              return false;
            }
          }
    </script>

</head>
<body>
    <nav id="navbar">
        <a href="../index.html">
            <img src="../images/logo-nome.png" alt="Dona Maria Cantina Escolar" id="logo-nome">
        </a>
    </nav>

    <!-- <div class="container"> -->
        <form name="produto_form" class="container" action="/action_page.php" onsubmit="return validateForm()" method="post" required>
            <div class="form-box">
                    <h1 class="title">
                        Alimentos
                    </h1>
                    <label for="codigo">Código</label>
                    <input type="text" id="codigo" name="codigo">

                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome">

                    <label for="alimentos">Tipo de Alimento</label>
                    <select id="alimentos" class="minimal" onchange="yesnoCheck(this)">
                        <option value="Comida">Comida</option>
                        <option value="Bebida">Bebida</option>
                    </select>

                    <div id="choice">
                        <label  for="ingredientes">Ingredientes</label>
                        <input type="text" id="ingredientes" name="ingredientes">
                    </div>
                    <!-- <label id="label-ingredientes" for="ingredientes">Ingredientes</label>
                    <input type="text" id="ingredientes" name="ingredientes">

                    <label id="label-fornecedor" for="fornecedor">Fornecedor</label>
                    <input type="text" id="fornecedor" name="fornecedor"> -->

                    <!-- <input type="text" id="foto" name="foto"> -->
                    
                    <label for="preco">Preço</label>
                    <input type="text" id="preco" name="preco">
                    
                    <!-- <label id="foto" for="foto">Enviar Foto</label>
                    <input type="file" name="produtoImg" id="produtoImg"> -->
                    
                    <input type="file" name="file" id="file" class="inputfile" />
                    <label id="label-file" for="file">Choose a file</label>

                    <div class="buttons">
                        <a href="javascript:history.back()" class="btn-cancelar">Cancelar</a>
                        <input class="medium-blue" type="submit" value="Cadastrar">
                    </div>
            </div>
        </form>
            
    <!-- </div> -->




    <script src="https://kit.fontawesome.com/ffb9df773d.js" crossorigin="anonymous"></script>
    <script src="../JS/cadastrar_produto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>