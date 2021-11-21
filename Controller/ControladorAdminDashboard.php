<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";

class ControladorAdminDashboard implements IControlador{

    private $produto;
    private $produtoDAO;
    public function __construct(){
        $this->produto = new Produto();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $listaProdutos = $this->produto->listarTodosProdutos();
        require "View/pages/adminDashboard.php";
    }
}
    
    
?>