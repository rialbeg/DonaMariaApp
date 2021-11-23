<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
class ControladorFormAlterarProduto implements IControlador{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        
        $this->produto->setIdProduto($_POST['id']);
        $ingredientes = $this->produto->buscarIngredientePorID($_POST['id']);
        
        $this->produto->pesquisarProduto();
        $idProduto = $this->produto->getIdProduto();
        $codigo = $this->produto->getCodigo();
        $tipo = $this->produto->getTipo();
        $nome = $this->produto->getNome();
        $caminhoImagem = $this->produto->getCaminhoImagem();
        $fornecedor = $this->produto->getFornecedor();
        $preco = $this->produto->getPreco();
        require "View/pages/alterar_produto.php";
        

        // print("<pre>".print_r($_POST,true)."</pre>");
        
        // print("<pre>".print_r($this->produto,true)."</pre>");
        // $vars = get_defined_vars();
        // print("<pre>".print_r($vars,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>