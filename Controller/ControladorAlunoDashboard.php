<?php

require_once "IControlador.php";
require_once "Model/Validation.php";
require_once "Model/Produto.php";
require_once "Model/Aluno.php";

class ControladorAlunoDashboard implements IControlador{
    private $produto;
    private $aluno;

    public function __construct(){
        $this->produto = new Produto();
        $this->aluno = new Aluno();
    }
    
    public function processaRequisicao(){
        Validation::validaSessao();
        $listaProdutos = $this->produto->listarTodosProdutos();
        $this->aluno->setIdAluno($_SESSION['idusuario']);
        $this->aluno->pesquisarAlunoPorIdUsuario();

        // print("<pre>".print_r($this->aluno,true)."</pre>");
        // print("<pre>".print_r($listaProdutos,true)."</pre>");
        // print("<pre>".print_r($_SESSION,true)."</pre>");
        require "View/pages/alunoDashboard.php";
    }
}
    
    
?>