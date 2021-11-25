<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
require_once "Model/Responsavel.php";

class ControladorAdminDashboard implements IControlador{

    private $produto;
    private $responsavel;
    public function __construct(){
        $this->produto = new Produto();
        $this->responsavel = new Responsavel();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $listaProdutos = $this->produto->listarTodosProdutos();
        $listaResponsaveis = $this->responsavel->listarTodosResponsaveis();

        print("<pre>".print_r($listaResponsaveis,true)."</pre>");
        require "View/pages/adminDashboard.php";
    }
}
    
    
?>