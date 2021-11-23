<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
class ControladorExcluirProduto implements IControlador{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        //receber os dados do formulario e setar o objeto
        $this->produto->setIdProduto($_POST['id']);
        
        $this->produto->excluirProduto();
    
        header('Location:admindash', true,302);
        

        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>