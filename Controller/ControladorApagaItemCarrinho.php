<?php

require_once "Model/Validation.php";
require_once "Model/CarrinhoSession.php";
require_once "Model/ItemCarrinho.php";
require_once "IControlador.php";

Validation::validaSessao();
class ControladorApagaItemCarrinho implements IControlador{
     private $carrinhoSession;     
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        // print("<pre>".print_r($_POST,true)."</pre>");
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])){
            //apaga do carrinho
            $this->carrinhoSession->apagar($_POST['id']);
        }
        header('Location:Carrinho', true,302);

     }

}

?>