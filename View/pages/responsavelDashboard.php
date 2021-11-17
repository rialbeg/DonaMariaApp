<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../CSS/responsavelDashboad.css" />

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
      </nav>
    </header>

    <main id="main">
      <!-- ----------  Header ---------- -->
      <section id="header">
        <div class="header-text">
          <h1 class="header-welcome">Bem Vindo(a),</h1>
          <h2 class="header-name">Marjorie</h2>
        </div>
        <div class="header-creditos">
          <h1 class="header-text">Créditos</h1>
          <h2 class="header-valor">R$ 987,00</h2>
        </div>
      </section>

        <!-- ----------  Alunos ---------- -->
        <div id="Alunos">
          <h2 class="titleTab">Alunos</h2>
          <hr class="thin-line" />
          <a href="./cadastrar_aluno.html" class="options">+ Novo Aluno</a>
          <div class="alunos">
            <div class="aluno">
              <img src="../images/Bart_Simpson.png" alt="Alvo Dumbledore" />
              <div class="aluno-text">
                <h2>Bartholomew JoJo Simpson</h2>
                <div class="aluno-subtitle">
                  <h5>Matrícula: 02543843</h5>
                  <h5>Turma: 9° Ano B</h5>
                </div>
                <h5>Turno: Matutino</h5>
                <h5>Telefone: (11) 4002 8922</h5>
                <h1>R$ 37,00</h1>
                <a href="#deposit-modal" title="deposito">
                  <i class="fas fa-money-bill-wave deposit"></i>
                </a>
                <a href="./bloquear_produto.html" title="bloquear produto" onclick="block(this)">
                  <i class="fas fa-lock block-food"></i>
                </a>
                <a href="./extrato_historico.html" title="extrato historico" onclick="block(this)" >
                  <i class="fas fa-file-alt extrato"></i>
                </a>
              </div>
              <a href="#delete-modal" class="close1">X</a>
            </div>
            <div class="aluno">
              <img src="../images/Lisa_Simpson.jpg" alt="Alvo Dumbledore" />
              <div class="aluno-text">
                <h2>Lisa Marie Simpson</h2>
                <div class="aluno-subtitle">
                  <h5>Matrícula: 177 276 876</h5>
                  <h5>Turma: 9° Ano B</h5>
                </div>
                <h5>Turno: Matutino</h5>
                <h5>Telefone: (11) 4002 8922</h5>
                <h1>R$ 500,00</h1>
                <a href="#deposit-modal" title="deposito">
                  <i class="fas fa-money-bill-wave deposit"></i>
                </a>
                <a href="./bloquear_produto.html" title="bloquear produto" onclick="block(this)">
                  <i class="fas fa-lock block-food"></i>
                </a>
                <a href="./extrato_historico.html" title="extrato historico" onclick="block(this)" >
                  <i class="fas fa-file-alt extrato"></i>
                </a>
              </div>
              <a href="#delete-modal" class="close1">X</a>
            </div>
            <div class="aluno">
              <img src="../images/maggie_simpson.png" alt="Alvo Dumbledore" />
              <div class="aluno-text">
                <h2>Margareth J. A. Bouvier-Simpson</h2>
                <div class="aluno-subtitle">
                  <h5>Matrícula: 02543843</h5>
                  <h5>Turma: 9° Ano B</h5>
                </div>
                <h5>Turno: Matutino</h5>
                <h5>Telefone: (11) 4002 8922</h5>
                <h1>R$ R$ 400,00</h1>
                <a href="#deposit-modal" title="deposito">
                  <i class="fas fa-money-bill-wave deposit"></i>
                </a>
                <a href="./bloquear_produto.html" title="bloquear produto" onclick="block(this)">
                  <i class="fas fa-lock block-food"></i>
                </a>
                <a href="./extrato_historico.html" title="extrato historico" onclick="block(this)" >
                  <i class="fas fa-file-alt extrato"></i>
                </a>
              </div>
              <a href="#delete-modal" class="close1">X</a>
            </div>
          </div>
        </div>
      </section>
      <!-- *************Delete modal****************** -->
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
      <div id="deposit-modal" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modal">
          <form >
            <label for="deposito">Valor:</label>
            <input type="number" id="deposito" name="deposito" placeholder="Digite aqui ...">
            <input  type="submit" value="Depositar">
          </form>
          <a href="#" class="close">X</a>
        </div>
      </div>
    </main>

    <footer id="footer"></footer>

    <script
      src="https://kit.fontawesome.com/ffb9df773d.js"
      crossorigin="anonymous"
    ></script>
    <script src="../JS/responsavelDashboard.js"></script>
  </body>
</html>
