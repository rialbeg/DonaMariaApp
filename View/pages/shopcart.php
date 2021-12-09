<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="View/CSS/shopcart.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600&display=swap" rel="stylesheet" />

    <title>Dona Maria</title>
</head>

<body>
    <header>
    
        <?php require "navbar.php";?>
    
    </header>

    <main id="main">
        <!-- ----------  Header ---------- -->
        <section id="header">
            <div class="header-text">
                <h1 class="header-welcome">
                    <a href="alunoDash">
                        <!-- <i class="fas fa-arrow-left"></i> -->
                        Voltar
                    </a>
                </h1>
                <h2 class="header-name"></h2>
            </div>
            <div class="header-creditos">
                <h1 class="header-welcome">Créditos</h1>
                <?php 
                    if(isset($_SESSION['saldo']))
                        $saldo = $_SESSION['saldo'];
                    else
                        $saldo = 0.00;
                ?>
                <h2 class="header-valor">R$ <?=number_format($saldo,2,",",".")?></h2>
            </div>
        </section>

        
        <div class="shopping-cart">

            <div class="column-labels">
                <label class="product-image">Imagem</label>
                <label class="product-details">Produto</label>
                <label class="product-price">Preço</label>
                <label class="product-quantity">Quantidade</label>
                <label class="product-removal">Remover</label>
                <label class="product-line-price">Total</label>
            </div>
            <?php foreach($itensCarrinho as $item): ?>
            <div class="product">
                <div class="product-image">
                    <img src="<?= $item->getProduto()->getCaminhoImagem()?>">
                </div>
                <div class="product-details">
                    <div class="product-title"><?= $item->getProduto()->getNome() ?></div>
                </div>
                <div class="product-price"><?= number_format($item->getProduto()->getPreco(),2,',','.');?></div>
                <form class="product-quantity" action="CarrinhoAltQuant" method="post">
                    <input type="hidden" name="id" value="<?= $item->getProduto()->getIdProduto(); ?>">
                    <input type="text" name="quantidade" value="<?= $item->getQuantidade(); ?>" size="2" >
                    <button type="submit" class="remove-product">Alterar</button>
                </form>
                <!-- <div class="product-quantity">
                    <input type="number" value="2" min="1">
                </div> -->
                <div class="product-removal">
                <form method="post" action="ApagaItemCarrinho" >
                    <input type="hidden" name="id" value="<?php echo $item->getProduto()->getIdProduto(); ?>">
                    <input type="submit" class="remove-product" value= "Remover">
                </form>
                <!-- <button class="remove-product">
                    Remover
                </button> -->
                </div>
                <div class="product-line-price"><?= number_format($item->getSubTotal(),2,',','.'); ?></div>
            </div>
            <?php endforeach;?>
            
            <div class="totals">
                
                <div class="totals-item totals-item-total">
                    <label>Total</label>
                    <div class="totals-value" id="cart-total"><?= number_format($carrinho->getTotal(),2,',','.'); ?></div>
                </div>
            </div>
            
            <form method="post" action="FinalizaCompra" >
                    <input type="hidden" name="id" value="<?= $item->getProduto()->getIdProduto(); ?>">
                    <!-- <input type="submit" class="remove-product" value= "Remover"> -->
                    <button type="submit" class="checkout">Finalizar</button>
            </form>

        </div>

        <script src="https://kit.fontawesome.com/ffb9df773d.js" crossorigin="anonymous"></script>
        <script src="View/JS/shopcart.js"></script>
</body>

</html>