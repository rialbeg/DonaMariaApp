<?php

require_once "Model/Validation.php";
require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "IControlador.php";
Validation::validaSessao();

class ControladorAddItemCarrinho implements IControlador{
     private $carrinhoSession; 
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        // print("<pre>".print_r($_POST,true)."</pre>");
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])){
            //cria o objeto itemCarrinho
            $itemCarrinho = new ItemCarrinho($_POST['id'],1);
            //adiciona o itemCarrinho no carrinho
            $this->carrinhoSession->adicionar($itemCarrinho);
        }
        // print("<pre>".print_r($this->carrinhoSession->getItensCarrinho(),true)."</pre>");
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        header('Location:Carrinho', true,302);

     }

}

?>