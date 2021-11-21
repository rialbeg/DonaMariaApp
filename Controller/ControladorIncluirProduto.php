<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
class ControladorIncluirProduto implements IControlador{
    
    public function processaRequisicao(){
        Validation::validaSessao();
        print("<pre>".print_r($_POST,true)."</pre>");
    }
}
    
    
?>