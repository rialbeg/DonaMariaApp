<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
class ControladorAlterarProduto implements IControlador{

    private $produto;

    public function __construct(){
        $this->produto = new Produto();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $this->produto->setIdProduto($_POST['id']?$_POST['id']:NULL);
        $this->produto->setCodigo($_POST['codigo']?$_POST['codigo']:NULL);
        $this->produto->setNome($_POST['nome']?$_POST['nome']:NULL);
        $this->produto->setTipo($_POST['tipo']?$_POST['tipo']:NULL);
        // if(isset($_POST['fornecedor']))
            $this->produto->setFornecedor($_POST["fornecedor"]?$_POST["fornecedor"]:NULL);
        // if(isset($_POST['ingredientes']))
            $this->produto->setIngredientes($_POST["ingredientes"]?$_POST["ingredientes"]:NULL);
        $this->produto->setPreco($_POST["preco"]?$_POST["preco"]:NULL);
        $this->produto->setCaminhoImagem($_FILES["imagem"]["tmp_name"]?$_FILES["imagem"]:NULL);

        $this->produto->alterarProduto();
        
        header('Location:admindash',true,302);
        // print("<pre>".print_r($this->produto,true)."</pre>");
        // print("<pre>".print_r($_POST,true)."</pre>");
        // print("<pre>".print_r($_FILES,true)."</pre>");
    }
}
    
    
?>