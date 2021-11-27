<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
require_once "Model/Responsavel.php";
require_once "Model/Aluno.php";

class ControladorAdminDashboard implements IControlador{

    private $produto;
    private $responsavel;
    private $aluno;
    public function __construct(){
        $this->produto = new Produto();
        $this->responsavel = new Responsavel();
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $listaProdutos = $this->produto->listarTodosProdutos();
        $listaResponsaveis = $this->responsavel->listarTodosResponsaveis();
        $listaAlunos = $this->aluno->listarTodosAlunos();

        // print("<pre>".print_r($listaAlunos,true)."</pre>");
        require "View/pages/adminDashboard.php";
    }
}
    
    
?>