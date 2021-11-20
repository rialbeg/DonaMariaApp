<?php 
    // require "Model/Validation.php";
    // Validation::validaSessao();
    // require "Controller/ControladorValidaSessao.php";
    // $validacao = new ControladorValidaSessao();
    // $validacao->validarSessao();
  print("<pre>".print_r($_SESSION,true)."</pre>");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="View/CSS/adminDashboard.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <title>Dona Maria</title>
  </head>

  <body>
    <header >
      <nav id="navbar">
        <a id="logo-link" href="Home"> 
          <img
            src="View/images/logo-nome.png"
            alt="Dona Maria Cantina Escolar"
            id="logo-nome"
          />
        </a>  
        <!-- <ul class="navlist">
          <li class="navitem">Home</li>
          <li class="navitem">Sobre Nós</li>
        </ul> -->
        <a href="Logoff"  class="btn-login">Login</a> 
      </nav>
    </header>

    <main id="main">
      <!-- ----------  Header ---------- -->
      <section id="header">
        <div class="header-text">
          <h1 class="header-welcome">Bem Vindo(a),</h1>
          <h2 class="header-name">Escola Mundial</h2>
        </div>
        <div class="header-creditos">
          <h1 class="">Temos 479 alunos <br>cadastrados</h1>
        </div>
      </section>

      <!-- ----------  Tabs ---------- -->
      <section>
        <div class="tab">
          <button
            id="defaultOpen"
            class="tablinks"
            onclick="openTab(event, 'Produtos')"
          >
            Produtos
            <hr class="tabLine" />
          </button>
          <button class="tablinks" onclick="openTab(event, 'Alunos')">
            Alunos
            <hr class="tabLine" />
          </button>
          <button class="tablinks" onclick="openTab(event, 'Responsaveis')">
            Responsáveis
            <hr class="tabLine" />
          </button>
        </div>

      
        
        <!-- ----------  Produtos ---------- -->
        <div id="Produtos" class="tabcontent">
            <div class="table-container">
                <div class="table-search">
                  <form class="search-form" action="">
                    <label class="table-title"for="fname">Produtos:</label>
                    <input type="text" id="fname" name="firstname" placeholder="Digite aqui...">
                
                    <input type="submit" value="Pesquisar">
                  </form>
                  <div>
                    <a href="cadastroproduto" class="options">+ Novo Produto</a>
                    <a href="#desbloquear-modal" class="options">+Desbloquear</a>
                  </div>
                </div>
                <table id="customers">
                <tr>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Nome</th>
                    <th>Ingredientes</th>
                    <th>Fornecedor</th>
                    <th>Foto</th>
                    <th>Preço</th>
                    <th>Bloqueado</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                
                <tr>
                    <td>01</td>
                    <td>Comida</td>
                    <td>Hamburguer</td>
                    <td>Pão,hamburguers,queijo,salada</td>
                    <td>x</td>
                    <td>Foto</td>
                    <td>R$ 5,00</td>
                    <td>
                      Sim 
                    </td>
                    <td>
                      <a href="./cadastrar_produto.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr> <!--******************** -->
                <tr>
                    <td>01</td>
                    <td>Comida</td>
                    <td>Hamburguer</td>
                    <td>Pão,hamburguers,queijo,salada</td>
                    <td>x</td>
                    <td>Foto</td>
                    <td>R$ 5,00</td>
                    <td>
                      Sim 
                    </td>
                    <td>
                      <a href="./cadastrar_produto.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr> <!--******************** -->
                <tr>
                    <td>01</td>
                    <td>Comida</td>
                    <td>Hamburguer</td>
                    <td>Pão,hamburguers,queijo,salada</td>
                    <td>x</td>
                    <td>Foto</td>
                    <td>R$ 5,00</td>
                    <td>
                      Sim 
                    </td>
                    <td>
                      <a href="./cadastrar_produto.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr> <!--******************** -->
                <tr>
                    <td>01</td>
                    <td>Comida</td>
                    <td>Hamburguer</td>
                    <td>Pão,hamburguers,queijo,salada</td>
                    <td>x</td>
                    <td>Foto</td>
                    <td>R$ 5,00</td>
                    <td>
                      Sim 
                    </td>
                    <td>
                      <a href="./cadastrar_produto.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr> <!--******************** -->
                
                
              </table>
            </div>
        </div>
        <!-- ----------  Alunos ---------- -->
        <div id="Alunos" class="tabcontent">
          <div class="table-container">
              <div class="table-search">
                <form class="search-form" action="">
                  <label class="table-title"for="fname">Alunos:</label>
                  <input type="text" id="fname" name="firstname" placeholder="Digite aqui...">
              
                  <input type="submit" value="Pesquisar">
                </form>
                <div>
                  <!-- <a href="./cadastrar_aluno.html" class="options">+ Novo Aluno</a> -->
                  <!-- <a href="#" class="options">+ Extrato</a> -->
                  <!-- <a href="#" class="options">+Saldo</a> -->
                </div>
              </div>
              <table id="customers">
              <tr>
                  <th>Nome</th>
                  <th>Matricula</th>
                  <th>Turma</th>
                  <th>Turno</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>Login</th>
                  <th>Saldo</th>
                  <!-- <th>Editar</th>
                  <th>Excluir</th> -->
              </tr>
              
              <tr>
                  <td>Cirilo Rivera</td>
                  <td>113118987</td>
                  <td>2ª A</td>
                  <td>Integral</td>
                  <td>11993579899</td>
                  <td>cirilo@gado.com</td>
                  <td>alunoCiriloRivera</td>
                  <td>R$ 57,00</td>
                  <!-- <td>
                    <a href="./cadastrar_aluno.html">
                      <i class="fas fa-pencil-alt"></i>
                    </a>  
                  </td>
                  <td>
                    <a href="#delete-modal">
                      <i class="fas fa-minus-circle"></i>
                    </a> 
                    
                  </td> -->
              </tr>
              <tr>
                  <td>Cirilo Rivera</td>
                  <td>113118987</td>
                  <td>2ª A</td>
                  <td>Integral</td>
                  <td>11993579899</td>
                  <td>cirilo@gado.com</td>
                  <td>alunoCiriloRivera</td>
                  <td>R$ 57,00</td>
                  <!-- <td>
                    <a href="./cadastrar_aluno.html">
                      <i class="fas fa-pencil-alt"></i>
                    </a>  
                  </td>
                  <td>
                    <a href="#delete-modal">
                      <i class="fas fa-minus-circle"></i>
                    </a> 
                    
                  </td> -->
              </tr>
              <tr>
                  <td>Cirilo Rivera</td>
                  <td>113118987</td>
                  <td>2ª A</td>
                  <td>Integral</td>
                  <td>11993579899</td>
                  <td>cirilo@gado.com</td>
                  <td>alunoCiriloRivera</td>
                  <td>R$ 57,00</td>
                  <!-- <td>
                    <a href="./cadastrar_aluno.html">
                      <i class="fas fa-pencil-alt"></i>
                    </a>  
                  </td>
                  <td>
                    <a href="#delete-modal">
                      <i class="fas fa-minus-circle"></i>
                    </a> 
                    
                  </td> -->
              </tr>
              <tr>
                  <td>Cirilo Rivera</td>
                  <td>113118987</td>
                  <td>2ª A</td>
                  <td>Integral</td>
                  <td>11993579899</td>
                  <td>cirilo@gado.com</td>
                  <td>alunoCiriloRivera</td>
                  <td>R$ 57,00</td>
                  <!-- <td>
                    <a href="./cadastrar_aluno.html">
                      <i class="fas fa-pencil-alt"></i>
                    </a>  
                  </td>
                  <td>
                    <a href="#delete-modal">
                      <i class="fas fa-minus-circle"></i>
                    </a> 
                    
                  </td> -->
              </tr>
              <tr>
                  <td>Cirilo Rivera</td>
                  <td>113118987</td>
                  <td>2ª A</td>
                  <td>Integral</td>
                  <td>11993579899</td>
                  <td>cirilo@gado.com</td>
                  <td>alunoCiriloRivera</td>
                  <td>R$ 57,00</td>
                  <!-- <td>
                    <a href="./cadastrar_aluno.html">
                      <i class="fas fa-pencil-alt"></i>
                    </a>  
                  </td>
                  <td>
                    <a href="#delete-modal">
                      <i class="fas fa-minus-circle"></i>
                    </a> 
                    
                  </td> -->
              </tr>
              
              
          </table>
          </div>
        </div>
        <!-- ----------  Responsáveis ---------- -->
        <div id="Responsaveis" class="tabcontent">
              <div class="table-container">
                <div class="table-search">
                  <form class="search-form" action="">
                    <label class="table-title"for="fname">Responsáveis:</label>
                    <input type="text" id="fname" name="firstname" placeholder="Digite aqui...">
                
                    <input type="submit" value="Pesquisar">
                  </form>
                  <div>
                    <a href="cadastroresponsavel" class="options">+ Novo Responsável</a>
                    <!-- <a href="#" class="options">Saldo</a> -->
                  </div>
                </div>
                <table id="customers">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                
                <tr>
                    <td>Jorge Rivera</td>
                    <td>05898756523</td>
                    <td>11993579899</td>
                    <td>jorge_rivera@gmail.com</td>
                    <td>jorgeRivera83</td>
                    <td>
                      <a href="./cadastrar_responsavel.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr>
                <tr>
                    <td>Jorge Rivera</td>
                    <td>05898756523</td>
                    <td>11993579899</td>
                    <td>jorge_rivera@gmail.com</td>
                    <td>jorgeRivera83</td>
                    <td>
                      <a href="./cadastrar_responsavel.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr>
                <tr>
                    <td>Jorge Rivera</td>
                    <td>05898756523</td>
                    <td>11993579899</td>
                    <td>jorge_rivera@gmail.com</td>
                    <td>jorgeRivera83</td>
                    <td>
                      <a href="./cadastrar_responsavel.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr>
                <tr>
                    <td>Jorge Rivera</td>
                    <td>05898756523</td>
                    <td>11993579899</td>
                    <td>jorge_rivera@gmail.com</td>
                    <td>jorgeRivera83</td>
                    <td>
                      <a href="./cadastrar_responsavel.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr>
                <tr>
                    <td>Jorge Rivera</td>
                    <td>05898756523</td>
                    <td>11993579899</td>
                    <td>jorge_rivera@gmail.com</td>
                    <td>jorgeRivera83</td>
                    <td>
                      <a href="./cadastrar_responsavel.html">
                        <i class="fas fa-pencil-alt"></i>
                      </a>  
                    </td>
                    <td>
                      <a href="#delete-modal">
                        <i class="fas fa-minus-circle"></i>
                      </a> 
                      
                    </td>
                </tr>
                
                
            </table>
            </div>
        </div>
        <!-- ----------  Modal excluir registro ---------- -->
        <div id="delete-modal" class="overlay">
          <a href="#" class="cancel"></a>
          <div class="modal">
            <h1>Você tem certeza?</h1>
            <a href="#" class="button button-red">Voltar</a>
            <a href="javascript:alert('Registro excluído')" class="button">Excluir</a>
            <a href="#" class="close">X</a>
          </div>
        </div>

        <!-- ----------  Modal desbloquear/bloquear produto ---------- -->
        <div id="desbloquear-modal" class="overlay">
          <a href="#" class="cancel"></a>
          <div class="modal">
            <form >
              <label for="codigo">Código</label>
              <input type="text" id="codigo" name="codigo" placeholder="Digite aqui ...">
          
              <label for="desbloqueio">Opções</label>
              <select id="desbloqueio" name="desbloqueio" onchange="changeOption()">
                <option value="desbloquear">Desbloquear</option>
                <option value="bloquear">Bloquear</option>
              </select>
            
              <input  type="submit" value="Desbloquear">
            </form>
            <a href="#" class="close">X</a>
          </div>
        </div>

      </section>
    </main>

    <footer id="footer"></footer>

    <script
      src="https://kit.fontawesome.com/ffb9df773d.js"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="./JS/index.js"></script> -->
    <script src="View/JS/adminDashboard.js"></script>
  </body>
</html>
