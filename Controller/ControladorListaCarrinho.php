<?php

require_once "Model/Validation.php";
require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "IControlador.php";

Validation::validaSessao();
class ControladorListaCarrinho implements IControlador{
    private $carrinho;

    public function __construct(){
        $this->carrinho = new CarrinhoSession();  
    }

    public function processaRequisicao(){
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        print("<pre>".print_r($itensCarrinho,true)."</pre>");
        // print("<pre>".print_r($this->carrinho,true)."</pre>");
        require "View/pages/shopcart.php";
    }
}
    
    
?>