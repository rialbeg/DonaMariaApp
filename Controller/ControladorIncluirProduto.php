<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
class ControladorIncluirProduto implements IControlador{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->produto->setCodigo($_POST["codigo"]);
        $this->produto->setNome($_POST["nome"]);
        $this->produto->setTipo($_POST["tipo"]);
        $this->produto->setFornecedor($_POST["fornecedor"]);
        $this->produto->setPreco($_POST["preco"]);
        $this->produto->setCaminhoImagem($_FILES["imagem"]);

        $this->produto->incluirProduto();

        header('Location:admindash', true,302);
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>