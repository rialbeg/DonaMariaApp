<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="View/CSS/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    
    <title>Dona Maria</title>
</head>
<body>
    <header id="header" >
        <div class="menu-section">
            <nav id="navbar">
        
                    <a id="logo-link" href="Home">
                        <img src="View/images/logo-nome.png" alt="Dona Maria Cantina Escolar" id="logo-nome">
                    </a>
                    <ul class="navlist">
                        <li class="navitem"><a href="#home">Home</a></li>
                        <li class="navitem"><a href="#sobre"></a></li>
                        <li class="navitem"><a href="#vantagens">Sobre Nós</a></li>
                        <li class="navitem"><a href="#escolas">Escolas</a></li>
                        <li class="navitem"><a href="#depoimentos">Depoimentos</a></li>
                        <a  href="./pages/login.html"><div class="login-nav">Login</div></a>
                    </ul>
                    <a id="login-link" href="Login"><div class="button btn-login show">Login</div></a>
                    <div class="menu-toggle">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
            </nav>
        </div>
        
    </header>

    <main id="main">
        <section id="home">
            <div class="home-text-container">
                <h1 class="home-title">
                    Comprar lanches agora ficou mais fácil!
                </h1>
                <hr class="home-line">
                <button class="home-button">Saiba Mais</button>
            </div>
            <div class="home-img-container">
                <img src="View/images/school-main.png" alt="home-img" class="home-img">
            </div>
        </section>
        <section id="sobre" class="sobre">
            <div class="sobre-item card">
                <i class="fas fa-school"></i>
                <h3>Verifique se sua escola está cadastrada.</h3>
            </div>
            <div class="sobre-item">
                <i class="fas fa-laptop"></i>
                <h3>Entre com o login disponibilizado pela escola.</h3>
            </div>
            <div class="sobre-item">
                <i class="fas fa-user-edit"></i>
                <h3>Visualize, edite e adicione créditos para seu filho(a).</h3>
            </div>
        </section>
        <section id="vantagens" class="vantagens parallax ">
                <h2 class="vantagens-title">Vantagens</h2>
                <div class="thin-line"></div>
                <p class="vantagens-frase">
                    &#34O responsável coloca crédito na conta do aluno e escolhe o que pode ou nao ser comprado!&#34
                </p>
                <p class="vantagens-frase">
                    &#34O aluno seleciona o que deseja comer e realiza a compra sem precisar de qualquer meio de 
                    pagamento.&#34
                </p>
                <p class="vantagens-frase">
                    &#34Alunos compram seus lanches de forma segura.&#34
                </p>
                <p class="vantagens-frase">
                    &#34Responsáveis controlam quanto e que comidas e bebidas seus filhos podem consumir.&#34
                </p>
                <p class="vantagens-frase">
                    &#34Tenha um histórico de tudo que seus filhos compraram.&#34
                </p>
        </section>
        <section id="escolas" class="escolas">
            <h2 class="escolas-title">
                Escolas que já fazem parte!
            </h2>
            <hr class="line">
            <div id="carouselExampleCaptions" class="carousel frame" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                     <div class="container">
                        <img src="View/images/hogwarts.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="escolas-names">Hogwarts</h5>
                        </div>
                        <div class="overlay">
                            <div class="top"></div>
                            <div class="text">Escola de magia e bruxaria de Hogwarts</div>
                            <div class="text">Endereço: Acessível apenas pela plataforma 9 e 3/4</div>
                            <div class="text">Telefone: 96613-7777</div>
                            <div class="text">Email: hogwarts@4houses.com</div>
                        </div>
                     </div>   
                  </div>
                  <div class="carousel-item">
                      <div class="container">
                        <img src="View/images/springfield_school.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="escolas-names">Springfield elementary school</h5>
                        </div>
                        <div class="overlay">
                            <div class="top"></div>
                            <div class="text">Escola primária de Springfield</div>
                            <div class="text">Endereço: 19 Plympton Street, Springfield, USA</div>
                            <div class="text">Telefone: (939)-555-0113</div>
                            <div class="text">Email: springfield@school.com</div>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                        <img src="View/images/escola_mundial.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="escolas-names">Escola Mundial</h5>
                        </div>
                        <div class="overlay">
                            <div class="top"></div>
                            <div class="text">Escola Mundial</div>
                            <div class="text">Endereço: Av. do Estado, 52524 - Canindé, São Paulo - SP</div>
                            <div class="text">Telefone: 99357-9988</div>
                            <div class="text">Email: escolamundial@gmail.com</div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
        
            <h2 class="depoimentos-title">
                O que estão falando da gente.
            </h2>
            <hr class="thin-line">

        <section id="depoimentos" class="depoimentos">
            <div class="depoimento">
                <h3>Um jeito prático e eficiente de comprar. Parece até mágica</h3>
                <img src="View/images/dumbledore.jpg" alt="Alvo Dumbledore">
                <h2>Alvo Dumbledore</h2>
            </div>
            <div class="depoimento">
                <h3>Um jeito prático e eficiente de comprar. Parece até mágica</h3>
                <img src="View/images/dumbledore.jpg" alt="Alvo Dumbledore">
                <h2>Alvo Dumbledore</h2>
            </div>
            <div class="depoimento">
                <h3>Um jeito prático e eficiente de comprar. Parece até mágica</h3>
                <img src="View/images/dumbledore.jpg" alt="Alvo Dumbledore">
                <h2>Alvo Dumbledore</h2>
            </div>
           
        </section>
    </main>
    <footer id="footer"></footer>



    <script src="https://kit.fontawesome.com/ffb9df773d.js" crossorigin="anonymous"></script>
    <script src="View/JS/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>