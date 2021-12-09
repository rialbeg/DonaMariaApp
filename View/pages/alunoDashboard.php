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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="View/CSS/alunoDashboard.css" />

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
      <?php require "navbar.php"?>
    </header>

    <main id="main">
      <!-- ----------  Header ---------- -->
      <section id="header">
        <div class="header-text">
          <h1 class="header-welcome">Bem Vindo(a),</h1>
          <h2 class="header-name"><?= $this->aluno->getNome(); ?></h2>
        </div>
        <div class="header-creditos">
          <h1 class="header-welcome">Saldo</h1>
          <h2 class="header-valor">R$ <?=number_format($this->aluno->getSaldo(),2,",",".")?></h2>
        </div>
      </section>

      <!-- ----------  Tabs ---------- -->
      <section>
        <div class="tab">
          <button
            id="defaultOpen"
            class="tablinks"
            onclick="openTab(event, 'Comidas')"
          >
            Comidas
            <hr class="tabLine" />
          </button>
          <button class="tablinks" onclick="openTab(event, 'Bebidas')">
            Bebidas
            <hr class="tabLine" />
          </button>
          <button class="tablinks" onclick="openTab(event, 'Extrato')">
            Extrato
            <hr class="tabLine" />
          </button>
        </div>

        <!-- ----------  Comidas ---------- -->
        <div id="Comidas" class="tabcontent">
          <h2 class="titleTab">Comidas</h2>
          <hr class="thin-line" />
          <div class="produtos">
          <?php for($i=0;$i<count($listaProdutos);$i++): ?>
            <?php if($listaProdutos[$i]->getTipo() === 'Comida'):?>
            <div class="produto">
              <img src="<?= $listaProdutos[$i]->getCaminhoImagem()?>" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2><?= $listaProdutos[$i]->getNome()?></h2>
                <h1>R$<?=number_format($listaProdutos[$i]->getPreco(),2,",",".")?></h1>
              </div>
              <form method="post" class="" action="AddItemCarrinho" >
                  <input type="hidden" name="id" value="<?= $listaProdutos[$i]->getIdProduto();?>">
                  <input type="hidden" name="saldo" value="<?= $this->aluno->getSaldo();?>">
                  <button class="adicionar-carrinho" title="adicionar ao carrinho" type="submit"  value= "">
                    <i class="fas fa-plus-circle"></i>
                  </button>
              </form>
            </div>
            <?php endif;?>
          <?php endfor; ?>
          </div>
        </div>

        <!-- ----------  Bebidas ---------- -->
        <div id="Bebidas" class="tabcontent">
          <h2 class="titleTab">Bebidas</h2>
          <hr class="thin-line" />
          <div class="produtos">
          <?php for($i=0;$i<count($listaProdutos);$i++): ?>
            <?php if($listaProdutos[$i]->getTipo() === 'Bebida'):?>
            <div class="produto">
              <img src="<?= $listaProdutos[$i]->getCaminhoImagem()?>" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2><?= $listaProdutos[$i]->getNome()?></h2>
                <h1>R$<?=number_format($listaProdutos[$i]->getPreco(),2,",",".")?></h1>
              </div>
              <form method="post" class="" action="AddItemCarrinho" >
                  <input type="hidden" name="id" value="<?= $listaProdutos[$i]->getIdProduto();?>">
                  <button class="adicionar-carrinho" title="adicionar ao carrinho" type="submit"  value= "">
                    <i class="fas fa-plus-circle"></i>
                  </button>
              </form>
          
            </div>
            <?php endif;?>
          <?php endfor; ?>
          </div>
        </div>
        <!-- ----------  Extrato ---------- -->
        <div id="Extrato" class="tabcontent">
          <div class="table-container">
             
          <table id="customers">
              <tr>
                  <th>Data</th>
                  <th>Valor do depósito</th>
              </tr>
              
              <tr>
                  <td>15/09/2021</td>
                  <td>R$ 25,00</td>
              </tr> <!--******************** -->
              <tr>
                  <td>15/09/2021</td>
                  <td>R$ 25,00</td>
              </tr> <!--******************** -->
              <tr>
                  <td>15/09/2021</td>
                  <td>R$ 25,00</td>
              </tr> <!--******************** -->
              <tr>
                  <td>15/09/2021</td>
                  <td>R$ 25,00</td>
              </tr> <!--******************** -->
              <tr>
                  <td>15/09/2021</td>
                  <td>R$ 25,00</td>
              </tr> <!--******************** -->
              
              
          </table>
          </div>
        </div>
      </section>
      <a href="carrinho" class="float">
        <i class="fas fa-cart-plus"></i>
      </a>
    </main>

    <footer id="footer"></footer>

    <script
      src="https://kit.fontawesome.com/ffb9df773d.js"
      crossorigin="anonymous"
    ></script>
    <script src="View/JS/alunoDashboard.js"></script>
  </body>
</html>
