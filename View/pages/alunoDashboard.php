<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../CSS/alunoDashboard.css" />

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
        <a href="../index.html">
          <img
          src="../images/logo-nome.png"
          alt="Dona Maria Cantina Escolar"
          id="logo-nome"
        />
        </a>
        <!-- <ul class="navlist">
          <li class="navitem">Home</li>
          <li class="navitem">Sobre Nós</li>
        </ul>
        <div class="btn-login">Login</div> -->
      </nav>
    </header>

    <main id="main">
      <!-- ----------  Header ---------- -->
      <section id="header">
        <div class="header-text">
          <h1 class="header-welcome">Bem Vindo(a),</h1>
          <h2 class="header-name">Bartholomew</h2>
        </div>
        <div class="header-creditos">
          <h1 class="header-welcome">Créditos</h1>
          <h2 class="header-valor">R$ 987,00</h2>
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
            <div class="produto">
              <img src="../images/produtos/enrroladinho-misto.jpg" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2>Enroladinho</h2>
                <h5>Misto</h5>
                <h1>R$ 2,15</h1>
              </div>
              <a  title="adicionar ao carrinho" onclick="javascript:alert('item adicionado ao carrinho')" >
                <i class="fas fa-plus-circle"></i>
              </a>
            </div>
            <div class="produto">
              <img src="../images/produtos/donuts.jpg" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2>Donuts</h2>
                <h5>01 unidade</h5>
                <h1>R$ 9,15</h1>
              </div>
              <a  title="adicionar ao carrinho" onclick="javascript:alert('item adicionado ao carrinho')">
                <i class="fas fa-plus-circle"></i>
              </a>
            </div>
            <div class="produto">
              <img src="../images/produtos/sanduiche-de-presunto.jpg" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2>Sanduiche de Presunto</h2>
                <h5>15 Kg</h5>
                <h1>R$ 273,15</h1>
              </div>
              <a  title="adicionar ao carrinho" onclick="javascript:alert('item adicionado ao carrinho')">
                <i class="fas fa-plus-circle"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- ----------  Bebidas ---------- -->
        <div id="Bebidas" class="tabcontent">
          <h2 class="titleTab">Bebidas</h2>
          <hr class="thin-line" />
          <div class="produtos">
            <div class="produto">
              <img src="../images/produtos/coca-cola.png" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2>Coca-Cola</h2>
                <h4>350 ml</h4>
                <h1>R$ 8,00</h1>
              </div>
              <a  title="adicionar ao carrinho" onclick="javascript:alert('item adicionado ao carrinho')">
                <i class="fas fa-plus-circle"></i>
              </a>
            </div>
            <div class="produto">
              <img src="../images/produtos/duff.jpg" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2>Duff</h2>
                <h4>350 ml</h4>
                <h1>R$ 15,00</h1>
              </div>
              <a  title="adicionar ao carrinho" onclick="javascript:alert('item adicionado ao carrinho')">
                <i class="fas fa-plus-circle"></i>
              </a>
            </div>
            <div class="produto">
              <img src="../images/produtos/refresco.png" alt="Alvo Dumbledore" />
              <div class="produto-text">
                <h2>Refresco de groselha</h2>
                <h4>Feito de tamarindo, sabor limão</h4>
                <h1>R$ 150,00</h1>
              </div>
              <a  title="adicionar ao carrinho" onclick="javascript:alert('item adicionado ao carrinho')">
                <i class="fas fa-plus-circle"></i>
              </a>
            </div>
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
      <a href="./shopcart.html" class="float">
        <i class="fas fa-cart-plus"></i>
      </a>
    </main>

    <footer id="footer"></footer>

    <script
      src="https://kit.fontawesome.com/ffb9df773d.js"
      crossorigin="anonymous"
    ></script>
    <script src="../JS/alunoDashboard.js"></script>
  </body>
</html>
